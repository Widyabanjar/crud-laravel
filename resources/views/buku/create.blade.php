@extends('layout.dashboard')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Tambah Data Buku</h1>
            <hr class="my-4">     

            <form action="/buku" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Buku" value="{{ old('judul') }}">
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" name="isbn" placeholder="isbn Buku" value="{{ old('isbn') }}">
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" placeholder="pengarang Buku" value="{{ old('pengarang') }}">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="penerbit Buku" value="{{ old('penerbit') }}">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="text" class="form-control" name="tahun_terbit" placeholder="tahun_terbit Buku" value="{{ old('tahun_terbit') }}">
                </div>
                <div class="form-group">
                    <label for="jumlah_buku">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah_buku" placeholder="jumlah_buku Buku" value="{{ old('jumlah_buku') }}">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi </label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Buku" value="{{ old('deskripsi') }}">
                </div>
                <div class="form-group">
                    <label for="lokasi">lokasi Rak Buku</label>
                    <select class="form-control" name="lokasi" required="">
                                                <option value=""></option>
                                                <option>Rak 1</option>
                                                <option>Rak 2</option>
                                                <option>Rak 3</option>
                                            </select>
                </div>
                <div class="form-group">
                    <label for="cover">Cover Buku</label>
                    <input type="text" class="form-control" name="cover" placeholder="cover Buku" value="{{ old('cover') }}">
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection