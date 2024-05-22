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
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 2rem; margin-left: 2rem; margin-top:7rem;">
        <div class="mb-5 flex justify-between">
             <!-- Titlle section left -->
            <div class="flex space-x-2 items-center">
                <div>
                    <svg class="w-9 h-9 text-gray-500 dark:text-gray-400 mb-3 " aria-hidden="true" fill="currentColor"
                        viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                        <path
                            d="M829.06 73.14h-6.48c-30.41 0-58.57 17.11-75.34 45.75-6.16 10.41-22.29 11.73-29.96 2.43-25.52-31.07-59.41-48.18-95.64-48.18-35.98 0-69.86 17.11-95.41 48.18-6.98 8.48-21.25 8.54-28.27-0.02-25.55-31.05-59.43-48.16-95.41-48.16s-69.86 17.11-95.41 48.18c-7.66 9.38-23.79 8.09-29.95-2.43-16.8-28.64-44.96-45.75-75.36-45.75h-7.23c-46.89 0-85.05 38.16-85.05 85.05V865.8c0 46.89 38.16 85.05 85.05 85.05h7.23c30.39 0 58.55-17.11 75.38-45.79 6.07-10.43 22.23-11.79 29.93-2.38 25.55 31.05 59.43 48.16 95.41 48.16s69.86-17.11 95.41-48.18c7.02-8.52 21.29-8.5 28.27 0.02 25.55 31.05 59.43 48.16 95.66 48.16 35.98 0 69.88-17.11 95.38-48.14 7.73-9.34 23.89-8 29.96 2.36 16.79 28.68 44.95 45.79 75.36 45.79h6.48c46.89 0 85.05-38.16 85.05-85.05V158.2c0-46.9-38.17-85.06-85.06-85.06z m11.91 792.66c0 6.57-5.34 11.91-11.91 11.91h-6.48c-6.14 0-10.91-7.34-12.23-9.61-16.36-27.91-46.61-45.25-78.93-45.25-27.43 0-53.16 12.16-70.64 33.39-6.59 8.02-20.41 21.46-39.14 21.46-18.48 0-32.32-13.46-38.91-21.46-34.84-42.45-106.39-42.46-141.27-0.02-6.59 8.02-20.43 21.48-38.91 21.48s-32.32-13.46-38.91-21.46c-17.43-21.23-43.18-33.39-70.62-33.39-32.36 0-62.61 17.36-78.93 45.25-1.32 2.25-6.11 9.61-12.25 9.61h-7.23c-6.57 0-11.91-5.34-11.91-11.91V158.2c0-6.57 5.34-11.91 11.91-11.91h7.23c6.14 0 10.93 7.36 12.23 9.57 16.34 27.93 46.59 45.29 78.95 45.29 27.45 0 53.2-12.16 70.62-33.38 6.59-8.02 20.43-21.48 38.91-21.48s32.32 13.46 38.91 21.46c34.88 42.48 106.43 42.43 141.27 0.02 6.59-8.02 20.43-21.48 39.16-21.48 18.48 0 32.3 13.45 38.91 21.5 17.46 21.2 43.2 33.36 70.62 33.36 32.32 0 62.57-17.34 78.95-45.29 1.3-2.23 6.07-9.57 12.21-9.57h6.48c6.57 0 11.91 5.34 11.91 11.91v707.6z"
                            fill="#FF6666" />
                        <path d="M255.83 365.46h512v73.14h-512zM255.74 548.2h365.71v73.38H255.74z" fill="#FF6666" />
                    </svg>
                </div>
                <h1 class="space-y-4 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Liste des Factures
                </h1>
            </div>

            <!-- Add invoice button right -->
            <div>
                <a href="/invoices/create">
                    <button type="submit"
                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Ajouter une facture
                    </button>
                </a>
            </div>
        </div>

        <!-- Filter form -->
        <form method="GET" action="/invoices" class="">
            <div class="mb-5 flex justify-between items-center space-x-4 p-4 bg-white border border-gray-200 rounded-lg">
                <div class="flex space-x-3 "><!-- Filter & date pickers left -->
                    <div class="border border-gray-200 p-2 rounded">
                        <label for="from_date">Depuis:</label>
                        <input type="date" id="from_date" name="from_date" class="form-input ">
                    </div>
                    <div class="border border-gray-200 p-2 rounded">
                        <label for="to_date">Jusqu'a:</label>
                        <input type="date" id="to_date" name="to_date" class="form-input">
                    </div>
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
                                    <!-- Payment Status Filter -->
                                    <div>
                                        <label for="payment-status" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Payment Status</label>
                                        <select id="payment-status" name="payment_status" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Tout</option>
                                            <option value="unpaid">Non payé</option>
                                            <option value="partially_paid">Partiellement payé</option>
                                            <option value="paid">Payé</option>
                                        </select>
                                    </div>

                <div class=" flex space-x-2 items-center"><!-- Filter & Reset buttons right -->
                    <div>
                        <button type="submit" class="px-4 py-2  text-white bg-blue-700 hover:bg-blue-800 rounded flex items-center justify-center">Filtrer</button>
                    </div>
                    <div>
                        <a href="/invoices" class="px-4 py-2  text-white bg-red-500 hover:bg-red-800 rounded items-center justify-center inline-block">Réinitialiser</a>
                    </div>
                </div>

            </div>

            <!-- Search input -->
            <div>
                <div class="mx-auto" method="GET" action="/invoices">
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
                            placeholder="Tapez la reference ici" />
                        <datalist id="invoice-references"></datalist>
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chercher</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Invoice list -->
            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-md bg-gray-100 shadow border-gray-300 rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Reference</th>
                            <th class="text-left p-3 px-5">Total</th>
                            <th class="text-left p-3 px-5">Consommation</th>
                            <th class="text-left p-3 px-5">Etat</th>
                            <th class="text-left p-3 px-5">Date d'ajout</th>
                            <th></th>
                        </tr>
                        @foreach ($invoices as $invoice)
                        <tr class="border-b hover:bg-orange-100 bg-gray-50">
                            <td class="p-3 px-5">{{ $invoice->reference }}</td>
                            <td class="p-3 px-5">{{ $invoice->amount }}</td>
                            <td class="p-3 px-5">{{ $invoice->consumption }}</td>
                            <td class="p-3 px-5">
                                @switch($invoice->payment_status)
                                    @case('unpaid')
                                        <span class="inline-flex rounded-full bg-red-100 p-1 space-x-1 pl-2 pr-2 text-red-500">Non Payé</span>
                                        @break
                                    @case('partially_paid')
                                        <span class="inline-flex rounded-full bg-yellow-100 p-1 pl-2 pr-2 space-x-1 text-yellow-500">Partiellement payé</span>
                                        @break
                                    @case('paid')
                                        <span class="inline-flex rounded-full bg-green-100 p-1 space-x-1 pl-2 pr-2 text-green-500">Payé</span>
                                        @break
                                    @default
                                        <span class="inline-flex rounded-full bg-gray-100 p-1 space-x-1 pl-2 pr-2 text-gray-500">Inconnu</span>
                                @endswitch
                            </td>
                            <td class="p-3 px-5">{{ $invoice->date }}</td>
                            <td class="p-3 px-5 flex justify-end">
                                <a href="/invoices/{{ $invoice->id }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Voir</a>
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
            $('#default-search').autocomplete({
                source: function(request, response) {
                    $.get('/get-invoice-reference/' + request.term, function(data) {
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
