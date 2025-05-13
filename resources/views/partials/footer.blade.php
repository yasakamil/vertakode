<section class="bg-black text-white py-24 px-4">
  <div class="max-w-2xl mx-auto text-center mb-12">
    <h2 class="text-3xl font-semibold">Frequently Asked Question</h2>
    <p class="text-gray-400 mt-2 text-sm">
      Find answers to common questions about our design services, subscription plans, and how we work.
    </p>
  </div>

  <div class="max-w-2xl mx-auto space-y-4">
    <!-- FAQ item -->
    <div class="bg-neutral-900 rounded-lg overflow-hidden">
      <button class="faq-toggle w-full flex justify-between items-center px-6 py-4 focus:outline-none">
        <span class="text-left font-medium">What is Vertacode?</span>
        <span class="text-white text-xl transition-transform duration-300">+</span>
      </button>
      <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 text-gray-400 text-sm">
        <div class="py-4">
          Vertacode is a website development agency that specializes in creating high-quality, user-friendly, and performance-optimized websites tailored to meet business needs.
        </div>
      </div>
    </div>

    <!-- FAQ lainnya tinggal duplikat item ini -->
    <div class="bg-neutral-900 rounded-lg overflow-hidden">
      <button class="faq-toggle w-full flex justify-between items-center px-6 py-4 focus:outline-none">
        <span class="text-left font-medium">What is the turnaround time for projects?</span>
        <span class="text-white text-xl transition-transform duration-300">+</span>
      </button>
      <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 text-gray-400 text-sm">
        <div class="py-4">
          Turnaround times very based on the complexity and scope of the project. Typically, smaller projects are completed within a few days, while more extensive work may take a few weeks. We provide estimated delivery times upfront and keep you updated throughout the process.
        </div>
      </div>
    </div>

    <!-- Tambah item lainnya sama aja caranya -->
    <div class="bg-neutral-900 rounded-lg overflow-hidden">
      <button class="faq-toggle w-full flex justify-between items-center px-6 py-4 focus:outline-none">
        <span class="text-left font-medium">How can I get started with Vertacode?</span>
        <span class="text-white text-xl transition-transform duration-300">+</span>
      </button>
      <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 text-gray-400 text-sm">
        <div class="py-4">
          Simply reach out to us via our website or contact us on Whatsapp. We will schedule a consultation to discuss your project requirements and get started.
        </div>
      </div>
    </div>

    <div class="bg-neutral-900 rounded-lg overflow-hidden">
      <button class="faq-toggle w-full flex justify-between items-center px-6 py-4 focus:outline-none">
        <span class="text-left font-medium">Do you provide custom website designs?</span>
        <span class="text-white text-xl transition-transform duration-300">+</span>
      </button>
      <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 text-gray-400 text-sm">
        <div class="py-4">
          Yes, we create fully customized website designs to align with your brand identity and business objectives.
        </div>
      </div>
    </div>

    <div class="bg-neutral-900 rounded-lg overflow-hidden">
      <button class="faq-toggle w-full flex justify-between items-center px-6 py-4 focus:outline-none">
        <span class="text-left font-medium">Can Vertacode redesign an existing website?</span>
        <span class="text-white text-xl transition-transform duration-300">+</span>
      </button>
      <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 text-gray-400 text-sm">
        <div class="py-4">
          Absolutely! We can revamp and enhance your existing website to improve its aesthetics, functionality, and performance.
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.faq-toggle').forEach(btn => {
    btn.addEventListener('click', () => {
      const content = btn.nextElementSibling;
      const icon = btn.querySelector('span:last-child');

      const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

      // Close all other FAQs (optional)
      document.querySelectorAll('.faq-content').forEach(faq => {
        faq.style.maxHeight = '0px';
      });
      document.querySelectorAll('.faq-toggle span:last-child').forEach(ic => {
        ic.textContent = '+';
      });

      // Open this one if it was closed
      if (!isOpen) {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.textContent = '−';
      }
    });
  });
</script>


<section class="relative bg-black text-white overflow-hidden">
  <!-- Video Background -->
<video
  autoplay
  muted
  loop
  playsinline
  class="absolute top-0 left-0 w-full h-full object-cover z-0"
>
  <source src="/storage/videofooter.mp4" type="video/mp4" />
  Your browser does not support the video tag.
</video>

<!-- Extra Blur Overlay (Top Fade) -->
<div class="absolute top-0 left-0 w-full h-40 bg-gradient-to-b from-black via-black/50 to-transparent backdrop-blur-md z-10"></div>

<!-- Main Overlay -->
<div class="absolute top-0 left-0 w-full h-full bg-black/60 z-10"></div>


  <!-- Content -->
  <div class="relative z-20 flex flex-col items-center justify-center text-center px-4 py-24">
    <h2 class="text-4xl md:text-5xl font-semibold mb-4">
      Unlock Your Brand’s<br />
      <span class="font-bold">Full Potential</span>
    </h2>
    <p class="text-gray-300 max-w-xl mb-6">
      Ready to elevate your brand? Schedule a call to discuss your project and discover how we can bring your vision to life.
    </p>
    <button class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-2 rounded-full shadow-md transition">
      Contact Us
    </button>

    <div class="flex gap-4 mt-6 text-2xl">
  <a href="#"><img src="/icons/xwhite.svg" alt="X" class="h-6 w-6"></a>
  <a href="#"><img src="/icons/instagramwhite.svg" alt="Instagram" class="h-6 w-6"></a>
  <a href="#"><img src="/icons/facebook.svg" alt="Facebook" class="h-6 w-6"></a>
  <a href="#"><img src="/icons/linkedin.svg" alt="LinkedIn" class="h-6 w-6"></a>
</div>
  </div>

  <!-- Bottom Navigation -->
  <div class="relative z-20 mt-12 pt-6 text-sm px-4 flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto py-10">
    <p class="text-gray-400 mb-4 md:mb-0">Part of <span class="text-white font-semibold">VNC Studio</span></p>
    <div class="flex space-x-6 text-gray-300 mb-4 md:mb-0">
      <a href="#">Why Us</a>
      <a href="#">Projects</a>
      <a href="#">Community</a>
      <a href="#">Brand Values</a>
    </div>
    <p class="text-gray-500">© 2025 Vertacode Rights Reserved.</p>
  </div>
</section>