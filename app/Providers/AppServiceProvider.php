<?php

namespace App\Providers;
use Illuminate\Http\Request;
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
    public function boot(Request $request)
    {
        //
	$path_array = $request->segments();
    $admin_route = config('app.admin_route');
    
    
    if (in_array($admin_route, $path_array)) {
        config(['app.app_scope' => 'admin']); 
    }


    $app_scope = config('app.app_scope');

    
    if ($app_scope == 'admin') {
        $path = resource_path('admin/views');
    } else {
        $path = resource_path('front/views');
    }

    view()->addLocation($path);
    }
}
