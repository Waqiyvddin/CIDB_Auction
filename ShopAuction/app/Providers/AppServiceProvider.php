<?php

namespace App\Providers;

use App\Models\Parameter;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
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
        view()->composer(
            '*',
            function ($view) {
                $global_product_category = Parameter::where('parameter_name', 'category')
                ->orderBy('type_id')
                ->get();
                // dd($global_product_category);
                $view->with(
                    compact(
                        'global_product_category',
                        
                       
                    )
                );
                $view->with('current_locale', app()->getLocale());
                $view->with('available_locales', config('app.available_locales'));
            });
        // view()->composer('partials.language_switcher', function ($view) {
            
        // });
    }
}
