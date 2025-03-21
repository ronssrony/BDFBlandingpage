
@php
    $currentSection = $currentSection ?? 'home'; // Default value
 @endphp
<nav class="navbar  fixed top-0 z-[9999] min-w-full flex justify-center  max-h-[70px]  items-center min-h-[70px] transition-all duration-300 ">
    <div class=" transition-all bg-white duration-400 flex  justify-between items-center  mx-auto max-w-[1200px]  w-[100%]  py-3 px-4">
        <div class="w-1/6 min-w-36 max-w-36 cursor-pointer">
            <a href="{{ route('home') }}">
                <img class=" " src="/BFLOGO.png" alt="Logo"/>
            </a>
        </div>

        <div class="menus flex gap-5 px-5">
            <div class="  hidden min-[800px]:flex gap-2 items-center bg-[#F4F9FF] border-2 border-[#BDDAFF] pl-1 pr-4 rounded-full">
                @foreach(__('navbar.sections') as $section)
                    <button
                        onclick="scrollToSection('{{ $section['id'] }}', '{{ $section['link'] }}')"
                        data-id="{{ $section['id'] }}"
                        class="nav-link">
                        {{$section['label']}}
                    </button>
                @endforeach
            </div>

            <div class="hidden xl:flex items-center space-x-4">
                @include('components.language-selector',['width'=>''])
                @include('components.login-dropdown',['width'=>''])
            </div>
        </div>

        <button onclick="toggleMenu()" class="xl:hidden text-gray-600 focus:outline-none mt-2">
            <img src="/icons/PhListBold.svg" alt="Menu" class=" menuIcon transition-all duration-300 w-10 h-10"/>
        </button>
    </div>
</nav>

<div id="mobileMenu" class="sidebar xl:hidden  bg-white/80 backdrop-blur-sm   rounded w-full z-40    flex flex-col py-5 pt-24 items-center" >
    <div class=" lg:hidden  flex flex-col gap-2 px-5">
        @foreach(__('navbar.sections') as $section)
            <button
                onclick="scrollToSection('{{ $section['id'] }}', '{{ $section['link'] }}')"
                data-id="{{ $section['id'] }}"
                class="nav-link">
                {{$section['label']}}
            </button>
        @endforeach
    </div>
    <div class=" xl:hidden flex  flex-col gap-5 p-5 h-full items-start">
        @include('components.language-selector',['width'=>'w-36'])
        @include('components.login-dropdown' ,['width'=>'w-36'])
    </div>
</div>

<script>
    let isMenuOpen = false;
    let isScrolling = false;
    let currentSection = "{{ $currentSection }}";
    let observer = null;
    const mobileMenu = document.getElementById('mobileMenu');
    updateActiveClass();

    const toggleMenu = function() {
        isMenuOpen = !isMenuOpen;

        const menuIcon = document.querySelector('.menuIcon');
        if (isMenuOpen) {
            menuIcon.src = '/icons/GridiconsCross.svg';
            mobileMenu.classList.add('open');
        } else {
            menuIcon.src = '/icons/PhListBold.svg';
            mobileMenu.classList.remove('open');
        }
    }
    function scrollToSection(id, link) {
        currentSection = id;
        mobileMenu.classList.remove('open') ;
        updateActiveClass();
        GlobalscrollToSection(id);
    }


    function updateActiveClass() {
        document.querySelectorAll(".nav-link").forEach(button => {
            button.classList.remove("nav-link-active");
        });

        document.querySelectorAll(`[data-id="${currentSection}"]`).forEach(activeButton => {
            activeButton.classList.add("nav-link-active");
        });
    }

    function GlobalscrollToSection(id) {
        isScrolling = true;
        isActive = id;
        const section = document.getElementById(id);
        if (section) {
            const yOffset = -120;
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

    function setupObserver() {
        observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (isScrolling) return;
                    if (entry.isIntersecting) {
                        currentSection = entry.target.id;
                        updateActiveClass();
                    }
                });
            },
            {rootMargin: "-150px 0px 0px 0px"}
        );

        @foreach(__('navbar.sections') as $section)
        const element{{ $loop->index }} = document.getElementById('{{ $section['id'] }}');
        if (element{{ $loop->index }}) {
            observer.observe(element{{ $loop->index }});
        }
        @endforeach
    }




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

        color: black;
        transition: transform 0.3s ease-in-out;
    }

    .sidebar.open {
        transform: translateX(-250px);
        transition: transform 0.3s ease-in-out;
    }

    .nav-link {
        padding: 4px 12px; /* px-3 py-1 */
        font-weight: 300; /* font-[300] */
        font-size: 14px; /* text-sm */
        border-radius: 9999px; /* rounded-full */
        color: #000000; /* text-[#000000] */
        white-space: nowrap; /* whitespace-nowrap */
    }


    .nav-link-active {
        padding: 4px 12px; /* px-3 py-1 */
        background-color: #ED6F10; /* bg-[#ED6F10] */

        font-size: 14px; /* text-sm */
        color: white; /* text-white */
        border-radius: 9999px; /* rounded-full */
        transition: all 0.15s linear;
        white-space: nowrap; /* whitespace-nowrap */
        transform: scale(1.05);
        opacity: 1; /* opacity-100 */
    }

    .nav-link-active:hover {
        background-color: #F99712; /* hover:bg-[#F99712]/90 */
    }



</style>
