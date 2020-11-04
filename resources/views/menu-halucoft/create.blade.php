@extends('layout/main')
@section('title', 'Tambah Produk')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Tambah Produk</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{url('/menu')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nama</span>
                            </div>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Produk" name="nama" value="{{old('nama')}}">
                            <div class="invalid-feedback">
                                Data ini tidak boleh kosong!
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Harga</span>
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga (inputan hanya boleh angka saja)" name="harga" value="{{old('harga')}}">
                            <div class="invalid-feedback">
                                Data ini tidak boleh kosong!
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Detail</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Detail Produk" name="detail" value="{{old('detail')}}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Gambar</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" value="{{old('gambar')}}">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success">Save</button>
                        <a href="{{url('menu')}}" class="btn btn-outline-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection