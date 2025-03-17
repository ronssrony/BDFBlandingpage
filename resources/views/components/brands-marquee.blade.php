<div>
    <div class="px-10 md:px-28 py-10">
        <h1 class="text-[#666666] text-center text-[18px] md:text-[24px] font-[300] pb-6">{{__('brands.header')}}</h1>

        <div id="image-container" class="flex items-center gap-10 overflow-hidden cursor-grab">
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

<script>
    const container = document.getElementById("image-container");
    let isDragging = false;
    let startX, scrollLeft;

    // Mouse Down - Start Dragging
    container.addEventListener("mousedown", (e) => {
        isDragging = true;
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
        container.classList.add("cursor-grabbing");
    });

    // Mouse Move - Drag Action
    container.addEventListener("mousemove", (e) => {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 2; 
        container.scrollLeft = scrollLeft - walk;
    });

    // Mouse Up / Leave - Stop Dragging
    container.addEventListener("mouseup", () => {
        isDragging = false;
        container.classList.remove("cursor-grabbing");
    });

    container.addEventListener("mouseleave", () => {
        isDragging = false;
        container.classList.remove("cursor-grabbing");
    });
</script>

<style>
    .cursor-grab {
        cursor: grab;
    }

    .cursor-grabbing {
        cursor: grabbing;
    }

    #image-container::-webkit-scrollbar {
        display: none;
    }

    #image-container {
        -ms-overflow-style: none;
        scrollbar-width: none;
        white-space: nowrap;
        overflow-x: auto;
    }
</style>
