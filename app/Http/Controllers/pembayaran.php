<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Session;

class pembayaran extends Controller
{
    public function mastersiswa()
    {
        $data = DB::table('siswa')->join('kelas', 'kelas.id', '=', 'siswa.id_kelas')->select('*', 'siswa.nama as nama_siswa', 'kelas.nama AS nama_kelas')->get();
        return view('mastersiswa', ['data' => $data]);
    }
    public function mastersiswadelete($id)
    {
        DB::table('siswa')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }
    public function mastersiswaupdate($id)
    {
        $data = DB::table('siswa')->where('id', $id)->get();
        $kelas = DB::table('kelas')->get();
        return view('siswa.update', ['data' => $data, 'kelas' => $kelas]);
    }
    public function masterkelas()
    {
        $data = DB::table('kelas')->get();
        return view('masterkelas', ['data' => $data]);
    }
    public function masterkelasdelete($id)
    {
        DB::table('kelas')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }

    public function masterkelasupdate($id)
    {
        $data = DB::table('kelas')->where('id', $id)->get();
        return view('mastersiswa', ['data' => $data]);
    }
    public function masterspp()
    {
        $data = DB::table('spp')->join('semester', 'semester.id', '=', 'spp.id_semester')->get();
        return view('masterspp', ['data' => $data]);
    }
    public function mastersppdelete($id)
    {
        DB::table('spp')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }
    public function mastersppupdate($id)
    {
        $data = DB::table('spp')->where('id', $id)->get();
        return view('mastersiswa', ['data' => $data]);
    }
    public function mastermakan()
    {
        $data = DB::table('makan')->join('semester', 'semester.id', '=', 'makan.id_semester')->get();
        return view('masterbiayamakanan', ['data' => $data]);
    }
    public function mastermakandelete($id)
    {
        DB::table('makan')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }
    public function mastermakananupdate($id)
    {
        $data = DB::table('makan')->where('id', $id)->get();
        return view('mastersiswa', ['data' => $data]);
    }
    public function masterkegiatan()
    {
        $data = DB::table('kegiatan')->join('semester', 'semester.id', '=', 'kegiatan.id_semester')->get();
        return view('masterbiayakegiatan', ['data' => $data]);
    }
    public function masterkegiatandelete($id)
    {
        DB::table('kegiatan')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }
    public function masterkegiatanupdate($id)
    {
        $data = DB::table('kegiatan')->where('id', $id)->get();
        return view('mastersiswa', ['data' => $data]);
    }
    public function masterbuku()
    {
        $data = DB::table('buku')->join('semester', 'semester.id', '=', 'buku.id_semester')->get();
        return view('masterbiayabukupaket', ['data' => $data]);
    }
    public function masterbukudelete($id)
    {
        DB::table('buku')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }
    public function masterbukuupdate($id)
    {
        $data = DB::table('buku')->where('id', $id)->get();
        return view('masterbiayabukupaket', ['data' => $data]);
    }
}
