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
    <div class="flex justify-left space-x-1" style="margin-right: 9.375rem; margin-left: 9.375rem;">
        <a href="{{ url()->previous() }}">
            <button type="button" class="space-y-4 p-2 text-gray-500 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <svg fill="#000000" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve">
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

    <div class="space-y-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-right: 9.375rem; margin-left: 9.375rem; margin-top:0.5rem; margin-bottom:2rem;">
        <div>
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 mb-8">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#local-details" class="tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Détails du local</a>
                    </li>
                    <li class="me-2">
                        <a href="#local-statistics" class="tab-link inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Statistiques du local</a>
                    </li>
                    <li class="me-2">
                        <a href="#counter-list" class="tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Liste de compteurs</a>
                    </li>
                </ul>
            </div>
            <div id="local-details" class="tab-content">
                <div class="grid md:grid-cols-2 md:gap-6 mb-4">
                    <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                        <h2 class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-mono ">Local : {{ $local->name }}</h2>
                    </div>
                    <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                        <h2 class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-mono ">Region : {{ $local->region->name }}</h2>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group" style="margin-bottom: 0px;">
                    <h2 class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-mono ">Addresse : {{ $local->address }}</h2>
                </div>
                <div class="flex justify-end space-x-1 pt-4">
                    <a href="/locals/{{ $local->id }}/edit">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Modifier
                        </button>
                    </a>
                    <form action="{{ route('locals.destroy', $local->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
            <div id="local-statistics" class="tab-content">
                <div>
                    <select id="yearFilter" class="block p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Toutes les années</option>
                        @foreach($gasData->pluck('year')->unique() as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-center mb-8">
                    <canvas id="invoiceChart"></canvas>
                </div>
            </div>
            <!-- Counter list -->
            <div id="counter-list" class="tab-content">
                <div class="flex justify-center">
                    <table class="w-full text-md bg-gray-100 shadow border-gray-300 rounded mb-4">
                        <tbody>
                            <tr class="border-b">
                                <th class="text-left p-3 px-5">N.Compteur</th>
                                <th class="text-left p-3 px-5">Moyenne de Consommation</th>
                                <th class="text-left p-3 px-5">Type</th>
                                <th></th>
                            </tr>
                            @foreach ($counters as $counter)
                            <tr class="border-b hover:bg-orange-100 bg-gray-50">
                                <td class="p-3 px-5">{{ $counter->serial_number }}</td>
                                <td class="p-3 px-5">{{ $counter->avg_consumption }}</td>
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
                                <td class="p-3 px-5 flex justify-end">
                                    <a href="/counters/{{ $counter->id }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Voir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            // Add click event listeners to all tab links
            document.querySelectorAll('.tab-link').forEach(function(tabLink) {
                tabLink.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove the 'active' class from all tab links
                    document.querySelectorAll('.tab-link').forEach(function(tabLink) {
                        tabLink.classList.remove('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
                    });

                    // Add the 'active' class to the clicked tab link
                    this.classList.add('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');

                    // Hide all tab content divs
                    document.querySelectorAll('.tab-content').forEach(function(tabContent) {
                        tabContent.style.display = 'none';
                    });

                    // Show the clicked tab content div
                    document.querySelector(this.getAttribute('href')).style.display = 'block';
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var gasData = @json($gasData);
            var waterData = @json($waterData);
            var electricityData = @json($electricityData);
            var counterType = @json($counter->type); // Assuming $counter->type exists and contains the counter type
            var ctx = document.getElementById('invoiceChart').getContext('2d');
            var yearFilter = document.getElementById('yearFilter');

            function getColor(utilityType) {
    switch (utilityType) {
        case 'gas':
            return '#FBBF24';
        case 'water':
            return '#89BCFB';
        case 'electricity':
            return '#6B3CF6';
        default:
            return 'rgba(75, 192, 192, 0.2)';
    }
}

            function createChart(gasData, waterData, electricityData, isYearSelected) {
    var labels = isYearSelected ? 
        ['Dec', 'Nov', 'Oct', 'Sep', 'Aug', 'Jul', 'Jun', 'May', 'Apr', 'Mar', 'Feb', 'Jan'] : 
        gasData.slice(-24).map(function(invoice) { return invoice.month + ' ' + invoice.year; }).reverse();

    return new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Gaz',
                data: gasData.slice(-24).map(function(invoice) { return invoice.consumption; }).reverse(),
                backgroundColor: getColor('gas'),
                borderColor: getColor('gas'),
                fill: false,
                tension: 0.1,
            }, {
                label: 'Eau',
                data: waterData.slice(-24).map(function(invoice) { return invoice.consumption; }).reverse(),
                backgroundColor: getColor('water'),
                borderColor: getColor('water'),
                fill: false,
                tension: 0.1,
            }, {
                label: 'Electricité',
                data: electricityData.slice(-24).map(function(invoice) { return invoice.consumption; }).reverse(),
                backgroundColor: getColor('electricity'),
                borderColor: getColor('electricity'),
                fill: false,
                tension: 0.1,
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Utility Consumption'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Consumption'
                    }
                }]
            }
        }
    });
}

// Call the function to create the chart
createChart(gasData, waterData, electricityData, yearFilter.checked);
    </script>
</x-layout>