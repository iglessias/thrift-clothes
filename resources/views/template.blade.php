<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="images/logo-pbl.png" alt="JualBaju_Co Logo" class="h-10">
                <span class="text-2xl font-bold ml-2">JualBaju_Co</span>
            </div>
            <div class="space-x-4">
                <button onclick="toggleModal('loginModal')" class="     bg-blue-500 text-white px-4 py-2 rounded">Login</button>
                <button onclick="toggleModal('registerModal')" class="bg-green-500 text-white px-4 py-2 rounded">Register</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-purple-500 text-white text-center py-20">
        <div class="container mx-auto">
            <h1 class="text-5xl font-bold mb-4">Explore<br>
    Your Shop With<br>
  us</h1>
            <p class="text-xl mb-8">Discover a wide range of stylish and affordable clothing</p>
            <button class="bg-blue-500 text-white px-6 py-3 rounded-full font-semibold">Shop Now</button>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container mx-auto py-16 text-center">
        <h2 class="text-3xl font-bold mb-8">Why Shop With Us?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4">Easy Payment</h3>
                <p>Experience seamless and hassle-free transactions with our easy payment solution.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4">Affordable Prices</h3>
                <p>We offer high-quality products at prices that won't break the bank.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4">Customer Satisfaction</h3>
                <p>We prioritize excellence in every aspect, ensuring our customers are fully satisfied.</p>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="container mx-auto py-16 text-center">
        <h2 class="text-3xl font-bold mb-8">Our Top Brands</h2>
        <div class="flex justify-center space-x-8">
            <img src="images/logo-pbl.png" alt="Nike Logo" class="h-16">
            <img src="chanel.png" alt="Chanel Logo" class="h-16">
            <img src="dior.png" alt="Dior Logo" class="h-16">
            <img src="gucci.png" alt="Gucci Logo" class="h-16">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="flex flex-col items-center md:items-start">
                <img src="logo.png" alt="JualBaju_Co Logo" class="h-10 mb-4">
                <div class="flex space-x-4">
                    <a href="#"><img src="twitter.png" alt="Twitter Logo" class="h-6"></a>
                    <a href="#"><img src="facebook.png" alt="Facebook Logo" class="h-6"></a>
                    <a href="#"><img src="instagram.png" alt="Instagram Logo" class="h-6"></a>
                </div>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4">SERVICES</h4>
                <ul>
                    <li>Sample Development</li>
                    <li>Apparel Production</li>
                    <li>Label Tags</li>
                    <li>Packaging</li>
                    <li>Global Shipping</li>
                    <li>Product</li>
                </ul>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4">HOW DOES IT WORK</h4>
                <ul>
                    <li>Portfolio</li>
                    <li>Customer Review</li>
                    <li>About Us</li>
                    <li>Blog</li>
                    <li>FAQ</li>
                </ul>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4">CONTACT US</h4>
                <p>Kota Batam, Kepulauan Riau</p>
                <p>0778-0987-2312</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-6">Login</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="email" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">Password</label>
                    <input type="password" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
                    <button type="button" onclick="toggleModal('loginModal')" class="text-blue-500">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-6">Register</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Name</label>
                    <input type="text" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="email" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">Password</label>
                    <input type="password" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Register</button>
                    <button type="button" onclick="toggleModal('registerModal')" class="text-blue-500">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }
    </script>
</body>