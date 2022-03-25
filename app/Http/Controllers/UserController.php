<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
      public function index()
      {
            $user = User::all();
            return view('Admin.Users.index', compact('user'));
      }

      public function add()
      {
            return view('Admin.Users.add');
      }

      public function insert(Request $request)
      {

            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->phone = $request->input('phone');
            $user->role_as = $request->input('role_as');

            $user->save();

            return redirect('dashboard/users');
      }

      public function edit($id)
      {
            $user = User::find($id);
            return view('Admin.Users.edit', compact('user'));
      }

      public function update(Request $request, $id)
      {
            $user = User::findOrFail($id);

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $password = $request->input('password'); // password is form field
            $user->password = Hash::make($password);
            $user->phone = $request->input('phone');
            $user->role_as = $request->input('role_as');
            $user->update();
            return redirect('dashboard/users');
      }

      public function destroy($id)
      {
            $user = User::find($id);
            $user->delete();
            return redirect('dashboard/users');
      }

      public function updateProfile(Request $request, $id)
      {
            $user = User::findOrFail($id);

            $user->name = $request->input('name');
            $user->phone = $request->input('phone');
            $password = $request->input('password'); // password is form field
            $user->password = Hash::make($password);


            $user->update();
            return redirect('profile');
      }
}
