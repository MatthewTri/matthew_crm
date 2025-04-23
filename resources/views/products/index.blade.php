@extends('base.base')

@section('container')

<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="font-bold text-black" style="font-size: 32px; font-weight: bold;">Daftar Produk Layanan Internet</h1>
        @can('manager')
        <a href="{{ route('products.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition" style="font-weight: bold;">
            Tambah Produk
        </a>
        @endcan
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($products as $product)
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300 flex flex-col justify-between h-full">
                <div>
                    <!-- ID di kiri atas -->
                    <p class="text-sm text-gray-500 italic mb-2">ID Product: {{ $product->id }}</p>
    
                    <!-- Nama Produk -->
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h2>
                    
                    <!-- Deskripsi -->
                    <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                    
                    <!-- Harga -->
                    <p class="text-lg font-bold text-blue-600 mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    
                    <!-- Tombol -->
                    @can('manager')
                    <div class="flex justify-between">
                        <a href="{{ route('products.edit', $product->id) }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-bold">
                            Edit Detail
                        </a>
                        
                        <form id="deleteForm-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST"
                            class="inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="button" 
                                  onclick="confirmDelete({{ $product->id }})"
                                  class="btn-end-subscription" title="Hapus Produk">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3m-4 0h14" />
                              </svg>
                          </button>
                      </form>
                      
                    </div>
                    @endcan
                </div>
            </div>
        @endforeach
    </div>
</div>


@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        });
    </script>
@endif


{{-- Confirm delete --}}
<script>
    function confirmDelete(productId) {
    Swal.fire({
        title: 'Hapus Produk?',
        text: "Produk dan data terkait dengan produk ini akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Ya, hapus',
        cancelButtonText: 'Batal',
        customClass: {
            confirmButton: 'my-confirm-button',  // Menambahkan class custom untuk tombol konfirmasi
            cancelButton: 'my-cancel-button'    // Menambahkan class custom untuk tombol batal
        }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm-' + productId).submit();  // Submit form yang sesuai dengan ID produk
        }
    });
}

</script>

@endsection