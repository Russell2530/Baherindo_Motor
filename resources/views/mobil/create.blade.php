@extends('layouts.main')

@section('title', 'Tambah mobil - Baherindo mobil')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
        <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-2000"></div>
        <div class="absolute bottom-1/4 left-1/2 w-96 h-96 bg-pink-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-4000"></div>
    </div>
    
    <div class="relative z-10 w-full">
        <div class="max-w-5xl mx-auto px-6">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-6 py-3 mb-8">
                    <span class="text-yellow-400 mr-2">➕</span>
                    <span class="text-sm font-medium text-white">Tambah Kendaraan Baru</span>
                </div>
                <h1 class="font-poppins text-6xl md:text-7xl font-black text-white leading-tight mb-8">
                    Tambah Mobil 
                    <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 bg-clip-text text-transparent">
                        Baru
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto leading-relaxed">
                    Lengkapi informasi mobil yang akan dijual dengan detail yang akurat untuk menarik pembeli terbaik
                </p>
            </div>

            <!-- Form Container -->
            <div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl p-8 lg:p-12 border border-white/20">
                <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                    @csrf
                    
                    <!-- Form Grid -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Nama mobil -->
                        <div class="group">
                            <label for="nama_mobil" class="block text-sm font-bold text-gray-700 mb-4">
                                <div class="flex items-center">
                                    <div class="bg-blue-100 p-3 rounded-xl mr-4">
                                        <i class="fas fa-car text-blue-600 text-lg"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg">Nama mobil</div>
                                        <div class="text-xs text-gray-500 font-normal">Masukkan nama lengkap mobil</div>
                                    </div>
                                </div>
                            </label>
                            <input type="text" name="nama_mobil" id="nama_mobil" 
                                   class="w-full px-6 py-5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium text-lg group-hover:border-blue-300 shadow-sm" 
                                   placeholder="Contoh: Honda Vario 150 CBS ISS" required>
                        </div>

                        <!-- Harga mobil -->
                        <div class="group">
                            <label for="harga_mobil" class="block text-sm font-bold text-gray-700 mb-4">
                                <div class="flex items-center">
                                    <div class="bg-green-100 p-3 rounded-xl mr-4">
                                        <i class="fas fa-tag text-green-600 text-lg"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg">Harga Mobil</div>
                                        <div class="text-xs text-gray-500 font-normal">Harga dalam Rupiah</div>
                                    </div>
                                </div>
                            </label>
                            <input type="number" name="harga_mobil" id="harga_mobil" 
                                   class="w-full px-6 py-5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium text-lg group-hover:border-blue-300 shadow-sm" 
                                   placeholder="Contoh: 15000000" required>
                        </div>

                        <!-- Tahun mobil -->
                        <div class="group">
                            <label for="tahun_mobil" class="block text-sm font-bold text-gray-700 mb-4">
                                <div class="flex items-center">
                                    <div class="bg-purple-100 p-3 rounded-xl mr-4">
                                        <i class="fas fa-calendar text-purple-600 text-lg"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg">Tahun mobil</div>
                                        <div class="text-xs text-gray-500 font-normal">Tahun pembuatan mobil</div>
                                    </div>
                                </div>
                            </label>
                            <input type="number" name="tahun_mobil" id="tahun_mobil" 
                                   class="w-full px-6 py-5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium text-lg group-hover:border-blue-300 shadow-sm" 
                                   placeholder="Contoh: 2020" min="1990" max="2024" required>
                        </div>

                        <!-- KM mobil -->
                        <div class="group">
                            <label for="km_mobil" class="block text-sm font-bold text-gray-700 mb-4">
                                <div class="flex items-center">
                                    <div class="bg-orange-100 p-3 rounded-xl mr-4">
                                        <i class="fas fa-tachometer-alt text-orange-600 text-lg"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg">Kilometer mobil</div>
                                        <div class="text-xs text-gray-500 font-normal">Jarak tempuh dalam KM</div>
                                    </div>
                                </div>
                            </label>
                            <input type="number" name="km_mobil" id="km_mobil" 
                                   class="w-full px-6 py-5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium text-lg group-hover:border-blue-300 shadow-sm" 
                                   placeholder="Contoh: 25000" min="0" required>
                        </div>
                    </div>

                    <!-- Foto mobil -->
                    <div class="group">
                        <label for="gambar_mobil" class="block text-sm font-bold text-gray-700 mb-6">
                            <div class="flex items-center">
                                <div class="bg-pink-100 p-3 rounded-xl mr-4">
                                    <i class="fas fa-camera text-pink-600 text-lg"></i>
                                </div>
                                <div>
                                    <div class="text-lg">Foto mobil</div>
                                    <div class="text-xs text-gray-500 font-normal">Upload foto terbaik mobil Anda</div>
                                </div>
                            </div>
                        </label>
                        <div class="relative">
                            <div class="border-2 border-dashed border-gray-300 rounded-3xl p-12 text-center hover:border-blue-400 transition-colors duration-300 group-hover:border-blue-400 bg-gray-50/50">
                                <div class="mb-6">
                                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-cloud-upload-alt text-white text-3xl"></i>
                                    </div>
                                </div>
                                <input type="file" name="gambar_mobil" id="gambar_mobil" accept="image/*" 
                                       class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required>
                                <p class="text-xl font-bold text-gray-700 mb-3">Klik atau drag foto ke sini</p>
                                <p class="text-sm text-gray-500 mb-2">Format: JPG, PNG, JPEG (Max: 5MB)</p>
                                <p class="text-xs text-gray-400">Pastikan foto jelas dan menarik untuk menarik pembeli</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-6 pt-8">
                        <button type="submit" 
                                class="group flex-1 relative overflow-hidden bg-gradient-to-r from-blue-600 to-purple-600 text-white py-6 rounded-2xl font-bold text-xl hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 shadow-xl">
                            <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                            <div class="relative flex items-center justify-center">
                                <i class="fas fa-plus mr-3 text-xl"></i>
                                Tambah Mobil Sekarang
                            </div>
                        </button>
                        <a href="/" 
                           class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-6 rounded-2xl font-bold text-xl text-center transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center justify-center">
                            <i class="fas fa-arrow-left mr-3"></i>
                            Kembali ke Beranda
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
