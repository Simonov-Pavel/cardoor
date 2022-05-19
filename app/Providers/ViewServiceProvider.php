<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.master', 'contact', 'admin.contact.index'], 'App\ViewsComposer\ContactComposer');
        View::composer(['admin.message.index'], 'App\ViewsComposer\MessageComposer');
        View::composer(['admin.users.index'], 'App\ViewsComposer\UsersComposer');
        View::composer(['admin.banner.index', 'includes.slider'], 'App\ViewsComposer\BannerComposer');
        View::composer(['admin.about.index', 'includes.about', 'about'], 'App\ViewsComposer\AboutComposer');
        View::composer(['admin.partner.index'], 'App\ViewsComposer\PartnerComposer');
    }
}
