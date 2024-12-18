@extends('layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tambah Data
            </div>
            <div class="card-body">


                <form action="{{ route('index.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Kolom kiri -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama :</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="type">Jenis:</label>
                                <input type="text" class="form-control @error('type') is-invalid @enderror"
                                    id="type" name="type" value="{{ old('type') }}">
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi:</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                            </div>

                        </div>

                        <!-- Kolom kanan -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="selling_price">Harga Jual:</label>
                                <input type="text" class="form-control @error('selling_price') is-invalid @enderror"
                                    id="selling_price" name="selling_price" value="{{ old('selling_price') }}">
                                @error('selling_price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="purchase_price">Harga Beli:</label>
                                <input type="text" class="form-control @error('purchase_price') is-invalid @enderror"
                                    id="purchase_price" name="purchase_price" value="{{ old('purchase_price') }}">
                                @error('purchase_price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Foto Produk:</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>

                    <!-- Tombol submit di kanan -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
