@extends('templates.admin')

<head>
    <title>OBAT | KLINIK PRATAMA HB</title>
</head>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tambah Data Obat</h4>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <form>
                                <fieldset enable>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Kode Obat</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Kode Obat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Nama Obat</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Nama Obat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Jenis Obat</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Jenis Obat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Tanggal Kadaluwarsa Obat</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Tanggal">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Harga Obat</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Harga Obat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">harga Jual Obat</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Harga Jual Obat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Jumlah Ketersediaan</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Jumlah Ketersediaan">
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