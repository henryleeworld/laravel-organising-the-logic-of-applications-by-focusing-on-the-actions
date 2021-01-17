<?php

namespace App\Http\Controllers;

use App\Authentication\Actions\UpdateUserPassword;
use App\Models\User;

class UsersController extends Controller 
{
    public function updatePassword() 
    {
        $user = User::find(1);
        UpdateUserPassword::make();
        // Equivalent to "UpdateUserPassword::make()->handle($user, 'secret')".
        UpdateUserPassword::run($user, 'secret');
        echo '變更密碼成功' . PHP_EOL;
    }
}
