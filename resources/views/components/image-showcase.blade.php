<div class="w-full bg-black py-16 px-4">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
    
    {{-- Left Image --}}
    <div class="rounded-2xl overflow-hidden border border-neutral-700 bg-neutral-900 p-2">
      <img src="{{ $left }}" alt="{{ $leftAlt ?? 'Left Image' }}" class="w-full h-auto object-cover rounded-xl" />
    </div>
    
    {{-- Right Image --}}
    <div class="rounded-2xl overflow-hidden border border-neutral-700 bg-neutral-900 p-2">
      <img src="{{ $right }}" alt="{{ $rightAlt ?? 'Right Image' }}" class="w-full h-auto object-cover rounded-xl" />
    </div>

  </div>
</div>
