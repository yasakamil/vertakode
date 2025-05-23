<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home with Video</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative min-h-screen overflow-x-hidden">

@include('partials.navbar')

<!-- Hero Section -->
<section class="relative w-full h-screen overflow-hidden">

  <!-- 🔥 Video sebagai background -->
  <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-[-10]">
    <source src="{{ asset('/storage/bluewave.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Optional blur / efek -->
  <div class="absolute inset-0 backdrop-blur-lg z-[-5]"></div>

    <!-- ✨ Blur transisi bawah -->
  <img 
    src="{{ asset('/storage/rectangleblur.png') }}" 
    alt="blur transition" 
    class="absolute bottom-[-100px] left-0 w-full z-0 pointer-events-none select-none" 
  />

  <!-- Konten di atas video -->
  <div class="relative flex items-center h-full px-8 text-left mx-auto max-w-4xl">
    <div>
      <h1 class="text-5xl sm:text-8xl leading-tight text-left text-white">
        Turning Ideas into <br />
        <span class="text-white">Digital Reality</span>
      </h1>

      <p class="mt-6 max-w-2xl text-gray-300 text-left">
        Your website is more than just a platform—it’s your identity in the digital world. 
        At Vertakode, we create websites that are visually stunning, highly functional, and uniquely yours.
      </p>

      <div class="mt-8 flex flex-wrap gap-4">
        <a href="#" class="glow-btn bg-white text-black px-6 py-3 rounded-md font-medium shadow hover:bg-gray-100 transition">
          Connect With Us
        </a>
        <a href="#" class="glow-btn bg-[#3232ec] text-white px-6 py-3 rounded-md font-medium shadow hover:bg-[#2c2cd4] transition">
          What is Vertakode?
        </a>
      </div>
      <div class="logo-slider-container absolute w-full overflow-hidden py-8">
    <div class="animate-infinite-scroll flex w-max space-x-8">
        <div class="flex space-x-8">
            <img src="{{ asset('storage/metrilogo.png') }}" alt="Metri Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/citilinklogo.png') }}" alt="ProGamer Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/progamerlogo.png') }}" alt="Citilink Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/greyfurtlogo.png') }}" alt="Citilink Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/reshoeslogo.png') }}" alt="Citilink Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/royalsguardlogo.png') }}" alt="Citilink Logo" class="h-8 md:h-10">
            </div>
        <div class="flex space-x-8">
            <img src="{{ asset('storage/metrilogo.png') }}" alt="Metri Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/citilinklogo.png') }}" alt="ProGamer Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/progamerlogo.png') }}" alt="Citilink Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/greyfurtlogo.png') }}" alt="Citilink Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/reshoeslogo.png') }}" alt="Citilink Logo" class="h-8 md:h-10">
            <img src="{{ asset('storage/royalsguardlogo.png') }}" alt="Citilink Logo" class="h-8 md:h-10">
            </div>
    </div>
</div>
    </div>
  </div>
</section>


<section class="relative px-6 py-24 bg-black text-white overflow-hidden">
  <!-- 🔹 Gambar segitiga kiri -->
<img src="/storage/leftdetail.png"
     class="absolute bottom-0 left-0 h-[60px] sm:h-[100px] md:left-0 md:h-[120px] lg:left-50 lg:h-[250px] object-contain z-0" />
  <!-- 🔹 Gambar segitiga kanan -->
<img src="/storage/rightdetail.png"
     class="absolute bottom-0 right-0 h-[60px] sm:h-[100px] md:right-0 md:h-[120px] lg:right-50 lg:h-[250px] object-contain z-0" />
  <!-- 🔸 Konten utama -->
  <div class="relative z-10 max-w-4xl mx-auto text-center">
    <p class="uppercase tracking-widest text-blue-400 text-sm">Latest Project</p>
    <h2 class="text-4xl md:text-5xl font-bold mt-4">Delivering Tangible Results<br>That Propel Your Success</h2>
    <p class="mt-6 text-gray-400">At the core of everything we do lies a commitment to delivering<br>measurable outcomes that drive your success.</p>
    


    <div class="mt-8">
      <a href="#" class="glow-btn inline-block bg-blue-600 text-white px-6 py-3 rounded-md font-medium shadow-lg hover:scale-105 transition-all duration-300 glow-btn">
        Contact Us
      </a>
    </div>
  </div>
</section>

