@extends('templates.admin')

<head>
    <title>PASIEN | KLINIK PRATAMA HB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Data Pasien</h4>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <form>
                            <div class="input-group no-border col-6 float-right">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('pasien.create')}}" type="button" class="btn btn-info">Tambah Data</a>
                    </div>
                    <div class="table col-12">
                        <table class="table col-12">
                            <thead class=" text-primary">
                                <th class="checkbox-column text-center"> No.</th>
                                <th>Nama</th>
                                <th>Kategori Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>No.Hp</th>
                                <th class="text-right">Action</th>
                            </thead>
                            @foreach($datas as $data)
                            <tr>
                                <td class="checkbox-column text-center"> {{$loop->iteration}}.</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->kategori_pasien}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->no_hp}}</td>
                                <td>
                                <!-- <button style="height:40px;width:100px" href="" type="submit" class="btn btn-warning btn-md px-4">Edit</button> -->
                                    <div class="icon-container">
                                        <a href="{{route('pasien.show',$data->id)}}" class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <span class="icon-name">
                                                Lihat</span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                <!-- <button style="height:40px;width:100px" href="" type="submit" class="btn btn-warning btn-md px-4">Edit</button> -->
                                    <div class="icon-container">
                                        <a href="{{route('pasien.destroy',$data->id)}}" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini ?')" class="btn btn-danger btn-sm ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                            <span class="icon-name">
                                                Hapus</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection