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
                <h5 class="card-title">Form Ubah</h5>
                <form method="POST" action="/masterspp/ubah/">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$data[0]->id}}" name="id">
                    <div class="position-relative form-group"><label class="">Harga</label><input name="harga" placeholder="Masukkan Harga" type="number" class="form-control" value="{{$data[0]->harga_spp}}"></div>
                    <div class="position-relative form-group"><label class="">Semester</label><select name="id_semester" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($semester) :
                                foreach ($semester as $semester) :
                                    if ($semester->id == $data[0]->id_semester) {
                            ?>
                                        <option value="<?= $semester->id; ?>" selected><?= $semester->nama; ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?= $semester->id; ?>"><?= $semester->nama; ?></option>
                                    <?php
                                    }
                                    ?>

                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Semester Baru -</option>
                            <?php endif; ?>
                        </select></div>
                    <div class="position-relative form-group"><label class="">Kelas</label><select name="id_kelas" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($kelas) :
                                foreach ($kelas as $kelas) :
                                    if ($kelas->id == $data[0]->id_kelas) {
                            ?>
                                        <option value="<?= $kelas->id; ?>" selected><?= $kelas->nama; ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?= $kelas->id; ?>"><?= $kelas->nama; ?></option>
                                    <?php
                                    }
                                    ?>


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