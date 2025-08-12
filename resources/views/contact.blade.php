@extends('layouts.main')

@section('title', 'Kontak Kami - Baherindo Motor')

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
    
    <div class="relative z-10 max-w-7xl mx-auto px-6 text-center text-white">
        <!-- Badge -->
        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-6 py-3 mb-8">
            <span class="text-yellow-400 mr-2">📞</span>
            <span class="text-sm font-medium">Hubungi Kami Sekarang</span>
        </div>
        
        <!-- Main Heading -->
        <h1 class="font-poppins text-6xl md:text-8xl font-black leading-tight mb-8">
            Mari
            <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 bg-clip-text text-transparent">
                Berbicara
            </span>
            <span class="block text-4xl md:text-5xl font-normal text-gray-300">Tentang Impian Anda</span>
        </h1>
        
        <!-- Subtitle -->
        <p class="text-xl md:text-2xl text-gray-200 mb-12 max-w-4xl mx-auto leading-relaxed">
            Tim profesional kami siap membantu Anda menemukan kendaraan impian dengan pelayanan terbaik dan harga terjangkau
        </p>
        
        <!-- Quick Contact -->
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="https://wa.me/087774559011" class="group relative overflow-hidden bg-gradient-to-r from-green-500 to-green-600 text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl">
                <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                <div class="relative flex items-center">
                    <i class="fab fa-whatsapp mr-3 text-xl"></i>
                    Chat WhatsApp
                </div>
            </a>
            <a href="tel:+6287774559011" class="group border-2 border-white/30 backdrop-blur-sm text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-phone mr-3 group-hover:scale-110 transition-transform"></i>
                Telepon Langsung
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl"></i>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl p-8 lg:p-12 border border-white/20">
                <div class="mb-10">
                    <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full font-semibold mb-6">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </div>
                    <h2 class="font-poppins text-4xl font-black text-gray-800 mb-4">
                        Hubungi 
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Kami</span>
                    </h2>
                    <p class="text-gray-600 text-lg">Isi form di bawah ini dan kami akan segera menghubungi Anda dalam 24 jam</p>
                </div>
                
                <form action="#" method="POST" class="space-y-8">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="group">
                            <label class="block text-sm font-bold text-gray-700 mb-3">
                                <div class="flex items-center">
                                    <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                        <i class="fas fa-user text-blue-600"></i>
                                    </div>
                                    Nama Lengkap
                                </div>
                            </label>
                            <input type="text" name="name" 
                                   class="w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium group-hover:border-blue-300" 
                                   placeholder="Masukkan nama lengkap" required>
                        </div>
                        
                        <div class="group">
                            <label class="block text-sm font-bold text-gray-700 mb-3">
                                <div class="flex items-center">
                                    <div class="bg-green-100 p-2 rounded-lg mr-3">
                                        <i class="fas fa-envelope text-green-600"></i>
                                    </div>
                                    Email Address
                                </div>
                            </label>
                            <input type="email" name="email" 
                                   class="w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium group-hover:border-blue-300" 
                                   placeholder="nama@email.com" required>
                        </div>
                    </div>
                    
                    <div class="group">
                        <label class="block text-sm font-bold text-gray-700 mb-3">
                            <div class="flex items-center">
                                <div class="bg-purple-100 p-2 rounded-lg mr-3">
                                    <i class="fas fa-phone text-purple-600"></i>
                                </div>
                                Nomor Telepon
                            </div>
                        </label>
                        <input type="tel" name="phone" 
                               class="w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium group-hover:border-blue-300" 
                               placeholder="+62 812 3456 7890">
                    </div>
                    
                    <div class="group">
                        <label class="block text-sm font-bold text-gray-700 mb-3">
                            <div class="flex items-center">
                                <div class="bg-orange-100 p-2 rounded-lg mr-3">
                                    <i class="fas fa-comment text-orange-600"></i>
                                </div>
                                Pesan Anda
                            </div>
                        </label>
                        <textarea name="message" rows="6" 
                                  class="w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium resize-none group-hover:border-blue-300" 
                                  placeholder="Ceritakan kebutuhan kendaraan impian Anda..." required></textarea>
                    </div>
                    
                    <button type="submit" 
                            class="group w-full relative overflow-hidden bg-gradient-to-r from-blue-600 to-purple-600 text-white py-5 rounded-2xl font-bold text-lg hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                        <div class="relative flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-3 text-xl"></i>
                            Kirim Pesan Sekarang
                        </div>
                    </button>
                </form>
            </div>

            <!-- Contact Info & Map -->
            <div class="space-y-8">
                <!-- Contact Cards -->
                <div class="grid gap-6">
                    <div class="group bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-white/20">
                        <div class="flex items-start space-x-6">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 rounded-2xl flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-poppins text-2xl font-bold text-gray-800 mb-3">Alamat Showroom</h3>
                                <p class="text-gray-600 text-lg leading-relaxed">Jl. Raya Bekasi No.123, Bekasi Timur, Kota Bekasi, Jawa Barat 17113</p>
                                <p class="text-sm text-blue-600 font-semibold mt-2">Buka Setiap Hari: 08:00 - 21:00 WIB</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="group bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-white/20">
                        <div class="flex items-start space-x-6">
                            <div class="bg-gradient-to-br from-green-500 to-green-600 p-4 rounded-2xl flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-phone text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-poppins text-2xl font-bold text-gray-800 mb-3">Telepon & WhatsApp</h3>
                                <p class="text-gray-600 text-lg">+62 877 7455 9011</p>
                                <p class="text-sm text-green-600 font-semibold mt-2">Layanan 24/7 untuk konsultasi</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="group bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-white/20">
                        <div class="flex items-start space-x-6">
                            <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-4 rounded-2xl flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-envelope text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-poppins text-2xl font-bold text-gray-800 mb-3">Email Support</h3>
                                <p class="text-gray-600 text-lg">info@baherindomotor.com</p>
                                <p class="text-sm text-purple-600 font-semibold mt-2">Respon dalam 24 jam</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl overflow-hidden border border-white/20">
                    <div class="p-8 border-b border-gray-100">
                        <h3 class="font-poppins text-2xl font-bold text-gray-800 mb-2">Lokasi Showroom</h3>
                        <p class="text-gray-600">Kunjungi showroom kami untuk melihat koleksi kendaraan secara langsung</p>
                    </div>
                    <div class="relative h-80">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63452.57916378676!2d106.95329476959938!3d-6.291806670952876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c2b5c3f41d3%3A0xd6d34890df22f5ff!2sBekasi%20Motor%20Honda%20Wing!5e0!3m2!1sen!2sid!4v1754898627195!5m2!1sen!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="rounded-b-3xl">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Action Section -->
