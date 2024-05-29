<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>NavBar</title>
    <style>
        .max-w-screen-xl {
            position: relative;
            /* This will make the dropdown position relative to this container */
        }

        #user-dropdown {
            position: absolute;
            top: 40px;
            /* Adjust this value to position the dropdown right under the user icon */
            right: 10px;
        }
    </style>
</head>

<body>


    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 "style="padding-left :20px;padding-right:40px;">
            <!-- Logo and brand name -->
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/etap-logo.png') }}" class="h-12 blue-filter" alt="Logo" />
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full " src="/images/user-icon.png" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">AgentTEST01</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">AgentTEST01@etap.tn</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">à
                                Propos</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Deconnexion</a>

                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <x-navbar-link href="/dashboard" :active="request()->is('/dashboard')">Tableau de Bord</x-navbar-link>
                    <x-navbar-link href="/invoices" :active="request()->is('/invoices')">Factures</x-navbar-link>
                    <x-navbar-link href="/counters" :active="request()->is('/counters')">Compteurs</x-navbar-link>
                    <x-navbar-link href="/locals" :active="request()->is('/locals')">Locaux</x-navbar-link>
                    <x-navbar-link href="/regions" :active="request()->is('/regions')">Regions</x-navbar-link>
                    <x-navbar-link href="/users" :active="request()->is('/users')">Administration</x-navbar-link>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('user-menu-button').addEventListener('click', function() {
                var dropdown = document.getElementById('user-dropdown');
                dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
            });
        });
    </script>
</body>

</html>
