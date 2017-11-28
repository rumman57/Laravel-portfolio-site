<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SocialLink;

class SocialLinkProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->socialLinks();
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

    private function socialLinks(){
        view()->composer('master',function($view){
            $view->with('sociallinks',SocialLink::all());
        });
    }
}
