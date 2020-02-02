<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggaran;

class PelanggaranController extends Controller
{
    public function index()
    {
        $pelanggaran = Pelanggaran::All();

        return view('pelanggaran.pelanggaran', ['pelanggaran' => $pelanggaran]);
    }

    public function tambah()
    {
        return view('pelanggaran.pelanggaran_tambah');
    }

    public function store(Request $request)
    {
        Pelanggaran::create([
            'keterangan' => $request->keterangan,
            'skor'       => $request->skor
        ]);

        return redirect('/pelanggaran');
    }

    public function edit($id)
    {
        $pelanggaran = Pelanggaran::find($id);

        return view('pelanggaran.pelanggaran_edit', ['pelanggaran' => $pelanggaran]);
    }

    public function update($id, Request $request)
    {
        $pelanggaran = Pelanggaran::find($id);
        $pelanggaran->keterangan = $request->keterangan;
        $pelanggaran->skor = $request->skor;
        $pelanggaran->save();

        return redirect('/pelanggaran');
    }

    public function hapus($id)
    {
        $pelanggaran = Pelanggaran::find($id);
        $pelanggaran->delete();

        return redirect('/pelanggaran');
    }
}
