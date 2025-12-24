<?php

/**
 * Template Name: Single-Product
 * Description: Single product security package page with add-ons
 */

get_header();

/* =========================================================
 * Package Core Configuration
 * ======================================================= */

$basePrice  = 29.99;
$packageName = "Basic Protection";

/* =========================================================
 * Base Package Features
 * ======================================================= */

$basicFeatures = [
    "Smart Control Panel (7\" Touchscreen)",
    "3x Wireless Door/Window Sensors",
    "Wide-angle Motion Detector",
    "Official Yard Sign & Security Decals",
    "24/7 Professional Monitoring Ready"
];

/* =========================================================
 * Add-on Products Configuration
 * ======================================================= */

$addOns = [
    ["id" => "smoke", "name" => "Smoke & Heat Detector", "price" => 30,  "desc" => "Instant alerts during fire"],
    ["id" => "lock",  "name" => "Smart Deadbolt Lock",  "price" => 150, "desc" => "Keyless entry and remote lock"],
    ["id" => "cam",   "name" => "HD Night Vision Camera", "price" => 80, "desc" => "1080p live streaming"],
    ["id" => "glass", "name" => "Glass Break Sensor", "price" => 40, "desc" => "Detects shattered windows"],
];
?>

<!-- =======================================================
     Page Wrapper
