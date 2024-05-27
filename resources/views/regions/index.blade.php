<x-layout>
    <!-- Styles -->
    <style>
        /* Styles remain the same */
    </style>

    <!-- Main content -->
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 2.375rem; margin-left: 2.375rem; margin-top:7rem;">
        <div class="mb-5 flex justify-between">
            <div class="flex space-x-2 items-center">
                <div>
                    <svg class="w-9 h-9 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg">
    
                    <title />
    
                    <g data-name="Layer 11" id="Layer_11" fill="#134ECD">
    
                        <path d="M16,17a5,5,0,1,0-5-5A5,5,0,0,0,16,17Zm0-8a3,3,0,1,1-3,3A3,3,0,0,1,16,9Z" />
    
                        <path
                            d="M29.89,28.55l-4-8A1,1,0,0,0,25,20H23.05C25,16.49,26,13.8,26,12A10,10,0,0,0,6,12C6,13.8,7,16.49,9,20H7a1,1,0,0,0-.89.55l-4,8A1,1,0,0,0,3,30H29a1,1,0,0,0,.89-1.45ZM16,4a8,8,0,0,1,8,8c0,1.63-1.26,4.65-3.54,8.49l-.57.94-.15.25-.44.7c0,.08-.09.15-.14.23l-.56.87,0,.06-.5.76-.16.25-.38.55-.15.23c-.15.23-.3.44-.45.65l-.17.25-.25.35-.2.3-.17.23L16,27.3l-.13-.19-.17-.24-.2-.28q-.13-.18-.27-.39L15.08,26l-.46-.67-.13-.2-.39-.58-.16-.23-.51-.79,0,0-.56-.87-.15-.24-.42-.67c-.06-.1-.12-.19-.17-.29l-.5-.82-.06-.1h0C9.26,16.65,8,13.63,8,12A8,8,0,0,1,16,4ZM4.62,28l3-6h2.49l.09.15.3.48.21.35c.12.18.23.36.34.54l.16.26.51.79h0l.49.74a.91.91,0,0,0,.11.16c.12.2.25.39.37.57l.12.17.35.51.1.16.32.45.12.17.25.37.09.12ZM18,28l.09-.13c.08-.11.17-.23.25-.36l.12-.17.31-.45.11-.16c.12-.16.23-.33.35-.5L19.3,26q.18-.25.36-.54l.12-.18.45-.67.05-.09c.17-.25.33-.51.5-.77l.21-.33c.09-.16.19-.31.29-.47l.25-.4.25-.42.11-.17h2.49l3,6Z" />
    
                    </g>
    
                </svg>
                </div>
                <h1 class="space-y-4 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Liste des Regions
                </h1>
            </div>

            <!-- Add region button -->
            <div>
                <a href="/regions/create">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Ajouter une region
                    </button>
                </a>
            </div>
        </div>

        <!-- Regions grid -->
        <div class="grid grid-cols-3 gap-2 pt-4">
            @foreach ($regions as $region)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="/regions/{{ $region->id }}">
                    <img class="rounded-t-lg" src="{{ asset($region->image) }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="/regions/{{ $region->id }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $region->name }}</h5>
                    </a>
                    <a href="/regions/{{ $region->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Voir les details
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>