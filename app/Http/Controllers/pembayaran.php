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
        $data = DB::table('siswa')->get();
    	return view('mastersiswa',['data' => $data]);
    }
}
