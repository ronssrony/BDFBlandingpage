<!-- components/login-dropdown.blade.php -->
@php
    // Generate a unique ID for this instance of the component
    $uniqueId = 'login-dropdown-' . uniqid();
@endphp

<div class="login-dropdown ">
    <div class="relative">
        <button class="bg-[#1565ce] {{$width}} text-white relative pl-6 pr-12 py-2 rounded-full hover:bg-[#1565ce]/90 transition-colors whitespace-nowrap"
                id="{{ $uniqueId }}-dropdown"
                onclick="toggleLoginDropdown('{{ $uniqueId }}')">
            {{ $buttonText ?? 'Login' }}

            <div class="absolute right-0 top-0 text-white flex justify-center items-center h-10 w-10 rounded-full bg-[#4F8CDB]">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 22" class="{{ $uniqueId }}-arrow-icon transition-all duration-300">
                    <path fill="currentColor" d="M12 14.708L6.692 9.4l.708-.708l4.6 4.6l4.6-4.6l.708.708z"/>
                </svg>
            </div>
        </button>

        <div id="{{ $uniqueId }}-options" class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg z-50 hidden">
            <a href="#" class="px-4 py-2 text-sm text-[#1565CE] hover:text-white hover:bg-[#1565CE] rounded-t-md flex justify-center items-center gap-2">
                <h1 class="font-semibold text-center">{{ $loginText ?? 'Login' }}</h1>
            </a>
            <a href="#" class="px-4 py-2 text-sm text-[#1565CE] hover:text-white hover:bg-[#1565CE] rounded-b-md flex items-center justify-center gap-2">
                <h1 class="font-semibold text-center ">{{ $signupText ?? 'Signup' }}</h1>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setupLoginDropdown('{{ $uniqueId }}');
    });

    // Only add this function if it doesn't already exist
    if (typeof window.setupLoginDropdown !== 'function') {
        window.setupLoginDropdown = function(id) {
            const arrow = document.querySelector('.' + id + '-arrow-icon');

            // Add the click event listener to document only once
            if (!window.loginDropdownListenerAdded) {
                document.addEventListener('click', function(event) {
                    // Handle clicks outside all login dropdowns
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
                window.loginDropdownListenerAdded = true;
            }
        };

        window.toggleLoginDropdown = function(id) {
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
