window.onload = () => {
    document.querySelectorAll(".carousel-container").forEach((container) => {
        const carousel = container.querySelector(".carousel");
        const items = container.querySelectorAll(".carousel-item");
        const prevBtn = container.querySelector(".prev");
        const nextBtn = container.querySelector(".next");

        let currentIndex = 0;
        const visibleItems = 4;

        function applySpaceBetween() {
            const containerWidth = container.clientWidth;
            const itemWidth = items[0].offsetWidth;
            const totalGap = containerWidth - visibleItems * itemWidth;
            const gap = totalGap / (visibleItems - 1);

            items.forEach((item, index) => {
                item.style.marginLeft = index > 0 ? `${gap}px` : "0";
            });

            const totalWidth =
                itemWidth * items.length + gap * (items.length - 1);
            carousel.style.width = `${totalWidth}px`;

            updateCarousel();
        }

        function updateCarousel() {
            const itemWidth = items[0].offsetWidth;
            const containerWidth = container.clientWidth;
            const totalGap = containerWidth - visibleItems * itemWidth;
            const gap = totalGap / (visibleItems - 1);
            const moveDistance = (itemWidth + gap) * currentIndex * -1;

            carousel.style.transform = `translateX(${moveDistance}px)`;

            items.forEach((item, index) => {
                if (
                    index >= currentIndex &&
                    index < currentIndex + visibleItems
                ) {
                    item.style.opacity = "1";
                    item.style.pointerEvents = "auto";
                } else {
                    item.style.opacity = "0";
                    item.style.pointerEvents = "none";
                }
            });

            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex + visibleItems >= items.length;
        }

        prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextBtn.addEventListener("click", () => {
            if (currentIndex + visibleItems < items.length) {
                currentIndex++;
                updateCarousel();
            }
        });

        // Jalankan saat load dan resize
        applySpaceBetween();
        window.addEventListener("resize", applySpaceBetween);
    });
};
