@extends('template')
@section('content')
<script>
  $(document).ready(function() {
    $('.table').DataTable({ select: true, dom: 'Blfrtip', lengthMenu: [ [10, 25, 50, -1], ['10 Filas', '25 Filas', '50 Filas', 'Mostrar todo'] ], dom: 'Bfrtip', buttons: [ { extend: 'pdf', text: ' Export a PDF' }, { extend: 'csv', text: ' Export a CSV' }, { extend: 'excel', text: ' Export a EXCEL' }, 'pageLength' ], }); table.buttons().container() .appendTo('#datatable_wrapper .col-md-6:eq(0)');
} );
</script>
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
                <h5 class="card-title float-left">Report Tagihan</h5>
                <div class="table-responsive">
                    <table class="mb-0 table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Keterangan</th>
                                <th>Pembayaran</th>
                                <th>Tagihan</th>
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
                                        <td><?= $datas->nama_siswa; ?></td>
                                        <td><?= $datas->id_kelas; ?></td>
                                        <td><?= $datas->keterangan; ?></td>
                                        <td>@currency($datas->debet)</td>
                                        <td>@currency($datas->kredit)</td>
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