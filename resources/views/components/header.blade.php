@props([
    'title' => 'Judul Halaman',
    'description' => 'Ini adalah halaman-halaman yang menyediakan informasi tentang Yayasan Bina Salamah.',
    'image' => null,
])


<div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-20">
  <img src="{{ $image }}" alt="{{ $title }}" class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center" />
  <div class="absolute inset-0 -z-10 bg-gray-900/70" aria-hidden="true"></div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">{{ $title }}</h1>
      <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8">{{ $description }}</p>
    </div>
  </div>
</div>
