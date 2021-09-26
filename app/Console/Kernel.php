<?php

namespace App\Console;


use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        'App\Console\Commands\TagihanUser',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            Log::info('Cronjob berhasil dijalankan');
        })->everyMinuteMinutes();
        $schedule->command('tagihan:users')
            ->everyMinuteMinutes();
        // DB::statement("INSERT INTO transaksi (id_siswa, debet, kredit, keterangan) (SELECT '" . $id . "' as id_siswa, '0' as debet, harga_spp as kredit, CONCAT('Biaya SPP ',year(CURRENT_TIMESTAMP)) as keterangan FROM `spp` a join tahun b on a.id_tahun = b.id where b.kode = year(CURRENT_TIMESTAMP))");
        // $schedule->command('inspire')->hourly();
        // Log::info('Cronjob berhasil dijalankan');
        // })
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
