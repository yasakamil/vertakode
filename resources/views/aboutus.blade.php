<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home with Video</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('partials.navbar')

<body class="bg-black text-white">

<section class="text-white pt-32 pb-40 relative overflow-hidden">
    <!-- Hero Section Content -->
    <div class="container mx-auto px-4 text-center">
        <!-- Subtitle -->
        <p class="text-cyan-400 tracking-wider font-medium mb-4">ABOUT VERTAKODE</p>
        
        <!-- Main Heading -->
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight">
            Transforming Ideas <br>
            into Digital Excellence
        </h1>
        
        <!-- Description Text -->
        <p class="max-w-2xl mx-auto text-gray-300 mb-10">
            Building high-performance websites and software<br>
            tailored for success.
        </p>
        
        <!-- Contact Button -->
        <div>
            <a href="#contact" class="inline-block bg-cyan-500 hover:bg-cyan-600 text-white px-8 py-3 rounded-md font-medium transition-all duration-300 shadow-lg shadow-cyan-500/30">
                Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Instagram Showcase Section -->
<section class="relative py-16 z-20">
    <!-- Section Title with sparkle icon -->
    <div class="container mx-auto px-4 mb-8">
        <div class="flex items-center justify-center md:justify-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>
            <h3 class="text-white text-lg font-medium">Our Instagram</h3>
        </div>
    </div>

    <!-- Instagram Content Card -->
    <div class="container mx-auto px-4 z-20">
        <div class="bg-gray-900 rounded-xl overflow-hidden shadow-2xl mx-auto max-w-4xl border border-gray-800">
            <!-- Instagram Image -->
            <div class="w-full">
                <img src="/storage/ourinstagram.png" alt="Vertakode Instagram Showcase" 
                     class="w-full h-auto object-cover" />
            </div>
        </div>
    </div>

    <!-- Add some spacing -->
    <div class="h-16"></div>
</section>

<!-- Previous Hero Section with Abstract Background Continues Below -->

<section class="relative bg-black pb-32 -z-10">
    {{-- Background Unions --}}
    <img src="/storage/abstract.png" alt="Union Blue"
         class="absolute bottom-0 left-0 w-full z-0 pointer-events-none" />
</section>

<section class="relative bg-black pb-32 mt-50">
    {{-- Background Unions --}}
    <img src="/storage/unionblue.png" alt="Union Blue"
         class="absolute bottom-0 left-0 w-full z-0 pointer-events-none" />

    {{-- unionblack: timpa di atas unionblue --}}
    <img src="/storage/unionblack.png" alt="Union Black"
         class="absolute bottom-25 left-0 w-full z-10 pointer-events-none" />

    <img src="/storage/bordercenter.png" alt="Union Black"
         class="absolute bottom-0 left-0 w-full z-10 pointer-events-none" />     
</section>

<section class="bg-black py-16">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <div class="absolute inset-0 bg-gradient-to-br  opacity-75 animate-pulse"></div>
            <img src="{{ asset('storage/abstractshape.png') }}" alt="Abstract Blue Shape" class="w-full h-auto object-cover rounded-lg">
        </div>
        <div class="text-white space-y-4 md:space-y-6">
            <h2 class="text-blue-400 uppercase font-semibold tracking-wider">Our Mission</h2>
            <h3 class="text-3xl lg:text-4xl font-bold">An Agency With Classic Revolutionary Skills!</h3>
            <div class="space-y-2">
                <h4 class="text-lg font-semibold">Your Success, Our Priority</h4>
                <p class="text-gray-300">At Vertakode, we believe in empowering our clients to achieve their goals. Our team works closely with you.</p>
            </div>
            <div class="space-y-2">
                <h4 class="text-lg font-semibold">Partners You Can Rely On</h4>
                <p class="text-gray-300">Landin is here to ensure your success with expert guidance and collaborative teamwork.</p>
            </div>
            <a href="#" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-full transition duration-300 ease-in-out">
                Contact Us
            </a>
        </div>
    </div>
</section>

