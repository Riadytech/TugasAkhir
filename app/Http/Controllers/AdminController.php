<?php

namespace App\Http\Controllers;

use App\Models\Keunggulan;
use App\Models\WhyChooseUs;
use App\Models\About;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    $destinasi = Destinasi::all();  // Ambil semua destinasi
    return view('admin.dashboard', compact('destinasi'));
    }

    public function about()
    {
        $about = About::first();
        return view('admin.about.edit', compact('about'));
    }
    
    public function updateAbout(Request $request)
        {
        $about = About::firstOrNew(); // Buat kalau belum ada
        $about->fill($request->except(['background_image', 'about_image']));

        // Upload gambar jika ada
        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $filename = time().'_bg.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/about'), $filename);
            $about->background_image = 'uploads/about/' . $filename;
        }

        if ($request->hasFile('about_image')) {
            $file = $request->file('about_image');
            $filename = time().'_about.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/about'), $filename);
            $about->about_image = 'uploads/about/' . $filename;
        }

        $about->save();

        return redirect()->back()->with('success', 'Halaman About berhasil diperbarui.');
   }
    public function whyChoose()
    {
        $wcu = WhyChooseUs::first(); // hanya 1 data
        return view('admin.whychooseus.edit', compact('wcu'));
    }
    public function updateWhyChoose(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'poin' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $wcu = WhyChooseUs::first();

        if (!$wcu) {
            $wcu = new WhyChooseUs();
        }

        if ($request->hasFile('gambar')) {
            // Optional: hapus gambar lama
            if ($wcu->gambar) {
                Storage::disk('public')->delete($wcu->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('why_choose_us', 'public');
        }

        $wcu->update($data);

        return redirect()->back()->with('success', 'Data Why Choose Us berhasil diperbarui.');
    }
    // logika untuk keunggulan
       // Menampilkan semua keunggulan
    public function indexKeunggulan()
    {
        $keunggulan = Keunggulan::all();
        return view('admin.keunggulan.index', compact('keunggulan'));
    }

    // Tampilkan detail satu keunggulan
    public function showKeunggulan($id)
    {
        $item = Keunggulan::findOrFail($id);
        return view('admin.keunggulan.show', compact('item'));
    }

    // Update satu keunggulan
    public function updateKeunggulan(Request $request, $id)
    {
        $data = $request->validate([
            'gambar_icon' => 'required|string',
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        Keunggulan::findOrFail($id)->update($data);
        return redirect()->route('admin.keunggulan.index')->with('success', 'Keunggulan berhasil diperbarui');
    }

    // Hapus satu keunggulan
    public function deleteKeunggulan($id)
    {
        Keunggulan::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Keunggulan berhasil dihapus');
    }

}