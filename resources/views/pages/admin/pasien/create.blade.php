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
                            <form>
                                <fieldset enable>
                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Kategori Pasien</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>...</option>
                                            <option>Pasien Umum</option>
                                            <option>Pasien Civitas PHB</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Nama</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Nomor Identitas</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="KTP/SIM">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Tempat Lahir</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Kota Kelahiran">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Tanggal Lahir</label>
                                        <input type="date" id="disabledTextInput" class="form-control" placeholder="Masukkan Tanggal Kelahiran">
                                    </div>
                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>...</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Alamat Lengkap</label>
                                        <textarea type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Alamat Lengkap"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Usia</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Usia">
                                    </div>
                                    <div class="mb-2">
                                        <label for="disabledSelect" class="form-label">Golongan Darah</label>
                                        <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                A
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                B
                                            </label>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right btn-md">Simpan</button>
                                </fieldset>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection