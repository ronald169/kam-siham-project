<button
    @click="navbarOpen = !navbarOpen"
    :class="navbarOpen && 'navbarTogglerActive' "
    id="navbarToggler"
    class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
    >
    <span
        class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
        ></span>
    <span
        class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
        ></span>
    <span
        class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
        ></span>
</button>
