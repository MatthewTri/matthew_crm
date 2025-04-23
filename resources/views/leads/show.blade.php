@extends('base.base')

@section('container')

<div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg border-t-4 border-blue-500">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">Detail Lead</h2>

    <div class="bg-gray-50 p-6 rounded-lg shadow-md mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Paket yang dipilih</h3>
        <p class="text-lg font-medium text-blue-600">{{ $lead->product->name }}</p>
    </div>

    <div class="space-y-4 text-gray-700">
        <p><strong class="font-semibold text-gray-900">Nama:</strong> {{ $lead->name }}</p>
        <p><strong class="font-semibold text-gray-900">Kontak:</strong> {{ $lead->contact }}</p>
        <p><strong class="font-semibold text-gray-900">Perusahaan:</strong> {{ $lead->company ?? '-' }}</p>
        <p><strong class="font-semibold text-gray-900">Catatan Dari Lead:</strong> {{ $lead->notes ?? '-' }}</p>
    </div>

    <!-- Menampilkan catatan dari project jika ada -->
    <div class="mt-6 bg-gray-100 p-4 rounded-lg shadow-md">
        <p class="font-semibold text-gray-900">Catatan Project (Manager):</p>

        {{-- @if ($lead->project)
            
        @endif --}}
        <p class="text-gray-700">{{ $projectNotes }}</p>
    </div>

    <div class="mt-8 text-center">
        <a href="{{ route('leads.index') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md font-semibold transition-colors duration-300 hover:bg-blue-700 hover:shadow-lg transform hover:scale-105">
            Kembali ke Daftar Lead
        </a>
    </div>
</div>

@endsection
