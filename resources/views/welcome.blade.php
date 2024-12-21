<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        
        {{-- main navbar --}}
        <header class='border-b bg-white font-sans min-h-[60px] px-10 py-3 tracking-wide relative z-50'>
            <div class='flex flex-wrap items-center max-lg:gap-y-6 max-sm:gap-x-4'>
                <a href="/">
                    <div class="flex justify-center">
                        <img class="ml-24" src="{{asset('assets/logo.jpeg')}}" width='300px' alt="logo">
                    </div>
                    <div class="flex justify-center">
                        {{-- <img src="{{asset('assets/logo111.png')}}" alt="logo" class='h-20 ml-16' /> --}}
                        {{-- <span class="ml-5 mt-5 text-center text-2xl font-bold text-gray-700">
                            Amrai Akhon
                        </span> --}}
                    </div>
                </a>

                {{-- search area start here --}}
                <div class="md:w-1/2 md:ml-10 mt-4 flex items-center lg:space-x-2">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search product name..." />
                        
                    </div>
                    <button class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>

                    <div id="myCartDropdown1" class="hidden z-10 mx-auto max-w-sm space-y-4 overflow-hidden rounded-lg bg-white p-4 antialiased shadow-lg dark:bg-gray-800"></div>

                    <button type="button" data-collapse-toggle="ecommerce-navbar-menu-1" aria-controls="ecommerce-navbar-menu-1" aria-expanded="false" class="inline-flex lg:hidden items-center justify-center hover:bg-gray-100 rounded-md dark:hover:bg-gray-700 p-2 text-gray-900 dark:text-white">
                        <span class="sr-only">
                            Open Menu
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                        </svg>
                    </button>
                </div>
                {{-- search area end here --}}

                <div class='flex items-center ml-auto space-x-8'>
                    <a href="">
                        <span class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="cursor-pointer fill-[#000] hover:fill-[#007bff] inline-block" viewBox="0 0 64 64">
                                <path d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z" data-original="#000000" />
                            </svg>
                            <span class="absolute left-auto -ml-1 -top-1 rounded-full bg-red-500 px-1 py-0 text-xs text-white">
                                0
                            </span>
                        </span>
                    </a>
                    <a href="">
                        <span class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" class="cursor-pointer fill-[#000] hover:fill-[#007bff] inline-block" viewBox="0 0 512 512">
                                <path d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0" data-original="#000000"></path>
                            </svg>
                            <span class="absolute left-auto -ml-1 -top-1 rounded-full bg-red-500 px-1 py-0 text-xs text-white">
                                0
                            </span>
                        </span>
                    </a>

                    {{--user notification icon --}}
                    <span class="relative">
                        <button type="button" data-dropdown-toggle="notification-dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="cursor-pointer fill-[#000] hover:fill-[#007bff] inline-block" viewBox="0 0 371.263 371.263">
                                <path d="M305.402 234.794v-70.54c0-52.396-33.533-98.085-79.702-115.151.539-2.695.838-5.449.838-8.204C226.539 18.324 208.215 0 185.64 0s-40.899 18.324-40.899 40.899c0 2.695.299 5.389.778 7.964-15.868 5.629-30.539 14.551-43.054 26.647-23.593 22.755-36.587 53.354-36.587 86.169v73.115c0 2.575-2.096 4.731-4.731 4.731-22.096 0-40.959 16.647-42.995 37.845-1.138 11.797 2.755 23.533 10.719 32.276 7.904 8.683 19.222 13.713 31.018 13.713h72.217c2.994 26.887 25.869 47.905 53.534 47.905s50.54-21.018 53.534-47.905h72.217c11.797 0 23.114-5.03 31.018-13.713 7.904-8.743 11.797-20.479 10.719-32.276-2.036-21.198-20.958-37.845-42.995-37.845a4.704 4.704 0 0 1-4.731-4.731zM185.64 23.952c9.341 0 16.946 7.605 16.946 16.946 0 .778-.12 1.497-.24 2.275-4.072-.599-8.204-1.018-12.336-1.138-7.126-.24-14.132.24-21.078 1.198-.12-.778-.24-1.497-.24-2.275.002-9.401 7.607-17.006 16.948-17.006zm0 323.358c-14.431 0-26.527-10.3-29.342-23.952h58.683c-2.813 13.653-14.909 23.952-29.341 23.952zm143.655-67.665c.479 5.15-1.138 10.12-4.551 13.892-3.533 3.773-8.204 5.868-13.353 5.868H59.89c-5.15 0-9.82-2.096-13.294-5.868-3.473-3.772-5.09-8.743-4.611-13.892.838-9.042 9.282-16.168 19.162-16.168 15.809 0 28.683-12.874 28.683-28.683v-73.115c0-26.228 10.419-50.719 29.282-68.923 18.024-17.425 41.498-26.887 66.528-26.887 1.198 0 2.335 0 3.533.06 50.839 1.796 92.277 45.929 92.277 98.325v70.54c0 15.809 12.874 28.683 28.683 28.683 9.88 0 18.264 7.126 19.162 16.168z" data-original="#000000"></path>
                            </svg>
                            <span class="absolute left-auto -ml-1 -top-1 rounded-full bg-red-500 px-1 py-0 text-xs text-white">
                                0
                            </span>
                        </button>
                    </span>
                    <!-- Dropdown menu -->
                    <div id="notification-dropdown" class="z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:divide-gray-600 dark:bg-gray-700">
                        <div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            Notifications
                        </div>
                        <div>
                            <div class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                                <div class="flex-shrink-0">
                                    <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-primary-700 dark:border-gray-700">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                            <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-full pl-3">
                                    <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                                        Order Number <a href="" class="text-blue-500">Click Here</a> </div>
                                    <div class="text-xs font-medium text-primary-700 dark:text-primary-400">11.30 pm</div>
                                </div>
                            </div>

                        </div>
                        <a href="" class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:text-white dark:hover:underline">
                            <div class="inline-flex items-center ">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                View all
                            </div>
                        </a>
                    </div>

                    {{-- if user login menu --}}
                    {{-- <div></div> --}}
                    {{-- else login menu --}}
                    <a href="{{ route('login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                        Login
                    </a>

                </div>
            </div>
        </header>
        {{-- top navbar end--}}

        {{-- center navbar area --}}
        <nav class="ml-20 bg-white dark:bg-gray-800">
            <div class="max-w-screen-xl px-4 mx-auto xl:px-4 py-4">
                <div class="flex items-center justify-between">

                    <div class="flex items-center space-x-8">

                        <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center">
                            <li>
                                <a href="/" title="" class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                                    Home
                                </a>
                            </li>
                            <li class="shrink-0">
                                <a href="" title="" class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                                    Shop
                                </a>
                            </li>
                            <li class="shrink-0">
                                <a href="" title="" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                                    Blog
                                </a>
                            </li>
                            <li class="shrink-0">
                                <a href="" title="" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div id="ecommerce-navbar-menu-1" class="bg-gray-50 dark:bg-gray-700 dark:border-gray-600 border border-gray-200 rounded-lg py-3 hidden px-4 mt-4">
                    <ul class="text-gray-900 text-sm font-medium dark:text-white space-y-3">
                        <li>
                            <a href="/" title="" class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                                Home
                            </a>
                        </li>
                        <li class="shrink-0">
                            <a href="" title="" class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                                Shop
                            </a>
                        </li>
                        <li class="shrink-0">
                            <a href="" title="" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                                Blog
                            </a>
                        </li>
                        <li class="shrink-0">
                            <a href="" title="" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto sm:px-2 sm:py-10 lg:px-4">
                <div class="max-w-2xl mx-auto px-4 grid grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-3">
                    <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                        <div class="sm:flex-shrink-0">
                            <div class="flow-root">
                                <svg class="w-16 h-16 mx-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256" xml:space="preserve"><style>.st0{fill:#3a312a}.st2{fill:#87796f}.st6{fill:#d5de58}.st11{fill:#b8c136}.st27{fill:#f8e4c8}.st28{fill:#89c4db}</style><path class="st6" d="M47.866 25.613c-.974 11.564-13.025 13.389-13.025 13.389 10.347.487 12.925 14.059 12.925 14.059.221-9.677 13.321-14.202 13.321-14.202-9.813-.587-13.221-13.246-13.221-13.246z"/><path class="st0" d="M61.177 37.362c-8.604-.514-11.832-12.024-11.863-12.14a1.5 1.5 0 0 0-2.942.265c-.86 10.215-11.314 11.964-11.755 12.033a1.5 1.5 0 0 0 .155 2.982c9.028.425 11.499 12.718 11.523 12.842a1.5 1.5 0 0 0 2.973-.248c.195-8.509 12.192-12.777 12.313-12.819a1.502 1.502 0 0 0 .994-1.623 1.504 1.504 0 0 0-1.398-1.292zM47.611 47.708c-1.356-3.13-3.709-6.907-7.587-8.877 2.931-1.405 6.409-3.913 8.202-8.273 1.551 3.071 4.199 6.88 8.334 8.722-3.007 1.641-6.923 4.407-8.949 8.428z"/><path class="st6" d="M26.167 42.594c-.689 8.179-9.212 9.471-9.212 9.471 7.318.344 9.142 9.944 9.142 9.944.156-6.844 9.422-10.045 9.422-10.045-6.941-.416-9.352-9.37-9.352-9.37z"/><path class="st0" d="M35.608 50.465c-5.766-.345-7.972-8.185-7.993-8.264a1.499 1.499 0 0 0-2.942.266c-.579 6.871-7.646 8.067-7.942 8.114a1.5 1.5 0 0 0 .155 2.982c6.035.284 7.723 8.643 7.739 8.726a1.5 1.5 0 0 0 2.974-.246c.13-5.709 8.332-8.634 8.412-8.662a1.499 1.499 0 0 0-.403-2.916zm-9.584 6.796c-.924-1.886-2.34-3.947-4.447-5.28 1.855-1.041 3.697-2.63 4.871-4.916 1.057 1.874 2.654 3.954 4.941 5.223-1.85 1.101-3.989 2.74-5.365 4.973z"/><path class="st6" d="M26.167 15.936c-.689 8.179-9.212 9.471-9.212 9.471 7.318.344 9.142 9.944 9.142 9.944.156-6.845 9.422-10.045 9.422-10.045-6.941-.416-9.352-9.37-9.352-9.37z"/><path class="st0" d="M35.608 23.808c-5.766-.345-7.972-8.185-7.994-8.265a1.499 1.499 0 0 0-2.942.266c-.579 6.871-7.646 8.067-7.942 8.114a1.5 1.5 0 0 0 .154 2.982c6.035.284 7.724 8.644 7.739 8.726a1.5 1.5 0 0 0 2.973-.246c.13-5.71 8.331-8.634 8.412-8.662a1.5 1.5 0 0 0-.4-2.915zm-9.584 6.796c-.924-1.886-2.34-3.947-4.447-5.28 1.855-1.042 3.697-2.63 4.871-4.917 1.057 1.874 2.654 3.954 4.941 5.224-1.85 1.1-3.989 2.74-5.365 4.973z"/><path class="st28" d="M141.811 81H34.422c-6.461 0-11.695 5.243-11.695 11.704V179.5h130.779V92.704c0-6.461-5.233-11.704-11.695-11.704z"/><path class="st0" d="M141.811 79.5h-36.286a1.5 1.5 0 1 0 0 3h36.286c5.622 0 10.195 4.578 10.195 10.204V178H24.227V92.704c0-5.626 4.573-10.204 10.195-10.204h57.387a1.5 1.5 0 1 0 0-3H34.421c-7.276 0-13.195 5.923-13.195 13.204V179.5a1.5 1.5 0 0 0 1.5 1.5h130.779a1.5 1.5 0 0 0 1.5-1.5V92.704c.001-7.281-5.918-13.204-13.194-13.204z"/><path class="st6" d="M233.264 160.295c-.274-16.021-6.603-30.569-16.796-41.452-11.364-12.158-27.546-19.753-45.495-19.753h-17.467v80.414H22.727v24.876h210.547v-42.989c-.001-.369-.001-.727-.01-1.096z"/><path class="st0" d="M234.764 160.27a63.574 63.574 0 0 0-17.2-42.451c-12.017-12.855-28.998-20.228-46.591-20.228h-17.467a1.5 1.5 0 0 0-1.5 1.5v78.914H22.727a1.5 1.5 0 0 0-1.5 1.5v24.876a1.5 1.5 0 0 0 1.5 1.5h210.547a1.5 1.5 0 0 0 1.5-1.5v-42.989c-.001-.383-.001-.755-.01-1.122zm-2.991 42.61H24.227v-21.876h129.279a1.5 1.5 0 0 0 1.5-1.5V100.59h15.967c16.765 0 32.948 7.026 44.4 19.278a60.592 60.592 0 0 1 16.4 41.523v41.489z"/><path class="st2" d="M234.846 204.38H21.155a4.895 4.895 0 1 0 0 9.79h213.691a4.895 4.895 0 1 0 0-9.79z"/><path class="st0" d="M234.846 202.88H21.154a6.401 6.401 0 0 0-6.394 6.394 6.402 6.402 0 0 0 6.394 6.395h106.328a1.5 1.5 0 1 0 0-3H21.154a3.398 3.398 0 0 1-3.394-3.395 3.398 3.398 0 0 1 3.394-3.394h213.691a3.398 3.398 0 0 1 3.394 3.394 3.399 3.399 0 0 1-3.394 3.395h-93.661a1.5 1.5 0 1 0 0 3h93.661a6.402 6.402 0 0 0 6.394-6.395 6.4 6.4 0 0 0-6.393-6.394z"/><circle class="st2" cx="78.102" cy="214.004" r="26.06"/><path class="st0" d="M78.102 186.445c-15.196 0-27.56 12.363-27.56 27.56s12.363 27.56 27.56 27.56c15.196 0 27.56-12.363 27.56-27.56s-12.364-27.56-27.56-27.56zm0 52.119c-13.542 0-24.56-11.018-24.56-24.56s11.018-24.56 24.56-24.56c13.542 0 24.56 11.018 24.56 24.56s-11.018 24.56-24.56 24.56z"/><circle class="st27" cx="78.102" cy="214.004" r="11.541"/><path class="st0" d="M78.102 200.963c-7.191 0-13.042 5.851-13.042 13.042s5.851 13.041 13.042 13.041 13.041-5.85 13.041-13.041-5.85-13.042-13.041-13.042zm0 23.082c-5.537 0-10.042-4.504-10.042-10.041 0-5.537 4.504-10.042 10.042-10.042 5.537 0 10.041 4.504 10.041 10.042 0 5.537-4.504 10.041-10.041 10.041z"/><ellipse transform="rotate(-4.726 184.857 213.937)" class="st2" cx="184.878" cy="214.004" rx="26.059" ry="26.06"/><path class="st0" d="M184.878 186.445c-15.196 0-27.56 12.363-27.56 27.56s12.363 27.56 27.56 27.56 27.559-12.363 27.559-27.56-12.362-27.56-27.559-27.56zm0 52.119c-13.542 0-24.56-11.018-24.56-24.56s11.018-24.56 24.56-24.56 24.559 11.018 24.559 24.56-11.017 24.56-24.559 24.56z"/><circle transform="rotate(-67.5 184.875 214)" class="st27" cx="184.878" cy="214.004" r="11.541"/><path class="st0" d="M184.878 200.963c-7.191 0-13.042 5.851-13.042 13.042s5.851 13.041 13.042 13.041 13.041-5.85 13.041-13.041-5.85-13.042-13.041-13.042zm0 23.082c-5.537 0-10.042-4.504-10.042-10.041 0-5.537 4.504-10.042 10.042-10.042 5.537 0 10.041 4.504 10.041 10.042 0 5.537-4.504 10.041-10.041 10.041z"/><path class="st28" d="M216.468 118.844h-40.592c-2.909 0-5.271 2.031-5.271 4.534v32.383c0 2.504 2.362 4.534 5.271 4.534h57.388c-.274-16.02-6.603-30.568-16.796-41.451z"/><path class="st0" d="M217.563 117.819a1.5 1.5 0 0 0-1.095-.475h-40.592c-3.733 0-6.771 2.707-6.771 6.034v32.383c0 3.328 3.038 6.035 6.771 6.035h57.388a1.5 1.5 0 0 0 1.5-1.526 63.584 63.584 0 0 0-17.201-42.451zm-41.688 40.977c-2.079 0-3.771-1.361-3.771-3.035v-32.383c0-1.673 1.692-3.034 3.771-3.034h39.938a60.576 60.576 0 0 1 15.906 38.452h-55.844zM58.5 123.647v-4.975H40.81v23.156h7.186v-9.462h8.971v-4.675h-8.971v-4.044zM83.377 135.118c-.169-.337-.503-.817-1.003-1.438-.5-.622-.881-1.028-1.144-1.217-.39-.285-1.011-.569-1.863-.854 1.064-.242 1.902-.547 2.513-.916a6.414 6.414 0 0 0 2.26-2.267c.548-.932.822-2.04.822-3.325 0-1.474-.358-2.725-1.074-3.751-.716-1.027-1.658-1.729-2.827-2.109-1.169-.379-2.859-.568-5.07-.568H64.065v23.155h7.187v-9.398h.632c.653 0 1.237.179 1.753.537.379.274.811.869 1.295 1.785l3.825 7.076h8.084l-3.464-6.71zm-6.052-8.106c-.3.39-.687.632-1.161.727-.937.211-1.569.316-1.895.316h-3.017v-4.707h3.143c1.306 0 2.196.2 2.669.6.474.4.711.974.711 1.722 0 .505-.15.952-.45 1.342zM97.904 136.583v-4.565h11.135v-4.722H97.904v-3.68h12.004v-4.944H90.733v23.156h19.522v-5.245zM122.881 136.583v-4.565h11.136v-4.722h-11.136v-3.68h12.004v-4.944h-19.174v23.156h19.522v-5.245z"/><path class="st11" d="M170.97 100.59h-15.96c15.57.01 30.61 6.08 41.85 16.75h16c-11.25-10.68-26.31-16.75-41.89-16.75zM215.77 161.8h16v41.08h-16z"/><path d="M234.85 205.88h-16a3.395 3.395 0 0 1 0 6.79h16a3.395 3.395 0 0 0 0-6.79z" style="fill:#6a5c52"/><path d="M215.81 120.34h-16a60.558 60.558 0 0 1 15.91 38.46h16a60.558 60.558 0 0 0-15.91-38.46z" style="fill:#6da4bd"/>
                                </svg>
                            {{-- <img class="w-16 h-16 mx-auto" src="{{ asset('assets/icons8-delivery-100.png') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3 lg:mt-3 lg:ml-0">
                            <h3 class="text-sm font-medium text-yellow-500">Free Shipping</h3>
                            <p class="mt-2 text-sm text-gray-500">It&#039;s not actually free we just price it into the products. Someone&#039;s paying for it, and it&#039;s not us.</p>
                        </div>
                    </div>

                    <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                        <div class="sm:flex-shrink-0">
                            <div class="flow-root">
                                <svg class="w-16 h-16 mx-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256" xml:space="preserve"><style>.st0{fill:#3a312a}.st18{fill:#d5dc57}</style><path class="st18" d="M204.946 54.33c-.974 11.564-13.025 13.389-13.025 13.389 10.347.487 12.925 14.059 12.925 14.059.221-9.677 13.321-14.202 13.321-14.202-9.813-.587-13.221-13.246-13.221-13.246z"/><path class="st0" d="M218.258 66.079c-8.604-.516-11.832-12.025-11.863-12.142a1.5 1.5 0 0 0-2.943.265c-.859 10.216-11.313 11.964-11.754 12.032a1.5 1.5 0 0 0 .155 2.982c9.027.426 11.498 12.719 11.521 12.843a1.502 1.502 0 0 0 1.599 1.213 1.5 1.5 0 0 0 1.375-1.46c.194-8.509 12.191-12.777 12.313-12.819a1.5 1.5 0 0 0-.403-2.914zm-13.567 10.346c-1.356-3.131-3.708-6.908-7.586-8.877 2.931-1.404 6.408-3.913 8.201-8.273 1.551 3.071 4.2 6.881 8.334 8.723-3.006 1.64-6.921 4.405-8.949 8.427z"/><path class="st18" d="M183.248 71.31c-.689 8.179-9.212 9.47-9.212 9.47 7.318.344 9.142 9.944 9.142 9.944.156-6.844 9.422-10.045 9.422-10.045-6.942-.415-9.352-9.369-9.352-9.369z"/><path class="st0" d="M192.689 79.183c-5.767-.346-7.972-8.187-7.993-8.266a1.5 1.5 0 0 0-2.943.266c-.579 6.871-7.646 8.066-7.942 8.113a1.5 1.5 0 0 0 .155 2.982c6.035.284 7.724 8.645 7.739 8.727a1.5 1.5 0 0 0 2.974-.246c.13-5.709 8.331-8.633 8.411-8.661a1.5 1.5 0 0 0-.401-2.915zm-9.585 6.794c-.924-1.885-2.34-3.947-4.447-5.279 1.855-1.041 3.697-2.63 4.871-4.917 1.057 1.874 2.653 3.955 4.941 5.225-1.849 1.099-3.989 2.738-5.365 4.971z"/><path class="st18" d="M183.21 44.653c-.657 8.182-9.175 9.507-9.175 9.507 7.319.316 9.181 9.908 9.181 9.908.129-6.845 9.383-10.082 9.383-10.082-6.944-.389-9.389-9.333-9.389-9.333z"/><path class="st0" d="M192.682 52.487c-5.741-.32-7.983-8.083-8.025-8.231-.192-.702-.874-1.178-1.586-1.097a1.497 1.497 0 0 0-1.355 1.373c-.552 6.873-7.615 8.097-7.911 8.145a1.501 1.501 0 0 0 .166 2.981c6.036.261 7.757 8.614 7.772 8.696a1.5 1.5 0 0 0 2.973-.258c.108-5.71 8.298-8.667 8.378-8.695a1.5 1.5 0 0 0-.412-2.914zm-9.559 6.833c-.931-1.882-2.355-3.938-4.467-5.263 1.852-1.048 3.687-2.644 4.852-4.936 1.064 1.87 2.669 3.944 4.961 5.205-1.846 1.109-3.978 2.757-5.346 4.994z"/><path d="M128 81c-15.594 0-29.785 5.989-40.413 15.785l-9.268 10.85a59.371 59.371 0 0 0-9.974 33.021c0 32.947 26.708 59.656 59.656 59.656 32.947 0 59.655-26.709 59.655-59.656S160.947 81 128 81z" style="fill:#d6df58"/><path class="st0" d="M128 79.5a60.967 60.967 0 0 0-41.43 16.183 1.5 1.5 0 0 0 2.033 2.205A57.976 57.976 0 0 1 128 82.5c32.067 0 58.155 26.088 58.155 58.155S160.067 198.811 128 198.811s-58.155-26.088-58.155-58.155c0-11.507 3.362-22.638 9.722-32.189.46-.689.273-1.62-.417-2.079a1.496 1.496 0 0 0-2.079.417c-6.689 10.045-10.226 21.751-10.226 33.852 0 33.721 27.435 61.155 61.155 61.155s61.155-27.435 61.155-61.155S161.721 79.5 128 79.5z"/><path d="M217.895 130.381c-5.396 0-9.771 4.375-9.771 9.771 0 44.18-35.944 80.124-80.124 80.124-44.181 0-80.124-35.944-80.124-80.124 0-37.42 25.789-68.923 60.524-77.69L95.841 82.191c-2.898 4.552-1.557 10.592 2.995 13.49a9.766 9.766 0 0 0 13.49-2.995l22.677-35.622a9.732 9.732 0 0 0 2.768-6.806c0-.076-.01-.149-.011-.224.052-3.282-1.54-6.514-4.513-8.406L95.679 17.711c-4.553-2.899-10.593-1.557-13.49 2.995-2.898 4.552-1.557 10.592 2.995 13.49l15.75 10.026c-41.846 11.823-72.601 50.352-72.601 95.931 0 54.957 44.71 99.667 99.667 99.667 54.956 0 99.667-44.71 99.667-99.667 0-5.397-4.375-9.772-9.772-9.772z" style="fill:#89c4db"/><path class="st0" d="M217.896 128.882c-6.215 0-11.271 5.056-11.271 11.271 0 43.354-35.271 78.625-78.624 78.625s-78.624-35.271-78.624-78.625c0-34.764 22.695-65.147 55.658-75.195l-10.46 16.427c-3.337 5.243-1.786 12.224 3.456 15.561a11.228 11.228 0 0 0 6.044 1.766c3.878 0 7.435-1.951 9.517-5.22l22.597-35.497a11.209 11.209 0 0 0 3.083-7.737c0-.078-.004-.156-.012-.2.063-3.956-1.885-7.581-5.207-9.695L96.484 16.445a11.19 11.19 0 0 0-8.497-1.495 11.196 11.196 0 0 0-7.064 4.95 11.199 11.199 0 0 0-1.494 8.496 11.197 11.197 0 0 0 4.949 7.064l12.987 8.268C55.673 57 26.833 96.182 26.833 140.152c0 55.783 45.384 101.167 101.167 101.167s101.167-45.384 101.167-101.167c0-6.214-5.057-11.27-11.271-11.27zM128 238.319c-54.13 0-98.167-44.037-98.167-98.167 0-43.737 29.405-82.592 71.51-94.486a1.5 1.5 0 0 0 .397-2.709L85.989 32.93a8.221 8.221 0 0 1-3.633-5.184 8.212 8.212 0 0 1 1.098-6.234 8.214 8.214 0 0 1 5.184-3.633 8.205 8.205 0 0 1 6.236 1.098l37.568 23.916c2.438 1.551 3.864 4.211 3.819 7.18 0 .023.009.161.011.185 0 2.16-.832 4.206-2.344 5.761a1.519 1.519 0 0 0-.19.24L111.06 91.88a8.238 8.238 0 0 1-6.985 3.831 8.236 8.236 0 0 1-4.433-1.296c-3.848-2.449-4.985-7.571-2.536-11.419l12.56-19.728a1.498 1.498 0 0 0-.05-1.684 1.496 1.496 0 0 0-1.583-.576c-36.303 9.163-61.657 41.708-61.657 79.144 0 45.008 36.616 81.625 81.624 81.625s81.624-36.617 81.624-81.625c0-4.561 3.711-8.271 8.271-8.271s8.271 3.71 8.271 8.271c.001 54.13-44.036 98.167-98.166 98.167z"/><path class="st0" d="M93.792 148.251a28.202 28.202 0 0 1 1.821-1.664c.517-.423 1.542-1.164 3.073-2.223 2.578-1.818 4.357-3.487 5.335-5.006.976-1.519 1.466-3.113 1.466-4.783 0-1.569-.427-2.985-1.281-4.249-.852-1.264-2.023-2.202-3.512-2.812-1.487-.61-3.571-.916-6.248-.916-2.566 0-4.574.321-6.025.962-1.451.641-2.574 1.563-3.371 2.765s-1.346 2.874-1.645 5.016l7.621.616c.212-1.544.627-2.622 1.243-3.231.616-.611 1.411-.916 2.383-.916.934 0 1.708.296 2.326.888.616.592.923 1.305.923 2.139 0 .773-.311 1.588-.934 2.448-.622.859-2.048 2.117-4.278 3.773-3.649 2.703-6.137 5.047-7.464 7.034-1.327 1.986-2.12 4.106-2.383 6.361h22.83v-6.202h-11.88zM130.547 143.431v-16.833h-6.633l-13.861 16.477v6.259h13.861v5.119h6.633v-5.119h3.436v-5.903h-3.436zm-6.633 0h-7.325l7.325-8.619v8.619zM143.56 126.598l-6.841 28.322h3.844l6.88-28.322zM150.944 127.065v6.427h13.525c-2.778 3.45-4.807 6.688-6.09 9.715-1.283 3.026-2.223 6.775-2.82 11.246h7.583c.25-3.214.736-5.997 1.457-8.351.911-3.026 2.149-5.772 3.718-8.239 1.295-2.03 2.909-3.917 4.839-5.66v-5.138h-22.212z"/><path d="M128 82.5c-2.63 0-5.21.19-7.75.53l-.68 1.07c21.18 5.08 37.9 21.79 42.99 42.97h10.6v5.13c-1.93 1.75-3.55 3.63-4.84 5.66-1.57 2.47-2.81 5.22-3.72 8.24-.72 2.36-1.21 5.14-1.46 8.35h-.63c-5.36 21.93-23.18 39.03-45.51 43.31 3.56.69 7.24 1.05 11 1.05 32.07 0 58.16-26.09 58.16-58.15 0-32.07-26.09-58.16-58.16-58.16z" style="fill:#b9c239"/>
                                </svg>
                            {{-- <img class="w-16 h-16 mx-auto" src="{{ asset('assets/icons8-chat-100.png') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3 lg:mt-3 lg:ml-0">
                            <h3 class="text-sm font-medium">24/7 Customer Support</h3>
                            <p class="mt-2 text-sm text-gray-500">Our AI chat widget is powered by a naive series of if/else statements. Guaranteed to not irritate.</p>
                        </div>
                    </div>

                    <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                        <div class="sm:flex-shrink-0">
                            <div class="flow-root">
                                <svg class="w-16 h-16 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" xml:space="preserve"><path fill="#18CEF6" d="M26.029 58.156c-1.683 0-3.047 1.334-3.047 2.979 0 1.646 1.364 2.979 3.047 2.979s3.047-1.333 3.047-2.979c0-1.645-1.364-2.979-3.047-2.979zm17.795 0c-1.682 0-3.046 1.334-3.046 2.979 0 1.646 1.364 2.979 3.046 2.979 1.683 0 3.047-1.333 3.047-2.979 0-1.645-1.364-2.979-3.047-2.979zM22.515 26.997l5.416 14.5h21.793l6.189-14.5H22.515z"/><path fill="#233251" d="m58.753 13-9.67 28.181H23.85l-6.527-17.968h29.111v-2.27H14.036l7.722 21.258-6.281 10.643h35.794v-2.271H19.494l4.207-7.125h27.051l9.67-28.18H71V13H58.753zm-33.4 41.861c-3.134.002-5.674 2.484-5.676 5.548.002 3.065 2.542 5.548 5.676 5.549 3.133-.002 5.672-2.485 5.672-5.549 0-3.064-2.539-5.546-5.672-5.548zm0 8.827c-1.853-.003-3.35-1.468-3.353-3.279.003-1.81 1.5-3.274 3.353-3.277 1.849.003 3.349 1.467 3.352 3.277-.003 1.812-1.503 3.276-3.352 3.279zm17.794-8.827c-3.134.002-5.673 2.484-5.674 5.548.001 3.065 2.54 5.548 5.674 5.549 3.134-.002 5.672-2.485 5.674-5.549-.002-3.064-2.54-5.546-5.674-5.548zm0 8.827c-1.851-.003-3.349-1.468-3.352-3.279.003-1.81 1.501-3.274 3.352-3.277 1.851.003 3.35 1.467 3.353 3.277-.003 1.812-1.502 3.276-3.353 3.279z"/>
                                </svg>
                            {{-- <img class="w-16 h-16 mx-auto" src="{{ asset('assets/icons8-checkout-100.png') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3 lg:mt-3 lg:ml-0">
                            <h3 class="text-sm font-medium text-blue-500">Fast Shopping Cart</h3>
                            <p class="mt-2 text-sm text-gray-500">Look how fast that cart is going. What does this mean for the actual experience? I don&#039;t know.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
