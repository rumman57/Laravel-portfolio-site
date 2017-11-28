<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexPageOption;
use App\Models\ResumeOption;
use App\Models\SiteOption;
use Session;
use Image;

class OptionController extends Controller
{
    public function getIndexOption(){
       $inpop = IndexPageOption::find(1);
       return view('myadmin.siteoptions.indexpageoption')->withInpagoption($inpop);
    }
    public function postIndexOption(Request $request){
    	 $this->validate($request,[
            'about_me_title' => 'min:5',
            'about_me'       => 'min:5|max:400',
            'age'            => 'max:5',
            'experience'     => 'max:30',
            'address'        => 'max:150'
        ]);
        
        $inpop = IndexPageOption::find(1);   
        $inpop->about_me_title = $request->input('about_me_title');
        $inpop->about_me = $request->input('about_me');
        $inpop->age = $request->input('age');
        $inpop->experience = $request->input('experience');
        $inpop->address = $request->input('address');
        $inpop->save();
        Session::flash('adsuccess','Options Set Successfully...');
        return redirect()->back();
    }

    public function getResumeOption(){
    	$resumop = ResumeOption::find(1);
       return view('myadmin.siteoptions.ResumeOption')->withResuoptn($resumop);
    }
    public function postResumeOption(Request $request){
    	
    	 $this->validate($request,[
            'image'  => 'sometimes|mimes:jpeg,jpg,png'
        ]);
         
         $resumop = ResumeOption::find(1);
    	 if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('img/'.$filename);

            Image::make($image)->save($location);
            $oldimage = $resumop->image;
            $resumop->image = $filename;
            if(isset($oldimage)){
                unlink('img/'.$oldimage);
            }
            $resumop->save();
         }
        Session::flash('adsuccess','Image Set Successfully...');
        return redirect()->back();
    }
    public function getSiteOption(){
        $sos = SiteOption::find(1);
        return view('myadmin.siteoptions.siteoptions')->withSiteoptions($sos);
    }

    public function postSiteOption(Request $request){
         $this->validate($request,[
            'what_i_am' => 'min:3|max:100',
            'portfolio_desc' =>'min:6|max:500',
            'menu_image'  => 'max:4000',
            'copyright' =>'min:3|max:100'
        ]);

        $siteops = SiteOption::find(1);
        $siteops->what_i_am = $request->input('what_i_am');
        $siteops->portfolio_desc = $request->input('portfolio_desc');
        $siteops->copyright = $request->input('copyright');
        
        if($request->hasFile('menu_image')){
            $image = $request->file('menu_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('img/'.$filename);

            Image::make($image)->resize(293,250)->save($location);
            $oldimage = $siteops->menu_image;
            $siteops->menu_image = $filename;
            //if(!empty($oldimage))
            //unlink('img/'.$oldimage);
        }

         $siteops->save();
         Session::flash('adsuccess','Options Set Successfully...');
         return redirect()->back();
    }

}
