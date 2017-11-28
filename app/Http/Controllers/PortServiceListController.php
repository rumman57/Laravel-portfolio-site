<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortServiceList;
use App\Models\PortfolioService;
use Session;
use Image;

class PortServiceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servlists = PortServiceList::orderBy('id','desc')->get();
        return view('myadmin.service-list.showportservelists')->withServlists($servlists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $services = PortfolioService::all(); 
        return view('myadmin.service-list.addportservicelist')->withServices($services);
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
            'title'       => 'required|max:255|min:2',
            'description'       => 'min:5',
            'portfolio_service_id' => 'required|integer',
            'image'  => 'sometimes|mimes:jpeg,jpg,png',
            'priority'  => 'integer'
        ]);
        $serviceList = new PortServiceList;
        $serviceList->title = $request->title;
        $serviceList->description = $request->description;
        $serviceList->portfolio_service_id = $request->portfolio_service_id;
        $serviceList->github = $request->github;
        $serviceList->demo = $request->demo;
        $serviceList->demo_one = $request->demo_one;
        $serviceList->demo_two = $request->demo_two;
        $serviceList->priority = $request->priority;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('img/'.$filename);

            Image::make($image)->save($location);
            $serviceList->image = $filename;
         }
    
        $serviceList->save();
              
        Session::flash('adsuccess','Portfolio Service-List  Have Saved Successfully');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servlist = PortServiceList::find($id);
        $services = PortfolioService::all();              
        return view('myadmin.service-list.editportservicelist')->withServlist($servlist)->withServices($services);
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
          $this->validate($request,[
            'title'       => 'required|max:255|min:2',
            'description'       => 'min:5',
            'portfolio_service_id' => 'required|integer',
            'image'  => 'sometimes|mimes:jpeg,jpg,png',
            'priority'  => 'integer'
        ]);
       
        
        $serviceList = PortServiceList::find($id);

        $serviceList->title = $request->input('title');
        $serviceList->description = $request->input('description');
        $serviceList->portfolio_service_id = $request->input('portfolio_service_id');
        $serviceList->github = $request->input('github');
        $serviceList->demo = $request->input('demo');
        $serviceList->demo_one = $request->input('demo_one');
        $serviceList->demo_two = $request->input('demo_two');
        $serviceList->priority = $request->input('priority');

         if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('img/'.$filename);

            Image::make($image)->save($location);
            $oldimage = $serviceList->image;
            $serviceList->image = $filename;
            if(isset($oldimage)){
                unlink('img/'.$oldimage);
            }
           
         }
     
        $serviceList->save();

        Session::flash('adsuccess','Portfolio Service-List Updated Successfully.....');

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
        $serviceList = PortServiceList::find($id);
        $oldimage = $serviceList->image;
        $serviceList->delete();
        if(isset($oldimage)){
           unlink('img/'.$oldimage);
        }
        return redirect()->back();
    }
}
