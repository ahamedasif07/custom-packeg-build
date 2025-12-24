document.addEventListener("DOMContentLoaded", function () {
  /* ---------------------------------------------
             1. Fetch checkout data from LocalStorage
            ---------------------------------------------- */
  const savedData = localStorage.getItem("securityCheckout");

  if (!savedData) {
    // If no checkout data found, redirect user
    window.location.href = "<?php echo home_url(); ?>";
    return;
  }

  /* ---------------------------------------------
             2. Parse stored JSON data
            ---------------------------------------------- */
  const data = JSON.parse(savedData);

  /* ---------------------------------------------
             3. Update package name & pricing
            ---------------------------------------------- */
  document.getElementById("displayPackageName").innerText =
    data.packageName || "Plan Selected";

  const formattedPrice = data.totalPrice.startsWith("$")
    ? data.totalPrice
    : `$${data.totalPrice}`;

  document.getElementById("displayTotalPrice").innerText = formattedPrice;
  document.getElementById("finalPrice").innerText = formattedPrice;

  /* ---------------------------------------------
             4. Render selected features list
            ---------------------------------------------- */
  const featuresContainer = document.getElementById("displayFeatures");
  featuresContainer.innerHTML = "";

  if (Array.isArray(data.features)) {
    data.features.forEach((feature) => {
      const li = document.createElement("li");
      li.className = "flex items-start gap-4 text-sm text-slate-600";
      li.innerHTML = `
                        <div class="mt-1 bg-green-100 rounded-full p-1 text-green-600 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-slate-700 font-medium text-sm md:text-base">${feature}</span>
                    `;
      featuresContainer.appendChild(li);
    });
  }

  /* ---------------------------------------------
             5. Form submission handler
            ---------------------------------------------- */
  document
    .getElementById("checkoutForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      alert(
        "Thank you! Your order for " +
          data.packageName +
          " has been placed successfully."
      );

      // Clear stored checkout data
      localStorage.removeItem("securityCheckout");

      // Optional redirect
      // window.location.href = '<?php echo home_url('/thank-you'); ?>';
    });
});
