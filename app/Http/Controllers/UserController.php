<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class UserController extends Controller
{
    //

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if(Auth::attempt($credential)){
            return redirect()->route('tasks.index');
        }
    }

     // Add this line at the top if not already present

    public function isUserLogin() {
        if (Auth::check()) {
            $tasks = Task::all(); // Fetch tasks from the database
            return view('tasks.index', compact('tasks')); // Pass tasks to the view
        } else {
            return redirect()->route('login');
    }

}
}
