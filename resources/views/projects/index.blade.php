@extends('base.base')

@section('container')

<div class="mt-10 mb-5 text-start">
    <h1 class="text-4xl text-gray-800 tracking-tight" style="font-size: 35px; font-weight: bold;">Daftar Project</h1>
</div>


<div class="max-w-7xl mx-auto mt-10 space-y-10">
    @foreach (['pending' => 'Pending Lead', 'approved' => 'Approved Lead', 'rejected' => 'Rejected Lead'] as $statusKey => $statusLabel)
        <div class="overflow-x-auto bg-white shadow-md rounded-lg border border-gray-200">
            <h2 class="text-lg font-bold px-6 py-4 border-b bg-gray-50 text-gray-700">{{ $statusLabel }}</h2>
            <table class="min-w-full divide-y divide-gray-200 text-sm table-fixed border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold text-gray-700">#</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-700">Nama Lead</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-700">Status</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-700">Sales Person</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-700">Di-approve Oleh</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-700"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($projects->filter(fn($p) => $p->status === $statusKey) as $project)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $project->lead->name ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-700 capitalize">
                                @if ($project->status === 'approved')
                                    <span class="inline-flex items-center space-x-1 text-green-600 font-medium">
                                        ✅ <span>Approved</span>
                                    </span>
                                @elseif ($project->status === 'rejected')
                                    <span class="inline-flex items-center space-x-1 text-red-600 font-medium">
                                        ❌ <span>Rejected</span>
                                    </span>
                                @else
                                    <span>{{ $project->status }}</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-700">{{ $project->lead->user->name ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $project->approvedBy->name ?? '-' }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('projects.show', $project->id) }}" class="my-link">Lihat Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center px-6 py-4 text-gray-500">Tidak ada project dengan status ini.</td>
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
