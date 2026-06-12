<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 leading-7 text-justify">
        {{ __('Silakan verifikasi alamat email Anda melalui tautan yang telah kami kirimkan ke email Anda. Atau periksa folder spam di email Anda. Jika belum menerima email, klik tombol kirim ulang.
') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Link verifikasi telah dikirim, silakan periksa email Anda.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Kirim Ulang Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Logout') }}
            </button>
        </form>
    </div>
</x-guest-layout>
