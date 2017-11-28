<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SiteOption;
use App\Models\Contact;

class OptionProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->options();
        $this->menuphoto();
        $this->whatiam();
        $this->mailboxnotification();
        $this->mailboxnotificationinindex();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function options(){
        view()->composer('master',function($view){
            $view->with('options',SiteOption::find(1));
        });
    }

    private function menuphoto(){
        view()->composer('includes._menuphoto',function($view){
            $view->with('photo',SiteOption::find(1));
        });
    }
    private function whatiam(){
        view()->composer('includes._content-header',function($view){
            $view->with('whatiam',SiteOption::find(1));
        });
    }
    private function mailboxnotification(){
        view()->composer('myadmin.adminmaster',function($view){
            $view->with('notificatios',Contact::where('check','=',0)->get());
        });
    }
    private function mailboxnotificationinindex(){
        view()->composer('myadmin.index',function($view){
            $view->with('notificatiosin',Contact::where('check','=',0)->get());
        });
    }
}
