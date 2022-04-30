<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|unique:users|max:255',
        ]);

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->contact_no = $request->contact_no;
        $user->password = Hash::make($request->password);
        $user->photo = "ss";

        $user->save();

        return response()->json(['success' => 'User successfully created!']);
    }
}
