<x-layout>
    <div class="px-6 flex flex-col-reverse md:flex-row gap-10 items-center py-10">
        <div class="flex-[1]">
            <img src="faq\faqImage.png" alt="faq-image">
        </div>

        <div class="flex-[1.5]">
            <div class="text-center md:text-left">
                <p class="text-[18px] md:text-[24px] font-[300]">Common Question on Client’s Mind</p>
                <h1 class="text-[32px] md:text-[50px] font-[800] mb-6">Frequently Ask Question</h1>
            </div>

            <div id="faq-container">
                @foreach(__('faq.items') as $faq)
                <div class="faq-item mb-4 bg-[#E1EEFF] border-[1px] border-[#87BBFF] rounded-lg p-4 transition-all duration-300">
                    <button class="faq-btn relative flex gap-2 items-center w-full text-left text-[#024091] text-[16px] md:text-[20px] font-[500] transition-colors duration-300 cursor-pointer"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1">{{ $faq['question'] }}</span>
                        <span class="icon text-3xl transition-transform duration-200">+</span>
                    </button>
            
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pt-2 text-white text-[14px] md:text-[16px] font-[300] flex items-start md:items-center gap-2">
                            <p> — </p>
                            <p>{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> 

        </div>
    </div>
</x-layout>

<script>
    function toggleFAQ(button) {
        const parentDiv = button.parentElement;
        const content = parentDiv.querySelector(".faq-content");
        const icon = button.querySelector(".icon");
        const isExpanded = button.getAttribute("aria-expanded") === "true";

        document.querySelectorAll(".faq-item").forEach((item) => {
            if (item !== parentDiv) {
                item.classList.remove("bg-[#1565CE]", "text-white");
                item.classList.add("bg-[#E1EEFF]", "text-[#024091]");
                item.querySelector(".faq-content").style.maxHeight = "0";
                item.querySelector(".faq-btn").classList.remove("text-white");
                item.querySelector(".faq-btn").classList.add("text-[#024091]");
                item.querySelector(".faq-btn").setAttribute("aria-expanded", "false");
                item.querySelector(".icon").textContent = "+";
            }
        });

        button.setAttribute("aria-expanded", !isExpanded);
        content.style.maxHeight = isExpanded ? "0" : content.scrollHeight + "px";

        parentDiv.classList.toggle("bg-[#1565CE]", !isExpanded); 
        parentDiv.classList.toggle("bg-[#E1EEFF]", isExpanded);
        parentDiv.classList.toggle("text-[#024091]", isExpanded); 

        button.classList.toggle("text-white", !isExpanded);
        button.classList.toggle("text-[#024091]", isExpanded);

        icon.textContent = isExpanded ? "+" : "×";
    }
</script>
