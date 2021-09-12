@extends('template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Form Ubah</h5>
                <form method="POST" action="/mastersiswa/ubah/">
                    {{ csrf_field() }}
                    <div class="position-relative form-group"><label class="">Harga</label><input name="harga" placeholder="Masukkan Harga" type="number" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Semester</label><select name="semester" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($semester) :
                                foreach ($semester as $semester) :
                            ?>
                                    <option value="<?= $semester->id; ?>"><?= $semester->nama; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Semester Baru -</option>
                            <?php endif; ?>
                        </select></div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop