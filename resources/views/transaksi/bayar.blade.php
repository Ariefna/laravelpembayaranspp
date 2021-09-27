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
                <h5 class="card-title">Form Pembayaran </h5>
                <form method="POST" action="/transaksi/bayar">
                    {{ csrf_field() }}
                    <div class="position-relative form-group"><label class="">NIS</label>
                        <input require name="kode" value="{{$data[0]->nis}}" placeholder="Masukkan Nis" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label class="">Nama</label><input require name="kode" placeholder="Masukkan Nama" value="{{$data[0]->nama_siswa}}" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Kelas</label><input require name="kode" placeholder="Masukkan Kelas" value="{{$data[0]->id_kelas}}" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Formulir Pendaftaran</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>
                    <div class="position-relative form-group"><label class="">makan</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Pangkal</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Atribut Pakaian</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Buku Paket</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Makanan</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>
                    <div class="position-relative form-group"><label class="">SPP</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Les</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Bulan</label><select name="id_makan" class="form-control">
                            <option disabled='disabled'>- Pilih -</option>

                        </select></div>

                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop