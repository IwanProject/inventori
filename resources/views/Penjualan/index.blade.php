@extends("layouts.main")


@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>Data Penjualan</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header ">

                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                <a href="<?= url('penjualan/create') ?>" type="button" class="btn btn-primary"><i
                                        class="material-icons">add</i>Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="datatable1" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Terjual</th>
                                            <th>Total Harga</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penjualan as $p)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $p->barang->nama_barang }}</td>
                                                <td>{{ $p->barang->kategori }}</td>
                                                <td>{{ $p->barang->satuan }}</td>
                                                <td>{{ $p->barang->harga }}</td>
                                                <td>{{ $p->terjual }}</td>
                                                <td>Rp. {{ number_format($p->terjual * $p->barang->harga) }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="/penjualan/{{ $p->id }}/edit"
                                                                class="badge rounded-pill badge-success"><i
                                                                    class="material-icons">edit</i></a>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <form action="/penjualan/{{ $p->id }}" method="post">
                                                                @method('delete')
                                                                @csrf

                                                                <button onclick="return confirm('Are you sure?')"
                                                                    class="badge rounded-pill badge-danger"><i
                                                                        class="material-icons">delete</i></button>

                                                            </form>
                                                        </div>

                                                    </div>




                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
