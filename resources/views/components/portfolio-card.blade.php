@props(['title', 'year', 'image', 'link'])

<a href="{{ $link }}">
    <div class="relative w-full max-w-xl rounded-3xl overflow-hidden shadow-xl border border-[#1A2233] bg-[#0B0F19] transition-transform hover:scale-[1.02] duration-200">
        <!-- Gambar -->
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-[420px] object-cover" />

        <!-- Konten floating -->
        <div class="absolute bottom-6 left-6 right-6 bg-black/50 p-5 rounded-2xl shadow-lg backdrop-blur-md">
            <div class="flex justify-between items-center">
                <h3 class="text-white font-semibold text-lg">{{ $title }}</h3>
                <span class="text-sm bg-[#12223C] text-white px-3 py-1 rounded-xl">{{ $year }}</span>
            </div>
        </div>
    </div>
</a>
