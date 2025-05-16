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
  <h5 class="uppercase tracking-widest text-blue-300 mb-4">Let's Work Together</h5>
  <h1 class="text-5xl md:text-6xl leading-tight mb-6">Get in touch for any<br>support and inquiries</h1>
  <p class="text-gray-300 text-sm md:text-base mb-8 max-w-xl mx-auto">
    We're all ears! Talk to us about your needs, and we’ll provide the best possible solution.
  </p>
  <a href="{{ route('contact') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition">
    Contact Us
  </a>
</section>



<form action="{{ route('contact.store') }}" method="POST" class="mx-auto mb-10 w-full max-w-4xl bg-black space-y-6 p-6 rounded-lg border border-gray-800 shadow-xl">
    @csrf
    <div class="grid md:grid-cols-2 gap-4">
        <div>
            <label class="text-white">First name*</label>
            <input type="text" name="first_name" class="w-full p-2 rounded bg-gray-900 text-white" required>
        </div>
        <div>
            <label  class="text-white">Last name*</label>
            <input type="text" name="last_name" class="w-full p-2 rounded bg-gray-900 text-white" required>
        </div>
    </div>

    <div>
        <label  class="text-white">How can we reach you?*</label>
        <input type="email" name="email" class="w-full p-2 rounded bg-gray-900 text-white" required>
    </div>

    <div class="grid md:grid-cols-2 gap-4">
        <div>
            <label  class="text-white">Where are you from?*</label>
            <select name="country" class="w-full p-2 rounded bg-gray-900 text-white" required>
                <option value="">Select your country...</option>
                <option value="Indonesia">Indonesia</option>
                <option value="United States">United States</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Others">Others</option>
                <!-- Add more -->
            </select>
        </div>
        <div>
            <label  class="text-white">Type of company?*</label>
            <select name="company_type" class="w-full p-2 rounded bg-gray-900 text-white" required>
                <option value="">Select Category</option>
                <option value="Startup">Startup</option>
                <option value="Education">Education</option>
                <option value="Startup">Startup</option>
                <!-- Add more -->
            </select>
        </div>
    </div>

    <div>
        <label  class="text-white">Messages*</label>
        <textarea name="message" rows="5" class="w-full p-2 rounded bg-gray-800 text-white" required></textarea>
    </div>

    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-cyan-500 text-white py-3 rounded">Submit Now</button>
</form>

@if (session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded">
        {{ session('success') }}
    </div>
@endif

<section class="relative bg-black py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center text-white">
            <!-- Phone Column -->
            <div class="flex flex-col items-center">
                <div class="bg-gray-800 rounded-full p-6 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Phone</h3>
                <p class="text-gray-400">081283588801</p>
            </div>

            <!-- Mail Column -->
            <div class="flex flex-col items-center">
                <div class="bg-gray-800 rounded-full p-6 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Mail</h3>
                <p class="text-gray-400">Vertakode@gmail.com</p>
                <p class="text-gray-400">vncstudio@gmail.com</p>
            </div>

            <!-- Social Media Column -->
            <div class="flex flex-col items-center">
                <div class="bg-gray-800 rounded-full p-6 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Social Media</h3>
                <p class="text-gray-400">Instagram</p>
                <p class="text-gray-400">X</p>
                <p class="text-gray-400">LinkedIn</p>
                <p class="text-gray-400">Facebook</p>
            </div>
        </div>
    </div>
</section>

<!-- Trapesium Section (yang sudah ada) -->
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

</body>

@include('partials.footer')