@extends('layouts.main')

@section('title', 'Edit Motor - Baherindo Motor')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-6">
         
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Edit Motor</h1>
            <p class="text-xl text-gray-600">Perbarui informasi motor {{ $motor->nama_motor }}</p>
        </div>

         
        <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12">
            <form action="{{ route('motor.update', $motor->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')
                
                <div class="grid md:grid-cols-2 gap-8">
                      
                    <div>
                        <label for="nama_motor" class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-motorcycle mr-2 text-blue-600"></i>Nama Motor
                        </label>
                        <input type="text" name="nama_motor" id="nama_motor" 
                               value="{{ old('nama_motor', $motor->nama_motor) }}"
                               class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800" 
                               placeholder="Contoh: Honda Vario 150" required>
                    </div>

                    <div>
                        <label for="harga_motor" class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-tag mr-2 text-green-600"></i>Harga Motor
                        </label>
                        <input type="number" name="harga_motor" id="harga_motor" 
                               value="{{ old('harga_motor', $motor->harga_motor) }}"
                               class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800" 
                               placeholder="Contoh: 15000000" required>
                    </div>

                     
                    <div>
                        <label for="tahun_motor" class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-calendar mr-2 text-purple-600"></i>Tahun Motor
                        </label>
                        <input type="number" name="tahun_motor" id="tahun_motor" 
                               value="{{ old('tahun_motor', $motor->tahun_motor) }}"
                               class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800" 
                               placeholder="Contoh: 2020" required>
                    </div>

                     
                    <div>
                        <label for="km_motor" class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-tachometer-alt mr-2 text-orange-600"></i>Kilometer Motor
                        </label>
                        <input type="number" name="km_motor" id="km_motor" 
                               value="{{ old('km_motor', $motor->km_motor) }}"
                               class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800" 
                               placeholder="Contoh: 25000" required>
                    </div>
                </div>

                @if($motor->gambar_motor)
                <div class="bg-gray-50 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Foto Saat Ini</h3>
                    <div class="w-48 h-32 mx-auto">
                        <img src="{{ asset('storage/' . $motor->gambar_motor) }}" 
                             alt="{{ $motor->nama_motor }}" 
                             class="w-full h-full object-cover rounded-xl shadow-lg">
                    </div>
                </div>
                @endif

                <div>
                    <label for="gambar_motor" class="block text-sm font-semibold text-gray-700 mb-3">
                        <i class="fas fa-camera mr-2 text-pink-600"></i>Foto Motor (Opsional)
                    </label>
                    <div class="relative">
                        <input type="file" name="gambar_motor" id="gambar_motor" accept="image/*" 
                               class="w-full px-4 py-4 border-2 border-dashed border-gray-300 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-gray-800 file:bg-blue-600 file:text-white file:font-semibold file:border-0 file:px-6 file:py-3 file:rounded-xl file:cursor-pointer hover:file:bg-blue-700">
                        <p class="text-sm text-gray-500 mt-2">Kosongkan jika tidak ingin mengubah foto (Format: JPG, PNG, JPEG - Max: 5MB)</p>
                    </div>
                </div>

                  
                <div class="flex flex-col sm:flex-row gap-4 pt-8">
                    <button type="submit" 
                            class="flex-1 bg-gradient-to-r from-green-600 to-green-700 text-white py-4 rounded-2xl font-bold text-lg hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <i class="fas fa-save mr-2"></i>Simpan Perubahan
                    </button>
                    <a href="{{ route('motor.show', $motor->id) }}" 
                       class="flex-1 bg-gray-200 text-gray-700 py-4 rounded-2xl font-bold text-lg text-center hover:bg-gray-300 transition-all duration-200">
                        <i class="fas fa-arrow-left mr-2"></i>Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
