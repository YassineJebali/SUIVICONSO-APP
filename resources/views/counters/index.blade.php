<x-layout>
    <!-- CSS styles -->
    <style>
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

        /* Style the items */
        .ui-menu-item {
            list-style-type: none;
            padding: 5px 10px;
        }

        /* Style the highlighted item */
        .ui-menu-item.ui-state-focus {
            background-color: #eee;
        }
    </style>

    <!-- Main content -->
    <div class="flex justify-left space-x-1" style="margin-right: 2.375rem; margin-left: 2.375rem; margin-top:7rem">
        <a href="{{ url()->previous() }}">
            <button type="button"
                class="space-y-4 p-2 text-gray-500 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <svg fill="#000000" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    viewBox="0 0 512.001 512.001" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M384.834,180.699c-0.698,0-348.733,0-348.733,0l73.326-82.187c4.755-5.33,4.289-13.505-1.041-18.26
                                c-5.328-4.754-13.505-4.29-18.26,1.041l-82.582,92.56c-10.059,11.278-10.058,28.282,0.001,39.557l82.582,92.561
                                c2.556,2.865,6.097,4.323,9.654,4.323c3.064,0,6.139-1.083,8.606-3.282c5.33-4.755,5.795-12.93,1.041-18.26l-73.326-82.188
                                c0,0,348.034,0,348.733,0c55.858,0,101.3,45.444,101.3,101.3s-45.443,101.3-101.3,101.3h-61.58
                                c-7.143,0-12.933,5.791-12.933,12.933c0,7.142,5.79,12.933,12.933,12.933h61.58c70.12,0,127.166-57.046,127.166-127.166
                                C512,237.745,454.954,180.699,384.834,180.699z"/>
                        </g>
                    </g>
                </svg>
                
            </button>
        </a>
        <!-- Your existing buttons here -->
    </div>
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 2rem; margin-left: 2rem; margin-top:0.5rem;">
        <div class="mb-5 flex justify-between">
             <!-- Titlle section left -->
            <div class="flex space-x-2 items-center">
                <div>
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
                </div>
                <h1 class="space-y-4 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Liste des Compteurs
                </h1>
            </div>

            <!-- Add counter button right -->
            <div>
                <a href="/counters/create">
                    <button type="submit"
                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Ajouter un compteur
                    </button>
                </a>
            </div>
        </div>

        <!-- Filter form -->
        <form method="GET" action="/counters" class="">
            <div class="mb-5 flex justify-between items-center space-x-4 p-4 bg-white border border-gray-200 rounded-lg">
                <div class="flex space-x-3 "><!-- Filter & date pickers left -->
                    <div class="border border-gray-200 p-2 rounded">
                        <label for="local">Local:</label>
                        <select style="width:350px " id="local" name="local" class="form-select ">
                            <option value="">Tout les locaux</option>
                            @foreach ($locals as $local)
                                <option value="{{ $local->id }}">{{ $local->address }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Counter Type Filter -->
                <div>
                    <label for="counter-type" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Counter Type</label>
                    <select id="counter-type" name="counter_type" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Type</option>
                        <option value="electricity">Eléctricité</option>
                        <option value="gas">Gaz</option>
                        <option value="water">Eau</option>
                    </select>
                </div>

                <div class=" flex space-x-2 items-center"><!-- Filter & Reset buttons right -->
                    <div>
                        <button type="submit" class="px-4 py-2  text-white bg-blue-700 hover:bg-blue-800 rounded flex items-center justify-center">Filtrer</button>
                    </div>
                    <div>
                        <a href="/counters" class="px-4 py-2  text-white bg-red-500 hover:bg-red-800 rounded items-center justify-center inline-block">Réinitialiser</a>
                    </div>
                </div>

            </div>

            <!-- Search input -->
            <div class="mx-auto">
                <label for="serial_number"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="serial_number" name="serial_number"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tapez le numéro de serie du compteur ici" />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chercher</button>
                </div>
            </div>
        </form>

        <!-- Counter list -->
            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-md bg-gray-100 shadow border-gray-300 rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Numero de serie</th>
                            <th class="text-left p-3 px-5">Type</th>
                            <th class="text-left p-3 px-5">Consommation générale</th>
                            <th class="text-left p-3 px-5">Local</th>
                            <th></th>
                        </tr>
                        @foreach ($counters as $counter)
                        <tr class="border-b hover:bg-orange-100 bg-gray-50">
                            <td class="p-3 px-5">{{ $counter->serial_number }}</td>
                            <td class="p-3 px-5">
                                @switch($counter->type)
                                    @case('gas')
                                        <span class="inline-flex rounded-full bg-yellow-100 p-1 space-x-1 pl-2 pr-2 text-yellow-500">gaz</span>
                                        @break
                                    @case('electricity')
                                        <span class="inline-flex rounded-full bg-purple-100 p-1 pl-2 pr-2 space-x-1 text-purple-500">Eléctricité</span>
                                        @break
                                    @case('water')
                                        <span class="inline-flex rounded-full bg-blue-100 p-1 space-x-1 pl-2 pr-2 text-blue-500">Eau</span>
                                        @break
                                    @default
                                        <span class="inline-flex rounded-full bg-gray-100 p-1 space-x-1 pl-2 pr-2 text-gray-500">Inconnu</span>
                                @endswitch
                            </td>
                            <td class="p-3 px-5">{{ $counter->avg_consumption }}</td>
                            <td class="p-3 px-5">{{ $counter->local->name }}</td>
                            <td class="p-3 px-5 flex justify-end">
                                <a href="/counters/{{ $counter->id }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Voir</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

    </div>

    <!-- JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Autocomplete functionality -->
    <script>
        $(function() {
            $('#serial_number').autocomplete({
                source: function(request, response) {
                    $.get('/get-counter-serial_number/' + request.term, function(data) {
                        response(data);
                    });
                },
                minLength: 2,
                select: function(event, ui) {
                    $('#serial_number').val(ui.item.value);
                }
            });
        });
    </script>
</x-layout>
