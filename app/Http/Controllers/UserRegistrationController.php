<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Create a registration form view
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true, // Assuming you have an is_admin column in the users table
        ]);

        // Optionally, you can assign a role if you are using a roles package
        // $user->assignRole('admin');

        return redirect()->to('/admin')->with('status', 'Registration successful. You can now log in.');
    }
}
