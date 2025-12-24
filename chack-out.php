<?php
/* Template Name: chack-out */
get_header();
?>
<div>
    <div class="bg-slate-50 min-h-screen antialiased py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-4">

            <div class="mb-10">
                <h1 class="text-3xl font-extrabold text-slate-900">Complete Your Order</h1>
                <p class="text-slate-600">Please provide your details to activate your security plan.</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-10">

                <div class="w-full lg:w-2/3">
                    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="p-8">
                            <h2 class="text-xl font-bold text-slate-900 mb-6">Contact & Shipping Information</h2>

                            <form id="checkoutForm" class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">First Name
                                            *</label>
                                        <input type="text" required name="fname" placeholder="John"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Last Name
                                            *</label>
                                        <input type="text" required name="lname" placeholder="Doe"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address
                                            *</label>
                                        <input type="email" required name="email" placeholder="john@example.com"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number
                                            *</label>
                                        <input type="tel" required name="phone" placeholder="+1 (555) 000-0000"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Installation Address
                                        *</label>
                                    <input type="text" required name="address"
                                        placeholder="Street address, Apartment, suite, etc."
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                </div>

                                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">City *</label>
                                        <input type="text" required name="city"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">State *</label>
                                        <input type="text" required name="state"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                    <div class="col-span-2 md:col-span-1">
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">ZIP Code
                                            *</label>
                                        <input type="text" required name="zip"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Order Notes
                                        (Optional)</label>
                                    <textarea name="notes" rows="3"
                                        placeholder="Notes about your order, e.g. special notes for delivery."
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full bg-[#045CB4] hover:bg-blue-700 text-white font-bold py-4 rounded-2xl shadow-lg transition-all active:scale-95">
                                    Place Order Now
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3">
                    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden sticky top-10">
                        <div class="bg-slate-900 p-6 text-white">
                            <h3 class="text-xl font-bold">Order Summary</h3>
                        </div>

                        <div class="p-6">
                            <div class="mb-6">
                                <span class="text-xs uppercase tracking-widest text-slate-400 font-bold">Selected
                                    Plan</span>
                                <h4 id="displayPackageName" class="text-2xl font-bold text-slate-900 mt-1">---</h4>
                            </div>

                            <div class="mb-8">
                                <span class="text-xs uppercase tracking-widest text-slate-400 font-bold block mb-3">Plan
                                    Includes:</span>
                                <ul id="displayFeatures" class="space-y-3">
                                </ul>
                            </div>

                            <div class="border-t border-slate-100 pt-6">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-slate-600">Monthly Subscription</span>
                                    <span class="font-bold text-slate-900" id="displayTotalPrice">$0.00</span>
                                </div>
                                <div class="flex justify-between items-center mb-6">
                                    <span class="text-slate-600">Activation Fee</span>
                                    <span class="text-green-600 font-bold">FREE</span>
                                </div>

                                <div class="bg-blue-50 p-4 rounded-2xl flex justify-between items-center">
                                    <span class="text-blue-900 font-bold">Due Today</span>
                                    <span class="text-2xl font-black text-blue-900" id="finalPrice">$0.00</span>
                                </div>
                            </div>

                            <p class="text-[11px] text-slate-400 mt-6 text-center leading-relaxed">
                                By clicking "Place Order" you agree to our Terms of Service and Privacy Policy.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // LocalStorage থেকে ডেটা রিসিভ করা
            const savedData = localStorage.getItem('securityCheckout');

            if (!savedData) {
                // যদি ডেটা না থাকে তবে প্রোডাক্ট পেজে ব্যাক করবে
                window.location.href = '<?php echo home_url(); ?>';
                return;
            }

            const data = JSON.parse(savedData);

            // UI আপডেট করা
            document.getElementById('displayPackageName').innerText = data.packageName;
            document.getElementById('displayTotalPrice').innerText = `$${data.totalPrice}`;
            document.getElementById('finalPrice').innerText = `$${data.totalPrice}`;

            const featuresContainer = document.getElementById('displayFeatures');
            data.features.forEach(feature => {
                const li = document.createElement('li');
                li.className = 'flex items-start text-sm text-slate-600';
                li.innerHTML = `
            <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>${feature}</span>
        `;
                featuresContainer.appendChild(li);
            });

            // ফর্ম সাবমিট হ্যান্ডলার
            document.getElementById('checkoutForm').addEventListener('submit', function(e) {
                e.preventDefault();

                // এখানে আপনি আপনার AJAX বা Email পাঠানোর লজিক লিখতে পারেন
                alert('Thank you! Your order for ' + data.packageName + ' has been placed.');

                // ক্লিয়ার ডেটা
                localStorage.removeItem('securityCheckout');
            });
        });

        // local storage lopgic
        // আপনার Single Product পেজের স্ক্রিপ্টের শেষে বা Confirm বাটনের ভেতরে এটি যোগ করুন
        document.querySelector('#showAddonsBtn a').addEventListener('click', function(e) {
            e.preventDefault();

            const checkoutData = {
                packageName: "<?php echo $packageName; ?>",
                totalPrice: document.getElementById('totalPriceDisplay').innerText,
                features: []
            };

            // সব ফিচার (বেসিক + ডাইনামিক) কালেক্ট করা
            document.querySelectorAll('#packageFeatureList li span').forEach(span => {
                checkoutData.features.push(span.innerText);
            });

            localStorage.setItem('securityCheckout', JSON.stringify(checkoutData));
            window.location.href = this.href;
        });
    </script>
</div>
<?php
get_footer();
?>