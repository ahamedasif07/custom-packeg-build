<?php

/**
 * Template Name: chack-out
 * Description: Checkout page to collect user info and display order summary
 */

get_header();
?>

<div>
    <!-- =====================================================
         Page Wrapper
    ====================================================== -->
    <div class="min-h-screen antialiased py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-4">

            <!-- =======================
                 Page Heading
            ======================== -->
            <div class="mb-10">
                <h1 class="text-3xl font-extrabold text-slate-900">Complete Your Order</h1>
                <p class="text-slate-600">
                    Please provide your details to activate your security plan.
                </p>
            </div>

            <!-- =====================================================
                 Main Layout (Form + Summary)
            ====================================================== -->
            <div class="flex flex-col lg:flex-row gap-10">

                <!-- =======================
                     LEFT: Checkout Form
                ======================== -->
                <div class="w-full lg:w-2/3">
                    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="p-8">

                            <h2 class="text-xl font-bold text-slate-900 mb-6">
                                Contact & Shipping Information
                            </h2>

                            <!-- =======================
                                 Checkout Form
                            ======================== -->
                            <form id="checkoutForm" class="space-y-6">

                                <!-- Name Fields -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                                            First Name *
                                        </label>
                                        <input type="text" required name="fname" placeholder="John"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200
                                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                                            Last Name *
                                        </label>
                                        <input type="text" required name="lname" placeholder="Doe"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200
                                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                </div>

                                <!-- Contact Fields -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                                            Email Address *
                                        </label>
                                        <input type="email" required name="email" placeholder="john@example.com"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200
                                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                                            Phone Number *
                                        </label>
                                        <input type="tel" required name="phone" placeholder="+1 (555) 000-0000"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200
                                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                </div>

                                <!-- Address -->
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                                        Installation Address *
                                    </label>
                                    <input type="text" required name="address"
                                        placeholder="Street address, Apartment, suite, etc."
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200
                                        focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                </div>

                                <!-- Location -->
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                                            City *
                                        </label>
                                        <input type="text" required name="city"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200
                                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                                            State *
                                        </label>
                                        <input type="text" required name="state"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200
                                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>

                                    <div class="col-span-2 md:col-span-1">
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                                            ZIP Code *
                                        </label>
                                        <input type="text" required name="zip"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200
                                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                    </div>
                                </div>

                                <!-- Notes -->
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                                        Order Notes (Optional)
                                    </label>
                                    <textarea name="notes" rows="3"
                                        placeholder="Notes about your order, e.g. special notes for delivery."
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200
                                        focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"></textarea>
                                </div>

                                <!-- Submit -->
                                <button type="submit" class="w-full bg-[#045CB4] hover:bg-blue-700 text-white font-bold py-4
                                    rounded-2xl shadow-lg transition-all active:scale-95">
                                    Place Order Now
                                </button>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- =======================
                     RIGHT: Order Summary
                ======================== -->
                <div class="w-full lg:w-1/3">
                    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden sticky top-10">

                        <!-- Header -->
                        <div class="bg-[#045CB4]! p-6 text-white">
                            <h3 class="text-xl text-white! font-bold">Order Summary</h3>
                        </div>

                        <!-- Content -->
                        <div class="p-6">

                            <!-- Package Name -->
                            <div class="mb-6">
                                <span class="text-xs uppercase tracking-widest text-slate-400 font-bold">
                                    Selected Plan
                                </span>
                                <h4 id="displayPackageName" class="text-2xl font-bold text-slate-900 mt-1">---</h4>
                            </div>

                            <!-- Features -->
                            <div class="mb-8">
                                <span class="text-xs uppercase tracking-widest text-slate-400 font-bold block mb-3">
                                    Plan Includes:
                                </span>
                                <ul id="displayFeatures" class="space-y-3"></ul>
                            </div>

                            <!-- Pricing -->
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

    <!-- =====================================================
         Checkout Page Script
    ====================================================== -->

</div>

<?php get_footer(); ?>