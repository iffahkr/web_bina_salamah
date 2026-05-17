<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    @include('partials.navbar')
    <div class="bg-white">
    <div x-data="{ active: 0 }" class="relative w-auto max-w-2xl mx-auto top-20">

    <div class="overflow-hidden rounded-xl">
        <div class="flex transition-transform duration-500"
             :style="'transform: translateX(-' + active * 100 + '%)'">

            <img src="{{ asset('images/2section-2.jpeg') }}" class="w-full shrink-0">
            <img src="{{ asset('images/3-section2.jpeg') }}" class="w-full shrink-0">
            <img src="{{ asset('images/section-2.jpeg') }}" class="w-full shrink-0">
        </div>
    </div>

    <button @click="active = (active === 0) ? 2 : active - 1"
        class="absolute left-2 top-1/2 -translate-y-1/2 px-3 py-1 rounded">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>

    </button>

    <button @click="active = (active === 2) ? 0 : active + 1"
        class="absolute right-2 top-1/2 -translate-y-1/2 px-3 py-1 rounded">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>

    </button>

</div>
  <div class="relative isolate px-6 pt-14 lg:px-20 from-yellow-900 to-blue-900">
    <div aria-hidden="true" class="absolute inset-x-10 -top-100 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
      <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-blue-300 to-yellow-300 opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
    </div>
    <div class="mx-3 py-10 sm:py-10 lg:py-14">
      <div class="flex flex-row text-left justify-between">
        <h1 class="text-3xl font-semibold tracking-normal leading-12 text-balance text-gray-900 sm:text-4xl">Memelihara Yatim dan Dhuafa adalah Tanggung Jawab Kami</h1>
        <div class="flex flex-col items-start justify-center gap-x-6">
            <p class="mt-8 text-sm font-small text-pretty text-gray-500 sm:text-xl/7">Kami berdedikasi untuk melayani siapa saja bagi yang membutuhkan khususnya kepada yatim dan dhuafa.</p>
            <div class="mt-10 items-center justify-center gap-x-6">
                <a href="#" class="rounded-full px-3.5 py-2.5 text-sm font-semibold text-gray-900 hover:bg-yellow-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Lihat selengkapnya <span aria-hidden="true">→</span></a>
            </div>
        </div>
      </div>
    </div>
    <div class="mt-6 h-64 w-auto object-cover object-center items-center sm:h-72 md:h-96 lg:h-125">
        <img class="rounded-xl" src="{{ asset('images/image-hero.jpeg') }}" alt="Hero Yayasan Bina Salamah">
    </div>
    <div aria-hidden="true" class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
      <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-blue-300 to-yellow-300 opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"></div>
    </div>
  </div>

  <div class="relative mx-auto max-w-7xl px-6 lg:px-8 py-25">
        <div aria-hidden="true" class="absolute inset-x-10 top-1000 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-blue-300 to-yellow-300 opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
        </div>
      <div class="sm:text-center">
        <h2 class="text-lg font-semibold leading-8 text-yellow-600">Apa yang Kami Lakukan</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Misi Kami</p>
        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600">Kami berkomitmen untuk memberikan bantuan dan dukungan kepada anak-anak yatim dan dhuafa, serta memberdayakan mereka untuk mencapai potensi terbaik mereka.</p>
      </div>

      <div class="mt-10 space-y-10 sm:mt-16 sm:space-y-0 lg:mt-20">
        <div class="flex flex-col items-center gap-x-6 gap-y-10 lg:flex-row">
          <div class="max-w-xl text-center lg:text-left">
            <h3 class="text-xl font-semibold tracking-tight text-gray-900">Bantuan Materiil</h3>
            <p class="mt-4 text-base leading-7 text-gray-600">Kami menyediakan bantuan materiil seperti makanan, pakaian, dan kebutuhan dasar lainnya kepada anak-anak yatim dan dhuafa.</p>
          </div>
          <img src="{{ asset('images/2section-2.jpeg') }}" alt="Bantuan Materiil" class="rounded-xl object-cover object-center bg-gray-50 sm:w-250 md:h-96 lg:h-125">
        </div>

        <div class="flex flex-col items-center gap-x-6 gap-y-10 lg:flex-row-reverse">
          <div class="max-w-xl text-center lg:text-left">
            <h3 class="text-xl font-semibold tracking-tight text-gray-900">Akses Pendidikan</h3>
            <p class="mt-4 text-base leading-7 text-gray-600">Kami menyediakan akses pendidikan yang berkualitas bagi anak-anak yatim dan dhuafa.</p>
          </div>
          <img src="{{ asset('images/3-section2.jpeg') }}" alt="Akses Pendidikan" class="w-full rounded-xl object-cover object-center bg-gray-50 sm:h-72 md:h-96 lg:h-125">
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>
</html>
