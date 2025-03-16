<!-- navbar.blade.php -->
<nav class="navbar  fixed top-0 z-70 min-w-full flex justify-center  max-h-[70px]  items-center min-h-[70px] transition-all duration-300">
    <div class=" transition-all duration-400 flex justify-between items-center  mx-auto max-w-[1300px] lg:max-w-[1005px] xl:max-w-[1160px] min-[1300px]:max-w-[1256px] 2xl:max-w-[1300px] w-[100%] lg:w-[100%] xl:w-[100%] 2xl:w-[100%] py-3 px-4">
        <div class="w-1/6 min-w-44 cursor-pointer">
            <a href="{{ route('home') }}">
                <img class=" " src="/BFLOGO.png" alt="Logo"/>
            </a>
        </div>

        <div class="menus flex gap-5 px-5">
            <div class=" hidden min-[800px]:flex gap-2 items-center bg-[#F4F9FF] border-2 border-[#BDDAFF] pl-1 pr-4 rounded-full">
                @foreach(__('navbar.sections') as $section)
                    <button
                        onclick="scrollToSection('{{ $section['id'] }}', '{{ $section['link'] }}')"
                        class="{{ 'home' === $section['id'] ? __('navbar.active_class') : __('navbar.inactive_class') }}">
                        {{$section['label']}}
                    </button>
                @endforeach
            </div>

            <div class="hidden xl:flex items-center space-x-4">
                @include('components.language-selector')
                <button
                    class=" bg-[#1565ce] text-white px-4 py-2 rounded-full hover:bg-[#1565ce]/90 transition-colors whitespace-nowrap"
                    onclick="scrollToSection('contact')">
                    {{ __('navbar.start_today') }}
                </button>
            </div>
        </div>

        <button onclick="toggleMenu()" class="xl:hidden text-gray-600 focus:outline-none mt-2">
            <img src="/icons/PhListBold.svg" alt="Menu" class="w-10 h-10"/>
        </button>
    </div>
</nav>

<div id="mobileMenu" class="sidebar xl:hidden   rounded w-full z-40    flex flex-col py-5 md:pt-14 items-center" style="">
    <div class=" min-[800px]:hidden flex flex-col gap-5 px-5">
        @foreach(__('navbar.sections') as $section)
            <button
                onclick="scrollToSection('{{ $section['id'] }}', '{{ $section['link'] }}')"
                class="">
                {{ $section['label'] }}
            </button>
        @endforeach
    </div>
    <div class="xl:hidden flex flex-col gap-5 p-10 h-full items-start">
        @include('components.language-selector')
        <button
            class=" bg-[#1565ce] w-36 text-white px-4 py-2 rounded-full hover:bg-[#1565ce]/90 transition-colors whitespace-nowrap"
            onclick="scrollToSection('contact')">
            {{ __('navbar.start_today') }}
        </button>
    </div>
</div>

<script>
    let isMenuOpen = false;
    let isScrolling = false;
    let navbarPos = '{{ __("navbar.navbar_position_default") }}';
    let isActive = "home";
    let observer = null;
    const activeClass = '{{ __("navbar.active_class") }}';
    const inactiveClass = '{{ __("navbar.inactive_class") }}';
    const isHome = {{ 'home'? 'true' : 'false' }};

    const toggleMenu = function() {
        isMenuOpen = !isMenuOpen;
        const mobileMenu = document.getElementById('mobileMenu');
        console.log('toggling') ;
        if (isMenuOpen) {
            mobileMenu.classList.add('open'); // Add the "open" class to slide in the menu
        } else {
            mobileMenu.classList.remove('open'); // Remove the "open" class to slide out the menu
        }
    }

/*    function scrollToSection(id, link) {
        if (!isHome) {
            if (link) {
                window.location.href = link;
                return;
            }
        }

        GlobalscrollToSection(id);
    }

    function GlobalscrollToSection(id) {
        isScrolling = true;
        isActive = id;
        const section = document.getElementById(id);
        if (section) {
            const yOffset = -140;
            const y = section.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({
                top: y,
                behavior: 'smooth'
            });

            setTimeout(() => {
                isScrolling = false;
            }, 2000);

            isMenuOpen = false;
            toggleMenu();
        }
    }

    function handleScroll() {
        if (window.scrollY > 20) {
            document.querySelector('.navbar').classList.replace('{{ __("navbar.navbar_position_default") }}', '{{ __("navbar.navbar_position_scrolled") }}');
        } else {
            document.querySelector('.navbar').classList.replace('{{ __("navbar.navbar_position_scrolled") }}', '{{ __("navbar.navbar_position_default") }}');
        }
    }

    function setupObserver() {
        observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (isScrolling) return;
                    if (entry.isIntersecting) {
                        isActive = entry.target.id;
                        updateActiveClass();
                    }
                });
            },
            {rootMargin: "-150px 0px 0px 0px"}
        );

        // Get all sections and observe them
        @foreach(__('navbar.sections') as $section)
        const element{{ $loop->index }} = document.getElementById('{{ $section['id'] }}');
        if (element{{ $loop->index }}) {
            observer.observe(element{{ $loop->index }});
        }
        @endforeach
    }

    function updateActiveClass() {
        @foreach(__('navbar.sections') as $section)
        const buttons = document.querySelectorAll('button[onclick="scrollToSection(\'{{ $section['id'] }}\', \'{{ $section['link'] }}\')"]');
        buttons.forEach(button => {
            if (isActive === '{{ $section['id'] }}') {
                button.className = activeClass;
            } else {
                button.className = inactiveClass;
            }
        });
        @endforeach
    }

    document.addEventListener('DOMContentLoaded', function() {
        setupObserver();
        window.addEventListener('popstate', (event) => {
            event.preventDefault();
            GlobalscrollToSection('home');
        });
        window.addEventListener("scroll", handleScroll);
    });*/
</script>

<style>
    .nav-link:hover {
        background-color: #f1f1f1;
    }
    .sidebar {
        position: fixed;
        top: 0;
        right: -250px; /* Initially hidden off-screen to the left */
        width: 250px;
        height: 100%;
        background-color: #333;
        color: white;
        transition: transform 0.3s ease-in-out;
    }

    .sidebar.open {
        transform: translateX(-250px);
        transition: transform 0.3s ease-in-out;
    }

</style>
