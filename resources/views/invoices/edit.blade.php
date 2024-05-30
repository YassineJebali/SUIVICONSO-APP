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
        <form method="POST" action="/invoices/{{ $invoice->id }}"
        class="space-y-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 9.375rem; margin-left: 9.375rem; margin-top:7rem; margin-bottom:2rem;">
        @csrf
        @method('PUT')
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Modification de la Facture
        </h1>

        <div class="grid md:grid-cols-2 md:gap-6 ">
            <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                <input type="text" name="reference" id="reference" value="{{ $invoice->reference }}"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="reference"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Réference
                </label>
            </div>
    
            <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                <select id="counter_id" name="counter_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                    <!-- Options will be populated with jQuery and AJAX -->
                </select>
                <label for="counter_id"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">N.compteur
                </label>
            </div>
            
        </div>
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label class="block mb-2 font-medium text-gray-900 dark:text-white" for="issue_date">Date de facturation</label>
                <input id="issue_date" name="issue_date" type="date" value="{{ \Carbon\Carbon::parse($invoice->issue_date)->format('Y-m-d') }}"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        
            <div>
                <label class="block mb-2 font-medium text-gray-900 dark:text-white" for="due_date">Date d'échéance</label>
                <input id="due_date" name="due_date" type="date" value="{{ \Carbon\Carbon::parse($invoice->due_date)->format('Y-m-d') }}"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        
            <div>
                <label class="block mb-2 font-medium text-gray-900 dark:text-white" for="pleasePayBefore">Prière de payer avant le</label>
                <input id="pleasePayBefore" name="pleasePayBefore" type="date" value="{{ \Carbon\Carbon::parse($invoice->pleasePayBefore)->format('Y-m-d') }}"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        
            <div>
                <label class="block mb-2 font-medium text-gray-900 dark:text-white" for="nextIndexReading">Prochain relevé d'index</label>
                <input id="nextIndexReading" name="nextIndexReading" type="date" value="{{ \Carbon\Carbon::parse($invoice->nextIndexReading)->format('Y-m-d') }}"                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <select name="local_id" id="local_id" required
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                @foreach ($locals as $local)
                    <option value="{{ $local->id }}" {{ $invoice->local->id == $local->id ? 'selected' : '' }}>
                        {{ $local->address }}
                    </option>
                @endforeach
            </select>
            <label for="local_id"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Adresse</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="number" name="amount" id="amount" value="{{ $invoice->amount }}"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="amount"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Montant
                à payer</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="number" name="consumption" id="consumption" value="{{ $invoice->consumption }}"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="consumption"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantité</label>
        </div>
        <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Valider
        la saisie</button>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                var selectedCounter = "{{ $invoice->counters->first()->id }}";
                $('#local_id').change(function() {
                    var local_id = $(this).val();
                    $.ajax({
                        url: '/getCounters/' + local_id,
                        method: 'GET',
                        success: function(data) {
                            $('#counter_id').empty();
                            $.each(data, function(key, value) {
                                var selected = key == selectedCounter ? 'selected' : '';
                                $('#counter_id').append('<option value="' + key + '" ' + selected + '>' + value + '</option>');
                            });
                        }
                    });
                }).change(); // Trigger the change event immediately
            });
        </script>
</x-layout>