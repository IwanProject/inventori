@extends('layouts.main')

@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header ">
                                Edit Data Barang
                            </div>
                            <div class="card-body">
                                <form action="/barang/{{ $barang->id }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="row">

                                        <div class="form-group mb-4">
                                            <label for="kode_barang" class="form-label">Kode Barang</label>
                                            <input type="text" class="form-control" name="kode_barang" id="kode_barang"
                                                value="{{ $barang->kode_barang }}">
                                        </div>


                                        <div class="form-group mb-4">
                                            <label for="nama_barang" class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang" id="nama_barang"
                                                value="{{ $barang->nama_barang }}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <input type="text" class="form-control" name="kategori" id="kategori"
                                                value="{{ $barang->kategori }}">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="satuan" class="form-label">Satuan</label>
                                            <input type="text" class="form-control" name="satuan" id="satuan"
                                                value="{{ $barang->satuan }}">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="text" class="form-control" name="harga" id="harga"
                                                value="{{ $barang->harga }}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="stok" class="form-label">Stok</label>
                                            <input type="text" class="form-control" name="stok" id="stok"
                                                value="{{ $barang->stok }}">
                                        </div>

                                        <button type="submit" class="btn btn-success"><i
                                                class="material-icons">edit</i>Update</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
