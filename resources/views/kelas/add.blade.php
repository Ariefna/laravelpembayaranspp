@extends('template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Form Tambah</h5>
                <form method="POST" action="/mastersiswa/ubah/">
                    {{ csrf_field() }}
                    <div class="position-relative form-group"><label class="">Nama Kelas</label><input require name="nama" placeholder="Masukkan Nama" type="text" class="form-control"></div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop