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
                <h5 class="card-title">Form Update</h5>
                <form method="POST" action="/masterbiayabukupaket/ubah/">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$data[0]->id}}" name="id">
                    <div class="position-relative form-group"><label class="">Nama Buku</label><input name="buku" placeholder="Masukkan Nama Buku" type="text" class="form-control" value="{{$data[0]->buku}}"></div>
                    <div class="position-relative form-group"><label class="">Harga</label><input require name="harga" placeholder="Masukkan Harga" type="text" class="form-control" value="{{$data[0]->harga}}"></div>
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
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop