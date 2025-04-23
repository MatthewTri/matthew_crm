@extends('base.base')

@section('container')
<div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl border border-gray-200 p-6 mt-10">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8" style="margin-top : 20px; margin-bottom: 20px; font-size: 30px;">Detail Subscription</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-sm">
        <!-- Left Side - 4 items -->
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
            <span class="block text-gray-500 font-medium mb-1">Customer ID</span>
            <div class="text-lg font-semibold text-gray-800">{{ $subscription->customer->id }}</div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
            <span class="block text-gray-500 font-medium mb-1">Product ID</span>
            <div class="text-lg font-semibold text-gray-800">{{ $subscription->product->id }}</div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
            <span class="block text-gray-500 font-medium mb-1">Customer Name</span>
            <div class="text-lg font-semibold text-gray-800">{{ $subscription->customer->name }}</div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
            <span class="block text-gray-500 font-medium mb-1">Customer Contact</span>
            <div class="text-lg font-semibold text-gray-800">{{ $subscription->customer->contact ?? '-' }}</div>
        </div>

        <!-- Right Side - 4 items -->
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
            <span class="block text-gray-500 font-medium mb-1">Customer Company</span>
            <div class="text-lg font-semibold text-gray-800">{{ $subscription->customer->company ?? '-' }}</div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
            <span class="block text-gray-500 font-medium mb-1">Product Name</span>
            <div class="text-lg font-semibold text-gray-800">{{ $subscription->product->name }}</div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
            <span class="block text-gray-500 font-medium mb-1">Start Date</span>
            <div class="text-lg font-semibold text-gray-800">
                {{ $subscription->start_date ? \Carbon\Carbon::parse($subscription->start_date)->translatedFormat('j F Y') : '-' }}
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
            <span class="block text-gray-500 font-medium mb-1">End Date</span>
            <div class="text-lg font-semibold text-gray-800">
                {{ $subscription->end_date ? \Carbon\Carbon::parse($subscription->end_date)->translatedFormat('j F Y') : '-' }}
            </div>
        </div>
    </div>

    <div class="mt-10 flex justify-between items-center">
        <a href="{{ route('subscriptions.index') }}"
            class="bg-blue-600 text-white font-bold px-4 py-2 rounded-md hover:bg-blue-700 transition">← <span style="margin-left:5px;">Kembali ke daftar</span></a>

        <form id="deleteForm" action="{{ route('customers.destroy', $subscription->customer->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button"
                onclick="confirmDelete()"
                class="btn-end-subscription">
                End Subscription
            </button>
        </form>
    </div>
</div>




<script>
    function confirmDelete() {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Customer & seluruh subscription-nya akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Ya, hapus',
            cancelButtonText: 'Batal',
            customClass: {
                  confirmButton: 'my-confirm-button',  // Menambahkan class custom untuk tombol konfirmasi
                  cancelButton: 'my-cancel-button'   // Menambahkan class custom untuk tombol batal
              }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>



@endsection
