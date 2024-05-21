<x-layout>
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
    <div class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 2.375rem; margin-left: 2.375rem; margin-top:7rem;">
        <h1
            class="pb-10 space-y-4 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Liste des Factures
        </h1>


        <a href="/invoices/create">
            <button type="submit"
                class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Ajouter une facture
            </button>
        </a>
        <form method="GET" action="/invoices" class="">
            <div class="flex items-center space-x-4 p-4 bg-white border border-gray-200 rounded-lg">
                <div>
                    <label for="from_date">Depuis</label>
                    <input type="date" id="from_date" name="from_date" class="form-input">
                </div>
                <div>
                    <label for="to_date">Jusqu'a</label>
                    <input type="date" id="to_date" name="to_date" class="form-input">
                </div>
                <div>
                    <label for="local">Local</label>
                    <select id="local" name="local" class="form-select">
                        <option value="">Tout les locaux</option>
                        @foreach ($locals as $local)
                            <option value="{{ $local->id }}">{{ $local->address }}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div>
                    <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Filtrer</button>
                </div>
                <div> <a href="/invoices" class="px-4 py-2 text-white bg-red-500 rounded">Reset</a></div>
            </div>
            <div>

                <div class=" mx-auto" method="GET" action="/invoices">
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
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-500 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chercher</button>
                    </div>
                </div>

            </div>
        </form>
        <div class="grid grid-cols-1 gap-2 pt-4">
            @foreach ($invoices as $invoice)
                <a href="/invoices/{{ $invoice->id }}"
                    class="block p-6 pb-2 pt-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Facture référence:
                        {{ $invoice->reference }}</h5>
                        <div class="flex justify-between">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Local : {{ $invoice->local->address }}</p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Date : {{ $invoice->date }}</p>
                </div>
                </a>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
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
