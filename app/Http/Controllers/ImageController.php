<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteImage;
use Image;
use Session;

class ImageController extends Controller
{
    public function getImagepage(){
       return view('myadmin.images.addimage');
    }
    public function postStoreImage(Request $request){
    	 $this->validate($request,[        
            'image'       => 'required|max:3000'
        ]);

        $simgae = new SiteImage;
           
         if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('img/'.$filename);

            Image::make($image)->save($location);
            $simgae->image = $filename;
         }

        $simgae->save();
        Session::flash('adsuccess','Image Saved Successfully');
        return redirect()->back();
    }
    public function getShowImage(){
    	$simgae = SiteImage::orderBy('id','desc')->get();
    	return view('myadmin.images.showimage')->withImages($simgae);
    }
    public function DeleteImage($id){
        $simgae = SiteImage::find($id);
        $oldimage = $simgae->image;
        $simgae->delete();
        if(isset($oldimage)){
           unlink('img/'.$oldimage);
        }
        return redirect()->back();
    }
}
