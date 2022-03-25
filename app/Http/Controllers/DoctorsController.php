<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = User::all();
        return view('Home.doctors', compact('doctors'));
    }

    public function doctorDetail($id)
    {
        $doctors = User::find($id);
        return view('Home.doctorDetail', compact('doctors'));
    }
    public function bookingView($id)
    {
        $doctors = User::find($id);
        return view('Home.book', compact('doctors'));
    }





    /* Admin */

    public function indexDoctors()
    {
          $user = User::all();
          return view('Admin.Doctors.index', compact('user'));
    }

    public function indexAppointments()
    {
          $user = User::all();
          return view('Admin.Appointments.index', compact('user'));
    }

    public function addDoctor()
    {
          return view('Admin.Doctors.add');
    }

    public function insert(Request $request)
    {
          $user = new User();
          $user->name = $request->input('name');
          $user->email = $request->input('email');
          $user->password = $request->input('password');
          $user->phone = $request->input('phone');
          $user->role_as = $request->input('role_as');
          $user->img_src = $request->input('img_src');
          $user->description = $request->input('description');
          $user->major = $request->input('major');

          $user->save();

          return redirect('dashboard/doctor');
    }

    public function editDoctors($id)
    {
          $user = User::find($id);
          return view('Admin.Doctors.edit', compact('user'));
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
          $user->img_src = $request->input('img_src');
          $user->description = $request->input('description');
          $user->major = $request->input('major');
          $user->update();
          return redirect('dashboard/users');
    }

    public function destroy($id)
    {
          $user = User::find($id);
          $user->delete();
          return redirect('dashboard/users');
    }


    public function ProfileView()
    {
        $user = User::all();
        $appointment = Appointment::all();
        return view('Home.profile', compact('user','appointment'));
    }

    public function editProfileView($id)
    {
          $user = User::find($id);
          return view('Home.editprofile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
          $user = User::findOrFail($id);

          $user->name = $request->input('name');
          $user->phone = $request->input('phone');
          $password = $request->input('password'); // password is form field
          $user->password = Hash::make($password);


          $user->update();
          return redirect('editprofile');
    }
}
