@extends('base.base')

@section('container')

<div class="flex items-center justify-between mt-10 mb-5">
    <h1 class="text-3xl font-bold text-gray-800 mt-30 mb-10" style="font-size: 35px; font-weight:bold; margin-top: 30px; margin-bottom: 20px;">Daftar Customer Beserta Layanannya</h1>
</div>
<div class="overflow-x-auto bg-white shadow-md rounded-lg border border-gray-200 ">
    <h2 class="text-lg font-bold px-6 py-4 border-b bg-gray-50 text-gray-700">Customer's Subscription</h2>

    <table class="min-w-full divide-y divide-gray-200 text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">#</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Customer</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Product</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Start Date</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">End Date</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse ($subscriptions as $subscription)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $subscription->customer->name }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $subscription->product->name }}</td>
                    <td class="px-6 py-4 text-gray-700">
                        {{ $subscription->start_date ? \Carbon\Carbon::parse($subscription->start_date)->translatedFormat('j F Y') : '-' }}
                    </td>
                    <td class="px-6 py-4 text-gray-700">
                        {{ $subscription->end_date ? \Carbon\Carbon::parse($subscription->end_date)->translatedFormat('j F Y') : '-' }}
                    </td>
                    
                    <td class="px-6 py-4">
                        <a href="{{ route('subscriptions.show', $subscription->id) }}" class="my-link">View Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center px-6 py-4 text-gray-500">Tidak ada data subscription.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
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

@endsection
