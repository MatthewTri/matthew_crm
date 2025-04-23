@extends('base.base')

@section('container')



<div class="max-w-7xl mx-auto mt-10">

    
    <div class="flex justify-between items-center my-9">
        <h2 class="text-2xl font-bold text-gray-800" style="font-size: 35px;">Data Calon Customer (Leads)</h2>
        <a href="/leads/create" class="bg-blue-600 text-white font-bold px-4 py-2 rounded-md hover:bg-blue-700 transition">
            Tambahkan Lead Baru
        </a>
    </div>

    @foreach ([
    'Pending' => $pendingLeads,
    'Approved' => $approvedLeads,
    'Rejected' => $rejectedLeads,
] as $status => $leads)
    <div class="overflow-x-auto bg-white shadow-md rounded-lg border border-gray-200 mb-10">
        <h2 class="text-lg font-bold px-6 py-4 border-b bg-gray-50 text-gray-700">
            Status: {{ $status }}
        </h2>
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">#</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Nama</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Kontak</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Perusahaan</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Sales Person</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Paket Layanan</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($leads as $lead)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4" style="padding-top: 20px; padding-bottom: 20px;">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900" style="padding-top: 20px; padding-bottom: 20px;">{{ $lead->name }}</td>
                        <td class="px-6 py-4 text-gray-700">{{ $lead->contact }}</td>
                        <td class="px-6 py-4 text-gray-700">{{ $lead->company ?? '-' }}</td>
                        <td class="px-6 py-4 text-gray-700">{{ $lead->user->name }}</td>
                        <td class="px-6 py-4 text-gray-700">{{ $lead->product->name }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('leads.show', $lead->id) }}" class="my-link">Lihat Detail</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center px-6 py-4 text-gray-500">Tidak ada data {{ strtolower($status) }}.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endforeach


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
