@extends('layouts.main')

@section('title', $mobil->nama_mobil . ' - Baherindo mobil')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <section class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 text-white py-16 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $mobil->nama_mobil }}</h1>
            <p class="text-xl text-gray-200">Detail lengkap mobil pilihan Anda</p>
        </div>
    </section>

    <section class="py-16 -mt-8 relative z-10">
        <div class="max-w-6xl mx-auto px-6">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <div class="relative">
                        <div class="aspect-w-16 aspect-h-12">
                            <img class="w-full h-96 lg:h-full object-cover" 
                                 src="{{ asset('storage/' . $mobil->gambar_mobil) }}" 
                                 alt="{{ $mobil->nama_mobil }}">
                        </div>
                        <div class="absolute top-6 right-6 bg-green-500 text-white px-4 py-2 rounded-full font-semibold shadow-lg">
                            <i class="fas fa-check-circle mr-2"></i>Ready Stock
                        </div>
                    </div>

                    <div class="p-8 lg:p-12 flex flex-col justify-between">
                        <div>
                            <div class="mb-8">
                                <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4">{{ $mobil->nama_mobil }}</h1>
                                <div class="text-4xl font-bold text-green-600 mb-6">
                                    Rp {{ number_format($mobil->harga_mobil, 0, ',', '.') }}
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-6 mb-8">
                                <div class="bg-gray-50 p-4 rounded-2xl">
                                    <div class="flex items-center mb-2">
                                        <i class="fas fa-calendar text-blue-600 mr-2"></i>
                                        <span class="text-sm font-semibold text-gray-600">Tahun</span>
                                    </div>
                                    <div class="text-2xl font-bold text-gray-800">{{ $mobil->tahun_mobil }}</div>
                                </div>
                                
                                <div class="bg-gray-50 p-4 rounded-2xl">
                                    <div class="flex items-center mb-2">
                                        <i class="fas fa-tachometer-alt text-purple-600 mr-2"></i>
                                        <span class="text-sm font-semibold text-gray-600">Kilometer</span>
                                    </div>
                                    <div class="text-2xl font-bold text-gray-800">{{ number_format($mobil->km_mobil) }} KM</div>
                                </div>
                            </div>

                            <div class="mb-8">
                                <h3 class="text-xl font-bold text-gray-800 mb-4">Keunggulan mobil Ini</h3>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-green-600 mr-3"></i>
                                        <span class="text-gray-700">Garansi mesin 6 bulan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tools text-blue-600 mr-3"></i>
                                        <span class="text-gray-700">Sudah diperiksa teknisi berpengalaman</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-certificate text-purple-600 mr-3"></i>
                                        <span class="text-gray-700">Surat-surat lengkap dan legal</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-handshake text-orange-600 mr-3"></i>
                                        <span class="text-gray-700">Bisa tukar tambah</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <a href="https://wa.me/087774559011?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($mobil->nama_mobil) }}%20seharga%20Rp%20{{ number_format($mobil->harga_mobil) }}"
                               class="block w-full bg-gradient-to-r from-green-600 to-green-700 text-white text-center py-4 rounded-2xl font-bold text-lg hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-200 shadow-lg">
                                <i class="fab fa-whatsapp mr-2 text-xl"></i>Order via WhatsApp
                            </a>

                            <div class="grid grid-cols-2 gap-4">
                                <a href="{{ route('mobil.edit', $mobil->id) }}"
                                   class="bg-blue-600 text-white text-center py-3 rounded-2xl font-semibold hover:bg-blue-700 transition-all duration-200">
                                    <i class="fas fa-edit mr-2"></i>Edit
                                </a>
                                
                                <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST" 
                                      onsubmit="return confirm('Yakin ingin menghapus mobil ini?')" class="w-full">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="w-full bg-red-600 text-white py-3 rounded-2xl font-semibold hover:bg-red-700 transition-all duration-200">
                                        <i class="fas fa-trash mr-2"></i>Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Mobil Lainnya</h2>
                <p class="text-xl text-gray-600">Lihat koleksi mobil lainnya yang mungkin Anda suka</p>
            </div>
            
            <div class="text-center">
                <a href="/car" class="inline-flex items-center bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:from-blue-700 hover:to-blue-800 transform hover:scale-105 transition-all duration-200 shadow-lg">
                    <i class="fas fa-car mr-2"></i>Lihat Semua Mobil
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
