<!-- resources/views/edit-kategori.blade.php -->

@extends('admin')

@section('content')
    <div class="p-4 mt-12 sm:ml-64">
        <div class="mt-4 p-4 relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2 class="text-2xl font-semibold mb-4">Kategori Surat >> Edit</h2>
            <h3 class="mt-1 text-sm font-normal text-gray-500"> Edit data kategori. <h3>
                    <h3 class="mt-1 text-sm font-normal text-gray-500"> Jika sudah selesai klik Update Kategori. <h3>
                    <p></p>
            <div class="pb-4 bg-white">
                <!-- Your search input here (if needed) -->
            </div>
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="id" class="bg-slate-400 block text-sm font-medium text-gray-700">ID</label>
                    <input type="text" id="disabled-input" aria-label="disabled input"
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                        value="{{ $kategori->id }}" disabled>
                </div>
                <div class="mb-4">
                    <label for="nama_kategori" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori"
                        class="mt-1 p-2 block w-full border rounded-md bg-gray-50 text-gray-800"
                        value="{{ $kategori->nama_kategori }}">
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi"
                        class="mt-1 p-2 block w-full border rounded-md bg-gray-50 text-gray-800">{{ $kategori->deskripsi }}</textarea>
                </div>

                <div class="mt-4">
                    <button type="submit"
                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update
                        Kategori</button>

                    <a href="{{ route('kategori.index') }}"
                    class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
