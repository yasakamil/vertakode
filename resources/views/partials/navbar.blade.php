<nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-lg bg-black/50 border-b border-white/10">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-22 items-center justify-between">
      
      <!-- Mobile menu button -->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button id="mobile-menu-button" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none">
          <span class="sr-only">Toggle menu</span>
          <svg id="icon-open" class="block size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg id="icon-close" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Logo dan menu desktop -->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex items-center">
          <img class="h-8 w-auto ml-6" src="/storage/union.png" alt="Logo">
        </div>

        <div class="border-l-2 border-gray-400 h-8 mx-4 ml-12 hidden sm:block"></div>

        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a href="{{ route('home') }}" class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
            <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
            <a href="{{ route('portfolio') }}" class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Portfolio</a>
            <a href="{{ route('contact') }}" class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
            <a href="#faq" class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">FAQ</a>
          </div>
        </div>
      </div>

      <!-- Get in Touch button -->
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 hidden sm:block">
        <a href="mailto:contact@yourcompany.com" class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 mr-6">
          Get in Touch
        </a>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden sm:hidden px-4 pb-4 space-y-1">
    <a href="{{ route('home') }}" class="block rounded-md px-3 py-2 text-base font-medium text-white bg-gray-900">Home</a>
    <a href="{{ route('about') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
    <a href="{{ route('portfolio') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Portfolio</a>
    <a href="{{ route('contact') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
    <a href="#faq" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">FAQ</a>
  </div>
</nav>
