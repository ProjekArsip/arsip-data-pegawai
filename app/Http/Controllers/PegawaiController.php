<?php

namespace App\Http\Controllers;

use App\Models\tb_pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
   public function index () {
    return view('pegawai.index');
   }
   public function create() {
    return view('pegawai.insert');
   }
   public function store(Request $request) {
    // dd($request); 
 
$flight = tb_pegawai::create([
    'nip' => $request->nip,
    'nama_pegawai' => $request->nama,
    'tempat_lahir' => $request->tempat_lahir,
    'tanggal_lahir' => $request->tanggal_lahir,
    'status' => $request->status,
    'golongan' => $request->golongan,
    'tamat_golongan' => $request->tamat_golongan,
    'pendidikan_terakhir' => $request->pendidikan_terakhir,
    'jenis_jabatan' => $request->jenis_jabatan,
    'tanggal_mulai_tugas_pns' => $request->tmt_pns,
    'tanggal_mulai_golongan_pns' => $request->tmt_golongan,
    'bidang' => $request->bidang,
]);
   } //
}
