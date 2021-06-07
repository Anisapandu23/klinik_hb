@extends('templates.admin')

<head>
    <title>REKAM MEDIK | KLINIK PRATAMA HB</title>
</head>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tambah Rekam Medik</h4>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <form>
                                <fieldset enable>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">No. Rekam Medis</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Nama Pasien</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Nomor HP</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Usia</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Nama Dokter</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Jenis Pemeriksaan</label>
                                        <select id="disabledSelect" class="form-control">
                                            <option>...</option>
                                            <option>Pasien Umum</option>
                                            <option>Pasien Civitas PHB</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Keluhan</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Tindakan</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Resep Obat</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right btn-md">Simpan</button>
                    <button class="btn btn-warning float-right btn-md mr-2" type="button"
                            onclick="history.back()">Batal</button>
                    </fieldset>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection