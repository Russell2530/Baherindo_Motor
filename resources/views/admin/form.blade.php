@extends('layouts.main')

@section('title', 'Admin Panel - Baherindo Motor')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-6">
         Header 
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Admin Panel</h1>
            <p class="text-xl text-gray-600">Kelola data motor dengan mudah</p>
        </div>

         Quick Actions 
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <a href="{{ route('motor.create') }}" 
               class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-motorcycle text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Tambah Motor</h3>
                <p class="text-gray-600">Tambahkan motor baru ke dalam sistem</p>
            </a>
            
            <a href="{{ route('mobil.create') }}" 
               class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="bg-gradient-to-br from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-car text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Tambah Mobil</h3>
                <p class="text-gray-600">Tambahkan mobil baru ke dalam sistem</p>
            </a>
        </div>

         Legacy Form (if still needed) 
        <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Form Tambah Motor</h2>
            
            <form action="{{ route('motor.create') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                
                <div class="grid md:grid-cols-2 gap-8">
                     Nama Motor 
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-motorcycle mr-2 text-blue-600"></i>Nama Motor
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800" 
                               placeholder="Masukan Nama Motor" required>
                    </div>

                     Harga Motor 
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-tag mr-2 text-green-600"></i>Harga Motor
                        </label>
                        <input type="number" 
                               class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800" 
                               placeholder="Masukan Harga Motor" required>
                    </div>

                     Tahun Motor 
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-calendar mr-2 text-purple-600"></i>Tahun Motor
                        </label>
                        <input type="number" 
                               class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800" 
                               placeholder="Masukan Tahun Motor" required>
                    </div>

                     KM Motor 
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-tachometer-alt mr-2 text-orange-600"></i>KM Motor
                        </label>
                        <input type="number" 
                               class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800" 
                               placeholder="Masukan KM Motor" required>
                    </div>
                </div>

                 Foto Motor 
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        <i class="fas fa-camera mr-2 text-pink-600"></i>Foto Motor
                    </label>
                    <input type="file" name="gambar_motor" accept="image/*" 
                           class="w-full px-4 py-4 border-2 border-dashed border-gray-300 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800 file:bg-blue-600 file:text-white file:font-semibold file:border-0 file:px-6 file:py-3 file:rounded-xl file:cursor-pointer hover:file:bg-blue-700" required>
                </div>

                 Button 
                <div class="text-center pt-8">
                    <button type="submit" 
                            class="inline-block bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:from-blue-700 hover:to-blue-800 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <i class="fas fa-plus mr-2"></i>Tambah Motor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