<section class="relative py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-green-600 via-green-700 to-emerald-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-green-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-emerald-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-2000"></div>
        </div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto text-center px-6 text-white">
        <h2 class="font-poppins text-5xl md:text-6xl font-black mb-8">
            Butuh Bantuan 
            <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Cepat?</span>
        </h2>
        <p class="text-2xl mb-12 text-green-100 max-w-3xl mx-auto leading-relaxed">
            Hubungi kami langsung melalui WhatsApp untuk konsultasi gratis dan penawaran terbaik hari ini juga!
        </p>
        <a href="https://wa.me/087774559011?text=Halo,%20saya%20ingin%20bertanya%20tentang%20kendaraan%20di%20Baherindo%20Motor" 
           class="group relative overflow-hidden bg-white text-green-600 px-12 py-6 rounded-full font-bold text-xl hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-2xl inline-flex items-center">
            <div class="absolute inset-0 bg-green-100/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
            <div class="relative flex items-center">
                <i class="fab fa-whatsapp text-3xl mr-4 text-green-600"></i>
                <div class="text-left">
                    <div class="text-xl font-black">Chat WhatsApp Sekarang</div>
                    <div class="text-sm text-green-600/80 font-medium">Respon dalam hitungan menit</div>
                </div>
            </div>
        </a>
    </div>
</section>
@endsection
