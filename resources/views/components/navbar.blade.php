<nav class="bg-white border-b border-slate-100 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Brand Logo -->
        <a href="#" class="flex items-center gap-2">
            <span class="text-3xl">💧</span>
            <div>
                <span class="text-2xl font-black text-blue-950 tracking-tight">Watera</span>
                <span class="block text-[9px] font-semibold text-slate-400 uppercase tracking-widest -mt-1">Water
                    Delivery Company</span>
            </div>
        </a>

        <!-- Navigation Links -->
        <div class="hidden lg:flex items-center space-x-6 text-xs font-bold text-slate-700 uppercase tracking-wider">
            <a href="#" class="text-blue-600">Home</a>
            <a href="#about" class="hover:text-blue-600 transition">About Us</a>
            <a href="#products" class="hover:text-blue-600 transition">Products</a>
            <a href="#blog" class="hover:text-blue-600 transition">Blog</a>
            <a href="#contact" class="hover:text-blue-600 transition">Contact</a>
        </div>

        <!-- Right Action Items (Account, Cart, Phone Badge) -->
        <div class="flex items-center gap-4">

            <!-- User Account / Login -->
            @auth
                <a href="#" class="flex items-center gap-1 text-xs font-bold text-slate-700 hover:text-blue-600">
                    <span>👤</span> My Account
                </a>
            @else
                <a href="#" class="flex items-center gap-1 text-xs font-bold text-slate-700 hover:text-blue-600">
                    <span>👤</span> My Account
                </a>
            @endauth

            <!-- Shopping Cart Summary -->
            <div class="hidden sm:flex items-center gap-1 text-xs font-bold text-slate-800">
                <span>🛒</span>
                <span>0 Items - $0.00</span>
            </div>

            <!-- Phone Number Badge (Mirip Gambar) -->
            <a href="tel:+12345678910"
                class="hidden md:flex items-center gap-2 bg-blue-900 text-white px-4 py-2 rounded-full text-xs font-bold shadow-sm hover:bg-blue-950 transition">
                <span>🎧</span>
                <span>+1 (234) 567 89 10</span>
            </a>

        </div>
    </div>
</nav>
