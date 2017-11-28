<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceList;
use App\Models\Service;
use Session;

class ServiceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servlists = ServiceList::orderBy('id','desc')->get();
        return view('myadmin.service-list.showservelists')->withServlists($servlists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all(); 
        return view('myadmin.service-list.addservicelist')->withServices($services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'       => 'required|max:255|min:5',
            'service_id' => 'required|integer',
        ]);
        $serviceList = new ServiceList;
        $serviceList->name = $request->name;
        $serviceList->service_id = $request->service_id;
    
        $serviceList->save();
              
        Session::flash('adsuccess','Service-List  Have Saved Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servlist = ServiceList::find($id);
        $services = Service::all();              
        return view('myadmin.service-list.editservicelist')->withServlist($servlist)->withServices($services);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
          $this->validate($request,array(
            'name'       => 'required|max:255|min:5',
            'service_id' => 'required|integer',
            ));
       
        
        $servlist = ServiceList::find($id);

        $servlist->name = $request->input('name');
        $servlist->service_id = $request->input('service_id');

        $servlist->save();

        Session::flash('adsuccess','Service-List Updated Successfully.....');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servlist = ServiceList::find($id);
        $servlist->delete();
        return redirect()->back();
    }
}
