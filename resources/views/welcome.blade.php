<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>NavBar</title>

    <style>
        /* CSS styles for the dropdown menu */
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

<body
    style="background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(240,240,240,1) 50%, rgba(255,255,255,0) 100%) background-color: #f9f9f9;
opacity: 0.8;
background-image: radial-gradient(#a7a7a8 0.5px, #f9f9f9 0.5px);
background-size: 10px 10px;;">
    <!-- Navigation bar -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 "style="padding-left :20px;padding-right:40px;">
            <!-- Logo and brand name -->
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/etap-logo.png') }}" class="h-12 blue-filter" alt="Logo" />
            </a>

            <!-- User menu -->
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

                <!-- Button to toggle the mobile menu -->
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

            <!-- Links in the navigation bar -->

        </div>
    </nav>
    <!-- Grid of 2 lines and 3 columns -->
    <div class="grid grid-cols-3 grid-rows-2 gap-4 margin px"
        style="margin-right: 9.375rem; margin-left: 9.375rem; margin-top:7rem;">
        <!-- Column 1 -->


        <div
            class="max-w-sm p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-10 h-10 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" fill="currentColor"
                viewBox="0 0 960 768" xmlns="http://www.w3.org/2000/svg">
                <path fill="#009993"
                    d="M359.168 768H160a32 32 0 01-32-32V192H64a32 32 0 010-64h896a32 32 0 110 64h-64v544a32 32 0 01-32 32H665.216l110.848 192h-73.856L591.36 768H433.024L322.176 960H248.32l110.848-192zM832 192H192v512h640V192zM342.656 534.656a32 32 0 11-45.312-45.312L444.992 341.76l125.44 94.08L679.04 300.032a32 32 0 1149.92 39.936L581.632 524.224 451.008 426.24 342.656 534.592z" />
            </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Tableau de Bord
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Accéder au tableau de bord pour visualiser la
                consommation d'électricité, d'eau et de gaz</p>
            <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline"
                style="color: #252525">
                Accéder à la page
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
            </a>
        </div>

        <!-- Column 2 -->


        <div
            class="max-w-sm p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-9 h-9 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" fill="currentColor"
                viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M829.06 73.14h-6.48c-30.41 0-58.57 17.11-75.34 45.75-6.16 10.41-22.29 11.73-29.96 2.43-25.52-31.07-59.41-48.18-95.64-48.18-35.98 0-69.86 17.11-95.41 48.18-6.98 8.48-21.25 8.54-28.27-0.02-25.55-31.05-59.43-48.16-95.41-48.16s-69.86 17.11-95.41 48.18c-7.66 9.38-23.79 8.09-29.95-2.43-16.8-28.64-44.96-45.75-75.36-45.75h-7.23c-46.89 0-85.05 38.16-85.05 85.05V865.8c0 46.89 38.16 85.05 85.05 85.05h7.23c30.39 0 58.55-17.11 75.38-45.79 6.07-10.43 22.23-11.79 29.93-2.38 25.55 31.05 59.43 48.16 95.41 48.16s69.86-17.11 95.41-48.18c7.02-8.52 21.29-8.5 28.27 0.02 25.55 31.05 59.43 48.16 95.66 48.16 35.98 0 69.88-17.11 95.38-48.14 7.73-9.34 23.89-8 29.96 2.36 16.79 28.68 44.95 45.79 75.36 45.79h6.48c46.89 0 85.05-38.16 85.05-85.05V158.2c0-46.9-38.17-85.06-85.06-85.06z m11.91 792.66c0 6.57-5.34 11.91-11.91 11.91h-6.48c-6.14 0-10.91-7.34-12.23-9.61-16.36-27.91-46.61-45.25-78.93-45.25-27.43 0-53.16 12.16-70.64 33.39-6.59 8.02-20.41 21.46-39.14 21.46-18.48 0-32.32-13.46-38.91-21.46-34.84-42.45-106.39-42.46-141.27-0.02-6.59 8.02-20.43 21.48-38.91 21.48s-32.32-13.46-38.91-21.46c-17.43-21.23-43.18-33.39-70.62-33.39-32.36 0-62.61 17.36-78.93 45.25-1.32 2.25-6.11 9.61-12.25 9.61h-7.23c-6.57 0-11.91-5.34-11.91-11.91V158.2c0-6.57 5.34-11.91 11.91-11.91h7.23c6.14 0 10.93 7.36 12.23 9.57 16.34 27.93 46.59 45.29 78.95 45.29 27.45 0 53.2-12.16 70.62-33.38 6.59-8.02 20.43-21.48 38.91-21.48s32.32 13.46 38.91 21.46c34.88 42.48 106.43 42.43 141.27 0.02 6.59-8.02 20.43-21.48 39.16-21.48 18.48 0 32.3 13.45 38.91 21.5 17.46 21.2 43.2 33.36 70.62 33.36 32.32 0 62.57-17.34 78.95-45.29 1.3-2.23 6.07-9.57 12.21-9.57h6.48c6.57 0 11.91 5.34 11.91 11.91v707.6z"
                    fill="#FF6666" />
                <path d="M255.83 365.46h512v73.14h-512zM255.74 548.2h365.71v73.38H255.74z" fill="#FF6666" />
            </svg>
            <a href="/invoices">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Factures</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Saisir les factures rapidement et facilement
                grâce à un formulaire clair et ergonomique
            </p>
            <a href="/invoices" class="inline-flex font-medium items-center text-blue-600 hover:underline"
                style="color: #252525">
                Accéder à la page
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
            </a>
        </div>

        <!-- Column 3 -->


        <div
            class="max-w-sm p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-8 h-8 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" fill="currentColor"
                viewBox="-1 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                <title>calculator</title>
                <desc>Created with Sketch Beta.</desc>
                <defs>

                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                    sketch:type="MSPage">
                    <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-569.000000, -151.000000)"
                        fill="#EDAE49">
                        <path
                            d="M575,165 L577,165 L577,167 L575,167 L575,165 Z M576,169 C577.657,169 579,167.657 579,166 C579,164.343 577.657,163 576,163 C574.343,163 573,164.343 573,166 C573,167.657 574.343,169 576,169 L576,169 Z M575,173 L577,173 L577,175 L575,175 L575,173 Z M576,177 C577.657,177 579,175.657 579,174 C579,172.343 577.657,171 576,171 C574.343,171 573,172.343 573,174 C573,175.657 574.343,177 576,177 L576,177 Z M583,165 L585,165 L585,167 L583,167 L583,165 Z M584,169 C585.657,169 587,167.657 587,166 C587,164.343 585.657,163 584,163 C582.343,163 581,164.343 581,166 C581,167.657 582.343,169 584,169 L584,169 Z M597,157 L571,157 L571,155 C571,153.896 571.896,153 573,153 L595,153 C596.104,153 597,153.896 597,155 L597,157 L597,157 Z M597,179 C597,180.104 596.104,181 595,181 L573,181 C571.896,181 571,180.104 571,179 L571,159 L597,159 L597,179 L597,179 Z M595,151 L573,151 C570.791,151 569,152.791 569,155 L569,179 C569,181.209 570.791,183 573,183 L595,183 C597.209,183 599,181.209 599,179 L599,155 C599,152.791 597.209,151 595,151 L595,151 Z M583,173 L585,173 L585,175 L583,175 L583,173 Z M584,177 C585.657,177 587,175.657 587,174 C587,172.343 585.657,171 584,171 C582.343,171 581,172.343 581,174 C581,175.657 582.343,177 584,177 L584,177 Z M591,173 L593,173 L593,175 L591,175 L591,173 Z M592,177 C593.657,177 595,175.657 595,174 C595,172.343 593.657,171 592,171 C590.343,171 589,172.343 589,174 C589,175.657 590.343,177 592,177 L592,177 Z M591,165 L593,165 L593,167 L591,167 L591,165 Z M592,169 C593.657,169 595,167.657 595,166 C595,164.343 593.657,163 592,163 C590.343,163 589,164.343 589,166 C589,167.657 590.343,169 592,169 L592,169 Z"
                            id="calculator" sketch:type="MSShapeGroup">

                        </path>
                    </g>
                </g>
            </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Compteurs</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Gérer les compteurs intelligemment et suivre
                les dépenses énergétiques</p>
            <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline"
                style="color: #252525">
                Accéder à la page
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
            </a>
        </div>

        <!-- Column 4 -->


        <div
            class="max-w-sm p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-8 h-8 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">

                <defs>

                    <style>
                        .cls-1,
                        .cls-2 {
                            fill: none;
                            stroke: #020202;
                            stroke-miterlimit: 10;
                            stroke-width: 1.92px;
                        }

                        .cls-2 {
                            stroke-linecap: square;
                        }
                    </style>

                </defs>

                <g id="office">

                    <line class="cls-1" x1="11.04" y1="14.88" x2="12.96" y2="14.88" />

                    <line class="cls-1" x1="11.04" y1="11.04" x2="12.96" y2="11.04" />

                    <line class="cls-1" x1="11.04" y1="7.21" x2="12.96" y2="7.21" />

                    <line class="cls-1" x1="7.21" y1="14.88" x2="9.13" y2="14.88" />

                    <line class="cls-1" x1="7.21" y1="11.04" x2="9.13" y2="11.04" />

                    <line class="cls-1" x1="7.21" y1="7.21" x2="9.13" y2="7.21" />

                    <line class="cls-1" x1="14.88" y1="14.88" x2="16.79" y2="14.88" />

                    <line class="cls-1" x1="14.88" y1="11.04" x2="16.79" y2="11.04" />

                    <line class="cls-1" x1="14.88" y1="7.21" x2="16.79" y2="7.21" />

                    <rect class="cls-2" x="9.13" y="18.71" width="5.75" height="3.83" />

                    <line class="cls-1" x1="23.5" y1="22.54" x2="0.5" y2="22.54" />

                    <polygon class="cls-2"
                        points="16.79 3.38 16.79 1.46 7.21 1.46 7.21 3.38 4.33 3.38 4.33 22.54 19.67 22.54 19.67 3.38 16.79 3.38" />

                </g>

            </svg>
            <a href="/locals">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Locaux</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Consulter les locaux</p>
            <a href="/locals" class="inline-flex font-medium items-center text-blue-600 hover:underline"
                style="color: #252525">
                Accéder à la page
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
            </a>
        </div>

        <!-- Column 5 -->


        <div
            class="max-w-sm p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-9 h-9 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" viewBox="0 0 32 32"
                xmlns="http://www.w3.org/2000/svg">

                <title />

                <g data-name="Layer 11" id="Layer_11" fill="#134ECD">

                    <path d="M16,17a5,5,0,1,0-5-5A5,5,0,0,0,16,17Zm0-8a3,3,0,1,1-3,3A3,3,0,0,1,16,9Z" />

                    <path
                        d="M29.89,28.55l-4-8A1,1,0,0,0,25,20H23.05C25,16.49,26,13.8,26,12A10,10,0,0,0,6,12C6,13.8,7,16.49,9,20H7a1,1,0,0,0-.89.55l-4,8A1,1,0,0,0,3,30H29a1,1,0,0,0,.89-1.45ZM16,4a8,8,0,0,1,8,8c0,1.63-1.26,4.65-3.54,8.49l-.57.94-.15.25-.44.7c0,.08-.09.15-.14.23l-.56.87,0,.06-.5.76-.16.25-.38.55-.15.23c-.15.23-.3.44-.45.65l-.17.25-.25.35-.2.3-.17.23L16,27.3l-.13-.19-.17-.24-.2-.28q-.13-.18-.27-.39L15.08,26l-.46-.67-.13-.2-.39-.58-.16-.23-.51-.79,0,0-.56-.87-.15-.24-.42-.67c-.06-.1-.12-.19-.17-.29l-.5-.82-.06-.1h0C9.26,16.65,8,13.63,8,12A8,8,0,0,1,16,4ZM4.62,28l3-6h2.49l.09.15.3.48.21.35c.12.18.23.36.34.54l.16.26.51.79h0l.49.74a.91.91,0,0,0,.11.16c.12.2.25.39.37.57l.12.17.35.51.1.16.32.45.12.17.25.37.09.12ZM18,28l.09-.13c.08-.11.17-.23.25-.36l.12-.17.31-.45.11-.16c.12-.16.23-.33.35-.5L19.3,26q.18-.25.36-.54l.12-.18.45-.67.05-.09c.17-.25.33-.51.5-.77l.21-.33c.09-.16.19-.31.29-.47l.25-.4.25-.42.11-.17h2.49l3,6Z" />

                </g>

            </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Regions</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Consulter les regions</p>
            <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline"
                style="color: #252525">
                Accéder à la page
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
            </a>
        </div>

        <!-- Column 6 -->


        <div
            class="max-w-sm p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg fill="#11B5E4" class="w-8 h-8 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                <path d="m773.596 1069.654 711.086 711.085c39.632 39.632 104.336 39.632 144.078 0l138.276-138.385c19.268-19.269 29.888-44.778 29.888-71.93 0-27.26-10.62-52.77-29.888-72.039l-698.714-698.714 11.495-32.625c63.5-178.675 18.284-380.45-115.284-514.018-123.715-123.605-305.126-171.01-471.648-128.313l272.281 272.282c32.516 32.406 50.362 75.652 50.362 121.744 0 45.982-17.846 89.227-50.362 121.744L654.48 751.17c-67.222 67.003-176.375 67.003-243.488 0L138.711 478.889c-42.589 166.522 4.707 347.934 128.313 471.648 123.714 123.715 306.22 172.325 476.027 127.218l30.545-8.101ZM1556.611 1920c-54.084 0-108.168-20.692-149.333-61.857L740.095 1190.96c-198.162 41.712-406.725-19.269-550.475-163.019C14.449 852.771-35.256 582.788 65.796 356.27l32.406-72.696 390.194 390.193c24.414 24.305 64.266 24.305 88.68 0l110.687-110.686c11.824-11.934 18.283-27.59 18.283-44.34 0-16.751-6.46-32.516-18.283-44.34L297.569 84.207 370.265 51.8C596.893-49.252 866.875.453 1041.937 175.515c155.026 155.136 212.833 385.157 151.851 594.815l650.651 650.651c39.961 39.852 61.967 92.95 61.967 149.443 0 56.383-22.006 109.482-61.967 149.334l-138.275 138.385c-41.275 41.165-95.36 61.857-149.553 61.857Z" fill-rule="evenodd"/>
            </svg>
            <a href="/administration">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Administration
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Gestion des utilisateurs et historique</p>
            <a href="/administration" class="inline-flex font-medium items-center text-blue-600 hover:underline"
                style="color: #252525">
                Accéder à la page
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
            </a>
        </div>


        <!-- JavaScript code to handle the user menu dropdown -->
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
