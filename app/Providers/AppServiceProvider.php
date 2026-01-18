<?php

namespace App\Providers;

use App\Models\Banner;
use Illuminate\Support\ServiceProvider;
use App\Models\NavigationItem;
use App\Models\Service;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View::composer('partials.header', function ($view) {
        //     $navigation = NavigationItem::active()
        //         ->rootItems()
        //         ->with('activeChildren.descendants')
        //         ->orderBy('sort_order')
        //         ->get();
    
        //     $view->with('navigation', $navigation);
        // });
        View::composer('*', function ($view) {
            $navigationItems = NavigationItem::with(['activeChildren.activeChildren'])
                ->active()
                ->rootItems()
                ->get();
            
            $view->with('navigationItems', $navigationItems);
        });

        // Share active banner with all views
        View::composer('*', function ($view) {
            $activeBanner = Banner::active()->first();
            
            $view->with('activeBanner', $activeBanner);
        });

        // Share services with homepage
        View::composer(['home'], function ($view) {
            $services = Service::with('category')
                ->active()
                ->published()
                ->orderBy('order', 'desc')
                ->limit(6)
                ->get();
            
            $view->with('services', $services);
        });
    }
}
