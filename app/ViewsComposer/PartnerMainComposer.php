<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Partner;

class PartnerMainComposer 
{
    public function compose(View $view){
        $partners = Partner::get();
        $view->with('partners', $partners);
    }
}