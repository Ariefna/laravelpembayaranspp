@extends('template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Form Ubah</h5>
                <form class="">
                    <div class="position-relative form-group"><label for="exampleEmail" class="">NIS</label><input name="number" id="exampleEmail" placeholder="Masukkan NIS" type="email" class="form-control"></div>
                    <div class="position-relative form-group"><label for="examplePassword" class="">Nama</label><input name="text" id="examplePassword" placeholder="Masukkan Nama" type="password" class="form-control"></div>
                    <div class="position-relative form-group"><label for="exampleSelect" class="">Kelas</label><select name="select" id="exampleSelect" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select></div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop