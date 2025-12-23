<?php
/*
Template Name: Single-Product
*/
get_header();
?>


<div class="">

    <main class="container mx-auto px-4 py-16">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4 leading-tight">Secure Your Peace of Mind</h1>
            <p class="text-lg text-slate-600">Choose our foundational security package or tailor it to your needs with
                professional-grade add-ons.</p>
        </div>

        <?php
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

        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <div
                class="lg:col-span-5 bg-white rounded-3xl shadow-2xl shadow-blue-100/50 border border-slate-100 overflow-hidden">
                <div class="bg-blue-600 p-8 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <span
                            class="bg-blue-500/30 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-blue-400/50">Most
                            Popular</span>
                        <h2 class="text-3xl font-bold mt-4">Basic Protection</h2>
                        <p class="text-blue-100 mt-2">The foundation of home security.</p>
                    </div>
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/10 rounded-full"></div>
                </div>

                <div class="p-8">
                    <div class="flex items-baseline mb-6">
                        <span class="text-4xl font-bold text-slate-900">$29.99</span>
                        <span class="text-slate-500 ml-2">/month</span>
                    </div>

                    <ul class="space-y-4 mb-10">
                        <?php foreach ($basicFeatures as $feature): ?>
                        <li class="flex items-start">
                            <div class="mt-1 bg-green-100 rounded-full p-1">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="ml-3 text-slate-700 font-medium"><?php echo $feature; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <button
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl transition-all shadow-lg shadow-blue-200 hover:shadow-blue-300 transform hover:-translate-y-1">
                        Select This Package
                    </button>
                </div>
            </div>
            <!-- add extra sequraty -->
            <div class="lg:col-span-7 bg-white rounded-3xl shadow-xl border border-slate-100 p-8">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900 leading-tight">Enhance Your Security</h3>
                    <p class="text-slate-500 mt-1">Add extra layers of protection to your plan.</p>
                </div>

                <form action="" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php foreach ($addOns as $item): ?>
                        <div class="relative">
                            <input type="checkbox" name="addons[]" id="<?php echo $item['id']; ?>" class="peer hidden"
                                value="<?php echo $item['id']; ?>">
                            <label for="<?php echo $item['id']; ?>"
                                class="block p-5 border-2 border-slate-100 rounded-2xl cursor-pointer transition-all peer-checked:border-blue-500 peer-checked:bg-blue-50/50 hover:bg-slate-50">
                                <div class="flex justify-between items-start mb-2">
                                    <div
                                        class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 peer-checked:bg-blue-100 peer-checked:text-blue-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-bold text-blue-600">+$<?php echo $item['price']; ?></span>
                                </div>
                                <h4 class="font-bold text-slate-900"><?php echo $item['name']; ?></h4>
                                <p class="text-xs text-slate-500 mt-1 leading-relaxed"><?php echo $item['desc']; ?></p>
                            </label>
                            <div class="absolute top-4 right-4 hidden peer-checked:block text-blue-600">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div
                        class="mt-8 pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <p class="text-sm text-slate-500 text-center sm:text-left">One-time equipment fee may apply for
                            additional items.</p>
                        <button type="submit"
                            class="w-full sm:w-auto px-10 py-4 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-2xl transition-colors shadow-lg shadow-slate-200">
                            Add to Package
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>

</div>
<?php get_footer(); ?>