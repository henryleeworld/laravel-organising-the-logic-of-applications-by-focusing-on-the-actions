<?php

namespace App\Authentication\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateUserPassword
{
    use AsAction;

    public function handle(User $user, string $newPassword)
    {
        $user->password = Hash::make($newPassword);
        $user->save();
    }

    /*
    public function asController(Request $request)
    {
        $this->handle(
            $request->user(), 
            $request->get('password')
        );

        return redirect()->back();
    }
    */
}