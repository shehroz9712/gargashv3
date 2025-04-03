<?php

namespace App\Providers;

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

        $settings = Setting::first();
        View::share(['setting' => $settings]);
        $this->composeAdminPages();
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
         * admin
         */
        view()->composer('admin.admins.index', function ($view) {
            $view->with(['pageTitle' => ' admins List']);
        });
        view()->composer('admin.admins.create', function ($view) {
            $view->with(['pageTitle' => 'Add  admin']);
        });
        view()->composer('admin.admins.show', function ($view) {
            $view->with(['pageTitle' => 'Show  admin']);
        });
        view()->composer('admin.admins.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit  admin']);
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
