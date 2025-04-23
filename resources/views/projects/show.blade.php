@extends('base.base')

@section('container')

<div class="max-w-3xl mx-auto mt-12 bg-white p-10 rounded-2xl shadow-2xl border border-gray-100">
    <h2 class="text-3xl text-gray-800 pb-10 tracking-tight" style="font-size: 20px; font-weight:bold">Detail Project</h2>

    <div class="space-y-4 text-base leading-relaxed text-gray-700">
        <p><span class="font-semibold text-gray-900">👤 Nama Lead:</span> {{ $project->lead->name ?? '-' }}</p>
        <p><span class="font-semibold text-gray-900">📦 Produk:</span> {{ $project->lead->product->name ?? '-' }}</p>
        <p><span class="font-semibold text-gray-900">📞 Kontak:</span> {{ $project->lead->contact ?? '-' }}</p>
        <p><span class="font-semibold text-gray-900">🏢 Perusahaan:</span> {{ $project->lead->company ?? '-' }}</p>
        <p><span class="font-semibold text-gray-900">📝 Catatan Lead:</span> {{ $project->lead->notes ?? '-' }}</p>
        <p>
            <span class="font-semibold text-gray-900">📊 Status:</span> 
            <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold 
                {{ $project->status === 'approved' ? 'bg-green-100 text-green-700' : ($project->status === 'rejected' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">
                {{ ucfirst($project->status) }}
            </span>
        </p>
    </div>

    <form action="{{ route('projects.update', $project->id) }}" method="POST" class="mt-10">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">🗒️ Catatan Manager</label>
            <textarea name="notes" id="notes" rows="4"
                class="w-full border border-gray-300 rounded-lg p-4 text-sm text-gray-700 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none resize-none @if ($project->status !== 'pending') bg-gray-100 @endif"
                placeholder="Tambahkan catatan jika diperlukan..."
                @if ($project->status !== 'pending') readonly @endif>{{ old('notes', $project->notes) }}</textarea>

        </div>

        <input type="hidden" name="status" id="statusInput">

        @if ($project->status === 'pending')
                <button type="button" onclick="confirmAction(event, 'approved')" class="btn-approve">
                    Setujui
                </button>
                <button type="button" onclick="confirmAction(event, 'rejected')" class="btn-reject">
                    Tolak
                </button>
            
            @else
                <span class="inline-block px-6 py-3 rounded-md text-sm font-bold text-white {{ $project->status === 'approved' ? 'bg-green-600' : 'bg-red-600' }}">
                    {{ ucfirst($project->status) }}
                </span>
            @endif
    </form>
</div>

<script>
    function confirmAction(event, status) {
        let title = status === 'approved' ? 'Setujui Project?' : 'Tolak Project?';
        let text = status === 'approved' ? 'Project akan disetujui.' : 'Project akan ditolak.';

        Swal.fire({
            title: title,
            text: text,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, lanjutkan',
            cancelButtonText: 'Batal',
            customClass: {
                confirmButton: status === 'approved' ? 'btn-swal-confirm' : 'btn-swal-reject',
                cancelButton: 'btn-swal-cancel'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('statusInput').value = status;
                event.target.closest('form').submit();
            }
        });
    }

</script>

@endsection
