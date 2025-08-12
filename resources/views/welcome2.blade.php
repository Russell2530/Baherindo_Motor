@extends('layouts.main')

@section('title', 'Baherindo Mobil - Dealer Mobil Terpercaya #1 di Bekasi')

@section('content')
    {{-- HERO SECTION --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/2 w-96 h-96 bg-pink-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-4000"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 text-center text-white">
            <!-- Badge -->
            <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-6 py-3 mb-8 animate-fade-in">
                <span class="text-yellow-400 mr-2">🚗</span>
                <span class="text-sm font-medium">Dealer Mobil Terpercaya #1 di Bekasi</span>
            </div>
            
            <!-- Main Heading -->
            <h1 class="font-poppins text-6xl md:text-8xl font-black leading-tight mb-8 animate-slide-up">
                Mobil
                <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 bg-clip-text text-transparent animate-glow">
                    Impian Anda
                </span>
                <span class="block text-4xl md:text-5xl font-normal text-gray-300">Menanti di Sini</span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-200 mb-12 max-w-4xl mx-auto leading-relaxed animate-fade-in">
                Jual beli mobil second dengan harga termurah dan kualitas terbaik di Bekasi. 
                Garansi mesin tersedia untuk ketenangan pikiran Anda!
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center animate-slide-up">
                <a href="#list-mobil" class="group relative overflow-hidden bg-gradient-to-r from-yellow-400 to-orange-500 text-black px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                    <div class="relative flex items-center">
                        <i class="fas fa-car mr-3 text-xl"></i>
                        Lihat Koleksi Mobil
                    </div>
                </a>
                <a href="/contact" class="group border-2 border-white/30 backdrop-blur-sm text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-phone mr-3 group-hover:scale-110 transition-transform"></i>
                    Konsultasi Gratis
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>

    {{-- STATS SECTION --}}
    <section class="relative -mt-20 z-20 pb-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="group bg-white/90 backdrop-blur-xl p-8 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2 border border-white/20 animate-on-scroll">
                    <div class="text-center">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-car text-white text-2xl"></i>
                        </div>
                        <div class="text-4xl font-black font-poppins text-blue-600 mb-2">300+</div>
                        <div class="text-gray-600 font-medium">Mobil Terjual</div>
                    </div>
                </div>
                
                <div class="group bg-white/90 backdrop-blur-xl p-8 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2 border border-white/20 animate-on-scroll">
                    <div class="text-center">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-heart text-white text-2xl"></i>
                        </div>
                        <div class="text-4xl font-black font-poppins text-green-600 mb-2">97%</div>
                        <div class="text-gray-600 font-medium">Kepuasan Pelanggan</div>
                    </div>
                </div>
                
                <div class="group bg-white/90 backdrop-blur-xl p-8 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2 border border-white/20 animate-on-scroll">
                    <div class="text-center">
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-award text-white text-2xl"></i>
                        </div>
                        <div class="text-4xl font-black font-poppins text-purple-600 mb-2">5+</div>
                        <div class="text-gray-600 font-medium">Tahun Pengalaman</div>
                    </div>
                </div>
                
                <div class="group bg-white/90 backdrop-blur-xl p-8 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2 border border-white/20 animate-on-scroll">
                    <div class="text-center">
                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-clock text-white text-2xl"></i>
                        </div>
                        <div class="text-4xl font-black font-poppins text-orange-600 mb-2">24/7</div>
                        <div class="text-gray-600 font-medium">Layanan Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FITUR UNGGULAN --}}
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20 animate-on-scroll">
                <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full font-semibold mb-6">
                    <i class="fas fa-star mr-2"></i>
                    Keunggulan Kami
                </div>
                <h2 class="font-poppins text-5xl font-black text-gray-800 mb-6">
                    Mengapa Memilih 
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Kami?</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Kami memberikan pelayanan terbaik dengan jaminan kualitas yang tidak akan mengecewakan
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <div class="group relative bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-white/20 animate-on-scroll">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-tag text-white text-3xl"></i>
                        </div>
                        <h3 class="font-poppins text-2xl font-bold text-gray-800 mb-4">Harga Terjangkau</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Kami menyediakan mobil second dengan harga paling kompetitif di pasaran tanpa mengurangi kualitas.
                        </p>
                    </div>
                </div>
                
                <div class="group relative bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-white/20 animate-on-scroll">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-emerald-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-shield-alt text-white text-3xl"></i>
                        </div>
                        <h3 class="font-poppins text-2xl font-bold text-gray-800 mb-4">Kualitas Terjamin</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Setiap mobil telah melalui pengecekan menyeluruh oleh teknisi berpengalaman dengan garansi mesin.
                        </p>
                    </div>
                </div>
                
                <div class="group relative bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-white/20 animate-on-scroll">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-20 h-20 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-heart text-white text-3xl"></i>
                        </div>
                        <h3 class="font-poppins text-2xl font-bold text-gray-800 mb-4">Pelayanan Ramah</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Tim profesional kami siap membantu Anda menemukan mobil terbaik sesuai kebutuhan dan budget.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- LIST MOBIL --}}
    <section id="list-mobil" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20 animate-on-scroll">
                <div class="inline-flex items-center bg-orange-100 text-orange-800 px-4 py-2 rounded-full font-semibold mb-6">
                    <i class="fas fa-car mr-2"></i>
                    Koleksi Terbaik
                </div>
                <h2 class="font-poppins text-5xl font-black text-gray-800 mb-6">
                    Mobil Premium 
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Pilihan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Mobil berkualitas dengan harga terbaik menanti Anda
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($mobil as $m)
                    <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-blue-200 transform hover:-translate-y-2 animate-on-scroll">
                        <div class="relative overflow-hidden">
                            <img class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" 
                                 src="storage/{{ $m['gambar_mobil'] }}" 
                                 alt="{{ $m['nama_mobil'] }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-4 right-4">
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                                    <i class="fas fa-check mr-1"></i>Ready
                                </span>
                            </div>
                            <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-sm font-semibold">
                                    <i class="fas fa-eye mr-1"></i>Lihat Detail
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <h5 class="font-poppins text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                                {{ $m['nama_mobil'] }}
                            </h5>
                            <div class="text-2xl text-nowrap font-black text-green-600 mb-4 font-poppins">
                                Rp {{ number_format($m['harga_mobil'], 0, ',', '.') }}
                            </div>
                            <div class="flex justify-between items-center text-sm text-gray-500 mb-6">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-blue-500 mr-2"></i>
                                    <span class="font-medium">{{ $m['tahun_mobil'] }}</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tachometer-alt text-purple-500 mr-2"></i>
                                    <span class="font-medium">{{ number_format($m['km_mobil']) }} KM</span>
                                </div>
                            </div>
                            <a href="{{ route('mobil.show', $m->id) }}" 
                               class="block w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white text-center py-4 rounded-2xl font-bold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <i class="fas fa-arrow-right mr-2"></i>Lihat Detail
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-2000"></div>
            </div>
        </div>
        
        <div class="relative z-10 max-w-5xl mx-auto text-center px-6 text-white animate-on-scroll">
            <h2 class="font-poppins text-5xl md:text-6xl font-black mb-8">
                Siap Punya Mobil 
                <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Impian?</span>
            </h2>
            <p class="text-2xl mb-12 text-gray-200 max-w-3xl mx-auto leading-relaxed">
                Hubungi kami sekarang juga untuk penawaran terbaik dan konsultasi gratis!
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="/contact" class="group relative overflow-hidden bg-gradient-to-r from-yellow-400 to-orange-500 text-black px-10 py-5 rounded-2xl font-bold text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                    <div class="relative flex items-center justify-center">
                        <i class="fas fa-phone mr-3 text-xl"></i>
                        Hubungi Kami
                    </div>
                </a>
                <a href="https://wa.me/087774559011" class="group bg-green-600 hover:bg-green-700 px-10 py-5 rounded-2xl font-bold text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <i class="fab fa-whatsapp mr-3 text-xl group-hover:scale-110 transition-transform"></i>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
