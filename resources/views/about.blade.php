@extends('layouts.main')

@section('title', 'Tentang Kami - Baherindo Motor')

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
            <span class="text-yellow-400 mr-2">🏆</span>
            <span class="text-sm font-medium">Dealer Terpercaya Sejak 2020</span>
        </div>
        
        <!-- Main Heading -->
        <h1 class="font-poppins text-6xl md:text-8xl font-black leading-tight mb-8">
            Tentang
            <span class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 bg-clip-text text-transparent">
                Baherindo
            </span>
            <span class="block text-4xl md:text-5xl font-normal text-gray-300">Motor & Mobil</span>
        </h1>
        
        <!-- Subtitle -->
        <p class="text-xl md:text-2xl text-gray-200 mb-12 max-w-4xl mx-auto leading-relaxed">
            Perjalanan kami dimulai dari passion untuk memberikan solusi kendaraan terbaik bagi masyarakat Indonesia
        </p>
        
        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-black text-yellow-400 mb-2">5+</div>
                <div class="text-gray-300 font-medium">Tahun Pengalaman</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-black text-green-400 mb-2">800+</div>
                <div class="text-gray-300 font-medium">Kendaraan Terjual</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-black text-blue-400 mb-2">98%</div>
                <div class="text-gray-300 font-medium">Kepuasan Pelanggan</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-black text-purple-400 mb-2">24/7</div>
                <div class="text-gray-300 font-medium">Layanan Support</div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl"></i>
    </div>
</section>

