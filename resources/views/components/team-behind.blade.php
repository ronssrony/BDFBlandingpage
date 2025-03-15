<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- <div>
        <h1 class="text-[60px] font-[800] text-gray-800 text-center underline">Team behind</h1>
        <img src="/images/team-behind/team-behind1.png" alt="">
        <img src="/images/team-behind/team-behind2.png" alt="">
        <img src="/images/team-behind/team-behind3.png" alt="">
        <img src="/images/team-behind/team-behind4.png" alt="">
        <img src="/images/team-behind/team-behind5.png" alt="">
        <img src="/images/team-behind/team-behind6.png" alt="">
        <img src="/images/team-behind/team-behind7.png" alt="">
        <img src="/images/team-behind/team-behind8.png" alt="">
        <img src="/images/team-behind/team-behind9.png" alt="">
    </div> -->
    <div class="bg-white dark:bg-gray-800 h-screen  py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
                <div class="flex items-center gap-12">
                    <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl dark:text-white">Gallery</h2>

                    <p class="hidden max-w-screen-sm text-gray-500 dark:text-gray-300 md:block">
                        This is a section of some simple filler text,
                        also known as placeholder text. It shares some characteristics of a real written text.
                    </p>
                </div>

                <a href="#"
                    class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                    More
                </a>
            </div>

            <div class="grid  gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                <!-- image - start -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="/images/team-behind/team-behind1.png" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="/images/team-behind/team-behind2.png" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="/images/team-behind/team-behind3.png" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="/images/team-behind/team-behind4.png"loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </a>
                <!-- image - end -->
            </div>
        </div>
    </div>

</body>

</html>