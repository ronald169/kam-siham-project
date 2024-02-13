<!-- ====== Navbar Section Start -->
<header
    x-data="
    {
    navbarOpen: false
    }
    "
    class="flex items-center w-full bg-white dark:bg-dark"
    >
    <div class="container mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-60">
                <a href="javascript:void(0)" class="block w-full py-5">
                    <img
                        src="{{ asset('img/logo.png.webp') }}"
                        alt="logo"
                        class="dark:hidden"
                    />
                    <img
                        src="{{ asset('img/logo.png.webp') }}"
                        alt="logo"
                        class="hidden dark:block"
                    />
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                    <div class="element-a-masquer">
                        <x-layout.navbar-hamburger></x-layout.navbar-hamburger>
                        <nav
                            :class="!navbarOpen && 'hidden' "
                            id="navbarCollapse"
                            class="z-20 absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent"
                            >
                            <ul class="block lg:flex">

                                @foreach ($navigationItems as $item)
                                    <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                    <div class="justify-end hidden pr-16 sm:flex lg:pr-0 element-a-masquer">
                        {{-- <a
                            href="{{ route('filament.admin.auth.login')}}"
                            class="py-3 text-base font-medium px-7 text-dark dark:text-white hover:text-primary"
                            >
                        Login
                        </a> --}}
                        <a
                            href="{{ route('filament.admin.auth.login')}}"
                            class="py-3 element-a-masquer text-base font-medium text-white rounded-md bg-primary px-7 hover:bg-primary/90"
                            >
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
</header>
<!-- ====== Navbar Section End -->
