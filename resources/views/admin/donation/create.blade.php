<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Tambah Donasi Baru') }}
                </h2>
            </div>
            <a href="{{ route('admin.donations.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 rounded-xl font-semibold text-sm shadow-sm transition duration-150">
                Kembali
            </a>
        </div>
    </x-slot>
    <div class="py-10 bg-slate-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">
                <form action="{{ route('admin.donations.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                        <div class="grid gap-6">
                            <div>
                                <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Nama Donatur</label>
                                <input type="text" name="name" value="{{ old('name') }}" required class="p-3 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Contoh: Budi Santoso">
                                <div class="flex flex-row gap-2 mt-1">
                                    @error('name')
                                    <div class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </div>
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Nomor Telepon</label>
                                <input type="text" name="phone_number" value="{{ old('phone_number') }}" required class="p-3 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Contoh: 08123456789">
                                <div class="flex flex-row gap-2 mt-1">
                                    @error('phone_number')
                                    <div class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </div>
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Kategori Donasi</label>
                                <select name="donation_category_id" required class="p-3 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Pilih Kategori</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('donation_category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="flex flex-row gap-2 mt-1">
                                    @error('donation_category_id')
                                    <div class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </div>
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Jumlah Donasi (Rp)</label>
                                <input type="number" name="amount" value="{{ old('amount') }}" required min="1" class="p-3 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Contoh: 100000">
                                <div class="flex flex-row gap-2 mt-1">
                                    @error('amount')
                                    <div class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.₀4₁-.₀₂a.75.75 ₀ ₀ ₁ ₁.₀₆₃.8₅₂l-.7₀₈ ₂.8₃₆a.75.75 ₀ ₀ ₀ ₁.₀₆₃.8₅₃l.₀₄₁-.₀₂₁M₂₁ ₁₂a9 9 ₀ ₁ ₁-₁₈ ₀ 9 9 ₀ ₀ ₁ ₁₈ ₀Zm-9-3.75h.₀₀₈v.₀₀₈H₁₂V8.₂₅Z" />
                                        </svg>
                                    </div>
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Metode Pembayaran</label>
                                <select name="payment_method" required class="p-3 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Pilih Metode</option>
                                    <option value="Transfer Bank" {{ old('payment_method') == 'Transfer Bank' ? 'selected' : '' }}>Transfer Bank</option>
                                    <option value="E-Wallet (Gopay/OVO/DANA)" {{ old('payment_method') == 'E-Wallet (Gopay/OVO/DANA)' ? 'selected' : '' }}>E-Wallet (Gopay/OVO/DANA)</option>
                                    <option value="Tunai" {{ old('payment_method') == 'Tunai' ? 'selected' : '' }}>Tunai</option>
                                </select>
                                <div class="flex flex-row gap-2 mt-1">
                                    @error('payment_method')
                                    <div class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </div>
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Bukti Transaksi</label>
                                <input type="file" name="image" required accept="image/*" class="p-3 w-full rounded-xl border border-gray-300 text-sm file:mr-4 file:rounded-lg file:border-0 file:bg-indigo-50 file:px-3 file:py-1 file:text-xs file:font-semibold file:text-indigo-700 hover:file:bg-indigo-100">
                                <div class="flex flex-row gap-2 mt-1">
                                    @error('image')
                                    <div class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </div>
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Tanggal</label>
                                <input type="date" name="date" value="{{ old('date') }}" required class="p-3 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <div class="flex flex-row gap-2 mt-1">
                                    @error('date')
                                    <div class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </div>
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Waktu</label>
                                <input type="time" name="time" value="{{ old('time') }}" required class="p-3 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <div class="flex flex-row gap-2 mt-1">
                                    @error('time')
                                    <div class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </div>
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="mb-2 block text-xs font-bold uppercase tracking-wider text-gray-500">Catatan</label>
                            <input type="text" name="notes" value="{{ old('notes') }}" class="p-3 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Catatan opsional">
                        </div>
                    <div class="flex items-center justify-end gap-3 border-t border-gray-100 pt-6">
                        <a href="{{ route('admin.donations.index') }}" class="px-4 py-2 rounded-xl border border-gray-200 bg-white text-gray-700 font-semibold text-sm shadow-sm hover:bg-gray-50">Batal</a>
                        <button type="submit" class="px-4 py-2 rounded-xl bg-indigo-600 text-white font-semibold text-sm shadow-sm hover:bg-indigo-700">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
