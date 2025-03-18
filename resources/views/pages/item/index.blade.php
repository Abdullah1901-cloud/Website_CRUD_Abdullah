@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Item</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Item</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>UOM</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_item }}</td>
                            <td>{{ $item->uom }}</td>
                            <td>{{ number_format($item->harga_beli, 0, ',', '.') }}</td>
                            <td>{{ number_format($item->harga_jual, 0, ',', '.') }}</td>
                            <td>
                                <a href="/item/edit/{{ $item->id}}" class="btn btn-success btn-sm mx-1">Edit</a>
                                <form action="/item/{{ $item->id}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-3">
                    <a href="/item/create" class="btn btn-warning px-4 py-2">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
