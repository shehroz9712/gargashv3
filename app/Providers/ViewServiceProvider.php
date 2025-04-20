<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\DailyBalance;
use App\Models\Setting;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        // $settings = Setting::first();
        // $brands = Brand::Active()->get();
        // View::share(['setting' => $settings, 'brands' => $brands]);
        // $this->composeAdminPages();
    }

    private function composeAdminPages()
    {
        /*
         * Dashboard
         */
        view()->composer('admin.dashboard', function ($view) {
            $view->with(['pageTitle' => 'Dashboard']);
        });


        /*
         * setting
         */
        view()->composer('admin.settings.index', function ($view) {
            $view->with(['pageTitle' => 'Admin Settings List']);
        });
        view()->composer('admin.settings.create', function ($view) {
            $view->with(['pageTitle' => 'Add Admin Setting']);
        });
        view()->composer('admin.settings.show', function ($view) {
            $view->with(['pageTitle' => 'Show Admin Setting']);
        });
        view()->composer('admin.settings.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Admin Setting']);
        });

        /*
         * blog
         */
        view()->composer('admin.blogs.index', function ($view) {
            $view->with(['pageTitle' => ' Blogs List']);
        });
        view()->composer('admin.blogs.create', function ($view) {
            $view->with(['pageTitle' => 'Add  Blog']);
        });
        view()->composer('admin.blogs.show', function ($view) {
            $view->with(['pageTitle' => 'Show  Blog']);
        });
        view()->composer('admin.blogs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit  Blog']);
        });

        /*
         * category
         */
        view()->composer('admin.categories.index', function ($view) {
            $view->with(['pageTitle' => ' Categories List']);
        });
        view()->composer('admin.categories.create', function ($view) {
            $view->with(['pageTitle' => 'Add  Category']);
        });
        view()->composer('admin.categories.show', function ($view) {
            $view->with(['pageTitle' => 'Show  Category']);
        });
        view()->composer('admin.categories.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit  Category']);
        });
        /*
         * brand
         */
        view()->composer('admin.brands.index', function ($view) {
            $view->with(['pageTitle' => ' Brands List']);
        });
        view()->composer('admin.brands.create', function ($view) {
            $view->with(['pageTitle' => 'Add  Brand']);
        });
        view()->composer('admin.brands.show', function ($view) {
            $view->with(['pageTitle' => 'Show  Brand']);
        });
        view()->composer('admin.brands.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit  Brand']);
        });

        /*
         * service-request
         */
        view()->composer('admin.service_requests.index', function ($view) {
            $view->with(['pageTitle' => ' Service requests List']);
        });
        view()->composer('admin.service_requests.create', function ($view) {
            $view->with(['pageTitle' => 'Add  Service request']);
        });
        view()->composer('admin.service_requests.show', function ($view) {
            $view->with(['pageTitle' => 'Show  Service request']);
        });
        view()->composer('admin.service_requests.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit  Service request']);
        });



        /*
         * admin
         */
        view()->composer('admin.users.index', function ($view) {
            $view->with(['pageTitle' => ' Users List']);
        });
        view()->composer('admin.users.create', function ($view) {
            $view->with(['pageTitle' => 'Add  User']);
        });
        view()->composer('admin.users.show', function ($view) {
            $view->with(['pageTitle' => 'Show  User']);
        });
        view()->composer('admin.users.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit  User']);
        });


        /*
         * user
         */
        view()->composer('admin.users.index', function ($view) {
            $view->with(['pageTitle' => 'Admin Users List']);
        });
        view()->composer('admin.users.create', function ($view) {
            $view->with(['pageTitle' => 'Add  User']);
        });
        view()->composer('admin.users.show', function ($view) {
            $view->with(['pageTitle' => 'Show  User']);
        });
        view()->composer('admin.users.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit  User']);
        });
    }
}
