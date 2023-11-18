{{-- resources/views/dashboard.blade.php --}}
@extends('admin')
@section('content')
<div class="p-4 mt-12 sm:ml-64 main-content-container">
    <div class="mt-4 p-4 relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-2xl font-semibold mb-4">
                        Selamat datang, {{ Auth::user()->name }}!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
