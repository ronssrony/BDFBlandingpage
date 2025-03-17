
@php
    $currentSection = $currentSection ?? 'home'; // Default value
 @endphp
<nav class="navbar  fixed top-0 z-70 min-w-full flex justify-center  max-h-[70px]  items-center min-h-[70px] transition-all duration-300 ">
    <div class=" transition-all duration-400 flex bg-white justify-between items-center  mx-auto max-w-[1300px] lg:max-w-[1005px] xl:max-w-[1160px] min-[1300px]:max-w-[1256px] 2xl:max-w-[1300px] w-[100%] lg:w-[100%] xl:w-[100%] 2xl:w-[100%] py-3 px-4">
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
                <button
                    class=" bg-[#1565ce] text-white relative pl-6 pr-12 py-2 rounded-full hover:bg-[#1565ce]/90 transition-colors whitespace-nowrap "
                    onclick="scrollToSection('contact')">
                    {{ __('navbar.start_today') }}

                    <div class="absolute right-0 top-0 text-white flex justify-center items-center h-10 w-10 rounded-full bg-[#4F8CDB]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 22"><!-- Icon from All by undefined - undefined --><path fill="currentColor" d="M12 14.708L6.692 9.4l.708-.708l4.6 4.6l4.6-4.6l.708.708z"/></svg>
                    </div>
                </button>
            </div>
        </div>

        <button onclick="toggleMenu()" class="xl:hidden text-gray-600 focus:outline-none mt-2">
            <img src="/icons/PhListBold.svg" alt="Menu" class=" menuIcon transition-all duration-300 w-10 h-10"/>
        </button>
    </div>
</nav>

<div id="mobileMenu" class="sidebar xl:hidden  bg-white/80 backdrop-blur-sm   rounded w-full z-40    flex flex-col py-5 md:pt-24 items-center" >
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
        <button
            class=" bg-[#1565ce] w-36 text-white px-4 py-2 rounded-full hover:bg-[#1565ce]/90 transition-colors whitespace-nowrap"
            onclick="scrollToSection('contact')">
            {{ __('navbar.start_today') }}
            <div>
                <img src="/icons/arrow-down.svg" alt="arrow"/>
            </div>
        </button>
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
