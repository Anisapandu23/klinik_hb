@extends('templates.admin')

<head>
    <title>PASIEN | KLINIK PRATAMA HB</title>
</head>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tambah Data Pasien</h4>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                        <form method="post" action="{{route('pasien.store')}}">
                             @csrf
                                <fieldset enable>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Kategori Pasien</label>
                                        <select name="kategori_pasien" id="disabledSelect" class="form-control {{$errors->has('kategori_pasien') ? 'is-invalid':''}}">
                                            <option>...</option>
                                            <option>Pasien Umum</option>
                                            <option>Pasien Civitas PHB</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Nama</label>
                                        <input name="nama" type="text" id="disabledTextInput" class="form-control {{$errors->has('nama') ? 'is-invalid':''}}" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label" max-lenght="13">Nomor Identitas</label>
                                        <input name="no_identitas" type="number" id="disabledTextInput" class="form-control {{$errors->has('no_identitas') ? 'is-invalid':''}}" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Tempat Lahir</label>
                                        <input name="tempat_lahir" type="text" id="disabledTextInput" class="form-control {{$errors->has('tempat_lahir') ? 'is-invalid':''}}" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Tanggal Lahir</label>
                                        <input name="tanggal_lahir" type="date" id="disabledTextInput" class="form-control {{$errors->has('tanggal_lahir') ? 'is-invalid':''}}" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="disabledSelect" class="form-control{{$errors->has('jenis_kelamin') ? 'is-invalid':''}}">
                                            <option>...</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Alamat Lengkap</label>
                                        <textarea name="alamat" type="text" id="disabledTextInput" class="form-control {{$errors->has('alamat') ? 'is-invalid':''}}" placeholder=""></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">No. Hp</label>
                                        <input name="no_hp" type="number" id="disabledTextInput" class="form-control {{$errors->has('alamat') ? 'is-invalid':''}}" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Usia</label>
                                        <input name="usia" type="number" id="disabledTextInput" class="form-control {{$errors->has('usia') ? 'is-invalid':''}}" placeholder="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="disabledSelect" class="form-label">Golongan Darah</label>
                                        <select name="golongan_darah" id="disabledSelect" class="form-control{{$errors->has('golongan_darah') ? 'is-invalid':''}}">
                                            <option>...</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>O</option>
                                            <option>AB</option>
                                        </select>
                                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right btn-md">Simpan</button>
                <button class="btn btn-warning float-right btn-md mr-2" type="button" onclick="history.back()">Batal</button>
                </fieldset>
                </form>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection