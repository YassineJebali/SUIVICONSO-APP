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

        .ui-helper-hidden-accessible {
            display: none !important;
        }
    </style>
    <form method="POST" action="/counters/{{ $counter->id }}"
        class="space-y-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="margin-right: 9.375rem; margin-left: 9.375rem; margin-top:7rem; margin-bottom:2rem;">
        @csrf
        @method('PUT')

        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Modification du Compteur
        </h1>

        <div class="grid md:grid-cols-2 md:gap-6 ">
            <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                <input type="text" id="serial_number" name="serial_number" autocomplete="off"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " value="{{ $counter->serial_number }}" required />            
                <label for="serial_number"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">N.compteur
                </label><!-- HERE IS THE COUNTER new serial_number -->
            </div>
            <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                <input type="text" name="local_name" id="local_name"
    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
    placeholder=" " value="{{ $counter->local->name }}" required />
                <label for="local_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Local associé
                </label><!-- HERE IS THE local name , the autocomplete will fetch the local table to help user find it -->
            </div>
        </div>
        

        <div class="grid grid-cols-2 gap-6">
            <div> <!-- HERE IS THE COUNTER type for the new counter  -->
                <div>
                    <label for="Type" class="block mb-2 font-medium text-gray-900 dark:text-white">Type</label>
                                <select name="type" id="Type" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Aucun</option>
                <option value="electricity" {{ $counter->type == 'electricity' ? 'selected' : '' }}>Eléctricité</option>
                <option value="gas" {{ $counter->type == 'gas' ? 'selected' : '' }}>Gaz</option>
                <option value="water" {{ $counter->type == 'water' ? 'selected' : '' }}>Eau</option>
            </select>
                </div>
            </div>
        </div>

        <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Valider
        la saisie</button>
    </form>
</x-layout>