<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home with Video</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('partials.navbar')

<section class="relative w-full py-38 px-6 md:px-12 overflow-hidden">

  <!-- 🔵 Background gambar blur -->
  <img 
    src="{{ asset('/storage/rectangleblue.png') }}" 
    alt="background blur" 
    class="absolute inset-0 w-full h-full object-cover z-[-1]" 
  />

  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- 📘 Kiri: Title & Deskripsi -->
    <div>
      <!-- Tanggal -->
      <div class="inline-flex items-center gap-2 bg-blue-600/20 text-blue-400 text-sm px-4 py-1 rounded-full mb-6">
        <span class="font-semibold">DATE</span>
        <span>16/09/2024</span>
      </div>

      <!-- Judul -->
      <h2 class="text-white text-5xl md:text-6xl font-bold mb-6 leading-tight">
        Way Fields <br /> Studios
      </h2>

      <!-- Deskripsi -->
      <p class="text-gray-300 text-lg mb-8 max-w-xl">
        Way Field Studios is a cutting-edge creative agency that brings innovative designs and strategic solutions to life.
      </p>

      <!-- Tags -->
      <div class="flex flex-wrap gap-3">
        <span class="px-4 py-1 rounded-full bg-white/10 text-white text-sm border border-white/10">
          E-Commerce
        </span>
        <span class="px-4 py-1 rounded-full bg-white/10 text-white text-sm border border-white/10">
          Portfolio
        </span>
      </div>
    </div>

    <!-- 📘 Kanan: Detail Info -->
    <div class="bg-white/5 rounded-2xl border border-white/10 p-8 backdrop-blur-md shadow-xl text-white space-y-6">
      <div>
        <p class="text-sm text-gray-400">Services</p>
        <p class="font-medium text-lg">Web design & Web development</p>
      </div>
      <div>
        <p class="text-sm text-gray-400">Category</p>
        <p class="font-medium text-lg">Artist E-Commerce Portfolio</p>
      </div>
      <div>
        <p class="text-sm text-gray-400">Client</p>
        <p class="font-medium text-lg">Marco S Pentaclay</p>
      </div>
      <div>
        <a href="#" class="glow-btn inline-block mt-4 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md transition">
          View Live Website
        </a>
      </div>
    </div>

  </div>
</section>

<section class="w-full overflow-hidden bg-black py-16">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-10 lg:px-20">
    <img 
      src="{{ asset('storage/citilinkpesawat.png') }}" 
      alt="Mockup Project Showcase" 
      class="rounded-2xl overflow-hidden border border-neutral-700 bg-neutral-900 p-2"
    />
  </div>
</section>

<section class="w-full bg-black text-white py-16">
  <div class="max-w-5xl mx-auto px-4 text-left">
    <h2 class="text-3xl md:text-4xl font-semibold mb-4">
      Analysis – Performance and Responsiveness
    </h2>
    <hr class="border-gray-700 mb-6" />
    
    <p class="text-gray-300 mb-10 leading-relaxed">
      We prioritize optimal performance and seamless responsiveness across all devices. Our approach ensures fast loading times and smooth navigation, providing an excellent user experience on both desktop and mobile.
    </p>

    <!-- Performance Section -->
    <div class="mb-10">
      <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
        Performance 
        <span class="bg-blue-600 text-xs font-semibold text-white px-2 py-0.5 rounded-full">SEO</span>
      </h3>
      <ul class="text-gray-300 space-y-2 list-disc list-inside text-sm sm:text-base">
        <li><strong>Fast Loading Speed:</strong> We optimize images, scripts, and resources to ensure quick load times.</li>
        <li><strong>Optimized Code:</strong> Clean and efficient coding practices are employed to reduce unnecessary elements.</li>
        <li><strong>Scalability:</strong> Our performance–focused design ensures your website can handle increased traffic.</li>
      </ul>
    </div>

    <!-- Responsiveness Section -->
    <div>
      <h3 class="text-xl font-semibold mb-2">Responsiveness</h3>
      <p class="text-gray-300 leading-relaxed">
        Responsiveness is key to delivering an exceptional user experience across all devices. We ensure that your website adjusts seamlessly to different screen sizes, from mobile phones to desktops, providing a consistent and intuitive interface. With fast load times and optimized navigation, users will enjoy smooth interactions no matter how they access your site.
      </p>
    </div>
  </div>
</section>

<x-image-showcase 
  left="{{ asset('storage/citilinkpesawat.png') }}" 
  leftAlt="Dark Watch"
  right="{{ asset('storage/metriorang.png') }}" 
  rightAlt="Orange Watch" 
/>

<section class="w-full bg-black text-white py-16">
  <div class="max-w-5xl mx-auto px-4 text-left">
    <h2 class="text-3xl md:text-4xl font-semibold mb-4">
      Problem - Site and Service Improvement
    </h2>
    <hr class="border-gray-700 mb-6" />
    
    <p class="text-gray-300 mb-10 leading-relaxed">
      Identifying and addressing areas for improvement is essential to maintaining a high-quality user experience. Whether it's optimizing site speed, enhancing service offerings, or refining design elements, continuous improvement is key.
    </p>

    <!-- Site and service Section -->
    <div class="mb-10">
      <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
        Site and Service Improvement 
        <span class="bg-blue-600 text-xs font-semibold text-white px-2 py-0.5 rounded-full">SEO</span>
      </h3>
      <p class="text-gray-300 mb-10 leading-relaxed">
        To stay ahead in a competitive market, it's vital to constantly assess and improve your website and services. We dive deep into performance analytics, user behavior, and customer feedback to uncover pain points and areas for enhancement. From optimizing load times and refining user interfaces to improving service features and functionality.
      </p>
    </div>
  </div>
</section>

<section class="w-full overflow-hidden bg-black py-10">
  <div class="max-w-screen-xl mx-auto px-20">
    <img 
      src="{{ asset('storage/citilinkpesawat.png') }}" 
      alt="Mockup Project Showcase" 
      class="rounded-2xl overflow-hidden border border-neutral-700 bg-neutral-900 p-2"
    />
  </div>
</section>

<section class="w-full bg-black text-white py-16">
  <div class="max-w-5xl mx-auto px-4 text-left">
    <h2 class="text-3xl md:text-4xl font-semibold mb-4">
      Solution - Communication and Deployment
    </h2>
    <hr class="border-gray-700 mb-6" />
    
    <p class="text-gray-300 mb-10 leading-relaxed">
      Effective communication and smooth deployment are at the heart of our process. We keep you informed every step of the way, ensuring your vision is brought to life exactly as you imagined. Our team collaborates closely with you to address any questions or concerns.
    </p>

    <!-- Site and service Section -->
    <div class="mb-10">
      <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
        Communication
        <span class="bg-blue-600 text-xs font-semibold text-white px-2 py-0.5 rounded-full">EMAIL</span>
      </h3>
      <p class="text-gray-300 mb-10 leading-relaxed">
        Clear communication and efficient deployment are essential to the success of any project. We maintain open lines of communication throughout the entire process, ensuring your goals and expectations are met. Our team actively listens and collaborates with you to refine details and offer guidance. When it’s time to deploy, we ensure a smooth transition, handling all technical aspects to guarantee a flawless launch.
      </p>
    </div>
  </div>
</section>

<section class="bg-black py-4 px-4 md:px-12 lg:px-24 text-white">
  <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10 text-center md:text-left">
    <h2 class="text-3xl md:text-6xl">More Other cases</h2>

    <a href="{{ route('portfolio') }}" class="mt-4 md:mt-0 inline-block px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 transition text-white font-medium shadow-lg shadow-blue-500/20">
      View more works
    </a>
  </div>

  <div class="flex flex-wrap gap-6 justify-center">
    <x-portfolio-card title="Metri" year="2025" image="/storage/metriorang.png" :link="route('portfolio-inside')" />
    <x-portfolio-card title="Greyfurt" year="2025" image="/storage/greyfurtbalonudara.png" :link="route('portfolio-inside')" />
    <x-portfolio-card title="Vincere" year="2025" image="/storage/abstractshape.png" :link="route('portfolio-inside')" />
  </div>
</section>


@include('partials.footer')