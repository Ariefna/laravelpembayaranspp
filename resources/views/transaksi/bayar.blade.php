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
                    <input type="hidden" name="id_siswa" value="{{$data[0]->id}}">
                    <div class="position-relative form-group"><label class="">Nama</label><input require name="kode" placeholder="Masukkan Nama" value="{{$data[0]->nama_siswa}}" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Kelas</label><input require name="id_kelas" placeholder="Masukkan Kelas" value="{{$data[0]->id_kelas}}" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Formulir Pendaftaran</label><select name="formulir" class="form-control jml">
                            <option hidden selected>Pilih Satu...</option>
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($tetap) :
                                foreach ($tetap as $tetap) :
                            ?>
                                    <option value="<?= $tetap->harga; ?>"><?= $tetap->harga; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Lain-Lain Baru -</option>
                            <?php endif; ?>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Gedung</label><select name="gedung" class="form-control jml">
                            <option hidden selected>Pilih Satu...</option>
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($gedung) :
                                foreach ($gedung as $gedung) :
                            ?>
                                    <option value="<?= $gedung->uang_gedung; ?>"><?= $gedung->uang_gedung; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Gedung Baru -</option>
                            <?php endif; ?>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Atribut Pakaian</label><select name="pakaian" class="form-control jml">
                            <option hidden selected>Pilih Satu...</option>
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($pakaian) :
                                foreach ($pakaian as $pakaian) :
                            ?>
                                    <option value="<?= $pakaian->harga_pakaian; ?>"><?= $pakaian->harga_pakaian; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Pakaian Baru -</option>
                            <?php endif; ?>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Buku Paket</label><select name="buku" class="form-control jml">
                            <option hidden selected>Pilih Satu...</option>
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($buku) :
                                foreach ($buku as $buku) :
                            ?>
                                    <option value="<?= $buku->harga; ?>"><?= $buku->harga; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Buku Baru -</option>
                            <?php endif; ?>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Makan</label><select name="makanan" class="form-control jml">
                            <option hidden selected>Pilih Satu...</option>
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($makan) :
                                foreach ($makan as $makan) :
                            ?>
                                    <option value="<?= $makan->harga_makan; ?>"><?= $makan->harga_makan; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Makan Baru -</option>
                            <?php endif; ?>

                        </select></div>
                    <div class="position-relative form-group"><label class="">SPP</label><select name="spp" class="form-control jml">
                            <option hidden selected>Pilih Satu...</option>
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($spp) :
                                foreach ($spp as $spp) :
                            ?>
                                    <option value="<?= $spp->biaya_spp; ?>"><?= $spp->biaya_spp; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Spp Baru -</option>
                            <?php endif; ?>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Les</label><select name="les" class="form-control jml">
                            <option hidden selected>Pilih Satu...</option>
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($les) :
                                foreach ($les as $les) :
                            ?>
                                    <option value="<?= $les->harga_les; ?>"><?= $les->harga_les; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Les Baru -</option>
                            <?php endif; ?>

                        </select></div>
                    <div class="position-relative form-group"><label class="">Bulan</label><select name="id_bulan" class="form-control">
                            <option hidden selected>Pilih Satu...</option>
                            <option disabled='disabled'>- Pilih -</option>
                            <?php
                            if ($bulan) :
                                foreach ($bulan as $bulan) :
                            ?>
                                    <option value="<?= $bulan->id; ?>"><?= $bulan->nama_bulan; ?></option>
                                <?php endforeach;
                            else : ?>
                                <option disabled='disabled'>- Tambah Bulan Baru -</option>
                            <?php endif; ?>

                        </select></div>
                    <div class="position-relative form-group">
                        <label class="">Total Bayar</label>
                        <input require id="sum" name="total" placeholder="Total Bayar" value="" type="number" readonly class="form-control">
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(".jml").change(function() {
        var s = $('select option:selected').map(function() {
            return this.value
        }).get()
        var sum = s.reduce((pv, cv) => {
            return pv + (parseFloat(cv) || 0);
        }, 0);

        $("#sum").val(sum)
    })
</script>
@stop