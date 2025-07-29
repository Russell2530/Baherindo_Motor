@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
    <div class="px-4">
        <h1 class="text-3xl font-bold text-center mt-6">Welcome to Baherindo Motor</h1>
        <p class="text-xl text-center mt-2">Jual beli motor second termurah di Bekasi</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 max-w-7xl mx-auto md:grid-cols-3 lg:grid-cols-3 gap-6 mt-8">
            @foreach ($motor as $m)
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                    <img class="w-full h-48 object-cover" src="img/andrew-pons-cLHPacdtpSY-unsplash.jpg" alt="Gambar Motor">

                    <div class="p-4">
                        <h5 class="text-xl font-semibold text-gray-800">{{ $m['name'] }}</h5>
                        <p class="text-gray-600">Harga: Rp {{ number_format($m['price']) }}</p>
                        <p class="text-gray-600">Tahun: {{ $m['tahun'] }}</p>
                        <p class="text-gray-600">Kilometer: {{ $m['km'] }} KM</p>

                        <a href="#"
                            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

