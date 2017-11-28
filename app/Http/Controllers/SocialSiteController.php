<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialLink;
use Session;

class SocialSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soclinks = SocialLink::orderBy('id','desc')->get();
        return view('myadmin.socialsites.showsocialsite')->withSoclinks($soclinks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('myadmin.socialsites.addsocialsite');
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
            'icon' => 'required|max:50'
        ));
        $soclink = new SocialLink;
        $soclink->icon = $request->icon;
        $soclink->link = $request->site_link;
        $soclink->save();

        Session::flash('adsuccess',"Link Added Successfully");

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
        $soclink = SocialLink::find($id);
        return view('myadmin.socialsites.editsocialsite')->withSoclink($soclink);
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
            'icon' => 'required|max:50'
        ));
        $soclink = SocialLink::find($id);
        $soclink->icon = $request->input('icon');
        $soclink->link = $request->input('link');
        $soclink->save();

        Session::flash('adsuccess',"Link Updated Successfully");

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
        $soclink = SocialLink::find($id);

        $soclink->delete();
        return redirect()->back();
    }
}
