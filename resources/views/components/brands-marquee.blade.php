<x-layout>
    <div class="px-10 md:px-28 py-10">
        <h1 class="text-[#666666] text-center text-[18px] md:text-[24px] font-[300] pb-6">Trusted by leading brands</h1>

        <div class="relative w-full">
            <div id="custom-scrollbar" class="w-full h-[4px] bg-gray-300 cursor-pointer overflow-x-auto" style="position: absolute; top: 0;">
                <div id="scrollbar-thumb" class="h-[4px] bg-gray-600 w-1/4"></div>
            </div>
        
            <div id="scroll-container" class="overflow-hidden w-full pt-4">
                <div id="scroll-content" class="flex items-center gap-10 w-max">
                    <img src="brands/brand1.png" alt="brand1">
                    <img src="brands/brand2.png" alt="brand2">
                    <img src="brands/brand3.png" alt="brand3">
                    <img src="brands/brand4.png" alt="brand4">
                    <img src="brands/brand5.png" alt="brand5">
                    <img src="brands/brand6.png" alt="brand6">
                    <img src="brands/brand7.png" alt="brand7">
                    <img src="brands/brand8.png" alt="brand8">
                    <img src="brands/brand9.png" alt="brand9">
                </div>
            </div>
        </div>
    </div>
</x-layout>


<script>
    const scrollContainer = document.getElementById("scroll-container");
    const scrollContent = document.getElementById("scroll-content");
    const customScrollbar = document.getElementById("custom-scrollbar");
    const scrollbarThumb = document.getElementById("scrollbar-thumb");

    function updateScrollbar() {
        const scrollWidth = scrollContent.scrollWidth;
        const containerWidth = scrollContainer.clientWidth;
        const scrollbarWidth = (containerWidth / scrollWidth) * customScrollbar.clientWidth;
        scrollbarThumb.style.width = `${scrollbarWidth}px`;
    }

    updateScrollbar();
    window.addEventListener("resize", updateScrollbar);

    customScrollbar.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const startScrollLeft = scrollContainer.scrollLeft;

        function onMouseMove(e) {
            const deltaX = e.clientX - startX;
            const scrollableWidth = scrollContent.scrollWidth - scrollContainer.clientWidth;
            const scrollbarWidth = customScrollbar.clientWidth - scrollbarThumb.clientWidth;
            const scrollRatio = scrollableWidth / scrollbarWidth;

            scrollContainer.scrollLeft = startScrollLeft + deltaX * scrollRatio;
        }

        function onMouseUp() {
            window.removeEventListener("mousemove", onMouseMove);
            window.removeEventListener("mouseup", onMouseUp);
        }

        window.addEventListener("mousemove", onMouseMove);
        window.addEventListener("mouseup", onMouseUp);
    });

    scrollContainer.addEventListener("scroll", () => {
        const scrollableWidth = scrollContent.scrollWidth - scrollContainer.clientWidth;
        const scrollbarWidth = customScrollbar.clientWidth - scrollbarThumb.clientWidth;
        const scrollLeft = scrollContainer.scrollLeft;
        const scrollPosition = (scrollLeft / scrollableWidth) * scrollbarWidth;
        scrollbarThumb.style.transform = `translateX(${scrollPosition}px)`;
    });
</script>