<?php
/* Template Name: Single-Product */
get_header();

// ডাইনামিক ডাটা সেটআপ
$basePrice = 29.99;
$packageName = "Basic Protection";

$basicFeatures = [
    "Smart Control Panel (7\" Touchscreen)",
    "3x Wireless Door/Window Sensors",
    "Wide-angle Motion Detector",
    "Official Yard Sign & Security Decals",
    "24/7 Professional Monitoring Ready"
];

$addOns = [
    ["id" => "smoke", "name" => "Smoke & Heat Detector", "price" => 30, "desc" => "Instant alerts during fire"],
    ["id" => "lock",  "name" => "Smart Deadbolt Lock",  "price" => 150, "desc" => "Keyless entry and remote lock"],
    ["id" => "cam",   "name" => "HD Night Vision Camera", "price" => 80, "desc" => "1080p live streaming"],
    ["id" => "glass", "name" => "Glass Break Sensor", "price" => 40, "desc" => "Detects shattered windows"],
];
?>

<div class="max-w-7xl mx-auto min-h-screen antialiased">
    <main class="container mx-auto px-4 py-12 md:py-20">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-5 leading-tight">Secure Your Peace of Mind
            </h1>
            <p class="text-base md:text-lg text-slate-600 px-4 mt-2">Choose our foundational security package or tailor
                it to your needs.</p>
        </div>

        <div class="flex flex-col lg:flex-row justify-center items-start gap-8 max-w-7xl mx-auto">

            <div
                class="w-full lg:w-[420px] shrink-0 bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden sticky top-10">
                <div class="bg-blue-600 p-8 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <span
                            class="bg-blue-500/30 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-blue-400/50">Most
                            Popular</span>
                        <h2 class="text-3xl font-bold mt-6 mb-2"><?php echo $packageName; ?></h2>
                        <p class="text-blue-100">The foundation of home security.</p>
                    </div>
                </div>

                <div class="p-8">
                    <div class="flex items-baseline mb-6">
                        <span class="text-4xl font-bold text-slate-900">$<span
                                id="totalPriceDisplay"><?php echo number_format($basePrice, 2); ?></span></span>
                        <span class="text-slate-500 ml-2 font-medium">/month</span>
                    </div>

                    <ul id="packageFeatureList" class="space-y-4 mb-8">
                        <?php foreach ($basicFeatures as $feature): ?>
                            <li class="flex items-start">
                                <div class="mt-1 bg-green-100 rounded-full p-1 text-green-600 shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span
                                    class="ml-3 text-slate-700 font-medium text-sm md:text-base"><?php echo $feature; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="flex flex-col">
                        <button
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl transition-all shadow-lg active:scale-[0.98]">
                            Purchase Package
                        </button>
                        <div class="h-4"></div>
                        <button id="showAddonsBtn"
                            class="w-full bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-bold py-4 rounded-2xl transition-all flex items-center justify-center gap-2 group">
                            <span id="btnText">Add More Items</span>
                            <svg id="arrowIcon"
                                class="w-5 h-5 transition-transform duration-300 group-hover:translate-y-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div id="extraSecuritySection"
                class="hidden w-full lg:w-[680px] bg-white rounded-3xl shadow-xl border border-slate-100 p-6 md:p-10 transition-all duration-700">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900 leading-tight">Enhance Your Security</h3>
                    <p class="text-slate-500 mt-1">Add extra layers of protection to your plan.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php foreach ($addOns as $item): ?>
                        <div class="group relative">
                            <input type="checkbox" class="addon-checkbox peer hidden" id="<?php echo $item['id']; ?>"
                                data-name="<?php echo $item['name']; ?>" data-price="<?php echo $item['price']; ?>">

                            <label for="<?php echo $item['id']; ?>"
                                class="block p-5 border-2 border-slate-100 rounded-2xl cursor-pointer transition-all peer-checked:border-blue-500 peer-checked:bg-blue-50/50 hover:border-blue-200">
                                <div class="flex justify-between items-start mb-3">
                                    <div
                                        class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 peer-checked:bg-blue-100 peer-checked:text-blue-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <!-- incress button stsrt-->
                                        <div class="flex items-center absolute bottom-3 left-4 space-x-1">
                                            <button id="decrease"
                                                class="w-6 h-6 bg-gray-100 text-gray-700 rounded text-sm flex items-center justify-center">-</button>
                                            <span id="value" class="w-6 text-center text-sm">1</span>
                                            <button id="increase"
                                                class="w-6 h-6 bg-gray-100 text-gray-700 rounded text-sm flex items-center justify-center">+</button>
                                        </div>
                                        <!-- incress button end-->

                                    </div>
                                    <span class="text-sm font-bold text-blue-600">+$<?php echo $item['price']; ?></span>
                                </div>
                                <h4 class="font-bold text-slate-900"><?php echo $item['name']; ?></h4>
                                <p class="text-xs text-slate-500 mt-1 leading-relaxed"><?php echo $item['desc']; ?></p>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div
                    class="mt-8 pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <p class="text-sm text-slate-500 max-w-[300px]">Selected items will be added to your package
                        instantly.</p>
                    <button id="confirmBtn"
                        class="w-full sm:w-auto px-10 py-4 bg-slate-900 hover:bg-black text-white font-bold rounded-2xl transition-all shadow-lg active:scale-95">
                        Confirm & Update Total
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- incress decress button js start-->
<script>
    let count = 1;
    const valueEl = document.getElementById('value');
    document.getElementById('increase').onclick = () => valueEl.textContent = ++count;
    document.getElementById('decrease').onclick = () => {
        if (count > 0) valueEl.textContent = --count;
    };
