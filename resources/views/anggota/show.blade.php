@extends('layout.dashboard')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Detail Data anggota</h1>
            <a href="{{route('anggota.index')}}" class="btn btn-info pull-right my-2">Back<<</a>
            <hr class="my-4">     
            <form action="{{ route('anggota.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                <div class="form-group">
                    <label for="user_id">User Id</label>
                    <input type="text" class="form-control" name="user_id" placeholder="user_id anggota" value=" {{ $data->user_id }} " readonly="true">
                </div>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control" name="npm" placeholder="npm anggota" value="{{  $data->npm }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama anggota" value="{{  $data->nama }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir anggota" value="{{ $data->tempat_lahir }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tgl_lahir" placeholder="tgl_lahir anggota" value="{{ $data->tgl_lahir }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jk" placeholder="jk anggota" value="{{ $data->jk }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" class="form-control" name="prodi" placeholder="prodi anggota" value="{{ $data->prodi }}" readonly="true">
                </div>
                
            </form>
        </div>
    </div>
@endsection