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
                                <th>Keterangan</th>
                                <th>Pengeluaran</th>
                                <th>Pemasukkan</th>
                                <th>Tanggal</th>
                                <th>bukti</th>
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
                                        <td><?= $datas->keterangan; ?></td>
                                        <td>@currency($datas->debet)</td>
                                        <td>@currency($datas->kredit)</td>
                                        <td><?= $datas->tanggal; ?></td>
                                        <td> <img src="<?= URL::to('/'); ?>/data_file/<?= $datas->bukti; ?>" alt=" " class="rounded-circle" width="40px">  </td>
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