</script>]
<!-- incress decress button js end-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const basePrice = <?php echo $basePrice; ?>;
        const showBtn = document.getElementById('showAddonsBtn');
        const extraSection = document.getElementById('extraSecuritySection');
        const totalPriceDisplay = document.getElementById('totalPriceDisplay');
        const packageList = document.getElementById('packageFeatureList');
        const confirmBtn = document.getElementById('confirmBtn');

        // Toggle Section logic
        showBtn.addEventListener('click', function() {
            if (extraSection.classList.contains('hidden')) {
                extraSection.classList.remove('hidden');
                requestAnimationFrame(() => {
                    extraSection.style.opacity = '1';
                    extraSection.style.transform = 'translateY(0)';
                });
                document.getElementById('btnText').innerText = 'Close Add-ons';
                document.getElementById('arrowIcon').classList.add('rotate-180');
            } else {
                extraSection.style.opacity = '0';
                extraSection.style.transform = 'translateY(1rem)';
                setTimeout(() => extraSection.classList.add('hidden'), 500);
                document.getElementById('btnText').innerText = 'Add More Items';
                document.getElementById('arrowIcon').classList.remove('rotate-180');
            }
        });

        // Confirm & Update Logic
        confirmBtn.addEventListener('click', function() {
            let additionalPrice = 0;

            // পুরাতন অ্যাড-অনগুলো লিস্ট থেকে রিমুভ করা (যাতে ডুপ্লিকেট না হয়)
            const oldAddons = document.querySelectorAll('.dynamic-addon');
            oldAddons.forEach(el => el.remove());

            // সব চেক করা আইটেম লুপ করা
            const checkedAddons = document.querySelectorAll('.addon-checkbox:checked');

            checkedAddons.forEach(addon => {
                const price = parseFloat(addon.dataset.price);
                const name = addon.dataset.name;
                additionalPrice += price;

                // প্যাকেজ লিস্টে নতুন আইটেম যোগ করা
                const li = document.createElement('li');
                li.className = 'flex items-start dynamic-addon animate-fade-in'; // এনিমেশন ক্লাস
                li.innerHTML = `
                <div class="mt-1 bg-blue-100 rounded-full p-1 text-blue-600 shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <span class="ml-3 text-blue-800 font-semibold text-sm md:text-base">${name}</span>
            `;
                packageList.appendChild(li);
            });

            // টোটাল প্রাইস আপডেট
            const finalTotal = basePrice + additionalPrice;
            totalPriceDisplay.innerText = finalTotal.toFixed(2);

            // ইউজারকে ফিডব্যাক দেওয়া (অটো ক্লোজ বা স্ক্রল)
            window.scrollTo({
                top: 100,
                behavior: 'smooth'
            });
        });
    });
</script>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(-10px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.4s ease forwards;
    }
</style>

<?php get_footer(); ?>