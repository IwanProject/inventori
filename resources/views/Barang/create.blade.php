@extends('layouts.main')

@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header ">
                                Tambah Data Barang
                            </div>
                            <div class="card-body">
                                <form action="/barang" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="form-group mb-4">
                                            <label for="kode_barang" class="form-label">Kode Barang</label>
                                            <input type="text" class="form-control" name="kode_barang" id="kode_barang">
                                        </div>


                                        <div class="form-group mb-4">
                                            <label for="nama_barang" class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <input type="text" class="form-control" name="kategori" id="kategori">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="satuan" class="form-label">Satuan</label>
                                            <input type="text" class="form-control" name="satuan" id="satuan">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="text" class="form-control" name="harga" id="harga">
                                        </div>


                                        <div class="form-group mb-4">
                                            <label for="stok" class="form-label">Stok</label>
                                            <input type="text" class="form-control" name="stok" id="stok">
                                        </div>


                                        <button type="submit" class="btn btn-primary"><i
                                                class="material-icons">save</i>Simpan</button>

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
