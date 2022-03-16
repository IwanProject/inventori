@extends('layouts.main')

@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header ">
                                Edit Data Penjualan
                            </div>
                            <div class="card-body">
                                <form action="/penjualan/{{ $penjualan->id }}" method="post">
                                    @method("put")
                                    @csrf
                                    <div class="row">
                                        <div class="form-group mb-4">
                                            <label for="kode_penjualan" class="form-label">Kode Penjualan</label>
                                            <input type="text" class="form-control" name="kode_penjualan"
                                                id="kode_penjualan" value="{{ $penjualan->kode_penjualan }}">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="barang_id" class="form-label">Nama Barang</label>
                                            <select id="barang_id" name="barang_id" class="form-select">
                                                @foreach ($barang as $b)
                                                    @if ($penjualan->barang_id === $b->id)
                                                        <option value="{{ $b->id }}" selected>
                                                            {{ $b->nama_barang }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                                                    @endif
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="terjual" class="form-label">Jumlah Terjual</label>
                                            <input type="text" class="form-control" name="terjual" id="terjual"
                                                value="{{ $penjualan->terjual }}">
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
