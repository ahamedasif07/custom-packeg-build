document.addEventListener("DOMContentLoaded", function () {
  const basePrice = "<?php echo $basePrice; ?>";
  const packageName = "<?php echo $packageName; ?>";
  const showBtn = document.getElementById("showAddonsBtn");
  const extraSection = document.getElementById("extraSecuritySection");
  const totalPriceDisplay = document.getElementById("totalPriceDisplay");
  const packageList = document.getElementById("packageFeatureList");
  const confirmBtn = document.getElementById("confirmBtn");

  // ১. কোয়ান্টিটি কন্ট্রোল লজিক
  document.querySelectorAll(".addon-item-container").forEach((container) => {
    const decBtn = container.querySelector(".decrease-btn");
    const incBtn = container.querySelector(".increase-btn");
    const qtyValue = container.querySelector(".qty-value");
    const priceDisplay = container.querySelector(".item-price-display");
    const checkbox = container.querySelector(".addon-checkbox");
    const originalPrice = parseFloat(checkbox.dataset.price);

    [decBtn, incBtn].forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
      });
    });

    incBtn.addEventListener("click", () => {
      let val = parseInt(qtyValue.textContent);
      val++;
      qtyValue.textContent = val;
      priceDisplay.textContent = `+$${(originalPrice * val).toFixed(2)}`;
    });

    decBtn.addEventListener("click", () => {
      let val = parseInt(qtyValue.textContent);
      if (val > 1) {
        val--;
        qtyValue.textContent = val;
        priceDisplay.textContent = `+$${(originalPrice * val).toFixed(2)}`;
      }
    });
  });

  // ২. শো/হাইড সেকশন
  showBtn.addEventListener("click", function () {
    if (extraSection.classList.contains("hidden")) {
      extraSection.classList.remove("hidden");
      setTimeout(() => {
        extraSection.style.opacity = "1";
        extraSection.style.transform = "translateY(0)";
      }, 10);
      document.getElementById("btnText").innerText = "Close Add-ons";
      document.getElementById("arrowIcon").classList.add("rotate-180");
    } else {
      extraSection.style.opacity = "0";
      extraSection.style.transform = "translateY(1rem)";
      setTimeout(() => extraSection.classList.add("hidden"), 500);
      document.getElementById("btnText").innerText = "Add More Items";
      document.getElementById("arrowIcon").classList.remove("rotate-180");
    }
  });

  // ৩. কনফার্ম বাটন এবং লোকাল স্টোরেজ লজিক
  confirmBtn.addEventListener("click", function () {
    let additionalPrice = 0;
    const selectedFeatures = [];

    // বেসিক ফিচারগুলো আগে লিস্টে রাখা
    document
      .querySelectorAll("#packageFeatureList li span:not(.dynamic-addon span)")
      .forEach((span) => {
        selectedFeatures.push(span.innerText.trim());
      });

    // আগের ডাইনামিক আইটেমগুলো ক্লিন করা
    document.querySelectorAll(".dynamic-addon").forEach((el) => el.remove());

    // সিলেক্টেড অ্যাড-অনস প্রসেসিং
    const checkedAddons = document.querySelectorAll(".addon-checkbox:checked");
    checkedAddons.forEach((addon) => {
      const container = addon.closest(".addon-item-container");
      const qty = parseInt(container.querySelector(".qty-value").textContent);
      const unitPrice = parseFloat(addon.dataset.price);
      const name = addon.dataset.name;

      const subTotal = unitPrice * qty;
      additionalPrice += subTotal;

      // বাম পাশের লিস্টে অ্যাড করা (UI আপডেট)
      const li = document.createElement("li");
      li.className = "flex items-start dynamic-addon animate-fade-in";
      li.innerHTML = `
                    <div class="mt-1 bg-blue-100 rounded-full p-1 text-blue-600 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="ml-3 text-blue-800 font-semibold text-sm md:text-base">${name} <span class="text-blue-500 font-bold">(x${qty})</span></span>
                `;
      packageList.appendChild(li);

      // অ্যারেতে পুশ করা
      selectedFeatures.push(`${name} (x${qty})`);
    });

    const finalTotal = (basePrice + additionalPrice).toFixed(2);
    totalPriceDisplay.innerText = finalTotal;

    // ডেটা লোকাল স্টোরেজে সেভ করা
    const checkoutData = {
      packageName: packageName,
      totalPrice: finalTotal,
      features: selectedFeatures,
    };
    localStorage.setItem("securityCheckout", JSON.stringify(checkoutData));

    // ইউজার ফিডব্যাক: স্ক্রল আপ
    window.scrollTo({
      top: 100,
      behavior: "smooth",
    });

    // ঐচ্ছিক: বাটন টেক্সট পরিবর্তন করে ইউজারকে বোঝানো যে সেভ হয়েছে
    const originalText = confirmBtn.innerText;
    confirmBtn.innerText = "Updated!";
    setTimeout(() => {
      confirmBtn.innerText = originalText;
    }, 2000);
  });
});
