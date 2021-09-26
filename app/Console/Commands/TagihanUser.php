<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TagihanUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tagihan:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '1' as id_siswa, '0' as debet, harga_spp as kredit, CONCAT('Biaya SPP ',year(CURRENT_TIMESTAMP)) as keterangan FROM `spp` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP))");
        return 0;
    }
}
