<!-- components/language-selector.blade.php -->
<div class="language-selector">
    <div class="relative">
        <button class="fbg-gray-100 border-2 border-[#113d72] rounded-full px-4 py-[6px]  text-[#113d72] flex  items-center justify-start w-full transition-all duration-300" id="languageDropdown" onclick="toggleLanguageDropdown()">
            <img class="pr-2" alt="image" src="/icons/englang.svg"/>
            <span class="font-semibold">{{ app()->getLocale() === 'bn' ? 'বাংলা' : 'Eng' }}</span>
        </button>

        <div id="languageOptions" class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg z-50 hidden">
            <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-t-md {{ app()->getLocale() === 'en' ? 'bg-gray-100' : '' }}">
                Eng
            </a>
            <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-b-md {{ app()->getLocale() === 'bn' ? 'bg-gray-100' : '' }}">
                বাংলা
            </a>
        </div>
    </div>
</div>

<script>
    function toggleLanguageDropdown() {
        const dropdown = document.getElementById('languageOptions');
        dropdown.classList.toggle('hidden');

        @if(isset($toggleMenu))
        toggleMenu();
        @endif
    }

    // Close the dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('languageOptions');
        const button = document.getElementById('languageDropdown');

        if (dropdown && button && !dropdown.contains(event.target) && !button.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>
