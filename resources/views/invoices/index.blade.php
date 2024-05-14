<x-layout>
    <div class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 9.375rem; margin-left: 9.375rem; margin-top:7rem;">
        <h1 class="space-y-4 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Ajouter une Facture
        </h1>

        <a href="/invoices/create">
            <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Ajouter une facture
            </button>
        </a>
        <ul>
            @foreach ($invoices as $invoice)
                <li>
                    <a href="/invoices/{{ $invoice->id }}">
                        {{ $invoice->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
