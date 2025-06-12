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

<section class="text-white pt-32 pb-0 relative overflow-hidden">
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

<section class="relative bg-black pb-15 -z-10">
    {{-- Background Unions --}}
    <img src="/storage/abstract.png" alt="Union Blue"
         class="absolute bottom-0 left-0 w-full z-0 pointer-events-none" />
</section>

<section class="relative bg-black pb-32 py-24">
    {{-- Background Unions --}}
    <img src="/storage/unionblue.png" alt="Union Blue"
         class="absolute bottom-0 xl:bottom-20 left-0 w-full max-h-96 md:max-h-[18rem] z-0 pointer-events-none" />

    {{-- unionblack: NAIKKAN KE z-20 dan angkat sedikit dari bawah --}}
    <img src="/storage/unionblack.png" alt="Union Black"
     class="absolute left-0 w-full z-20 pointer-events-none bottom-8 xl:bottom-20" />


    {{-- bordercenter: Biarkan di z-10 --}}
    <img src="/storage/bordercenter.png" alt="Border Center"
         class="absolute bottom-0 left-0 w-full z-50 pointer-events-none" />
</section>

<section class="bg-black py-16">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
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

<section class="relative py-24 bg-black text-white overflow-hidden">
  <div class="absolute flex h-full w-full justify-between">

  <div class="absolute inset-0 flex justify-between items-start pointer-events-none">
  <img src="/storage/leftdetail.png" 
       alt="Left Detail"
       class="relative top-80 h-16 sm:h-20 md:h-28 lg:h-32 w-auto z-50 left-2 sm:left-4 lg:left-8 transition-all duration-300" />

  <img src="/storage/rightdetail.png"
       alt="Right Detail"
       class="relative top-80 h-16 sm:h-20 md:h-28 lg:h-32 w-auto z-50 right-2 sm:right-4 lg:right-8 transition-all duration-300" />
</div>
       
</div>
  <!-- 🔸 Konten utama -->
  <div class="relative z-10 max-w-4xl mx-auto text-center">
    <p class="uppercase tracking-widest text-blue-400 text-sm">Latest Project</p>
    <h2 class="text-2xl md:text-5xl font-bold mt-4">Tools and Technologies<br>That Propel Your Success</h2>
    <p class="mt-6 text-gray-400">At the core of everything we do lies a commitment to delivering<br>measurable outcomes that drive your success.</p>
    


    <div class="mt-8">
      <a href="#"
   class="glow-btn inline-block bg-blue-600 text-white 
          text-sm sm:text-base 
          px-4 py-2 sm:px-6 sm:py-3 
          rounded-md font-medium shadow-lg 
          hover:scale-105 transition-all duration-300">
  Contact Us
</a>
    </div>
  </div>
</section>

<!-- Container utama -->
<div class="bg-black py-16">
  <div class="container mx-auto px-4 space-y-10">

    <!-- Baris Atas -->
    <div class="flex flex-wrap justify-center gap-6">
      <!-- Kartu Framer -->
      <div class="bg-gray-800 rounded-md shadow-md p-6 w-full sm:w-64">
        <img src="{{ asset('icons/framer.svg') }}" alt="Framer" class="w-10 h-10 mb-2">
        <h3 class="text-white font-semibold">Framer</h3>
        <p class="text-gray-400 text-sm">Interactive design tool for UI prototyping and animation.</p>
      </div>

      <!-- Kartu Tailwind -->
      <div class="bg-gray-800 rounded-md shadow-md p-6 w-full sm:w-64">
        <img src="{{ asset('icons/tailwind.svg') }}" alt="Tailwind" class="w-10 h-10 mb-2">
        <h3 class="text-white font-semibold">Tailwind</h3>
        <p class="text-gray-400 text-sm">Utility-first CSS framework for flexible styling.</p>
      </div>

      <!-- Kartu Next.js -->
      <div class="bg-gray-800 rounded-md shadow-md p-6 w-full sm:w-64">
        <img src="{{ asset('icons/nextjs.svg') }}" alt="Next.js" class="w-10 h-10 mb-2">
        <h3 class="text-white font-semibold">Next.js</h3>
        <p class="text-gray-400 text-sm">React framework for building fast and scalable web applications.</p>
      </div>

      <!-- Kartu React -->
      <div class="bg-gray-800 rounded-md shadow-md p-6 w-full sm:w-64">
        <img src="{{ asset('icons/java.svg') }}" alt="React" class="w-10 h-10 mb-2">
        <h3 class="text-white font-semibold">React</h3>
        <p class="text-gray-400 text-sm">A JavaScript library for building user interfaces.</p>
      </div>
    </div>

    <!-- Baris Bawah -->
    <div class="flex flex-wrap justify-center gap-6">
      <!-- Kartu GSAP -->
      <div class="bg-gray-800 rounded-md shadow-md p-6 w-full sm:w-64">
        <img src="{{ asset('icons/gsap.svg') }}" alt="GSAP" class="w-10 h-10 mb-2">
        <h3 class="text-white font-semibold">GSAP</h3>
        <p class="text-gray-400 text-sm">Powerful JavaScript animation library with high performance.</p>
      </div>

      <!-- Kartu Oracle -->
      <div class="bg-gray-800 rounded-md shadow-md p-6 w-full sm:w-64">
        <img src="{{ asset('icons/oracle.svg') }}" alt="Oracle" class="w-10 h-10 mb-2">
        <h3 class="text-white font-semibold">Oracle</h3>
        <p class="text-gray-400 text-sm">Database management system for enterprise solutions.</p>
      </div>

      <!-- Kartu WordPress -->
      <div class="bg-gray-800 rounded-md shadow-md p-6 w-full sm:w-64">
        <img src="{{ asset('icons/wordpress.svg') }}" alt="WordPress" class="w-10 h-10 mb-2">
        <h3 class="text-white font-semibold">WordPress</h3>
        <p class="text-gray-400 text-sm">Popular CMS for creating and managing websites easily.</p>
      </div>

      <!-- Kartu PHP -->
      <div class="bg-gray-800 rounded-md shadow-md p-6 w-full sm:w-64">
        <img src="{{ asset('icons/php.svg') }}" alt="PHP" class="w-10 h-10 mb-2">
        <h3 class="text-white font-semibold">PHP</h3>
        <p class="text-gray-400 text-sm">A widely-used open source general-purpose scripting language.</p>
      </div>
    </div>

  </div>
</div>


</body>

@include('partials.footer')