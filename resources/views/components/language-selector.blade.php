<!-- components/language-selector.blade.php -->
<div class="language-selector">
    <div class="relative">
        <button class="bg-gray-100 border-2 border-[#113d72] rounded-full px-3 py-[5px]  text-[#113d72] flex  items-center justify-center w-full transition-all duration-300 max-w-28" id="languageDropdown" onclick="toggleLanguageDropdown()">
            <img class="pr-2" alt="image" src="{{ app()->getLocale() === 'bn' ? '/icons/banglang.svg' : '/icons/englang.svg' }}"/>
            <span  class="font-semibold text-[16px] pr-1">{{ app()->getLocale() === 'bn' ? 'বাংলা' : 'Eng' }}</span>
            <img class="arrow-icon transition-all duration-300" alt="image" src="/icons/arrow-down.svg"/>
        </button>

        <div id="languageOptions" class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg z-50 hidden">
            <a href="{{route('setLang','en')}}" class=" px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-t-md flex items-center gap-2 ">
                <img class="pr-2" alt="image" src="/icons/englang.svg"/>
                <h1 class="font-semibold">Eng</h1>
            </a>
            <a href="{{route('setLang','bn')}}" class=" px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-b-md flex items-center gap-2">
                <img class="pr-1" alt="image" src="/icons/banglang.svg"/>
               <h1 class="font-semibold">বাংলা</h1>

            </a>
        </div>
    </div>
</div>

<script>
    const arrow = document.querySelector('.arrow-icon');
    function toggleLanguageDropdown() {
        const dropdown = document.getElementById('languageOptions');
        dropdown.classList.toggle('hidden');
        arrow.classList.toggle('rotate-180');
    }

    // Close the dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('languageOptions');
        const button = document.getElementById('languageDropdown');

        if (dropdown && button && !dropdown.contains(event.target) && !button.contains(event.target)) {
            dropdown.classList.add('hidden');
            if( arrow.classList.contains('rotate-180'))
            {
                arrow.classList.toggle('rotate-180');
            }

        }
    });
</script>
