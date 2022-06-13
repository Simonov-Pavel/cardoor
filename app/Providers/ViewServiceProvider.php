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
        View::composer(['includes.partner'], 'App\ViewsComposer\PartnerMainComposer');
        View::composer(['admin.service-description.index', 'service'], 'App\ViewsComposer\ServiceDescriptionComposer');
        View::composer(['admin.service.index', 'service'], 'App\ViewsComposer\ServiceComposer');
        View::composer(['includes.service'], 'App\ViewsComposer\ServiceMainComposer');
        View::composer(['admin.brand.index', 'admin.car.form'], 'App\ViewsComposer\BrandComposer');
        View::composer(['admin.body.index', 'admin.car.form', 'includes.sort-car'], 'App\ViewsComposer\BodyComposer');
        View::composer(['admin.class.index', 'admin.car.form', 'includes.sort-car'], 'App\ViewsComposer\ClassCarComposer');
        View::composer(['admin.engine.index', 'admin.car.form'], 'App\ViewsComposer\EngineComposer');
        View::composer(['admin.transmission.index', 'admin.car.form'], 'App\ViewsComposer\TransmissionComposer');
        View::composer(['admin.car.index'], 'App\ViewsComposer\CarComposer');
        View::composer(['admin.option.index', 'admin.car.form'], 'App\ViewsComposer\OptionComposer');
        View::composer(['includes.choose-car'], 'App\ViewsComposer\MainCarComposer');
        View::composer(['admin.post.index', 'blog'], 'App\ViewsComposer\PostComposer');
        View::composer(['includes.footer'], 'App\ViewsComposer\FooterPostComposer');
        View::composer(['index'], 'App\ViewsComposer\MainPostComposer');
    }
}
