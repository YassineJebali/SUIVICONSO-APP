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
                    <svg fill="#11B5E4" class="w-8 h-8 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <path d="m773.596 1069.654 711.086 711.085c39.632 39.632 104.336 39.632 144.078 0l138.276-138.385c19.268-19.269 29.888-44.778 29.888-71.93 0-27.26-10.62-52.77-29.888-72.039l-698.714-698.714 11.495-32.625c63.5-178.675 18.284-380.45-115.284-514.018-123.715-123.605-305.126-171.01-471.648-128.313l272.281 272.282c32.516 32.406 50.362 75.652 50.362 121.744 0 45.982-17.846 89.227-50.362 121.744L654.48 751.17c-67.222 67.003-176.375 67.003-243.488 0L138.711 478.889c-42.589 166.522 4.707 347.934 128.313 471.648 123.714 123.715 306.22 172.325 476.027 127.218l30.545-8.101ZM1556.611 1920c-54.084 0-108.168-20.692-149.333-61.857L740.095 1190.96c-198.162 41.712-406.725-19.269-550.475-163.019C14.449 852.771-35.256 582.788 65.796 356.27l32.406-72.696 390.194 390.193c24.414 24.305 64.266 24.305 88.68 0l110.687-110.686c11.824-11.934 18.283-27.59 18.283-44.34 0-16.751-6.46-32.516-18.283-44.34L297.569 84.207 370.265 51.8C596.893-49.252 866.875.453 1041.937 175.515c155.026 155.136 212.833 385.157 151.851 594.815l650.651 650.651c39.961 39.852 61.967 92.95 61.967 149.443 0 56.383-22.006 109.482-61.967 149.334l-138.275 138.385c-41.275 41.165-95.36 61.857-149.553 61.857Z" fill-rule="evenodd"/>
                    </svg>
                </div>
                <h1 class="space-y-4 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Liste des Utilisateurs
                </h1>
            </div>

            <!-- Add user button right -->
            <div>
                <a href="/users/create">
                    <button type="submit"
                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Ajouter un utilisateur
                    </button>
                </a>
            </div>
        </div>

        <!-- Filter form -->
        <form method="GET" action="/users" class="">
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
                <!-- User Type Filter -->
                <div>
                    <label for="role" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Role</label>
                    <select id="role" name="role"
                        class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Tout les roles</option>
                        <option value="admin">Admin</option>
                        <option value="user">Utilisateur</option>
                    </select>
                </div>

                <div class=" flex space-x-2 items-center"><!-- Filter & Reset buttons right -->
                    <div>
                        <button type="submit" class="px-4 py-2  text-white bg-blue-700 hover:bg-blue-800 rounded flex items-center justify-center">Filtrer</button>
                    </div>
                    <div>
                        <a href="/users" class="px-4 py-2  text-white bg-red-500 hover:bg-red-800 rounded items-center justify-center inline-block">Réinitialiser</a>
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

        <!-- User list -->
            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-md bg-gray-100 shadow border-gray-300 rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Utilisateur</th>
                            <th class="text-left p-3 px-5">Role</th>
                            <th class="text-left p-3 px-5">Local</th>
                            <th></th>
                        </tr>
                        @foreach ($users as $user)
                        <tr class="border-b hover:bg-orange-100 bg-gray-50">
                            <td class="p-3 px-5">{{ $user->username }}</td>
                            <td class="p-3 px-5">
                                @switch($user->role->nom)
                                    @case('admin')
                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Admin</span>
                                        @break
                                    @case('user')
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Utilisateur</span>
                                        @break
                                    @default
                                        <span class="bg-blue-200 text-blue-600 py-1 px-3 rounded-full text-xs">Inconnu</span>
                                @endswitch
                            </td>
                            <td class="p-3 px-5">{{ $local->name }}</td>
                            <td class="p-3 px-5 flex justify-end">
                                <a href="/users/{{ $user->id }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Voir</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

    </div>
</x-layout>