<section class="relative px-6 py-24 bg-black text-white overflow-hidden">
  <!-- 🔹 Gambar segitiga kiri -->
  <img src="/storage/leftdetail.png" class="absolute bottom-0 left-0 h-[200px] object-contain z-0" />

  <!-- 🔹 Gambar segitiga kanan -->
  <img src="/storage/rightdetail.png" class="absolute bottom-0 right-0 h-[200px] object-contain z-0" />

  <!-- 🔸 Konten utama -->
  <div class="relative z-10 max-w-4xl mx-auto text-center">
    <p class="uppercase tracking-widest text-blue-400 text-sm">Latest Project</p>
    <h2 class="text-4xl md:text-4xl font-bold mt-4">Tools and Technologies<br>Powering Our Productivity</h2>
    <p class="mt-6 text-gray-400">Our toolkit is made up of the latest and most reliable tech to <br>ensure your project is executed to perfection.</p>
    
    <style>
  .glow-btn {
    box-shadow: 0 0 15px rgba(0, 132, 255, 0.6), 0 0 30px rgba(0, 132, 255, 0.3);
  }
</style>

  </div>
</section>

<div class="bg-black py-10">
    <div class="container mx-auto overflow-hidden">
        <div class="row-atas flex space-x-6 transition-transform duration-300 ease-linear will-change-transform">
            <div class="bg-gray-800 rounded-md shadow-md p-6 w-64 flex-shrink-0">
                <img src="{{ asset('icons/framer.svg') }}" alt="Framer" class="w-10 h-10 mb-2">
                <h3 class="text-white font-semibold">Framer</h3>
                <p class="text-gray-400 text-sm">Interactive design tool for UI prototyping and animation.</p>
            </div>
            <div class="bg-gray-800 rounded-md shadow-md p-6 w-64 flex-shrink-0">
                <img src="{{ asset('icons/tailwind.svg') }}" alt="Tailwind" class="w-10 h-10 mb-2">
                <h3 class="text-white font-semibold">Tailwind</h3>
                <p class="text-gray-400 text-sm">Utility-first CSS framework for flexible styling.</p>
            </div>
            <div class="bg-gray-800 rounded-md shadow-md p-6 w-64 flex-shrink-0">
                <img src="{{ asset('icons/nextjs.svg') }}" alt="Next.js" class="w-10 h-10 mb-2">
                <h3 class="text-white font-semibold">Next.js</h3>
                <p class="text-gray-400 text-sm">React framework for building fast and scalable web applications.</p>
            </div>
            <div class="bg-gray-800 rounded-md shadow-md p-6 w-64 flex-shrink-0">
                <img src="{{ asset('icons/java.svg') }}" alt="React" class="w-10 h-10 mb-2">
                <h3 class="text-white font-semibold">React</h3>
                <p class="text-gray-400 text-sm">A JavaScript library for building user interfaces.</p>
            </div>
            </div>
    </div>

    <div class="container mx-auto mt-8 overflow-hidden">
        <div class="row-bawah flex space-x-6 transition-transform duration-300 ease-linear will-change-transform">
            <div class="bg-gray-800 rounded-md shadow-md p-6 w-64 flex-shrink-0">
                <img src="{{ asset('icons/gsap.svg') }}" alt="GSAP" class="w-10 h-10 mb-2">
                <h3 class="text-white font-semibold">GSAP</h3>
                <p class="text-gray-400 text-sm">Powerful JavaScript animation library with high performance.</p>
            </div>
            <div class="bg-gray-800 rounded-md shadow-md p-6 w-64 flex-shrink-0">
                <img src="{{ asset('icons/oracle.svg') }}" alt="Oracle" class="w-10 h-10 mb-2">
                <h3 class="text-white font-semibold">Oracle</h3>
                <p class="text-gray-400 text-sm">Database management system for enterprise solutions.</p>
            </div>
            <div class="bg-gray-800 rounded-md shadow-md p-6 w-64 flex-shrink-0">
                <img src="{{ asset('icons/wordpress.svg') }}" alt="WordPress" class="w-10 h-10 mb-2">
                <h3 class="text-white font-semibold">WordPress</h3>
                <p class="text-gray-400 text-sm">Popular CMS for creating and managing websites easily.</p>
            </div>
            <div class="bg-gray-800 rounded-md shadow-md p-6 w-64 flex-shrink-0">
                <img src="{{ asset('icons/php.svg') }}" alt="PHP" class="w-10 h-10 mb-2">
                <h3 class="text-white font-semibold">PHP</h3>
                <p class="text-gray-400 text-sm">A widely-used open source general-purpose scripting language.</p>
            </div>
        </div>
    </div>
</div>
</body>

@include('partials.footer')