<div class="flex justify-center flex-wrap gap-30 bg-black p-10 min-h-screen">
    <!-- Card Citilink -->
    <div class="relative w-105 h-126 rounded-2xl overflow-hidden group border border-gray-700 shadow-lg">
        <img src="/storage/citilinkpesawat.png" alt="Citilink Background" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        <div class="absolute bottom-1 left-1 right-1 p-4 bg-black/80 backdrop-blur-md rounded-lg">
            <div class="flex items-center mb-2">
                <img src="/storage/citilinklogo.png" alt="Citilink Logo" class="h-6 mr-2">
                <span class="text-white font-semibold text-sm">PT Citilink Indonesia</span>
            </div>
            <p class="text-gray-400 text-xs leading-relaxed">
                Create an engaging company profile that effectively communicates its identity and vision.
            </p>
            <button class="mt-4 bg-gray-800 hover:bg-gray-700 text-white font-semibold py-1.5 px-3 rounded-md text-xs">
                Ticketing Website
            </button>
        </div>
    </div>
    

    <!-- Card Greyfurt -->
    <div class="relative w-105 h-126 rounded-2xl overflow-hidden group border border-gray-700 shadow-lg">
        <img src="/storage/greyfurtbalonudara.png" alt="Greyfurt Background" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        <div class="absolute bottom-1 left-1 right-1 p-4 bg-black/80 backdrop-blur-md rounded-lg">
            <div class="flex items-center mb-2">
                <img src="/storage/greyfurtlogo.png" alt="Greyfurt Logo" class="h-6 mr-2">
                <span class="text-white font-semibold text-sm">Greyfurt Tour International</span>
            </div>
            <p class="text-gray-400 text-xs leading-relaxed">
                Create an engaging company profile that effectively communicates its identity and vision.
            </p>
            <button class="mt-4 bg-gray-800 hover:bg-gray-700 text-white font-semibold py-1.5 px-3 rounded-md text-xs">
                Company Profile
            </button>
        </div>
    </div>

    <!-- Card Metri -->
    <div class="relative w-105 h-126 rounded-2xl overflow-hidden group border border-gray-700 shadow-lg">
        <img src="/storage/metriorang.png" alt="Metri Background" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        <div class="absolute bottom-1 left-1 right-1 p-4 bg-black/80 backdrop-blur-md rounded-lg">
            <div class="flex items-center mb-2">
                <img src="/storage/metrilogo.png" alt="Metri Logo" class="h-6 mr-2">
                <span class="text-white font-semibold text-sm">PT Media Tren Idea</span>
            </div>
            <p class="text-gray-400 text-xs leading-relaxed">
                Create an engaging company profile that effectively communicates its identity and vision.
            </p>
            <button class="mt-4 bg-gray-800 hover:bg-gray-700 text-white font-semibold py-1.5 px-3 rounded-md text-xs">
                Company Profile
            </button>
        </div>
    </div>
  </div>
</div>

<section class="relative bg-black pb-32 py-24">
  {{-- Background Unions --}}
  <img src="/storage/unionblue.png" alt="Union Blue"
       class="absolute bottom-0 left-0 w-full max-h-96 md:max-h-[30rem] z-0 pointer-events-none" />

  {{-- unionblack: timpa di atas unionblue --}}
  <img src="/storage/unionblack.png" alt="Union Black"
       class="absolute left-0 w-full z-10 pointer-events-none
              bottom-6 sm:bottom-10 md:bottom-16 lg:bottom-32" />

  {{-- bordercenter --}}
  <img src="/storage/bordercenter.png" alt="Border Center"
       class="absolute bottom-0 left-0 w-full z-10 pointer-events-none" />
</section>



<section class="bg-black text-white py-0 px-6 md:px-48 relative">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
        <div>
            <h2 class="text-3xl md:text-4xl font-semibold leading-tight">
                Innovative Problem-Solving for<br />Your Business Needs
            </h2>
        </div>
        <div class="mt-4 md:mt-0">
            <span class="text-sm text-blue-500 font-semibold tracking-wide">
                BRAND VALUES
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 6; $i++)
            <div class="bg-gradient-to-br from-[#122c52] to-[#091d31] p-6 rounded-xl shadow-md hover:scale-[1.02] transition-transform">
                {{-- Icon --}}
                <div class="mb-4">
                    <img src="{{ asset('icons/icon' . $i . '.svg') }}" alt="Icon {{ $i }}" class="w-8 h-8" />
                </div>
                {{-- Title --}}
                <h3 class="text-lg font-semibold mb-2">
                    {{ $i % 3 == 1 ? 'Focusing on Your Business' : ($i % 3 == 2 ? 'Developing Tailored Solutions' : 'Scalability and Innovation') }}
                </h3>
                {{-- Description --}}
                <p class="text-sm text-gray-300 mb-6">
                    {{ $i % 3 == 1 ? 'We start by gaining a deep understanding of your business goals.' :
                        ($i % 3 == 2 ? 'Next, our team of experts develops tailored solutions.' :
                        'We leverage cutting-edge technology to implement seamless innovation.') }}
                </p>
                {{-- Stage Button --}}
                <button class="bg-black border border-gray-700 text-white text-sm px-4 py-1.5 rounded">
                    Stage {{ $i }}
                </button>
            </div>
        @endfor
    </div>
