@extends("layouts.main")


@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>Data Barang</h1>
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

                                <a href="<?= url('barang/create') ?>" type="button" class="btn btn-primary"><i
                                        class="material-icons">add</i>Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="datatable1" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Stok</th>

                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($barang as $s)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $s->kode_barang }}</td>
                                                <td>{{ $s->nama_barang }}</td>
                                                <td>{{ $s->kategori }}</td>
                                                <td>{{ $s->satuan }}</td>
                                                <td>{{ $s->harga }}</td>
                                                <td>
                                                    {{ $s->stok - $s->terjual }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="/barang/{{ $s->id }}/edit"
                                                                class="badge rounded-pill badge-success"><i
                                                                    class="material-icons">edit</i></a>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <form action="/barang/{{ $s->id }}" method="post">
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
