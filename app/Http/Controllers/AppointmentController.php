<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        $users = User::all();
        return view('Admin.Appointments.index', compact('appointments','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $appointments = new Appointment();
        $appointments->name = $request->input('name');
        $appointments->topic = $request->input('topic');
        $appointments->date = $request->input('date');
        $appointments->description = $request->input('description');
        $appointments->with_dr = $request->input('with_dr');
        $appointments->user_id = auth()->user()->id;
        /* $appointments->confirmed = $request->input('confirmed'); */

        $appointments->save();

        return redirect('dashboard/appointments');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment, $id)
    {
        //
        $appointments = Appointment::find($id);
        return view('Admin.Appointments.edit', compact('appointments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment, $id)
    {
        //
        $appointments = Appointment::findOrFail($id);
        $appointments->name = $request->input('name');
        $appointments->topic = $request->input('topic');
        $appointments->date = $request->input('date');
        $appointments->description = $request->input('description');
        $appointments->confirmed = $request->input('confirmed');

        $appointments->update();
        return redirect('dashboard/appointments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment,$id)
    {
        //
        $appointments = Appointment::find($id);
        $appointments->delete();
        return redirect('dashboard/appointments');
    }
}
