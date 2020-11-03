@extends('layout/main')
@section('title', 'Pemesanan')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Pemesanan</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$menu->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Harga Rp. {{$menu->harga}}</h6>
                    <p class="card-text">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary" type="button">+</button>
                            </div>
                            <input type="text" style="text-align: center;" class="form-control" placeholder="Jumlah">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="button">-</button>
                            </div>
                        </div>
                    </p>
                    <a href="#" class="card-link">Pesan</a>
                    <a href="/menu" class="card-link">Batal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection