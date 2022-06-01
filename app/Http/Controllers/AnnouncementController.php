<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dosen;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\ValidatedData;



class AnnouncementController extends Controller
{
    //
    public function index()
    {
        //
        $pengumuman = Announcement::latest()->get();
        $pertama = Announcement::all()->last();
        // return $pertama;
        return view('announcement.announcement', [
            "title" => "Pengumuman",
            'pengumumans' => $pengumuman,
            'pertama' => $pertama,
        ]);
    }
    public function indexadd()
    {
        //
        return view('announcement.addAnnouncement', [
            "title" => "Pengumuman",
        ]);
    }

    public function show(Announcement $pengumuman)
    {
        return view('announcement.detailAnnouncement', [
            "title" => "Pengumuman",
            "pengumuman" => $pengumuman,
        ]);
    }

    public function destroy(Announcement $announcement)
    {
        Announcement::destroy($announcement->id);
        return redirect('semuapengumuman');
    }


    public function edit(Announcement $announcement)
    {
        return view('announcement.editAnnouncement', [
            "title" => "Pengumuman",
            'pengumuman' => $announcement,
        ]);
    }
    public function update(Request $request, Announcement $announcement)
    {
        $validData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
            'dosen_id' => 'required',
        ]);
        $validData['tanggal'] = Carbon::now()->isoFormat('D MMMM Y');
        Announcement::where('id', $announcement->id)
            ->update($validData);
        return redirect('semuapengumuman')->with('successEdit', 'Pengumuman berhasil diubah');
    }

    public function semuaPengumuman()
    {
        $pengumuman = Announcement::all();
        return view('announcement.allAnnouncement', [
            "title" => "Tabel Pengumuman",
            "pengumumans" => $pengumuman,
        ]);
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
            'dosen_id' => 'required',
        ]);
        $validData['tanggal'] = Carbon::now()->isoFormat('D MMMM Y');
        Announcement::create($validData);
        return redirect('pengumuman');
    }
}
