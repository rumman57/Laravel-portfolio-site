<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioService;
use App\Models\PortServiceList;
use Session;

class PortfolioServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $services = PortfolioService::orderBy('id','asc')->get();
        return view('myadmin.services.showportfolioservices')->withServices($services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myadmin.services.addportfolioservice');
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
            'data_type' => 'required|max:20',
            'priority'=>'required|integer'
        ));
        $service = new PortfolioService;
        $service->name = $request->name;
        $service->data_type = $request->data_type;
        $service->priority = $request->priority;
        $service->save();

        Session::flash('adsuccess',"Portfolio Service Added Successfully");

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
        $service = PortfolioService::find($id);
        return view('myadmin.services.editportfolioservice')->withService($service);
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
            'data_type' => 'required|max:20',
            'priority'=>'required|integer'
        ));
       $service = PortfolioService::find($id);
        $service->name = $request->input('name');
        $service->data_type = $request->input('data_type');
        $service->priority = $request->input('priority');
        $service->save();

        Session::flash('adsuccess',"Portfolio Service Updated Successfully");

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
        $service = PortfolioService::find($id);
        
        $prsls = PortServiceList::where('portfolio_service_id',$service->id)->get();
     if($prsls->count()!=0){
            foreach ($prsls as $key => $prsl) {
                $deid = PortServiceList::find($prsl->id);
                $deid->delete();
            }
        }
        $service->delete();
        return redirect()->back();
    }
}
