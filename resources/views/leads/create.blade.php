@extends('base.base')

@section('container')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg mt-8 shadow-lg border border-gray-200">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Tambah Lead Baru</h2>

    <form action="{{ route('leads.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Hidden: User ID dari user yang sedang login -->
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <!-- Nama -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama <span class="text-red-500">*</span></label>
            <input type="text" name="name" id="name" required
                class="mt-1 block w-full rounded-md border border-gray-300 py-3 px-4 shadow-sm focus:ring-blue-500 focus:border-blue-500" style="padding-top: 10px; padding-bottom: 10px;" 
                value="{{ old('name') }}" autofocus>
            @error('name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kontak -->
        <div>
            <label for="contact" class="block text-sm font-medium text-gray-700">Nomor Telpon <span class="text-red-500">*</span></label>
            <input type="text" name="contact" id="contact" required
                class="mt-1 block w-full rounded-md border border-gray-300 py-3 px-4 shadow-sm focus:ring-blue-500 focus:border-blue-500" style="padding-top: 10px; padding-bottom: 10px;" 
                value="{{ old('contact') }}">
            @error('contact')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Pilih produk --}}
        <div>
            <label for="product_id" class="block text-sm font-medium text-gray-700">Pilih Produk <span class="text-red-500">*</span></label>
            <select name="product_id" id="product_id" required
                class="mt-1 block w-full rounded-md border border-gray-300 py-3 px-4 shadow-sm focus:ring-blue-500 focus:border-blue-500" style="padding-top: 10px; padding-bottom: 10px;">
                <option value="">-- Pilih Produk --</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
            @error('product_id')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Perusahaan -->
        <div>
            <label for="company" class="block text-sm font-medium text-gray-700">Perusahaan (Opsional)</label>
            <input type="text" name="company" id="company"
                class="mt-1 block w-full rounded-md border border-gray-300 py-3 px-4 shadow-sm focus:ring-blue-500 focus:border-blue-500" style="padding-top: 10px; padding-bottom: 10px;" 
                value="{{ old('company') }}">
            @error('company')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Catatan -->
        <div>
            <label for="notes" class="block text-sm font-medium text-gray-700">Catatan</label>
            <textarea name="notes" id="notes" rows="4"
                class="mt-1 block w-full rounded-md border border-gray-300 py-3 px-4 shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('notes') }}</textarea>
            @error('notes')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>
        

        <!-- Tombol Simpan -->
        <div class="text-right pt-4">
            <button type="submit"
                style="background-color: #2563eb; color: white; font-weight: 600; padding: 0.75rem 1.5rem; border-radius: 0.375rem; transition: background-color 0.2s ease;">
                Simpan Lead
            </button>
        </div>
        
    </form>
</div>



@endsection