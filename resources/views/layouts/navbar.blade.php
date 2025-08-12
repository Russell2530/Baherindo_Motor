<!-- Enhanced navbar with better mobile support -->
<nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-xl border-b border-white/20 shadow-lg transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo & Brand -->
            <div class="flex items-center space-x-4">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative bg-gradient-to-r from-blue-600 to-purple-600 p-3 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-motorcycle text-white text-2xl"></i>
                    </div>
                </div>
                <div class="font-poppins">
                    <h1 class="text-2xl font-black bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Baherindo
                    </h1>
                    <p class="text-xs text-gray-500 -mt-1 font-medium">Premium Motors</p>
                </div>
            </div>
            
            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center space-x-2">
                <a href="/" class="group px-5 py-3 rounded-xl text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-semibold relative overflow-hidden">
                    <div class="absolute inset-0 bg-blue-100 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-xl"></div>
                    <div class="relative flex items-center">
                        <i class="fas fa-motorcycle mr-2 group-hover:scale-110 transition-transform"></i>
                        Beli Motor
                    </div>
                </a>
                <a href="/car" class="group px-5 py-3 rounded-xl text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-300 font-semibold relative overflow-hidden">
                    <div class="absolute inset-0 bg-purple-100 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-xl"></div>
                    <div class="relative flex items-center">
                        <i class="fas fa-car mr-2 group-hover:scale-110 transition-transform"></i>
                        Beli Mobil
                    </div>
                </a>
                <a href="/about" class="group px-5 py-3 rounded-xl text-gray-700 hover:text-green-600 hover:bg-green-50 transition-all duration-300 font-semibold relative overflow-hidden">
                    <div class="absolute inset-0 bg-green-100 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-xl"></div>
                    <div class="relative flex items-center">
                        <i class="fas fa-info-circle mr-2 group-hover:scale-110 transition-transform"></i>
                        About
                    </div>
                </a>
                <a href="/contact" class="group px-5 py-3 rounded-xl text-gray-700 hover:text-orange-600 hover:bg-orange-50 transition-all duration-300 font-semibold relative overflow-hidden">
                    <div class="absolute inset-0 bg-orange-100 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-xl"></div>
                    <div class="relative flex items-center">
                        <i class="fas fa-phone mr-2 group-hover:scale-110 transition-transform"></i>
                        Contact
                    </div>
                </a>
            </div>

            <!-- WhatsApp CTA -->
            <div class="hidden md:flex items-center">
                <a href="https://wa.me/087774559011" class="group relative overflow-hidden bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-6 py-3 rounded-2xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                    <div class="relative flex items-center space-x-2">
                        <i class="fab fa-whatsapp text-lg group-hover:scale-110 transition-transform"></i>
                        <span>Chat Now</span>
                    </div>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="p-3 rounded-xl text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 focus:outline-none">
                    <i class="fas fa-bars text-xl" id="menu-icon"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white/95 backdrop-blur-xl rounded-2xl mt-2 mb-4 shadow-xl border border-white/20">
            <div class="px-6 py-4 space-y-3">
                <a href="/" class="flex items-center px-4 py-3 rounded-xl text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-semibold">
                    <i class="fas fa-motorcycle mr-3 text-blue-500"></i>
                    Beli Motor
                </a>
                <a href="/car" class="flex items-center px-4 py-3 rounded-xl text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-300 font-semibold">
                    <i class="fas fa-car mr-3 text-purple-500"></i>
                    Beli Mobil
                </a>
                <a href="/about" class="flex items-center px-4 py-3 rounded-xl text-gray-700 hover:text-green-600 hover:bg-green-50 transition-all duration-300 font-semibold">
                    <i class="fas fa-info-circle mr-3 text-green-500"></i>
                    About
                </a>
                <a href="/contact" class="flex items-center px-4 py-3 rounded-xl text-gray-700 hover:text-orange-600 hover:bg-orange-50 transition-all duration-300 font-semibold">
                    <i class="fas fa-phone mr-3 text-orange-500"></i>
                    Contact
                </a>
                <div class="pt-3 border-t border-gray-200">
                    <a href="https://wa.me/087774559011" class="flex items-center justify-center bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-3 rounded-xl font-bold transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Spacer -->
<div class="h-20"></div>

<script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Toggle icon
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.className = 'fas fa-bars text-xl';
            } else {
                menuIcon.className = 'fas fa-times text-xl';
            }
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                menuIcon.className = 'fas fa-bars text-xl';
            }
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white/95');
                navbar.classList.remove('bg-white/90');
            } else {
                navbar.classList.add('bg-white/90');
                navbar.classList.remove('bg-white/95');
            }
        });
    });
</script>
