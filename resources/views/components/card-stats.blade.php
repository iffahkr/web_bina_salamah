@props([
    'title' => 'Program Donasi',
    'description' => 'Deskripsi program donasi.',
    'image' => null,
    'collected' => 0,
    'target' => 1000000,
    'number' => 0,
    'href' => '#',
])

@php
    $percentage = min(($collected / $target) * 100, 100);
@endphp

<div class="group mx-auto my-4 sm:my-auto relative w-90 max-w-sm rounded-2xl bg-white shadow-lg transition duration-300 hover:shadow-xl hover:shadow-blue-200"
     x-data="donationCard()"
     x-init="startCounter({{ $collected }}, {{ $number }})"
>
    {{-- Image --}}
    <div class="relative overflow-hidden">
        <div class="h-20 w-full object-cover transition duration-700 group-hover:scale-105">{{ $slot }}</div>
    </div>

    {{-- Content --}}
    <div class="space-y-5 mt-7 px-20">
        {{-- Stats --}}
        <div class="gap-4">

            {{-- Number --}}
            <div class="rounded-2xl bg-slate-50 px-auto p-2 mx-auto transition duration-300 group-hover:bg-blue-50">
                <p class="text-center mx-auto mt-2 text-4xl font-bold text-slate-800">
                    <span x-text="formattedDonors">{{ $number }}</span>
                </p>
            </div>

        </div>

        {{-- Title --}}
        <div>
            <p class="block text-2xl mb-10 text-center font-bold leading-snug text-slate-800 transition group-hover:text-blue-700">
                {{ $title }}
            </p>
        </div>
    </div>
</div>

{{-- Alpine JS --}}
<script>
    function donationCard() {
        return {
            collected: 0,
            donors: 0,

            formattedCollected: '0',
            formattedDonors: '0',

            startCounter(targetCollected, targetDonors) {

                let duration = 1800;
                let startTime = null;

                const animate = (timestamp) => {

                    if (!startTime) startTime = timestamp;

                    let progress = Math.min((timestamp - startTime) / duration, 1);

                    this.collected = Math.floor(progress * targetCollected);
                    this.donors = Math.floor(progress * targetDonors);

                    this.formattedCollected =
                        new Intl.NumberFormat('id-ID').format(this.collected);

                    this.formattedDonors =
                        new Intl.NumberFormat('id-ID').format(this.donors);

                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    }
                };

                requestAnimationFrame(animate);
            }
        }
    }
</script>
