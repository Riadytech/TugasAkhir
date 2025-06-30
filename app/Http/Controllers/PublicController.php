<?php

namespace App\Http\Controllers;

use App\Models\Keunggulan;
use App\Models\WhyChooseUs;
use App\Models\About;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function landing()
    {
        $keunggulan = Keunggulan::all();
        $wcu = WhyChooseUs::first();
        $destinasi = Destinasi::all();
        return view('landing.index', compact('destinasi', 'wcu', 'keunggulan'));
    }

    public function detail($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('landing.detail', compact('destinasi'));
    }
    public function showAbout()
    {
    $about = About::first(); // Ambil record pertama
    return view('landing.about', compact('about'));
    }

    // public function whyChoose()
    // {
    //     $wcu = WhyChooseUs::first(); // hanya 1 data
    //     return view('admin.whychooseus.edit', compact('wcu'));
    // }
}
