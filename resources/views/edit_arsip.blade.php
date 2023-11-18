@extends('admin')

@section('content')
    <div class="p-4 mt-12 sm:ml-64">
        <div class="mt-4 p-4 relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2 class="text-2xl font-semibold mb-4">Arsip Surat >> Edit</h2>
            <h3 class="mt-1 text-sm font-normal text-gray-500"> Edit data arsip surat. <h3>
                    <h3 class="mt-1 text-sm font-normal text-gray-500"> Jika sudah selesai klik Simpan. <h3>
                    <p></p>
            <div class="pb-4 bg-white">
                <!-- Your search input here (if needed) -->
            </div>
            <form action="{{ route('arsip.update', $arsip->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nomor_surat" class="block text-sm font-medium text-gray-700">Nomor Surat</label>
                    <input type="text" name="nomor_surat" id="nomor_surat" class="mt-1 p-2 w-full border rounded-md" value="{{ $arsip->nomor_surat }}">
                </div>

                <div class="mb-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select name="kategori" id="kategori" class="mt-1 p-2 w-full border rounded-md">
                        <!-- Loop through categories data to generate options -->
                        @foreach ($categories as $category)
                            <option value="{{ $category->nama_kategori }}" {{ $arsip->kategori == $category->nama_kategori ? 'selected' : '' }}>
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul" class="mt-1 p-2 w-full border rounded-md" value="{{ $arsip->judul }}">
                </div>

                <div class="mb-4">
                    <label for="file_surat" class="block text-sm font-medium text-gray-700">File Surat (PDF)</label>
                    <input type="file" name="file_surat" id="file_surat" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-4">
                    <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Simpan
                    </button>
                    <a href="{{ route('arsip.index') }}"
                    class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
