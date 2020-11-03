@extends('layout/main')
@section('title', 'Menu')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Menu</h1>
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
                            Detail Produk :
                        <hr>
                    </div>
                    <div class="col">
                        Harga Rp. {{$list->harga}} <br> <br>
                        <a href="{{url ('menu',$list->id)}}" class="btn btn-outline-primary btn-sm"> Beli </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection