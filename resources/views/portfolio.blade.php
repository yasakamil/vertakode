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

<section 
  class="bg-cover bg-center text-white py-32 px-4 text-center" 
  style="background-image: url('{{ asset('storage/rectangleblue.png') }}');"
>
  <h5 class="uppercase tracking-widest text-blue-300 mb-4">Explore Our Portfolio</h5>
  <h1 class="text-5xl md:text-6xl leading-tight mb-6">Check Out Some<br>Extra-Ordinary Work.</h1>
  <p class="text-gray-300 text-sm md:text-base mb-8 max-w-xl mx-auto">
    From startups to established brands, we create 
tailored solutions that drive success and make a real impact.
  </p>
  <a href="{{ route('contact') }}" class="glow-btn bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition">
    Build Your Product
  </a>
</section>


<div class="flex flex-wrap gap-6 justify-center">
    <x-portfolio-card title="Citilink" year="2023" image="/storage/citilinkpesawat.png" :link="route('about')"/>
    <x-portfolio-card title="Metri" year="2025" image="/storage/metriorang.png" :link="route('about')"/>
    <x-portfolio-card title="Greyfurt" year="2025" image="/storage/greyfurtbalonudara.png" :link="route('about')"/>
    <x-portfolio-card title="Vincere" year="2025" image="/storage/abstractshape.png" :link="route('about')" />
</div>



</body>

@include('partials.footer')