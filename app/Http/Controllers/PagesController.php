<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceList;
use App\Models\Service;
use App\Models\IndexPageOption;
use App\Models\ResumeOption;
use App\Models\PortfolioService;
use App\Models\PortServiceList;
use App\Models\SiteOption;
use App\Models\Category;
use App\Models\Post;
use App\Models\Contact;
use Session;

class PagesController extends Controller
{
    public function getIndex(){
       $services = Service::orderBy('priority','asc')->get();
       $inpop = IndexPageOption::find(1);
       return view('pages.index')->withServices($services)->withInpgoptions($inpop);
    }

    public function getResume(){
    	$resuoption = ResumeOption::find(1);
    	return view('pages.resume')->withResumeoption($resuoption);
    }
    public function getPortfolio(){
      $servlist = PortfolioService::orderBy('priority','asc')->get();
      $listwise = PortServiceList::orderBy('priority','asc')->get();
      $siopt = SiteOption::find(1);
    	return view('pages.portfolio')->withServlists($servlist)->withListservices($listwise)->withSiteoption($siopt);
    }
    public function getBlog(){

        $posts = Post::orderBy('id','desc')->paginate(5);
        $categories = Category::with('posts')->get();;
      return view('blog.blog',compact('categories'))->withPosts($posts);
    }
    public function getContact(){
        return view('pages.contact');
    }
    public function postContact(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'subject'=>'min:3| max:150',
            'name'   => 'max:30'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->body = $request->message;
        $contact->save();
        Session::flash('consuccess',"Message Send Successfully...");
        return redirect()->back();
    }
}