</section>

<section class="bg-black text-white px-6 md:px-48 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        {{-- Kiri --}}
        <div>
            <span class="text-sm text-blue-500 font-semibold tracking-wide mb-2 block">COMMUNITY</span>
            <h2 class="text-3xl md:text-4xl font-semibold mb-4 leading-none">
                Get High-Quality
            </h2>
            <h2 class="text-3xl md:text-4xl font-semibold mb-4 leading-none text-gray-400">
              Clear Services <br>Remotely.</h2>
            <p class="text-gray-300 mb-6 max-w-md">
                Discover our range of services designed to elevate your brand and propel your business to next level.
            </p>
            <div class="flex gap-6 text-blue-500 text-sm items-center">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('icons/instagram.svg') }}" alt="Instagram" class="w-5 h-5" />
                    Instagram
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('icons/youtube.svg') }}" alt="YouTube" class="w-5 h-5" />
                    Youtube
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('icons/tiktok.svg') }}" alt="TikTok" class="w-5 h-5" />
                    Tiktok
                </div>
            </div>
        </div>

        {{-- Kanan --}}
        <div class="grid grid-cols-2 gap-12 text-white text-sm">
            <div>
                <h3 class="text-7xl font-semibold">10+</h3>
                <p class="text-gray-400 mt-1">Industries Impacted</p>
                <div class="border-b border-blue-500 mt-3"></div>
            </div>
            <div>
                <h3 class="text-7xl font-semibold">2</h3>
                <p class="text-gray-400 mt-1">Years of Service</p>
                <div class="border-b border-blue-500 mt-3"></div>
            </div>
            <div>
                <h3 class="text-7xl font-semibold">2</h3>
                <p class="text-gray-400 mt-1">Countries Served</p>
                <div class="border-b border-blue-500 mt-3"></div>
            </div>
            <div>
                <h3 class="text-7xl font-semibold">6+</h3>
                <p class="text-gray-400 mt-1">Project Served</p>
                <div class="border-b border-blue-500 mt-3"></div>
            </div>
        </div>
    </div>

    <img src="/storage/line.png" alt="Union Black" class="mt-35 px-48"/>
</section>

<section class="bg-black text-white py-24 px-4 text-center">
  <p class="text-sm tracking-widest text-blue-500 uppercase mb-4">Services</p>
  <h2 class="text-3xl sm:text-4xl font-bold mb-2">We Just Don’t Design, We Build.</h2>
  <p class="text-xl sm:text-2xl text-gray-300">If You Can Dream It, We Can Play It!</p>
</section>


<section id="our-services" class="bg-black relative min-h-screen flex items-center justify-center">
  <!-- Text "OUR SERVICES" besar dan glowing di belakang -->
  <h2 class="absolute text-[50px] text-white/10 tracking-wider z-0 select-none glow-text">
    OUR SERVICES
  </h2>

  <!-- Stack card yang tetap punya ID buat trigger ScrollTrigger -->
  <div id="card-stack" class="relative w-[300px] h-[350px] z-10">
    <!-- Card 1 -->
    <div class="card absolute top-0 left-0 w-[250px] h-[300px] rotate-[-5deg] -translate-x-4 -translate-y-2 z-10 shadow-md rounded-xl overflow-hidden">
      <img src="/storage/abstract1.png" class="w-full h-full object-cover" alt="Card 1">
      <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent text-white text-4xl font-light p-4 leading-tight">
        UI/UX <br>Design
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card absolute top-0 left-0 w-[250px] h-[300px] rotate-[6deg] translate-x-6 -translate-y-3 z-20 shadow-md rounded-xl overflow-hidden">
      <img src="/storage/abstract2.png" class="w-full h-full object-cover" alt="Card 2">
      <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent text-white text-4xl font-light p-4 leading-tight">
        Software <br>Development
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card absolute top-0 left-0 w-[250px] h-[300px] rotate-[-3deg] -translate-x-3 translate-y-6 z-30 shadow-md rounded-xl overflow-hidden">
      <img src="/storage/abstract3.png" class="w-full h-full object-cover" alt="Card 3">
      <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent text-white text-4xl font-light p-4 leading-tight">
        Website <br>Development
      </div>
    </div>

    <!-- Card 4 -->
    <div class="card absolute top-0 left-0 w-[250px] h-[300px] rotate-[2deg] translate-x-4 translate-y-2 z-40 shadow-lg rounded-xl overflow-hidden">
      <img src="/storage/abstract4.png" class="w-full h-full object-cover" alt="Card 4">
      <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent text-white text-4xl font-light p-4 leading-tight">
        IT <br>Consultant
      </div>
    </div>
  </div>
</section>





@include('partials.footer')

</body>
</html>