======================================================== -->
<div class="max-w-7xl mx-auto min-h-screen antialiased">
    <main class="container mx-auto px-4 py-12 md:py-20">

        <!-- =======================
             Page Header
        ======================== -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-5 leading-tight">
                Secure Your Peace of Mind
            </h1>
            <p class="text-base md:text-lg text-slate-600 px-4 mt-2">
                Choose our foundational security package or tailor it to your needs.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row justify-center items-start gap-8 max-w-7xl mx-auto">

            <!-- =======================
                 Left: Package Card
            ======================== -->
            <div
                class="w-full lg:w-[420px] shrink-0 bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden">

                <!-- Package Header -->
                <div class="bg-[#045CB4]! p-8 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <span
                            class="bg-blue-500/30 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-blue-400/50">
                            Most Popular
                        </span>
                        <h2 class="text-3xl text-white! mt-4! font-bold mb-0!">
                            <?php echo $packageName; ?>
                        </h2>
                        <p class="text-blue-100">The foundation of home security.</p>
                    </div>
                </div>

                <!-- Package Content -->
                <div class="p-8">

                    <!-- Price -->
                    <div class="flex items-baseline mb-6">
                        <span class="text-4xl font-bold text-slate-900">
                            $<span id="totalPriceDisplay"><?php echo number_format($basePrice, 2); ?></span>
                        </span>
                        <span class="text-slate-500 ml-2 font-medium">/month</span>
                    </div>

                    <!-- Feature List -->
                    <ul id="packageFeatureList" class="space-y-4 mb-8">
                        <?php foreach ($basicFeatures as $feature): ?>
                            <li class="flex items-start">
                                <div class="mt-1 bg-green-100 rounded-full p-1 text-green-600 shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="ml-3 text-slate-700 font-medium text-sm md:text-base">
                                    <?php echo $feature; ?>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <!-- Actions -->
                    <div class="flex flex-col">

                        <a href="<?php echo home_url('/chack-out'); ?>"
                            class="text-white! font-bold focus:outline-none! ">
                            <button
                                class="w-full bg-[#045CB4] hover:bg-blue-700 text-white! py-4 rounded-2xl transition-all shadow-lg active:scale-[0.98]">
                                Purchase Package
                            </button>
                        </a>


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

            <!-- =======================
                 Right: Add-ons Section
            ======================== -->
            <div id="extraSecuritySection"
                class="hidden w-full lg:w-[580px] bg-white rounded-3xl shadow-xl border border-slate-100 p-6 md:p-10 transition-all duration-700">

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900">Enhance Your Security</h3>
                    <p class="text-slate-500 mt-1">Add extra layers of protection to your plan.</p>
                </div>

                <div class="grid grid-cols-1  gap-4">
                    <?php foreach ($addOns as $item): ?>
                        <!-- Add-on Card -->
                        <div class="group relative addon-item-container">

                            <label for="<?php echo $item['id']; ?>" class="block p-5 border-2 border-slate-100 rounded-2xl cursor-pointer transition-all
            peer-checked:border-blue-500 peer-checked:bg-blue-50/50 hover:border-blue-200 relative">

                                <!-- Header -->
                                <div class="flex justify-between items-start mb-3">

                                    <!-- Icon -->
                                    <div class="w-10 h-10 bg-slate-100 transition-all duration-300 ease-in-out rounded-xl flex items-center justify-center text-slate-600
                    group-hover:bg-[#045CB4]! group-hover:text-white!
                    peer-checked:bg-[#045CB4]! peer-checked:text-white!">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>

                                    <!-- Price + Checkbox -->
                                    <div class="text-right">
                                        <span class="block text-sm font-bold text-blue-600 item-price-display">
                                            +$<?php echo $item['price']; ?>
                                        </span>

                                        <!-- Checkbox (price এর নিচে) -->
                                        <input type="checkbox" class="addon-checkbox peer mt-2"
                                            id="<?php echo $item['id']; ?>" data-name="<?php echo $item['name']; ?>"
                                            data-price="<?php echo $item['price']; ?>">
                                    </div>
                                </div>

                                <!-- Quantity Control -->
                                <div class="flex items-center absolute bottom-3 left-5 space-x-1 z-20">
                                    <div type="button" class=" decrease-btn py-[2px] px-[12px] bg-gray-200 rounded-md ">
                                        <span class="text-[17px]"> +</span>
                                    </div>
                                    <span class="qty-value w-6 text-center text-sm font-bold">1</span>
                                    <div type="button" class=" increase-btn py-[2px] px-[12px] bg-gray-200 rounded-md ">
                                        <span class="text-[17px]"> +</span>
                                    </div>
                                </div>

                                <!-- Content -->
                                <h4 class="font-bold text-slate-900"><?php echo $item['name']; ?></h4>
                                <p class="text-xs text-slate-500"><?php echo $item['desc']; ?></p>

                            </label>
                        </div>
                    <?php endforeach; ?>

                </div>

                <!-- Footer -->
                <div
                    class="mt-8 pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <p class="text-sm text-slate-500 max-w-[300px]">
                        Selected items will be added to your package instantly.
                    </p>
                    <button id="confirmBtn"
                        class="px-10 py-4 bg-slate-900 hover:bg-black text-white font-bold rounded-2xl transition-all">
                        Confirm & Update Total
                    </button>
                </div>

            </div>
        </div>
    </main>
</div>


<script>
    /**
     * Single Product Add-ons Logic
     * ----------------------------------------
     * - Quantity control
     * - Show / Hide add-ons
     * - Price calculation
     * - LocalStorage save
     */

    document.addEventListener('DOMContentLoaded', function() {

        /* ======================================
           Base Product Data (from PHP)
        ====================================== */
        const basePrice = <?php echo $basePrice; ?>;
        const packageName = "<?php echo $packageName; ?>";

        /* ======================================
           DOM Elements
        ====================================== */
        const showBtn = document.getElementById('showAddonsBtn');
        const extraSection = document.getElementById('extraSecuritySection');
        const totalPriceDisplay = document.getElementById('totalPriceDisplay');
        const packageList = document.getElementById('packageFeatureList');
        const confirmBtn = document.getElementById('confirmBtn');

        /* ======================================
           1. Quantity Control Logic
        ====================================== */
        document.querySelectorAll('.addon-item-container').forEach(container => {

            const decBtn = container.querySelector('.decrease-btn');
            const incBtn = container.querySelector('.increase-btn');
            const qtyValue = container.querySelector('.qty-value');
            const priceDisplay = container.querySelector('.item-price-display');
            const checkbox = container.querySelector('.addon-checkbox');
            const originalPrice = parseFloat(checkbox.dataset.price);

            // Prevent label toggle when clicking + / -
            [decBtn, incBtn].forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                });
            });

            // Increase quantity
            incBtn.addEventListener('click', () => {
                let val = parseInt(qtyValue.textContent);
                val++;
                qtyValue.textContent = val;
                priceDisplay.textContent = `+$${(originalPrice * val).toFixed(2)}`;
            });

            // Decrease quantity (minimum 1)
            decBtn.addEventListener('click', () => {
                let val = parseInt(qtyValue.textContent);
                if (val > 1) {
                    val--;
                    qtyValue.textContent = val;
                    priceDisplay.textContent = `+$${(originalPrice * val).toFixed(2)}`;
                }
            });
        });

        /* ======================================
           2. Show / Hide Add-ons Section
        ====================================== */
        showBtn.addEventListener('click', function() {

            if (extraSection.classList.contains('hidden')) {

                // Show section
                extraSection.classList.remove('hidden');
                setTimeout(() => {
                    extraSection.style.opacity = '1';
                    extraSection.style.transform = 'translateY(0)';
                }, 10);

                document.getElementById('btnText').innerText = 'Close Add-ons';
                document.getElementById('arrowIcon').classList.add('rotate-180');

            } else {

                // Hide section
                extraSection.style.opacity = '0';
                extraSection.style.transform = 'translateY(1rem)';

                setTimeout(() => extraSection.classList.add('hidden'), 500);

                document.getElementById('btnText').innerText = 'Add More Items';
                document.getElementById('arrowIcon').classList.remove('rotate-180');
            }
        });

        /* ======================================
           3. Confirm Button & LocalStorage Logic
        ====================================== */
        confirmBtn.addEventListener('click', function() {

            let additionalPrice = 0;
            const selectedFeatures = [];

            // Keep base features first
            document
                .querySelectorAll('#packageFeatureList li span:not(.dynamic-addon span)')
                .forEach(span => {
                    selectedFeatures.push(span.innerText.trim());
                });

            // Remove previous dynamic add-ons
            document.querySelectorAll('.dynamic-addon').forEach(el => el.remove());

            // Process selected add-ons
            document.querySelectorAll('.addon-checkbox:checked').forEach(addon => {

                const container = addon.closest('.addon-item-container');
                const qty = parseInt(container.querySelector('.qty-value').textContent);
                const unitPrice = parseFloat(addon.dataset.price);
                const name = addon.dataset.name;

                const subTotal = unitPrice * qty;
                additionalPrice += subTotal;

                // Append feature to UI list
                const li = document.createElement('li');
                li.className = 'flex items-start dynamic-addon animate-fade-in';
                li.innerHTML = `
                <div class="mt-1 bg-blue-100 rounded-full p-1 text-blue-600 shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                              d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <span class="ml-3 text-blue-800 font-semibold text-sm md:text-base">
                    ${name} <span class="text-blue-500 font-bold">(x${qty})</span>
                </span>
            `;
                packageList.appendChild(li);

                // Store feature info
                selectedFeatures.push(`${name} (x${qty})`);
            });

            // Update total price
            const finalTotal = (basePrice + additionalPrice).toFixed(2);
            totalPriceDisplay.innerText = finalTotal;

            // Save checkout data to localStorage
            localStorage.setItem('securityCheckout', JSON.stringify({
                packageName: packageName,
                totalPrice: finalTotal,
                features: selectedFeatures
            }));

            // Scroll user to top section
            window.scrollTo({
                top: 100,
                behavior: 'smooth'
            });

            // Button feedback animation
            const originalText = confirmBtn.innerText;
            confirmBtn.innerText = "Updated!";
            setTimeout(() => {
                confirmBtn.innerText = originalText;
            }, 2000);
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

    #extraSecuritySection {
        opacity: 0;
        transform: translateY(1rem);
        transition: all 0.5s ease;
    }
</style>

<?php get_footer(); ?>