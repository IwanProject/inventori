@extends('layouts.main')

@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header ">
                                Tambah Data Penjualan
                            </div>
                            <div class="card-body">
                                <form action="/penjualan" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group mb-4">
                                            <label for="kode_penjualan" class="form-label">Kode Penjualan</label>
                                            <input type="text" class="form-control" name="kode_penjualan"
                                                id="kode_penjualan">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="barang_id" class="form-label">Nama Barang</label>
                                            <select id="barang_id" name="barang_id" class="form-select">
                                                @foreach ($barang as $b)
                                                    <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="terjual" class="form-label">Jumlah Terjual</label>
                                            <input type="text" class="form-control" name="terjual" id="terjual">
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
