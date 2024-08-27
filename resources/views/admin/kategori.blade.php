@extends('layouts.app')

@section('title', 'Kategori')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            @auth
                <h1>Hi saya {{auth()->user()->name}}</h1>
            @endauth

            @guest
                <h1>Login dulu bang</h1>
            @endguest
        </div>
        <div class="col-6">
            @yield('form-isi')
        </div>
        <div class="col-12 mt-4 p-4 border">
            <h3>Kategori</h3>
            <table class="table table-striped text-center">
                <thead class="">
                    <tr>
                        <th>Kategori</th>
                        <th>Unique Id</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $itemKategori)
                        <tr>
                            <td>{{$itemKategori['namaKategori']}}</td>
                            <td>{{$itemKategori['uniqueID']}}</td>
                            <td>{{$itemKategori['created_at']}}</td>
                            <td>{{$itemKategori['updated_at']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12 mt-4 p-4 border">
            <h3>Produk</h3>
            <table class="table table-striped text-center">
                <thead class="">
                    <tr>
                        <th>Nama Produk</th>
                        <th>Kategori Id</th>
                        <th>Harga</th>
                        <th>Harga Diskon</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <td>{{$item['namaProduk']}}</td>
                            <td>{{$item['uniqueID_kategori']}}</td>
                            <td>{{$item['price']}}</td>
                            <td>{{$item['hargaSetelahDiskon']}}</td>
                            <td>{{$item['created_at']}}</td>
                            <td>{{$item['updated_at']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12 mt-4 p-4 border">
            <h3>Produk Berdasarkan Kategori</h3>
            <table class="table table-striped text-center">
                <thead class="">
                    <tr>
                        <th>Kategori</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Harga Diskon</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($joinedData as $item)
                        <tr>
                            <td>{{ $item['namaKategori'] }}</td>
                            <td>{{ $item['namaProduk'] }}</td>
                            <td>{{ $item['price'] }}</td>
                            <td>{{$item['hargaSetelahDiskon']}}</td>
                            <td>{{ $item['created_at'] }}</td>
                            <td>{{ $item['updated_at'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection