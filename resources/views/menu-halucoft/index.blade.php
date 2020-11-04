@extends('layout/main')
@section('title', 'Menu')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Menu</h1>
            <a href="{{url ('menu/create')}}" class="btn btn-outline-success">Tambah</a>
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show mt-3">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <hr>
            @foreach ($menu as $list)
            <div class="container">
                <div class="row">
                    <div class="col">
                        {{$list->gambar}}
                    </div>
                    <div class="col-6">
                        <h6>
                            Nama Produk : {{$list->nama}}
                        </h6>
                        Detail Produk : {{$list->detail}}
                        <hr>
                    </div>
                    <div class="col">
                        Harga Rp. {{$list->harga}} <br> <br>
                        <a href="{{url('menu',$list->id)}}" class="btn btn-outline-primary btn-sm"> Edit </a>
                        <form action="{{url('menu',$list->id)}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-outline-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection