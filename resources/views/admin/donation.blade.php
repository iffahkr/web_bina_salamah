<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Donasi') }}
            </h2>
            <div class="flex flex-wrap gap-3">
                <button @click="showCategoryModal = true" class="inline-flex items-center px-4 py-2 bg-emerald-50 text-emerald-700 hover:bg-emerald-100 border border-emerald-200 rounded-xl font-semibold text-sm shadow-sm transition duration-150">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Kategori Donasi
                </button>
                <button @click="showAddModal = true" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm shadow-sm transition duration-150">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Donasi
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-10 bg-slate-50 min-h-screen" x-data="{
        showAddModal: false,
        showEditModal: false,
        showDeleteModal: false,
        showCategoryModal: false,
        editData: {
            id: '',
            name: '',
            phone_number: '',
            amount: '',
            payment_method: '',
            date: '',
            time: '',
            notes: '',
            donation_category_id: ''
        }
    }">
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
                                        <div class="font-medium bg-slate-100 border border-slate-200 rounded px-1.5 py-0.5 inline-block text-[11px] font-semibold mb-1">{{ $don->payment_method }}</div>
                                        <div class="text-xs text-gray-400">{{ \Carbon\Carbon::parse($don->date)->locale('id')->isoFormat('D MMM YYYY') }} - {{ \Carbon\Carbon::parse($don->time)->format('H:i') }}</div>
                                    </td>
                                    <td class="px-6 py-4 max-w-xs truncate text-gray-500">
                                        {{ $don->notes ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end items-center space-x-3">
                                            <button
                                                @click="
                                                    editData.id = $el.dataset.id;
                                                    editData.name = $el.dataset.name;
                                                    editData.phone_number = $el.dataset.phone;
                                                    editData.amount = $el.dataset.amount;
                                                    editData.payment_method = $el.dataset.method;
                                                    editData.date = $el.dataset.date;
                                                    editData.time = $el.dataset.time;
                                                    editData.notes = $el.dataset.notes;
                                                    editData.donation_category_id = $el.dataset.category;
                                                    showEditModal = true;
                                                "
                                                data-id="{{ $don->id }}"
                                                data-name="{{ $don->name }}"
                                                data-phone="{{ $don->phone_number }}"
                                                data-amount="{{ (int)$don->amount }}"
                                                data-method="{{ $don->payment_method }}"
                                                data-date="{{ $don->date }}"
                                                data-time="{{ $don->time }}"
                                                data-notes="{{ $don->notes }}"
                                                data-category="{{ $don->donation_category_id }}"
                                                class="text-indigo-600 hover:text-indigo-900 font-semibold transition-colors"
                                            >
                                                Edit
                                            </button>
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
                                                Hapus
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

        <!-- Add Donation Modal -->
        <div x-show="showAddModal" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showAddModal = false">
                    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>
                </div>

                <!-- Modal Content -->
                <div class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full border border-gray-100">
                    <form action="{{ route('admin.donations.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="bg-white px-6 pt-6 pb-4 sm:p-6 sm:pb-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Tambah Donasi Baru</h3>
                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Nama Donatur</label>
                                        <input type="text" name="name" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm" placeholder="Contoh: Budi Santoso">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Nomor Telepon</label>
                                        <input type="text" name="phone_number" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm" placeholder="Contoh: 08123456789">
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Jumlah Donasi (Rp)</label>
                                        <input type="number" name="amount" required min="1" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm" placeholder="Contoh: 100000">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Kategori Donasi</label>
                                        <select name="donation_category_id" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                            <option value="">Pilih Kategori</option>
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Metode Pembayaran</label>
                                        <select name="payment_method" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                            <option value="">Pilih Metode</option>
                                            <option value="Transfer BCA">Transfer BCA</option>
                                            <option value="Transfer Mandiri">Transfer Mandiri</option>
                                            <option value="E-Wallet (Gopay/OVO)">E-Wallet (Gopay/OVO)</option>
                                            <option value="Tunai">Tunai</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Bukti Transfer (Image)</label>
                                        <input type="file" name="image" required accept="image/*" class="w-full border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm p-1.5 file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Tanggal</label>
                                        <input type="date" name="date" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Waktu</label>
                                        <input type="time" name="time" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Catatan</label>
                                    <input type="text" name="notes" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm" placeholder="Catatan opsional">
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-6 py-4 flex justify-end space-x-3 border-t border-gray-100">
                            <button type="button" @click="showAddModal = false" class="px-4 py-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 rounded-xl font-semibold text-sm shadow-sm transition">Batal</button>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm shadow-sm transition">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Donation Modal -->
        <div x-show="showEditModal" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showEditModal = false">
                    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>
                </div>

                <!-- Modal Content -->
                <div class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full border border-gray-100">
                    <form :action="'/admin/donations/' + editData.id" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="bg-white px-6 pt-6 pb-4 sm:p-6 sm:pb-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Edit Data Donasi</h3>
                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Nama Donatur</label>
                                        <input type="text" name="name" x-model="editData.name" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Nomor Telepon</label>
                                        <input type="text" name="phone_number" x-model="editData.phone_number" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Jumlah Donasi (Rp)</label>
                                        <input type="number" name="amount" x-model="editData.amount" required min="1" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Kategori Donasi</label>
                                        <select name="donation_category_id" x-model="editData.donation_category_id" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Metode Pembayaran</label>
                                        <select name="payment_method" x-model="editData.payment_method" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                            <option value="Transfer BCA">Transfer BCA</option>
                                            <option value="Transfer Mandiri">Transfer Mandiri</option>
                                            <option value="E-Wallet (Gopay/OVO)">E-Wallet (Gopay/OVO)</option>
                                            <option value="Tunai">Tunai</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Bukti Transfer Baru (Opsional)</label>
                                        <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm p-1.5 file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Tanggal</label>
                                        <input type="date" name="date" x-model="editData.date" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Waktu</label>
                                        <input type="time" name="time" x-model="editData.time" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Catatan</label>
                                    <input type="text" name="notes" x-model="editData.notes" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-6 py-4 flex justify-end space-x-3 border-t border-gray-100">
                            <button type="button" @click="showEditModal = false" class="px-4 py-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 rounded-xl font-semibold text-sm shadow-sm transition">Batal</button>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm shadow-sm transition">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Donation Modal -->
        <div x-show="showDeleteModal" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showDeleteModal = false">
                    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>
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
                                    <h3 class="text-lg font-bold text-gray-900">Hapus Data Donasi?</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Apakah Anda yakin ingin menghapus data donasi dari <span class="font-bold text-gray-800" x-text="editData.name"></span>? Tindakan ini tidak dapat dibatalkan.</p>
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

        <!-- Add Category Modal -->
        <div x-show="showCategoryModal" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showCategoryModal = false">
                    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>
                </div>

                <!-- Modal Content -->
                <div class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full border border-gray-100">
                    <form action="{{ route('admin.donation-categories.store') }}" method="POST">
                        @csrf
                        <div class="bg-white px-6 pt-6 pb-4 sm:p-6 sm:pb-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Tambah Kategori Donasi</h3>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Nama Kategori Donasi</label>
                                    <input type="text" name="name" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm" placeholder="Contoh: Sedekah Masjid">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Deskripsi Kategori</label>
                                    <input type="text" name="description" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm text-sm" placeholder="Rincian singkat tujuan kategori donasi ini">
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-6 py-4 flex justify-end space-x-3 border-t border-gray-100">
                            <button type="button" @click="showCategoryModal = false" class="px-4 py-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 rounded-xl font-semibold text-sm shadow-sm transition">Batal</button>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm shadow-sm transition">Simpan Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
