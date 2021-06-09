@extends('templates.admin')

<head>
    <title>DETAIL | KLINIK PRATAMA HB</title>
</head>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center"> Detail Data Pasien</h4>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            @csrf
                            {{method_field('patch')}}
                            <fieldset disabled>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->kategori_pasien}}">
                                    </div>
                                </div>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">No. Identitas</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->no_identitas}}">
                                    </div>
                                </div>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->nama}}">
                                    </div>
                                </div>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat / Tanggal Lahir</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->tempat_lahir}}">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->tanggal_lahir}}">
                                    </div>
                                </div>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->jenis_kelamin}}">
                                    </div>
                                </div>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <textarea type="email" class="form-control" id="inputEmail3" value=""> {{$data->alamat}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Usia</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->usia}}">
                                    </div>
                                </div>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->golongan_darah}}">
                                    </div>
                                </div>
                                <div class="row mb-3 col-12">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">No. Hp</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" value="{{$data->no_hp }}">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="text-center">
                                <button style="height:40px;width:100px" class="btn btn-info btn-md mr-2 px-4" type="button" onclick="history.back()">Keluar</button>
                                <button style="height:40px;width:100px" href="" type="submit" class="btn btn-warning btn-md px-4">Edit</button>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection