<x-layout>
    <!-- Styles -->
    <style>
        /* Autocomplete dropdown styles */
        .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
            z-index: 1000;
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 20%;
        }

        /* Autocomplete item styles */
        .ui-menu-item {
            list-style-type: none;
            padding: 5px 10px;
        }

        /* Highlighted item styles */
        .ui-menu-item.ui-state-focus {
            background-color: #eee;
        }
    </style>

    <!-- Main content -->
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 2.375rem; margin-left: 2.375rem; margin-top:7rem;">
        <div class="mb-5 flex justify-between">
            <div class="flex space-x-2 items-center">
                <div>
                    <!-- Logo -->
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
                </div>
                <h1 class="space-y-4 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Liste des Locaux
                </h1>
            </div>

            <!-- Add local button -->
            <div>
                <a href="/locals/create">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Ajouter un local
                    </button>
                </a>
            </div>
        </div>

        <!-- Filter form -->
        <form method="GET" action="/locals" class="">
            <div class="mb-5 flex space-x-4 p-4 bg-white border border-gray-200 rounded-lg">
                <div class="flex justify-between items-center w-full">
                    <div class="border border-gray-200 p-2 rounded">
                        <label for="region_id">Region: </label>
                        <select id="region_id" name="region_id" class="form-input">
                            @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex space-x-2 items-center"><!-- Filter & Reset buttons right -->
                        <div>
                            <button type="submit" class="px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 rounded flex items-center justify-center">Filtrer</button>
                        </div>
                        <div>
                            <a href="/locals" class="px-4 py-2 text-white bg-red-500 hover:bg-red-800 rounded items-center justify-center inline-block">Réinitialiser</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search input -->
            <div>
                <div class="mx-auto" method="GET" action="/locals">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="reference" list="invoice-references"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tapez l'addresse ici" />
                        <datalist id="invoice-references"></datalist>
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chercher</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Locals grid -->
        <div class="grid grid-cols-3 gap-2 pt-4">
            @foreach ($locals as $local)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="/locals/{{ $local->id }}">
                    <img class="rounded-t-lg" src="{{ asset($local->image) }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="/locals/{{ $local->id }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $local->address }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Region: {{ $local->region->name }}</p>
                    <a href="/locals/{{ $local->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $('#default-search').autocomplete({
                source: function(request, response) {
                    $.get('/get-local-address/' + request.term, function(data) {
                        response(data);
                    });
                },
                minLength: 2,
                select: function(event, ui) {
                    $('#default-search').val(ui.item.value);
                }
            });
        });
    </script>
</x-layout>
