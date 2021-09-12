@extends('template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Form Tambah</h5>
                <form method="POST" action="/mastersiswa/ubah/">
                    {{ csrf_field() }}
                    <div class="position-relative form-group"><label class="">NIS</label><input name="nis" placeholder="Masukkan NIS" type="number" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Nama</label><input require name="nama" placeholder="Masukkan Nama" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Kelas</label><select name="kelas" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($kelas) :
                                foreach ($kelas as $kelas) :
                            ?>
                                    <option value="<?= $kelas->id; ?>"><?= $kelas->nama; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Kelas Baru -</option>
                            <?php endif; ?>
                        </select></div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop