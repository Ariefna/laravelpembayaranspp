@extends('template')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif
        @if (\Session::has('failed'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('failed') !!}</li>
            </ul>
        </div>
        @endif
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title float-left">Report Pembayaran</h5>
                <div class="table-responsive">
                    <table class="mb-0 table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Formulir Pendaftaran</th>
                                <th>Pangkal</th>
                                <th>Atribut Pakaian</th>
                                <th>Buku Paket</th>
                                <th>Makanan</th>
                                <th>Spp</th>
                                <th>les</th>
                                <th>Bulan</th>
                                <th>Total Bayar</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if ($data) :
                                foreach ($data as $datas) :
                            ?>
                                    <tr>
                                        <td scope="row"><?= $no++; ?></td>
                                        <td><?= $datas->nis; ?></td>
                                        <td><?= $datas->nama_siswa; ?></td>
                                        <td><?= $datas->id_kelas; ?></td>
                                        <td><?= $datas->biaya_formulir; ?></td>
                                        <td><?= $datas->biaya_gedung; ?></td>
                                        <td><?= $datas->biaya_pakaian; ?></td>
                                        <td><?= $datas->biaya_buku; ?></td>
                                        <td><?= $datas->biaya_makan; ?></td>
                                        <td><?= $datas->biaya_spp; ?></td>
                                        <td><?= $datas->biaya_les; ?></td>
                                        <td><?= $datas->id_bulan; ?></td>
                                        <td><?= $datas->id_bulan; ?></td>
                                        <td><?= $datas->tanggal; ?></td>
                                    </tr>
                                <?php endforeach;
                            else : ?>
                                <tr>
                                    <td colspan="14" class="text-center">Silahkan tambahkan data Transaksi / Transaksi baru</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop