<!-- components/language-selector.blade.php -->
@php
    // Generate a unique ID for this instance of the component
    $uniqueId = 'lang-selector-' . uniqid();
@endphp

<div class="language-selector ">
    <div class="relative  {{$width}}">
        <button class="bg-gray-100 border-2 border-[#113d72] rounded-full px-3 py-[5px] text-[#113d72] flex items-center justify-center w-full transition-all duration-300 "
                id="{{ $uniqueId }}-dropdown"
                onclick="toggleLanguageDropdown('{{ $uniqueId }}')">
            <img class="pr-2" alt="image" src="{{ app()->getLocale() === 'bn' ? '/icons/banglang.svg' : '/icons/englang.svg' }}"/>
            <span class="font-semibold text-[16px] pr-1">{{ app()->getLocale() === 'bn' ? 'বাংলা' : 'Eng' }}</span>
            <img class="{{ $uniqueId }}-arrow-icon transition-all duration-300" alt="image" src="/icons/arrow-down.svg"/>
        </button>

        <div id="{{ $uniqueId }}-options" class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg z-50 hidden">
            <a href="{{route('setLang','en')}}" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-t-md flex items-center gap-2">
                <img class="pr-2" alt="image" src="/icons/englang.svg"/>
                <h1 class="font-semibold">Eng</h1>
            </a>
            <a href="{{route('setLang','bn')}}" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-b-md flex items-center gap-2">
                <img class="pr-1" alt="image" src="/icons/banglang.svg"/>
                <h1 class="font-semibold">বাংলা</h1>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        setupLanguageSelector('{{ $uniqueId }}');
    });

    // Only add this function if it doesn't already exist
    if (typeof window.setupLanguageSelector !== 'function') {
        window.setupLanguageSelector = function(id) {
            const arrow = document.querySelector('.' + id + '-arrow-icon');

            // Add the click event listener to document only once
            if (!window.langSelectorListenerAdded) {
                document.addEventListener('click', function(event) {
                    // Handle clicks outside all language selectors
                    document.querySelectorAll('[id$="-options"]').forEach(dropdown => {
                        const dropdownId = dropdown.id.replace('-options', '');
                        const button = document.getElementById(dropdownId + '-dropdown');
                        const arrowIcon = document.querySelector('.' + dropdownId + '-arrow-icon');

                        if (dropdown && button && !dropdown.contains(event.target) && !button.contains(event.target)) {
                            dropdown.classList.add('hidden');
                            if (arrowIcon && arrowIcon.classList.contains('rotate-180')) {
                                arrowIcon.classList.remove('rotate-180');
                            }
                        }
                    });
                });
                window.langSelectorListenerAdded = true;
            }
        };

        window.toggleLanguageDropdown = function(id) {
            const dropdown = document.getElementById(id + '-options');
            const arrow = document.querySelector('.' + id + '-arrow-icon');
            dropdown.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');

            // Close all other dropdowns
            document.querySelectorAll('[id$="-options"]').forEach(otherDropdown => {
                const otherId = otherDropdown.id.replace('-options', '');
                if (otherId !== id) {
                    otherDropdown.classList.add('hidden');
                    const otherArrow = document.querySelector('.' + otherId + '-arrow-icon');
                    if (otherArrow && otherArrow.classList.contains('rotate-180')) {
                        otherArrow.classList.remove('rotate-180');
                    }
                }
            });
        };
    }
</script>
