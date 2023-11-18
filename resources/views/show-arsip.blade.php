<!-- resources/views/arsip/show.blade.php -->

@extends('admin')  <!-- Assuming 'admin' is your layout name -->

@section('content')
    <div class="p-4 mt-10 sm:ml-64">
        <div class="mt-4 p-4 relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2 class="text-2xl font-semibold mb-4">Detail Arsip Surat</h2>

            <!-- Display detailed information about the archive -->
            <div class="mb-4">
                <strong>Nomor Surat:</strong> {{ $arsip->nomor_surat }}
            </div>

            <div class="mb-4">
                <strong>Kategori:</strong> {{ $arsip->kategori }}
            </div>

            <div class="mb-4">
                <strong>Judul:</strong> {{ $arsip->judul }}
            </div>

            <div class="mb-4">
                <strong>Waktu Pengarsipan:</strong> {{ $arsip->waktu_pengarsipan }}
            </div>

            <!-- Add other details as needed -->

            <!-- Display PDF file -->
            <div class="mb-4">
                <strong>File Surat:</strong>
                <a href="{{ asset('storage/' . $arsip->file_surat) }}" target="_blank">View File</a>
                <embed src="{{ Storage::url($arsip->file_surat) }}" type="application/pdf" width="100%" height="600px">
                {{-- <embed src="{{ asset('storage/' . $arsip->file_surat) }}" type="application/pdf" width="100%" height="600px"> --}}
            </div>
            <div class="mt-4 flex items-center space-x-4">
                <a href="{{ route('arsip.index') }}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Kembali
                </a>

                <a href="{{ route('arsip.unduh', $arsip->id) }}" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 shadow-lg shadow-pink-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Unduh
                </a>
                <a href="{{ route('arsip.edit', $arsip->id) }}" class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Edit File
                </a>
            </div>
        </div>
    </div>
@endsection
