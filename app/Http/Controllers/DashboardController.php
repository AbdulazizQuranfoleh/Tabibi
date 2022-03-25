<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('Admin.index', compact('user'));
    }
}
