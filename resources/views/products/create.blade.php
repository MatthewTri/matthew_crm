@extends('base.base')

@section('container')
<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Tambah Produk Baru</h1>

    <form action="{{ route('products.store') }}" method="POST" id="product-form">
        @csrf

        <!-- Nama Produk -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Produk</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
            <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-semibold mb-2">Harga</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn-simpan">
            Simpan Produk
        </button>
    </form>
</div>
@endsection
