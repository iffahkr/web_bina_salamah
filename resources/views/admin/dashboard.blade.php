<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1.5 rounded-full border border-gray-200 shadow-sm font-medium">
                {{ now()->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
            </span>
        </div>
    </x-slot>
    <div class="py-10 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card Total Donasi -->
                <div class="relative overflow-hidden bg-linear-to-br from-emerald-500 to-teal-600 rounded-2xl shadow-lg border border-emerald-400/20 text-white p-6 transform hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute -right-10 -bottom-10 opacity-15">
                        <svg class="w-40 h-40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-white/20 rounded-xl backdrop-blur-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-emerald-100 uppercase tracking-wider">Total Dana Donasi</p>
                            <h3 class="text-2xl font-bold mt-1">Rp {{ number_format($totalDonationFund, 0, ',', '.') }}</h3>
                        </div>
                    </div>
                </div>
                <!-- Card Total Donatur -->
                <div class="relative overflow-hidden bg-linear-to-br from-blue-500 to-indigo-600 rounded-2xl shadow-lg border border-blue-400/20 text-white p-6 transform hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute -right-10 -bottom-10 opacity-15">
                        <svg class="w-40 h-40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-white/20 rounded-xl backdrop-blur-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-blue-100 uppercase tracking-wider">Total Donasi Masuk</p>
                            <h3 class="text-2xl font-bold mt-1">{{ number_format($totalDonators, 0, ',', '.') }}x Donasi</h3>
                        </div>
                    </div>
                </div>
                <!-- Card Total Kegiatan -->
                <div class="relative overflow-hidden bg-linear-to-br from-amber-500 to-orange-600 rounded-2xl shadow-lg border border-amber-400/20 text-white p-6 transform hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute -right-10 -bottom-10 opacity-15">
                        <svg class="w-40 h-40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                        </svg>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-white/20 rounded-xl backdrop-blur-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-amber-100 uppercase tracking-wider">Total Kegiatan</p>
                            <h3 class="text-2xl font-bold mt-1">{{ number_format($totalActivities, 0, ',', '.') }} Kegiatan</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Lists -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Recent Donations -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Donasi Terbaru</h3>
                            <p class="text-xs text-gray-500 mt-0.5">5 transaksi donasi terakhir masuk</p>
                        </div>
                        <a href="{{ route('admin.donations.index') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 transition-colors">
                            Lihat Semua &rarr;
                        </a>
                    </div>
                    <div class="divide-y divide-gray-100">
                        @forelse($recentDonations as $donation)
                            <div class="p-6 flex justify-between items-center hover:bg-slate-50/80 transition-colors">
                                <div class="flex items-center space-x-4">
                                    <div class="w-10 h-10 rounded-full bg-indigo-50 border border-indigo-100 flex items-center justify-center font-bold text-indigo-600">
                                        {{ strtoupper(substr($donation->name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm">{{ $donation->name }}</h4>
                                        <div class="flex items-center space-x-2 mt-1">
                                            <span class="px-2 py-0.5 text-[10px] font-semibold bg-indigo-100 text-indigo-800 rounded-md">
                                                {{ $donation->category->name }}
                                            </span>
                                            <span class="text-xs text-gray-400">&bull;</span>
                                            <span class="text-xs text-gray-400 font-medium">
                                                {{ \Carbon\Carbon::parse($donation->date)->locale('id')->isoFormat('D MMM YYYY') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="font-extrabold text-gray-800 text-sm block">Rp {{ number_format($donation->amount, 0, ',', '.') }}</span>
                                    <span class="text-[10px] text-gray-400 font-semibold bg-gray-100 border border-gray-200 rounded px-1.5 py-0.5 mt-1 inline-block">
                                        {{ $donation->payment_method }}
                                    </span>
                                </div>
                            </div>
                        @empty
                            <div class="p-8 text-center text-gray-400">
                                <svg class="w-12 h-12 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path>
                                </svg>
                                <span class="text-sm font-medium">Belum ada donasi yang masuk.</span>
                            </div>
                        @endforelse
                    </div>
                </div>
                <!-- Recent Activities -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Kegiatan Terbaru</h3>
                            <p class="text-xs text-gray-500 mt-0.5">5 kegiatan yang terdaftar terakhir</p>
                        </div>
                        <a href="{{ route('admin.activities.index') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 transition-colors">
                            Lihat Semua &rarr;
                        </a>
                    </div>
                    <div class="divide-y divide-gray-100">
                        @forelse($recentActivities as $activity)
                            <div class="p-6 flex justify-between items-center hover:bg-slate-50/80 transition-colors">
                                <div class="flex items-center space-x-4">
                                    @if($activity->image)
                                        <img src="{{ asset('storage/activities/' . $activity->image) }}" class="w-12 h-12 rounded-xl object-cover border border-gray-200 shadow-sm" alt="{{ $activity->title }}">
                                    @else
                                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 flex items-center justify-center font-bold text-amber-600">
                                            ACT
                                        </div>
                                    @endif
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm line-clamp-1">{{ $activity->title }}</h4>
                                        <div class="flex items-center space-x-2 mt-1">
                                            <span class="px-2 py-0.5 text-[10px] font-semibold bg-amber-100 text-amber-800 rounded-md">
                                                {{ $activity->category->name }}
                                            </span>
                                            <span class="text-xs text-gray-400">&bull;</span>
                                            <span class="text-xs text-gray-400 font-medium line-clamp-1">
                                                {{ $activity->location }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs text-gray-400 font-medium block">
                                        {{ \Carbon\Carbon::parse($activity->date)->locale('id')->isoFormat('D MMM YYYY') }}
                                    </span>
                                    <span class="text-[10px] text-gray-500 font-medium mt-1 inline-block">
                                        {{ \Carbon\Carbon::parse($activity->time)->format('H:i') }} WIB
                                    </span>
                                </div>
                            </div>
                        @empty
                            <div class="p-8 text-center text-gray-400">
                                <svg class="w-12 h-12 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path>
                                </svg>
                                <span class="text-sm font-medium">Belum ada kegiatan yang terdaftar.</span>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
