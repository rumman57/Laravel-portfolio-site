<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','asc')->get();
        return view('myadmin.services.showservices')->withServices($services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('myadmin.services.addservice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'name' => 'required|max:100',
            'icon' => 'required|max:20',
            'priority'=>'required|integer'
        ));
        $service = new Service;
        $service->name = $request->name;
        $service->icon = $request->icon;
        $service->priority = $request->priority;
        $service->save();

        Session::flash('adsuccess',"Service Added Successfully");

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
        $service = Service::find($id);
        return view('myadmin.services.editservice')->withService($service);
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
             'name' => 'required|max:100',
            'icon' => 'required|max:20',
            'priority'=>'required|integer'
        ));
       $service = Service::find($id);
        $service->name = $request->input('name');
        $service->icon = $request->input('icon');
        $service->priority = $request->input('priority');
        $service->save();

        Session::flash('adsuccess',"Service Updated Successfully");

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
        $service = Service::find($id);

        $service->delete();
        return redirect()->back();
    }
}
