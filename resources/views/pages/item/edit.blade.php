@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Ubah Item</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Item</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
            <form action="/item/{{ $item->id}}" method="POST">
                @csrf
                @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_item" class="form-label">Nama Item</label>
                        <input type="text" name="nama_item" id="nama_item" class="form-control @error('nama_item') is-invalid @enderror" value="{{ old('nama_item', $item->nama_item) }}">
                        @error('nama_item')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="uom" class="form-label">UOM</label>
                        <input type="text" name="uom" id="uom" class="form-control @error('uom') is-invalid @enderror"value="{{ old('uom',$item->uom) }}">
                        @error('uom')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" name="harga_beli" id="harga_beli" class="form-control @error('harga_beli') is-invalid @enderror"value="{{ old('harga_beli',$item->harga_beli) }}">
                        @error('harga_beli')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" name="harga_jual" id="harga_jual" class="form-control @error('harga_jual') is-invalid @enderror"value="{{ old('harga_jual',$item->harga_jual) }}">
                        @error('harga_jual')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="/item" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
</div>
@endsection
