<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\User;

class UsersComposer 
{
    public function compose(View $view){
        $user = new User;
        $users = $user->user()->orderBy('created_at')->paginate(10);
        $view->with('users', $users);
    }
}