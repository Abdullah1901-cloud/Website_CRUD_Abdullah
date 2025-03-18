@extends('layouts.main')

@section('header')
<div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Customer</li>
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
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$customer -> nama_customer}}</td>
                                <td>{{$customer -> alamat}}</td>
                                <td>{{$customer -> telp}}</td>
                                <td>{{$customer -> fax}}</td>
                                <td>{{$customer -> email}}</td>
                                <td>
                                <a href="" class="btn btn-success btn-sm mx-1">Edit</a>
                                    <form action="" method="POST" class="d-inline">
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
                            <a href="" class="btn btn-warning px-4 py-2">Tambah</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
