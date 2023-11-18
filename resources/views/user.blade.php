@extends('admin')

@section('content')
<div class="p-4 mt-12 sm:ml-64 main-content-container">
    <div class="mt-4 p-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">DATA MAHASISWA</h2>
            @foreach ($mahasiswa as $mhs)
                <div class="bg-white p-4 shadow-md rounded-md flex bg-rose-100 items-center mb-4">
                    <div class="mr-4">
                        <!-- Gambar -->
                        <img src="{{ asset('/gambar/rina.png') }}" alt="User Photo" class="w-20 h-50 object-cover">
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold mb-2">Aplikasi ini dibuat oleh:</h2>
                        <p class="text-gray-600 mb-1">Nama: {{ $mhs->nama }}</p>
                        <p class="text-gray-600 mb-1">Prodi: {{ $mhs->prodi }}</p>
                        <p class="text-gray-600 mb-1">NIM: {{ $mhs->nim }}</p>
                        <p class="text-gray-600 mb-1">Tanggal: {{ $mhs->tanggal }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

