<div x-data="{
    showDeleteModal: false,
    showCategoryModal: false,
    showDetailDonationModal: false,
    detailDonation: {
        image: '',
        name: '',
        phone_number: '',
        category: '',
        amount: '',
        payment_method: '',
        date: '',
        time: '',
        notes: ''
    },
    editData: {
        id: '',
        name: '',
    }
}">
    <x-app-layout>
        <x-slot name="header">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Kelola Donasi') }}
                </h2>
                <div class="flex flex-wrap gap-3">
                    <button @click="showCategoryModal = true" class="inline-flex items-center px-4 py-2 bg-emerald-50 text-emerald-700 hover:bg-emerald-100 border border-emerald-200 rounded-xl font-semibold text-sm shadow-sm transition duration-150">
                        <svg class="w-4 h-4 mr-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z"></path>
                        </svg>
                        Lihat Kategori
                    </button>
                    <a href="{{ route('admin.donations.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm shadow-sm transition duration-150">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Tambah Donasi
                    </a>
                </div>
            </div>
        </x-slot>

        <div class="py-10 bg-slate-50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <!-- Success Alert -->
                @if(session('success'))
                    <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl flex items-center space-x-3 shadow-sm">
                        <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm font-semibold">{{ session('success') }}</span>
                    </div>
                @endif
                <!-- Validation Errors -->
                @if($errors->any())
                    <div class="p-4 bg-rose-50 border border-rose-200 text-rose-800 rounded-2xl space-y-1 shadow-sm">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-rose-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm font-bold">Terjadi kesalahan input:</span>
                        </div>
                        <ul class="list-disc list-inside text-xs pl-8 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Donasi Table Card -->
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50/70 border-b border-gray-200 text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    <th class="px-6 py-4">Bukti</th>
                                    <th class="px-6 py-4">Donatur</th>
                                    <th class="px-6 py-4">Kategori</th>
                                    <th class="px-6 py-4">Jumlah</th>
                                    <th class="px-6 py-4">Metode & Waktu</th>
                                    <th class="px-6 py-4">Catatan</th>
                                    <th class="px-6 py-4 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm">
                                @forelse($donations as $don)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($don->image)
                                                <a href="{{ asset('storage/donations/' . $don->image) }}" target="_blank">
                                                    <img src="{{ asset('storage/donations/' . $don->image) }}" class="w-12 h-12 rounded-xl object-cover border border-gray-200 shadow-sm hover:scale-105 transition duration-150" alt="Bukti Transfer">
                                                </a>
                                            @else
                                                <div class="w-12 h-12 rounded-xl bg-gray-100 border border-gray-200 flex items-center justify-center font-bold text-gray-400">
                                                    N/A
                                                </div>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-gray-800">{{ $don->name }}</div>
                                            <div class="text-xs text-gray-400 mt-0.5">{{ $don->phone_number }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2.5 py-1 text-xs font-bold bg-indigo-50 text-indigo-700 border border-indigo-200 rounded-lg">
                                                {{ $don->category->name }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap font-extrabold text-gray-850">
                                            Rp {{ number_format($don->amount, 0, ',', '.') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                            <div class="font-semibold bg-slate-100 border border-slate-200 rounded px-1.5 py-0.5 inline-block text-[11px] mb-1">{{ $don->payment_method }}</div>
                                            <div class="text-xs text-gray-400">{{ \Carbon\Carbon::parse($don->date)->locale('id')->isoFormat('D MMM YYYY') }} - {{ \Carbon\Carbon::parse($don->time)->format('H:i') }}</div>
                                        </td>
                                        <td class="px-6 py-4 max-w-xs truncate text-gray-500">
                                            {{ $don->notes ?? '-' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end items-center space-x-3">
                                                <button
                                                    @click="
                                                        detailDonation.image = '{{ $don->image ? asset('storage/donations/' . $don->image) : '' }}';
                                                        detailDonation.name = '{{ addslashes($don->name) }}';
                                                        detailDonation.phone_number = '{{ addslashes($don->phone_number) }}';
                                                        detailDonation.category = '{{ addslashes($don->category->name) }}';
                                                        detailDonation.amount = 'Rp {{ number_format($don->amount, 0, ',', '.') }}';
                                                        detailDonation.payment_method = '{{ addslashes($don->payment_method) }}';
                                                        detailDonation.date = '{{ \Carbon\Carbon::parse($don->date)->locale('id')->isoFormat('D MMM YYYY') }}';
                                                        detailDonation.time = '{{ \Carbon\Carbon::parse($don->time)->format('H:i') }} WIB';
                                                        detailDonation.notes = '{{ addslashes($don->notes ?? '-') }}';
                                                        showDetailDonationModal = true;
                                                    "
                                                    class="text-rose-600 hover:text-rose-900 font-semibold transition-colors"
                                                >
                                                    <svg data-slot="icon" class="size-5 text-center mx-auto text-green-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                                    </svg>
                                                </button>
                                                <span class="text-gray-300">|</span>
                                                <a href="{{ route('admin.donations.edit', $don) }}" class="text-indigo-600 hover:text-indigo-900 font-semibold transition-colors" title="Edit Donasi">
                                                    <svg data-slot="icon" class="size-5 text-center mx-auto text-blue-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                                    </svg>
                                                </a>
                                                <span class="text-gray-300">|</span>
                                                <button
                                                    @click="
                                                        editData.id = $el.dataset.id;
                                                        editData.name = $el.dataset.name;
                                                        showDeleteModal = true;
                                                    "
                                                    data-id="{{ $don->id }}"
                                                    data-name="{{ $don->name }}"
                                                    class="text-rose-600 hover:text-rose-900 font-semibold transition-colors"
                                                >
                                                    <svg data-slot="icon" class="size-5 text-center mx-auto text-orange-500" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="px-6 py-10 text-center text-gray-400">
                                            Belum ada donasi terdaftar. Klik "Tambah Donasi" untuk menginput data baru.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Category Modal -->
            <div x-show="showCategoryModal" class="fixed inset-0 z-50 overflow-y-auto" style="display:none;">
                <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 -z-10 transition-opacity" aria-hidden="true" @click="showCategoryModal=false">
                        <div class="absolute inset-0 -z-10 bg-slate-200/40 backdrop-blur-xs"></div>
                    </div>
                    <div class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full border border-gray-100">
                        <div class="flex items-center justify-between px-6 py-5">
                            <h3 class="text-lg font-semibold text-gray-800">
                                List Kategori Donasi
                            </h3>
                            <button
                                @click="showCategoryModal=false"
                                class="text-gray-400 hover:text-gray-700"
                            >
                                <svg class="size-5 text-center mx-auto text-black" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50/70 border-b border-gray-200 text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    <th class="px-6 py-4">Nama Kategori</th>
                                    <th class="px-6 py-4">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm">
                                @forelse($categories as $category)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="px-6 py-4 font-bold text-gray-800 max-w-xs truncate">
                                            {{ $category->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-wrap">
                                            <span class="py-1 text-sm font-normal">
                                                {{ $category->description }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-10 text-center text-gray-400">
                                            Belum ada kategori yang terdaftar.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Detail Donation Modal -->
            <div x-show="showDetailDonationModal" class="fixed inset-0 z-50 overflow-y-auto" style="display:none;">
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="fixed inset-0 bg-slate-200/50 backdrop-blur-xs" @click="showDetailDonationModal=false"></div>
                    <div class="relative bg-white w-full max-w-3xl rounded-3xl shadow-2xl overflow-hidden">
                        <div class="flex items-center justify-between px-6 py-5">
                            <h3 class="text-xl font-semibold text-gray-800">
                                Detail Donasi
                            </h3>
                            <button
                                @click="showDetailDonationModal=false"
                                class="text-gray-400 hover:text-gray-700"
                            >
                                <svg class="size-5 text-center mx-auto text-black" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    <div class="h-90">
                        <img
                            :src="detailDonation.image || 'https://via.placeholder.com/900x500?text=No+Image'"
                            alt="detailDonation.name"
                            class="p-4 w-full h-full object-cover"
                        >
                    </div>
                <!-- Content -->
                <div class="p-6 space-y-6">
                    <div class="grid gap-4">
                        <div>
                            <p class="mb-2 text-xs uppercase text-gray-400">
                                Donatur
                            </p>
                            <p
                                x-text="detailDonation.name"
                                class="font-semibold text-gray-700"
                            ></p>
                        </div>
                        <div>
                            <p class="mb-2 text-xs uppercase text-gray-400">
                                Nomor Telepon
                            </p>
                            <p
                                x-text="detailDonation.phone_number"
                                class="font-semibold text-gray-700"
                            ></p>
                        </div>
                        <div>
                            <p class="mb-2 text-xs uppercase text-gray-400">
                                Kategori
                            </p>
                            <p
                                x-text="detailDonation.category"
                                class="font-semibold text-gray-700"
                            ></p>
                        </div>
                        <div>
                            <p class="mb-2 text-xs uppercase text-gray-400">
                                Jumlah
                            </p>
                            <p
                                x-text="detailDonation.amount"
                                class="font-semibold text-gray-700"
                            ></p>
                        </div>
                        <div>
                            <p class="mb-2 text-xs uppercase text-gray-400">
                                Tanggal
                            </p>
                            <p
                                x-text="detailDonation.date"
                                class="font-semibold text-gray-700"
                            ></p>
                        </div>
                        <div>
                            <p class="mb-2 text-xs uppercase text-gray-400">
                                Waktu
                            </p>
                            <p
                                x-text="detailDonation.time"
                                class="font-semibold text-gray-700"
                            ></p>
                        </div>
                    </div>
                    <div>
                        <p class="mb-2 text-xs uppercase text-gray-400">
                            Deskripsi
                        </p>
                        <p
                            x-text="detailDonation.notes"
                            class="text-gray-600 leading-relaxed"
                        ></p>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 flex justify-end">
                    <button
                        @click="showDetailDonationModal=false"
                        class="px-5 py-2 bg-slate-800 text-white rounded-xl hover:bg-slate-900"
                    >
                        Tutup
                    </button>
                </div>
            </div>
        </div>
            </div>
            <!-- Delete Donation Modal -->
            <div x-show="showDeleteModal" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
                <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed -z-10 inset-0 transition-opacity" aria-hidden="true" @click="showDeleteModal = false">
                        <div class="absolute -z-10 inset-0 bg-slate-200/40 backdrop-blur-xs"></div>
                    </div>
                    <!-- Modal Content -->
                    <div class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full border border-gray-100">
                        <form :action="'/admin/donations/' + editData.id" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="bg-white px-6 pt-6 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-rose-50 border border-rose-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg class="h-6 w-6 text-rose-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <p class="text-lg font-bold text-gray-900">Hapus Data Donasi?</p>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">Apakah Anda yakin ingin menghapus data donasi dari <span class="font-bold text-gray-800" x-text="editData.name"></span>?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-6 py-4 flex justify-end space-x-3 border-t border-gray-100">
                                <button type="button" @click="showDeleteModal = false" class="px-4 py-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 rounded-xl font-semibold text-sm shadow-sm transition">Batal</button>
                                <button type="submit" class="px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white rounded-xl font-semibold text-sm shadow-sm transition">Hapus Permanen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>