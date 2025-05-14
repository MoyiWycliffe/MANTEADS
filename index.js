document.addEventListener("DOMContentLoaded", () => {
    const jobResults = document.querySelectorAll(".job-result");

    jobResults.forEach((result, index) => {
        // Insert ad after every 4th result (index is 0-based)
        if ((index + 1) % 4 === 0) {
            const ad = document.createElement("div");
            ad.className = "ad-slot";
            ad.innerHTML = `
                <div class="ad-content">
                    <strong>Sponsored:</strong> Check out this amazing opportunity!
                    <!-- You can also load real ad scripts here -->
                </div>
            `;
            result.parentNode.insertBefore(ad, result.nextSibling);
        }
    });
});
