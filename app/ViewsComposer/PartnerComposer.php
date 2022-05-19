<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Partner;

class PartnerComposer 
{
    public function compose(View $view){
        $partner = new Partner;
        $partners = $partner->paginate(5);
        $view->with('partners', $partners);
    }
}