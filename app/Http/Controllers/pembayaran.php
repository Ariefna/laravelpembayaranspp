<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Session;

class pembayaran extends Controller
{
    //master siswa
    public function mastersiswa()
    {
        $data = DB::table('siswa')->join('kelas', 'kelas.id', '=', 'siswa.id_kelas')->whereBetween('siswa.id_kelas', [1, 6])->select('*', 'siswa.nama_siswa as nama_siswa', 'kelas.nama AS nama_kelas', 'siswa.id AS siswa_id')->get();
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

    //master kelas
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

    //master spp
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

    //master makan
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
        $status = $r->input('status');
        DB::table('makan')
            ->where('id', $id)
            ->update(
                ['harga_makan' => $harga, 'id_tahun' => $id_tahun, 'status' => $status]
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
        $status = $r->input('status');
        DB::table('makan')->insert(
            ['harga_makan' => $harga, 'id_tahun' => $id_tahun, 'status' => $status]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }

    //master kegiatan
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

    //master buku
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

    //master tahun
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

    //relasi naik kelas
    public function
    naikkelas()
    {
        $data = DB::table('siswa')->join('kelas', 'kelas.id', '=', 'siswa.id_kelas')->whereBetween('siswa.id_kelas', [0, 6])->select('*', 'siswa.nama_siswa as nama_siswa', 'kelas.nama AS nama_kelas', 'siswa.id AS siswa_id')->get();
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

        // uang pakaian, uang spp, uang kegiatan, uang buku paket, uang gedung, uang makan
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, harga_pakaian as kredit, CONCAT('Biaya Pakaian ',year(CURRENT_TIMESTAMP)) as keterangan FROM `pakaian` a join tahun b on a.id_tahun = b.id order by b.id desc limit 1)");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, harga_spp as kredit, CONCAT('Biaya SPP ',year(CURRENT_TIMESTAMP)) as keterangan FROM `spp` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP))");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, a.harga as kredit, CONCAT('Biaya Kegiatan ',year(CURRENT_TIMESTAMP)) as keterangan FROM `kegiatan` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP) and status = 1)");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, harga as kredit, CONCAT('Biaya Buku ',a.buku,' ',year(CURRENT_TIMESTAMP)) as keterangan FROM `buku` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP) and a.id_kelas = (select id_kelas from siswa where id = " . $id . "))");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, uang_gedung as kredit, CONCAT('Uang Pangkal ',year(CURRENT_TIMESTAMP)) as keterangan FROM `gedung` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP))");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, harga_makan as kredit, CONCAT('Biaya makanan ',year(CURRENT_TIMESTAMP)) as keterangan FROM makan a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP) and status = 1)");
        return redirect()->back()->with('success', 'Siswa Anda Berhasil Naik Kelas');
    }

    //relasi button tidak naik kelas
    public function
    tinggalkelasaksi($id)
    {
        DB::table('siswa')
            ->where('id', $id)
            ->update(
                ['id_kelas' => DB::raw('id_kelas')]
            );
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, harga_pakaian as kredit, CONCAT('Biaya Pakaian ',year(CURRENT_TIMESTAMP)) as keterangan FROM `pakaian` a join tahun b on a.id_tahun = b.id order by b.id desc limit 1)");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, a.harga as kredit, CONCAT('Biaya Kegiatan ',year(CURRENT_TIMESTAMP)) as keterangan FROM `kegiatan` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP) and status = 1)");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, harga as kredit, CONCAT('Biaya Buku ',a.buku,' ',year(CURRENT_TIMESTAMP)) as keterangan FROM `buku` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP) and a.id_kelas = (select id_kelas from siswa where id = " . $id . "))");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, uang_gedung as kredit, CONCAT('Uang Pangkal ',year(CURRENT_TIMESTAMP)) as keterangan FROM `gedung` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP))");
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, harga_makan as kredit, CONCAT('Biaya makanan ',year(CURRENT_TIMESTAMP)) as keterangan FROM makan a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP) and status = 1)");
        // DB::statement("INSERT INTO table (SELECT)");
        return redirect()->back()->with('success', 'Siswa Anda Berhasil Tinggal Kelas');
    }

    public function
    transaksiview()
    {
        $data = DB::table('siswa')->join('kelas', 'kelas.id', '=', 'siswa.id_kelas')->select('*', 'siswa.nama_siswa as nama_siswa', 'kelas.nama AS nama_kelas', 'siswa.id AS siswa_id', DB::raw('(select COALESCE(sum(kredit-debet),0) as tagihan from transaksi where transaksi.id_siswa = siswa.id) as tagihan'))->get();
        return view('transaksi', ['data' => $data]);
    }
    public function
    transaksibayar($id)
    {
        $spp = DB::table('spp')->get();
        $makan = DB::table('makan')->get();
        $tahun = DB::table('tahun')->get();
        $pakaian = DB::table('pakaian')->get();
        $gedung = DB::table('gedung')->get();
        $buku = DB::table('buku')->get();
        $les = DB::table('les')->get();
        $spp = DB::table('spp')->get();
        $tetap = DB::table('tetap')->get();
        $bulan = DB::table('bulan')->get();
        $data = DB::table('siswa')->where('id', $id)->select(DB::raw('(select COALESCE(sum(kredit-debet),0) as tagihan from transaksi where transaksi.id_siswa = siswa.id) as tagihan'), 'nama_siswa', 'id', 'nis', 'id_kelas')->get();
        return view('transaksi.bayar', ['spp' => $spp, 'bulan' => $bulan, 'tetap' => $tetap, 'makan' => $makan, 'data' => $data, 'tahun' => $tahun, 'gedung' => $gedung, 'buku' => $buku, 'les' => $les, 'makan' => $makan, 'spp' => $spp, 'pakaian' => $pakaian]);
    }
    public function
    transaksibayaraksi(Request $r)
    {
        $id = $r->input('id');
        $keterangan = $r->input('keterangan');
        $bayar = $r->input('bayar');
        DB::table('transaksi')->insert(
            ['id_siswa' => $id, 'keterangan' => $keterangan, 'debet' => $bayar, 'kredit' => 0]
        );
        return redirect()->back()->with('success', 'Transaksi Berhasil Di bayar');
    }
    //lain lain

    public function lainlain()
    {
        $data = DB::table('tetap')->join('tahun', 'tahun.id', '=', 'tetap.id_tahun')->get();
        return view('lainlain', ['data' => $data]);
    }
    public function lainlaindelete($id)
    {
        DB::table('tetap')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }

    public function lainlainupdate($id)
    {
        $tahun = DB::table('tahun')->get();
        $data = DB::table('tetap')->where('id', $id)->get();
        return view('lainlain.update', ['data' => $data, 'tahun' => $tahun]);
    }
    public function
    lainlainupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $id_tahun = $r->input('id_tahun');
        $harga = $r->input('harga');
        $keterangan = $r->input('keterangan');
        DB::table('tetap')
            ->where('id', $id)
            ->update(
                ['id_tahun' => $id_tahun, 'harga' => $harga, 'keterangan' => $keterangan]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }

    public function lainlainadd()
    {
        $tahun = DB::table('tahun')->get();
        return view('lainlain.add', ['tahun' => $tahun]);
    }
    public function
    lainlainaddaksi(Request $r)
    {
        $id_tahun = $r->input('id_tahun');
        $harga = $r->input('harga');
        $keterangan = $r->input('keterangan');
        DB::table('tetap')->insert(
            ['id_tahun' => $id_tahun, 'harga' => $harga, 'keterangan' => $keterangan]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }

    //lain lain
    //gadung

    public function gedung()
    {
        $data = DB::table('gedung')->get();
        return view('gedung', ['data' => $data]);
    }
    public function gedungdelete($id)
    {
        DB::table('gedung')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }

    public function gedungupdate($id)
    {
        $tahun = DB::table('tahun')->get();
        $data = DB::table('gedung')->where('id', $id)->get();
        return view('gedung.update', ['data' => $data, 'tahun' => $tahun]);
    }
    public function
    gedungupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $id_tahun = $r->input('id_tahun');
        $uang_gedung = $r->input('uang_gedung');
        DB::table('gedung')
            ->where('id', $id)
            ->update(
                ['id_tahun' => $id_tahun, 'uang_gedung' => $uang_gedung]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }

    public function gedungadd()
    {
        $tahun = DB::table('tahun')->get();
        return view('gedung.add', ['tahun' => $tahun]);
    }
    public function
    gedungaddaksi(Request $r)
    {
        $id_tahun = $r->input('id_tahun');
        $uang_gedung = $r->input('uang_gedung');
        DB::table('gedung')->insert(
            ['id_tahun' => $id_tahun, 'uang_gedung' => $uang_gedung]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }

    //gedung
    //pakaian

    public function pakaian()
    {
        $data = DB::table('pakaian')->get();
        return view('pakaian', ['data' => $data]);
    }
    public function pakaiandelete($id)
    {
        DB::table('pakaian')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }

    public function pakaianupdate($id)
    {
        $tahun = DB::table('tahun')->get();
        $data = DB::table('pakaian')->where('id', $id)->get();
        return view('pakaian.update', ['data' => $data, 'tahun' => $tahun]);
    }
    public function
    pakaianupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $harga_pakaian = $r->input('harga');
        $id_tahun = $r->input('id_tahun');
        DB::table('pakaian')
            ->where('id', $id)
            ->update(
                ['harga_pakaian' => $harga_pakaian, 'id_tahun' => $id_tahun]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }

    public function pakaianadd()
    {
        $tahun = DB::table('tahun')->get();
        return view('pakaian.add', ['tahun' => $tahun]);
    }
    public function
    pakaianaddaksi(Request $r)
    {
        $id_tahun = $r->input('id_tahun');
        $harga_pakaian = $r->input('harga');
        DB::table('pakaian')->insert(
            ['id_tahun' => $id_tahun, 'harga_pakaian' => $harga_pakaian]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }

    //pakaian

    //les
    public function masterles()
    {
        $data = DB::table('les')->join('tahun', 'tahun.id', '=', 'les.id_tahun')->select('*', 'les.id as les_id')->get();
        return view('masterbiayalesan', ['data' => $data]);
    }
    public function masterlesdelete($id)
    {
        DB::table('les')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Data Anda Berhasil Dihapus');
    }
    public function masterlesupdate($id)
    {
        $data = DB::table('les')->where('id', $id)->get();
        $tahun = DB::table('tahun')->get();

        return view('les.update', ['data' => $data, 'tahun' => $tahun, 'gedung' => $gedung, 'buku' => $buku, 'les' => $les, 'makan' => $makan, 'spp' => $spp]);
    }
    public function
    masterlesupdateaksi(Request $r)
    {
        $id = $r->input('id');
        $harga = $r->input('harga');
        $id_tahun = $r->input('id_tahun');
        DB::table('les')
            ->where('id', $id)
            ->update(
                ['harga_les' => $harga, 'id_tahun' => $id_tahun]
            );
        return redirect()->back()->with('success', 'Data Anda Berhasil Diubah');
    }
    public function masterlesadd()
    {
        $tahun = DB::table('tahun')->get();
        return view('les.add', ['tahun' => $tahun]);
    }
    public function
    masterlesaddaksi(Request $r)
    {
        $harga = $r->input('harga');
        $id_tahun = $r->input('id_tahun');
        DB::table('les')->insert(
            ['harga_les' => $harga, 'id_tahun' => $id_tahun]
        );
        return redirect()->back()->with('success', 'Data Anda Berhasil Dimasukkan');
    }
    //les


    public function
    ltagihan()
    {
        $data = DB::table('transaksi_sekolah')->join('siswa', 'transaksi_sekolah.id_siswa', '=', 'siswa.id')->get();
        return view('laporan_pembayaran', ['data' => $data]);
    }
}
