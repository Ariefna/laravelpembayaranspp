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
    public function
    mastersiswaupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $nis = $r->input('nis');
        $nama = $r->input('nama');
        $id_kelas = $r->input('id_kelas');
        DB::table('siswa')
            ->where('id', $id)
            ->update(
                ['nis' => $nis, 'nama' => $nama, 'id_kelas' => $id_kelas]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function mastersiswaadd()
    {
        $kelas = DB::table('kelas')->get();
        return view('siswa.add', ['kelas' => $kelas]);
    }
    public function
    mastersiswaaddaksi(Request $r)
    {
        $nis = $r->input('nis');
        $nama = $r->input('nama');
        $id_kelas = $r->input('id_kelas');
        DB::table('siswa')->insert(
            ['nis' => $nis, 'nama' => $nama, 'id_kelas' => $id_kelas]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
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
        return view('kelas.update', ['data' => $data]);
    }
    public function
    masterkelasupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $nama = $r->input('nama');
        DB::table('kelas')
            ->where('id', $id)
            ->update(
                ['nama' => $nama]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }

    public function masterkelasadd()
    {
        return view('kelas.add');
    }
    public function
    masterkelasaddaksi(Request $r)
    {
        $nama = $r->input('nama');
        DB::table('kelas')->insert(
            ['nama' => $nama]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
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
        $semester = DB::table('semester')->get();
        return view('spp.update', ['data' => $data, 'semester' => $semester]);
    }
    public function
    mastersppupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $id_semester = $r->input('id_semester');
        $harga = $r->input('harga');
        DB::table('semester')
            ->where('id', $id)
            ->update(
                ['id_semester' => $id_semester, 'harga' => $harga]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function mastersppadd()
    {
        $semester = DB::table('semester')->get();
        return view('spp.update', ['semester' => $semester]);
    }
    public function
    mastersppaddaksi(Request $r)
    {
        $harga = $r->input('harga');
        $id_semester = $r->input('id_semester');
        DB::table('semester')->insert(
            ['harga' => $harga, 'id_semester' => $id_semester]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
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
    public function mastermakanupdate($id)
    {
        $data = DB::table('makan')->where('id', $id)->get();
        $semester = DB::table('semester')->get();
        return view('makan.update', ['data' =>
        $data, 'semester' => $semester]);
    }
    public function
    mastermakanupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $nama_supplier = $r->input('nama_supplier');
        $no_telp = $r->input('no_telp');
        $alamat = $r->input('alamat');
        DB::table('makan')
            ->where('id', $id)
            ->update(
                ['nama_supplier' => $nama_supplier, 'no_telp' => $no_telp, 'alamat' => $alamat]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function mastermakanadd()
    {
        $semester = DB::table('semester')->get();
        return view('makan.add', ['semester' => $semester]);
    }
    public function
    mastermakanaddaksi(Request $r)
    {
        $harga = $r->input('harga');
        $id_semester = $r->input('id_semester');
        DB::table('makan')->insert(
            ['harga' => $harga, 'id_semester' => $id_semester]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
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
        $semester = DB::table('semester')->get();
        return view('kegiatan.update', ['data' =>
        $data, 'semester' => $semester]);
    }
    public function masterkegiatanadd()
    {
        $semester = DB::table('semester')->get();
        return view('kegiatan.add', ['semester' => $semester]);
    }
    public function
    masterkegiatanaddaksi(Request $r)
    {
        $harga = $r->input('harga');
        $id_semester = $r->input('id_semester');
        DB::table('kegiatan')->insert(
            ['harga' => $harga, 'id_semester' => $id_semester]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
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
        $semester = DB::table('semester')->get();
        return view('buku.update', ['data' => $data, 'semester' => $semester]);
    }
    public function masterbukuupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $id_semester = $r->input('id_semester');
        $buku = $r->input('buku');
        $harga = $r->input('harga');
        DB::table('buku')
            ->where('id', $id)
            ->update(
                ['id_semester' => $id_semester, 'buku' => $buku, 'harga' => $harga]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function masterbukuadd()
    {
        $semester = DB::table('semester')->get();
        return view('buku.add', ['semester' => $semester]);
    }
    public function masterbukuaddaksi(Request $r)
    {
        $id_semester = $r->input('id_semester');
        $buku = $r->input('buku');
        $harga = $r->input('harga');
        DB::table('buku')->insert(
            ['id_semester' => $id_semester, 'buku' => $buku, 'harga' => $harga]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }
}
