<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function update(User $user, UpdateUserRequest $request)
    {
        // Update only the fields that are validated in UpdateUserRequest, excluding 'is_admin'
        $user->update($request->only(['name', 'email'])); // Adjust the fields as necessary
    
        return 'Success';
    }
}
