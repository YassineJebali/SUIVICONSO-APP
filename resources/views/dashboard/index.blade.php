<x-layout>
   <div class="grid grid-cols-3 grid-rows-1 gap-4 margin px" style="width: 100%; margin-top:7rem;">
       {{--   <div class="w-full p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <!-- Content for the first slot -->
            <span>
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-3">Etat des Factures</h1>
                <div class="flex justify-between mb-1">
                    <p class=" inline-flex rounded-full bg-yellow-100 p-1 pl-2 pr-2 space-x-1 text-yellow-500">Nb. de factures Partiellement Payées :</p>
                    <p class="font-semibold  inline-flex rounded-full bg-yellow-100 p-1 pl-2 pr-2 space-x-1 text-yellow-500">16</p>
                </div>
                <div class="flex justify-between">
                    <p class=" dark:text-gray-300 inline-flex rounded-full bg-red-100 p-1 space-x-1 pl-2 pr-2 text-red-500">Nb. de factures Non Payées :</p>
                    <p class="font-semibold inline-flex rounded-full bg-red-100 p-1 space-x-1 pl-2 pr-2 text-red-500">6</p>
                </div>
            </span>
        </div>
        <div class="w-full p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <!-- Content for the second slot -->
            <span>
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-3">Etat des Utilisateurs</h1>
                <div class="flex justify-between mb-1">
                    <p class=" py-1 px-3 rounded-full font-semibold text-sm">Nb. d'Agents de saisie :</p>
                    <p class="bg-orange-200 text-orange-600 py-1 px-3 rounded-full text-xs">12</p>
                </div>
                <div class="flex justify-between mb-1">
                    <p class="py-1 px-3 rounded-full font-semibold text-sm">Nb. de Responsable Local :</p>
                    <p class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">6</p>
                </div>
                <div class="flex justify-between">
                    <p class="  py-1 px-3 rounded-full font-semibold text-sm">Nb. d'Administrateur :</p>
                    <p class="bg-cyan-200 text-cyan-600 py-1 px-3 rounded-full text-xs">5</p>
                </div>
            </span>
        </div>
        <div class="w-full p-6 hover:bg-gray-50 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <!-- Content for the third slot -->
            <span>
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-3">Etat des Locaux & Regions</h1>
                <div class="flex justify-between ">
                    <p class=" py-1 px-3 rounded-full font-semibold text-lg">Nb. de locaux:</p>
                    <p class="py-1 px-3 rounded-full font-semibold text-lg">6</p>
                </div>
                <div class="flex justify-between">
                    <p class=" py-1 px-3 rounded-full font-semibold text-lg">Nb. de regions:</p>
                    <p class="py-1 px-3 rounded-full font-semibold text-lg">3</p>
                </div>
            </span>
        </div>--}}
    </div>
    
    <div class="md:flex w-full p-6  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 ">
        <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
            <li>
                <a href="#" data-tab="statistiques"class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-100 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18"><path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/></svg>
                    Statistiques
                </a>
            </li>
            <li>
                <a href="#" data-tab="utilisateurs" class="inline-flex items-center px-4 py-3 text-white bg-blue-700 rounded-lg active w-full dark:bg-blue-600" aria-current="page">
                    <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    Informations
                </a>
            </li>
            <li>
                <a href="#" data-tab="factures" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-100 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z"/>
                    </svg>
                    Factures
                </a>
            </li>
            <li>
                <a class="inline-flex items-center px-4 py-3 text-white rounded-lg cursor-not-allowed bg-white w-full">
                </a>
            </li>
            <li>
                <a class="inline-flex items-center px-4 py-3 text-white rounded-lg cursor-not-allowed bg-white w-full">
                </a>
            </li>
            <li>
                <a class="inline-flex items-center px-4 py-3 text-white rounded-lg cursor-not-allowed bg-white w-full">
                </a>
            </li>
            <li>
                <a class="inline-flex items-center px-4 py-3 text-white rounded-lg cursor-not-allowed bg-white w-full">
                </a>
            </li>
            <li>
                <a class="inline-flex items-center px-4 py-3 text-white rounded-lg cursor-not-allowed bg-white w-full">
                </a>
            </li>
            <li>
                <a class="inline-flex items-center px-4 py-3 text-white rounded-lg cursor-not-allowed bg-white w-full">
                </a>
            </li>
        </ul>
        <div>
            <div id="statistiques" class="tab-content p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 bg-white rounded shadow h-50 w-50">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Visualisation général de consommation</h3>
                        <!-- Insert your chart here -->
                        <div class="grid md:grid-cols-2 md:gap-6 mt-8 mb-4">
                            <div>
                                <label for="role" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Role</label>
                                <select id="role" name="role"
                                    class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Local</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">Utilisateur</option>
                                </select>
                            </div>
                            <div>
                                <label for="role" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Role</label>
                                <select id="role" name="role"
                                    class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Region</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">Utilisateur</option>
                                </select>
                            </div>
                        </div>
                        <canvas id="myChart1"height="400" width="450"></canvas>

                    </div>
                    <div class="p-4 bg-white rounded shadow h-50 w-50">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Part de la consommation par mois</h3>
                        <!-- Insert your chart here -->
                        <canvas id="myChart2"height="100" width="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div id="factures" class="tab-content p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-8">Factures à régler</h3>
                <div class="flex justify-between mb-2">
                    <p class=" py-1 px-3 rounded-full font-semibold">Nombre de factures Partiellement Payées :</p>
                    <p class="font-semibold  inline-flex rounded-full bg-yellow-100 p-1 pl-2 pr-2 space-x-1 text-yellow-500">16</p>
                </div>
                <div class="flex justify-between">
                    <p class=" py-1 px-3 rounded-full font-semibold">Nombre de factures Non Payées :</p>
                    <p class="font-semibold inline-flex rounded-full bg-red-100 p-1 space-x-1 pl-2 pr-2 text-red-500">6</p>
                </div>
            </div>
        </div>
        <div>
            <div id="utilisateurs" class="tab-content p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                <div class="flex justify-between ">
                    <div style="margin-right: 18rem">
                        <div class="flex justify-between">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-8">Utilisateurs</h3>
                            <p><b>Total : 23</b></p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class=" py-1 px-3 rounded-full font-semibold ">Nombre d'Agents de saisie :</p>
                            <p class="bg-orange-200 text-orange-600 py-1 px-3 rounded-full font-semibold ">12</p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class="py-1 px-3 rounded-full font-semibold">Nombre de Responsables Local :</p>
                            <p class="bg-green-200 text-green-600 py-1 px-3 rounded-full font-semibold ">6</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="  py-1 px-3 rounded-full font-semibold">Nombre d'Administrateurs :</p>
                            <p class="bg-cyan-200 text-cyan-600 py-1 px-3 rounded-full font-semibold">5</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-8">Infrastructure</h3>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class=" py-1 px-3 rounded-full font-semibold ">Nombre de compteurs :</p>
                            <p class=" py-1 px-3 rounded-full font-semibold ">18</p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class="py-1 px-3 rounded-full font-semibold">Nombre de Locaux :</p>
                            <p class=" py-1 px-3 rounded-full font-semibold ">6</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="  py-1 px-3 rounded-full font-semibold">Nombre de regions :</p>
                            <p class=" py-1 px-3 rounded-full font-semibold">3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div id="bilan" class="tab-content p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Bilan</h3>
                <p class="mb-2">This is some placeholder content the Profile tab's associated content, clicking another tab will toggle the visibility of this one for the next.</p>
                <p>The tab JavaScript swaps classes to control the content visibility and styling.</p> 
            </div>
        </div>
    </div>
    <script>

    // Get all the tabs
    var tabs = document.querySelectorAll('li a');

    // Get the content div
    var contentDiv = document.querySelector('.p-6');

    // Add click event listener to each tab
    tabs.forEach(function(tab) {
        tab.addEventListener('click', function(e) {
            // Get the ID of the content div from the data-tab attribute
            var contentId = this.dataset.tab;

            // Check if a content div exists
            var content = document.getElementById(contentId);
            if (content) {
                e.preventDefault();

                // Remove the selected class from all tabs and add the not selected class
                tabs.forEach(function(tab) {
                    tab.classList.remove('text-white', 'bg-blue-700', 'active', 'dark:bg-blue-600');
                    tab.classList.add('hover:text-gray-900', 'bg-gray-100','w-full','rounded-lg', 'hover:bg-gray-100', 'dark:bg-gray-800', 'dark:hover:bg-gray-700', 'dark:hover:text-white');

                    // Change the color of the SVG to gray
                    var svg = tab.querySelector('svg');
                    if (svg) {
                        svg.classList.remove('text-white');
                        svg.classList.add('text-gray-500');
                    }
                });

                // Add the selected class to the clicked tab and remove the not selected class
                this.classList.add('text-white', 'bg-blue-700', 'active', 'w-full', 'dark:bg-blue-600', 'rounded-lg');
                this.classList.remove('hover:text-gray-900', 'bg-gray-100', 'hover:bg-gray-100',  'dark:bg-gray-800', 'dark:hover:bg-gray-700', 'dark:hover:text-white');

                // Change the color of the SVG to white
                var svg = this.querySelector('svg');
                if (svg) {
                    svg.classList.remove('text-gray-500');
                    svg.classList.add('text-white');
                }

                // Hide all content divs
                var contents = document.querySelectorAll('.tab-content');
                contents.forEach(function(content) {
                    content.style.display = 'none';
                });

                // Show the clicked tab's content div
                content.style.display = 'block';
            }
        });
    });
    document.querySelector('ul > li > a[data-tab="statistiques"]').click();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Define the Utils object
        const Utils = {
          CHART_COLORS: {
            red: 'rgb(255, 99, 132)',
            blue: 'rgb(54, 162, 235)',
            yellow: 'rgb(255, 205, 86)',
            purple: 'rgb(153, 102, 255)',
          },
        };
        
        // Your chart code
        const labels = ['Eau', 'Eléctricité', 'Gaz'];
        const barChartData = {
          labels: labels,
          datasets: [
            {
              label: 'Consommation',
              data: [5600, 12600, 2400], // Replace with your actual values
              backgroundColor: [Utils.CHART_COLORS.blue, Utils.CHART_COLORS.purple, Utils.CHART_COLORS.yellow],
            },
            {
              label: 'Montant Total',
              data: [1200, 7070, 670], // Replace with your actual values
              backgroundColor: Utils.CHART_COLORS.red,
            },
            // Add more datasets here if needed
          ]
        };
        
        const config = {
          type: 'bar',
          data: barChartData,
          options: {
            scales: {
              x: {
                beginAtZero: true,
                stacked: false, // Set this to false to keep the bars separate
              },
              y: {
                beginAtZero: true,
                stacked: false, // Set this to false to make the bars start from 0
              }
            }
          }
        };
        
        const myChart1 = new Chart(
          document.getElementById('myChart1'),
          config
        );
        </script>
<script>
    // Your pie chart code
    const pieChartData = {
      labels: ['Eléctricité', 'Eau', 'Gaz'],
      datasets: [
        {
          label: 'My First Dataset',
          data: [12600, 5600, 2400], // Replace with your actual values
          backgroundColor: [
          'rgb(153, 102, 255)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
          ],
          hoverOffset: 4
        }
      ]
    };
    
    const pieChartConfig = {
      type: 'pie',
      data: pieChartData,
    };
    
    const myChart2 = new Chart(
      document.getElementById('myChart2'),
      pieChartConfig
    );
    </script>
</x-layout>