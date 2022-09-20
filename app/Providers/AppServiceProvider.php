<?php

namespace App\Providers;

use App\Http\View\Composers\ChannelsComposer;
use App\Models\Channel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Option1 : pass channel with every single view.
//        View::share('channels' , Channel::orderBy('name')->get())

//        Option 2 : pass channels parameter to only specific views
//        View::composer(['post.create', 'channel.index'],function ($view){
//             $view->with('channels' , Channel::orderBy('name')->get());
//        });

//      Option 3 : encapsulate- dedicated class.
        View::composer('partials.channels.*', ChannelsComposer::class);

    }
}