<!-- Story Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image -->
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl blur opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                    <img src="img/tony-pham-8gzO8C65Gcg-unsplash.jpg" 
                         alt="Baherindo Motor Showroom" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                            <span class="font-semibold">Showroom Baherindo Motor</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="space-y-8">
                <div>
                    <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full font-semibold mb-6">
                        <i class="fas fa-heart mr-2"></i>
                        Cerita Kami
                    </div>
                    <h2 class="font-poppins text-5xl font-black text-gray-800 mb-6">
                        Mengapa Memilih 
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Kami?</span>
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Baherindo Motor lahir dari visi sederhana: memberikan akses mudah dan terpercaya untuk memiliki kendaraan impian. 
                        Kami memahami bahwa setiap pelanggan memiliki kebutuhan unik, dan itulah mengapa kami berkomitmen memberikan 
                        pelayanan personal yang melampaui ekspektasi.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="group flex items-start space-x-6 p-6 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="bg-gradient-to-br from-green-500 to-green-600 p-4 rounded-2xl flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-white text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-poppins text-2xl font-bold text-gray-800 mb-3">Garansi Terpercaya</h4>
                            <p class="text-gray-600 text-lg">Setiap kendaraan dilengkapi garansi mesin dan komitmen after-sales service terbaik</p>
                        </div>
                    </div>
                    
                    <div class="group flex items-start space-x-6 p-6 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 rounded-2xl flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-bolt text-white text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-poppins text-2xl font-bold text-gray-800 mb-3">Proses Super Cepat</h4>
                            <p class="text-gray-600 text-lg">Sistem digital terintegrasi untuk proses pembelian yang efisien dan transparan</p>
                        </div>
                    </div>
                    
                    <div class="group flex items-start space-x-6 p-6 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-4 rounded-2xl flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-handshake text-white text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-poppins text-2xl font-bold text-gray-800 mb-3">Harga Transparan</h4>
                            <p class="text-gray-600 text-lg">Tidak ada biaya tersembunyi, semua harga sudah final dan kompetitif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full font-semibold mb-6">
                <i class="fas fa-rocket mr-2"></i>
                Visi & Misi
            </div>
            <h2 class="font-poppins text-5xl font-black text-gray-800 mb-6">
                Komitmen 
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Kami</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fondasi yang kuat untuk memberikan pelayanan terbaik</p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12">
            <div class="group relative bg-gradient-to-br from-blue-50 via-blue-100 to-blue-200 p-12 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-blue-600/10 rounded-full translate-y-12 -translate-x-12"></div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                        <i class="fas fa-eye text-white text-3xl"></i>
                    </div>
                    <h3 class="font-poppins text-4xl font-black text-gray-800 mb-8">Visi Kami</h3>
                    <p class="text-gray-700 text-xl leading-relaxed">
                        Menjadi dealer kendaraan bekas terdepan di Indonesia yang menghadirkan revolusi dalam industri 
                        otomotif melalui teknologi, transparansi, dan pelayanan yang melampaui ekspektasi pelanggan.
                    </p>
                </div>
            </div>
            
            <div class="group relative bg-gradient-to-br from-purple-50 via-purple-100 to-purple-200 p-12 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-purple-600/10 rounded-full translate-y-12 -translate-x-12"></div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-20 h-20 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                        <i class="fas fa-bullseye text-white text-3xl"></i>
                    </div>
                    <h3 class="font-poppins text-4xl font-black text-gray-800 mb-8">Misi Kami</h3>
                    <ul class="space-y-4 text-gray-700 text-lg">
                        <li class="flex items-start">
                            <div class="bg-purple-500 w-2 h-2 rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <span>Menyediakan kendaraan berkualitas tinggi dengan harga yang adil dan transparan</span>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-purple-500 w-2 h-2 rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <span>Memberikan pengalaman pembelian yang mudah, cepat, dan menyenangkan</span>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-purple-500 w-2 h-2 rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <span>Membangun kepercayaan melalui layanan purna jual yang berkelanjutan</span>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-purple-500 w-2 h-2 rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <span>Menciptakan ekosistem otomotif yang sustainable dan ramah lingkungan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full font-semibold mb-6">
                <i class="fas fa-users mr-2"></i>
                Tim Profesional
            </div>
            <h2 class="font-poppins text-5xl font-black text-gray-800 mb-6">
                Orang-Orang 
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Terbaik</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Tim berpengalaman yang siap melayani dengan dedikasi tinggi</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-10">
            <div class="group bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 border border-white/20">
                <div class="relative mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <i class="fas fa-user-tie text-white text-4xl"></i>
                    </div>
                    <div class="absolute -bottom-2 -right-2 bg-yellow-400 w-8 h-8 rounded-full flex items-center justify-center">
                        <i class="fas fa-crown text-yellow-800 text-sm"></i>
                    </div>
                </div>
                <h4 class="font-poppins text-3xl font-bold text-gray-800 mb-3">Ki Bahar</h4>
                <p class="text-blue-600 font-bold text-lg mb-4">Founder & CEO</p>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Visioner dengan pengalaman 15+ tahun di industri otomotif. Memimpin dengan passion untuk inovasi dan kepuasan pelanggan.
                </p>
                <div class="flex justify-center space-x-3 mt-6">
                    <div class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">Leadership</div>
                    <div class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Strategy</div>
                </div>
            </div>
            
            <div class="group bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 border border-white/20">
                <div class="relative mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <i class="fas fa-tools text-white text-4xl"></i>
                    </div>
                    <div class="absolute -bottom-2 -right-2 bg-green-400 w-8 h-8 rounded-full flex items-center justify-center">
                        <i class="fas fa-certificate text-green-800 text-sm"></i>
                    </div>
                </div>
                <h4 class="font-poppins text-3xl font-bold text-gray-800 mb-3">Tim Teknisi</h4>
                <p class="text-green-600 font-bold text-lg mb-4">Mekanik Bersertifikat</p>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Ahli dalam inspeksi menyeluruh dan perawatan kendaraan. Memastikan setiap unit dalam kondisi optimal sebelum dijual.
                </p>
                <div class="flex justify-center space-x-3 mt-6">
                    <div class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Inspection</div>
                    <div class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">Maintenance</div>
                </div>
            </div>
            
            <div class="group bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 border border-white/20">
                <div class="relative mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full mx-auto flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <i class="fas fa-headset text-white text-4xl"></i>
                    </div>
                    <div class="absolute -bottom-2 -right-2 bg-purple-400 w-8 h-8 rounded-full flex items-center justify-center">
                        <i class="fas fa-star text-purple-800 text-sm"></i>
                    </div>
                </div>
                <h4 class="font-poppins text-3xl font-bold text-gray-800 mb-3">Customer Care</h4>
                <p class="text-purple-600 font-bold text-lg mb-4">Support Specialist</p>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Dedicated team yang siap membantu 24/7. Memberikan konsultasi terbaik untuk kebutuhan kendaraan Anda.
                </p>
                <div class="flex justify-center space-x-3 mt-6">
                    <div class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-semibold">24/7 Support</div>
                    <div class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-sm font-semibold">Consultation</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-2000"></div>
        </div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto text-center px-6 text-white">
        <h2 class="font-poppins text-5xl md:text-6xl font-black mb-8">
            Siap Bergabung 
            <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Bersama Kami?</span>
        </h2>
        <p class="text-2xl mb-12 text-gray-200 max-w-3xl mx-auto leading-relaxed">
            Mari wujudkan impian kendaraan Anda bersama tim profesional yang berpengalaman dan terpercaya
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="/contact" class="group relative overflow-hidden bg-gradient-to-r from-yellow-400 to-orange-500 text-black px-12 py-6 rounded-2xl font-bold text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                <div class="relative flex items-center justify-center">
                    <i class="fas fa-phone mr-3 text-xl"></i>
                    Hubungi Kami
                </div>
            </a>
            <a href="https://wa.me/087774559011" class="group bg-green-600 hover:bg-green-700 px-12 py-6 rounded-2xl font-bold text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                <i class="fab fa-whatsapp mr-3 text-xl group-hover:scale-110 transition-transform"></i>
                Chat WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection
