<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;

class UserController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::all();
        return view('user.dashboard', compact('destinasi'));
    }

    public  function show($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('user.detail', compact('destinasi'));
    }
}
