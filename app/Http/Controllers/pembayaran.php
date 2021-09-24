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
        $data = DB::table('siswa')->join('kelas', 'kelas.id', '=', 'siswa.id_kelas')->select('*', 'siswa.nama_siswa as nama_siswa', 'kelas.nama AS nama_kelas', 'siswa.id AS siswa_id')->get();
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
                ['nis' => $nis, 'nama_siswa' => $nama, 'id_kelas' => $id_kelas]
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
            ['nis' => $nis, 'nama_siswa' => $nama, 'id_kelas' => $id_kelas]
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
        $data = DB::table('spp')->join('tahun', 'tahun.id', '=', 'spp.id_tahun')->select('*', 'spp.id as spp_id')->get();
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
        $tahun = DB::table('tahun')->get();
        return view('spp.update', ['data' => $data, 'tahun' => $tahun]);
    }
    public function
    mastersppupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $id_tahun = $r->input('id_tahun');
        $harga = $r->input('harga');
        DB::table('spp')
            ->where('id', $id)
            ->update(
                ['id_tahun' => $id_tahun, 'harga_spp' => $harga]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function mastersppadd()
    {
        $tahun = DB::table('tahun')->get();
        return view('spp.add', ['tahun' => $tahun]);
    }
    public function
    mastersppaddaksi(Request $r)
    {
        $harga = $r->input('harga');
        $id_tahun = $r->input('id_tahun');
        DB::table('spp')->insert(
            ['harga_spp' => $harga, 'id_tahun' => $id_tahun]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }
    public function mastermakan()
    {
        $data = DB::table('makan')->join('tahun', 'tahun.id', '=', 'makan.id_tahun')->select('*', 'makan.id as makan_id')->get();
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
        $tahun = DB::table('tahun')->get();
        return view('makan.update', ['data' =>
        $data, 'tahun' => $tahun]);
    }
    public function
    mastermakanupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $harga = $r->input('harga');
        $id_tahun = $r->input('id_tahun');
        DB::table('makan')
            ->where('id', $id)
            ->update(
                ['harga_makan' => $harga, 'id_tahun' => $id_tahun]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function mastermakanadd()
    {
        $tahun = DB::table('tahun')->get();
        return view('makan.add', ['tahun' => $tahun]);
    }
    public function
    mastermakanaddaksi(Request $r)
    {
        $harga = $r->input('harga');
        $id_tahun = $r->input('id_tahun');
        DB::table('makan')->insert(
            ['harga_makan' => $harga, 'id_tahun' => $id_tahun]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }
    public function masterkegiatan()
    {
        $data = DB::table('kegiatan')->join('tahun', 'tahun.id', '=', 'kegiatan.id_tahun')->get();
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
        $tahun = DB::table('tahun')->get();
        return view('kegiatan.update', ['data' =>
        $data, 'tahun' => $tahun]);
    }
    public function masterkegiatanupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $harga = $r->input('harga');
        $id_tahun = $r->input('id_tahun');
        DB::table('kegiatan')
            ->where('id', $id)
            ->update(
                ['harga' => $harga, 'id_tahun' => $id_tahun]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function masterkegiatanadd()
    {
        $tahun = DB::table('tahun')->get();
        return view('kegiatan.add', ['tahun' => $tahun]);
    }
    public function
    masterkegiatanaddaksi(Request $r)
    {
        $harga = $r->input('harga');
        $id_tahun = $r->input('id_tahun');
        DB::table('kegiatan')->insert(
            ['harga' => $harga, 'id_tahun' => $id_tahun]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }
    public function masterbuku()
    {
        $data = DB::table('buku')->join('tahun', 'tahun.id', '=', 'buku.id_tahun')->join('kelas', 'kelas.id', '=', 'buku.id_kelas')->select('*', 'buku.id as id_buku')->get();
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
        $tahun = DB::table('tahun')->get();
        $kelas = DB::table('kelas')->get();
        return view('buku.update', ['data' => $data, 'tahun' => $tahun, 'kelas' => $kelas]);
    }
    public function masterbukuupdateaksi(Request $r)
    {
        // DB::enableQueryLog();
        $id = $r->input('id');
        $id_tahun = $r->input('id_tahun');
        $buku = $r->input('buku');
        $harga = $r->input('harga');
        $kelas = $r->input('id_kelas');
        DB::table('buku')
            ->where('id', $id)
            ->update(
                ['id_tahun' => $id_tahun, 'buku' => $buku, 'harga' => $harga, 'id_kelas' => $kelas]
            );
        // dd(DB::getQueryLog());
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function masterbukuadd()
    {
        $tahun = DB::table('tahun')->get();
        $kelas = DB::table('kelas')->get();
        return view('buku.add', ['tahun' => $tahun, 'kelas' => $kelas]);
    }
    public function masterbukuaddaksi(Request $r)
    {
        $id_tahun = $r->input('id_tahun');
        $buku = $r->input('buku');
        $harga = $r->input('harga');
        $kelas = $r->input('id_kelas');
        DB::table('buku')->insert(
            ['id_tahun' => $id_tahun, 'buku' => $buku, 'harga' => $harga, 'id_kelas' => $kelas]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }

    public function mastertahun()
    {
        $data = DB::table('tahun')->get();
        return view('mastertahun', ['data' => $data]);
    }
    public function mastertahundelete($id)
    {
        DB::table('tahun')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }

    public function mastertahunupdate($id)
    {
        $data = DB::table('tahun')->where('id', $id)->get();
        return view('tahun.update', ['data' => $data]);
    }
    public function
    mastertahunupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $kode = $r->input('kode');
        DB::table('tahun')
            ->where('id', $id)
            ->update(
                ['kode' => $kode]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }

    public function mastertahunadd()
    {
        return view('tahun.add');
    }
    public function
    mastertahunaddaksi(Request $r)
    {
        $kode = $r->input('kode');
        DB::table('tahun')->insert(
            ['kode' => $kode]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }
    public function
    naikkelas()
    {
        $data = DB::table('siswa')->join('kelas', 'kelas.id', '=', 'siswa.id_kelas')->select('*', 'siswa.nama_siswa as nama_siswa', 'kelas.nama AS nama_kelas', 'siswa.id AS siswa_id')->get();
        return view('naikkelas', ['data' => $data]);
    }
    public function
    naikkelasaksi($id)
    {
        DB::table('siswa')
            ->where('id', $id)
            ->update(
                ['id_kelas' => DB::raw('id_kelas + 1')]
            );
        return redirect()->back()->with('success', 'Siswa Anda Berhasil Naik Kelas');
    }
    public function
    transaksiview()
    {
        $data = DB::table('siswa')->join('kelas', 'kelas.id', '=', 'siswa.id_kelas')->select('*', 'siswa.nama_siswa as nama_siswa', 'kelas.nama AS nama_kelas', 'siswa.id AS siswa_id')->get();
        return view('transaksi', ['data' => $data]);
    }
    public function
    transaksibayar($id)
    {
        $data = DB::table('siswa')->where('id_siswa', $id)->groupBy('siswa.id')->join('transaksi', 'siswa.id', '=', 'transaksi.id_siswa')->select(DB::raw('COALESCE(sum(debet-kredit),0) as tagihan'), 'nama_siswa')->get();
        return view('transaksi.bayar', ['data' => $data]);
    }
}
