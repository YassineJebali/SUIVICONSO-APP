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

<div class="space-y-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 9.375rem; margin-left: 9.375rem; margin-top:7rem; margin-bottom:2rem;">
    <div>
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white mb-4">
                    Détails du Compteur
                </h1>
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
                    @foreach ($counter->invoices as $invoice)
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