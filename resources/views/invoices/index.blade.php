<x-layout >
    <div class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-right: 9.375rem; margin-left: 9.375rem; margin-top:7rem;">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Ajouter une Facture
        </h1>
        
    <a href="/invoices/create">Create a new invoice</a>
    <ul>
        @foreach ($invoices as $invoice)
            <li>
                <a href="/invoices/{{ $invoice->id }}">
                    {{ $invoice->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <form class="grid grid-cols-2 gap-6">
        <div>
            <label class="text-black-50 dark:text-gray-200" for="passwordConfirmation"><b>Date de facturation</b></label>
            <input id="date" type="date"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div>
            <label class="text-black-50 dark:text-gray-200" for="passwordConfirmation"><b>Date d'échéance</b></label>
            <input id="date" type="date"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
    </form>
</div>
</x-layout>