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
    <div class="flex justify-center mt-10">
        @if (session('success'))
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
    </div>
    <div>
                @if (session('error'))
        <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('error') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
    </div>

<div class="space-y-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 9.375rem; margin-left: 9.375rem; margin-top:7rem; margin-bottom:2rem;">
    <div>
        <div class="mb-5 flex justify-between">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white mb-4">
                    Détails du Compteur
                </h1>
                <div class="flex justify-center space-x-1">
                    <a href="/counters/{{ $counter->id }}/edit">
                        <button type="submit"
                            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Modifier
                        </button>
                    </a>
                    <form action="{{ route('counters.destroy', $counter->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class=" text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>

            <div class="grid md:grid-cols-2 md:gap-6 mb-4">
                <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                    <h2 class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-mono ">Compteur : {{ $counter->serial_number }}</h2>
                </div>
                <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                    <h2 class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-mono ">Local associé : {{ $counter->local->name }}</h2>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6 mb-4">
                <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                    <h2 class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-mono ">
                        Type : 
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
                    </h2>
                </div>
            </div>
            <h2 class="text-lg font-bold leading-tight tracking-tight text-gray-900 md:text-xl dark:text-white mb-4">
                Liste des factures
            </h2>
            

        <!-- Invoice list -->
        <div class="flex justify-center">
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
</x-layout>