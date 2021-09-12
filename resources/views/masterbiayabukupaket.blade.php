@extends('template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Master Buku Paket</h5>
                <div class="table-responsive">
                    <table class="mb-0 table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Semeter</th>
                                <th>Nama Buku</th>
                                <th>Harga</th>
                                <th>Aksi</th>
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
                                        <td><?= $datas->kode; ?></td>
                                        <td><?= $datas->buku; ?></td>
                                        <td><?= $datas->harga; ?></td>
                                        <td>
                                            <button class="mb-2 mr-2 btn btn-warning">Edit
                                            </button>
                                            <button class="mb-2 mr-2 btn btn-danger">Hapus
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            else : ?>
                                <tr>
                                    <td colspan="4" class="text-center">Silahkan tambahkan Buku paket</td>
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