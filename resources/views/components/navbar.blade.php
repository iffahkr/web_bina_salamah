<header class="sticky inset-x-0 top-0 z-50 transition-all duration-300 shadow-sm backdrop-blur-md bg-white/80">
    <nav aria-label="Global" class="flex items-center justify-between p-1 lg:px-15">
      <div class="flex lg:flex-1">
        <a href="{{ url('/') }}" class="-m-1.5 p-1.5 pl-10">
          <span class="sr-only">{{ config('app.name') }}</span>
          <img src="{{ asset('images/logo-1.png') }}" alt="{{ config('app.name') }}" class="w-20 h-20" />
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="{{ url('/') }}" class="text-base/7 font-semibold  text-gray-900"><h5>Beranda</h5></a>
        <a href="{{ url('/kegiatan') }}" class="text-base/7 font-semibold  text-gray-900"><h5>Kegiatan</h5></a>
        <a href="{{ url('/about') }}" class="text-base/7 font-semibold  text-gray-900"><h5>Tentang Kami</h5></a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="{{ url('/donation') }}" target="_blank" class="rounded-full inline-flex gap-2 px-3 py-2 text-sm text-gray-900 font-medium justify-center relative items-center p-1 w-auto focus:outline-2 focus:outline-offset-2 focus:outline-yellow-500 bg-yellow-300 hover:bg-amber-300 hover:text-gray-800">
            <span>Donasi sekarang</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="rounded-full border p-1 size-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
      </div>
    </nav>
    <el-dialog>
      <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
        <div tabindex="0" class="fixed inset-0 focus:outline-none">
          <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Bina Salamah</span>
                <img src="{{ asset('images/logo-1.png') }}" alt="Bina Salamah" class="w-18 h-18" />
              </a>
              <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                  <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6 text-center">
                  <a href="{{ url('/') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Beranda</a>
                  <a href="{{ url('/kegiatan') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Kegiatan</a>
                  <a href="{{ url('/about') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Tentang Kami</a>
                </div>
                <div class="py-6 text-center">
                    <a href="{{ url('/donation') }}" target="_blank" class="-mx-3 rounded-full inline-flex gap-2 px-3 py-2.5 text-sm text-gray-900 font-medium justify-center relative items-center p-1 w-full focus:outline-2 focus:outline-offset-2 focus:outline-yellow-500 bg-yellow-300 hover:bg-amber-300 hover:text-gray-800">
                        <span>Donasi sekarang</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="rounded-full border p-1 size-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
              </div>
            </div>
          </el-dialog-panel>
        </div>
      </dialog>
    </el-dialog>
</header>
