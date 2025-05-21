<div>
    @if(auth()->user()->roles->contains(1) || auth()->user()->roles->contains(2))
        <div x-data="{ chart: null }" x-init="">
            <h1>Jumlah Yuran Bulanan & Elaun Guru</h1>
            <hr>

            <div class="m-auto">
                <div class="">
                    <label for="year" class="font-medium">Pilih Tahun:</label>
                    <select id="yearSelect" onchange="updateChart()" class="border rounded px-2 py-1 ml-2">
                        <option value="">Pilih Tahun</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>

                <div class="col-lg-10 mt-4">
                    <div class="card text-grey bg-white rounded-3 shadow p-1">
                        <div class="body">
                            <canvas id="myChart" class="chartjs" data-height="400" height="500" style="display: block; box-sizing: border-box; height: 400px; width: 592.8px;" width="741"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0/dist/chartjs-plugin-datalabels.min.js"></script>
    <script>
        // Dummy data for student fees
        var feejan22 = 17912;
        var feefeb22 = 17336;
        var feemar22 = 21867;
        var feeapr22 = 14961;
        var feemay22 = 19770;
        var feejun22 = 16998;
        var feejul22 = 24768;
        var feeogs22 = 15173;
        var feesep22 = 13785;
        var feeoct22 = 19799;
        var feenov22 = 17254;
        var feedec22 = 22387;

        var feejan23 = 19456;
        var feefeb23 = 16845;
        var feemar23 = 21093;
        var feeapr23 = 18267;
        var feemay23 = 15642;
        var feejun23 = 20175;
        var feejul23 = 17839;
        var feeogs23 = 24361;
        var feesep23 = 19752;
        var feeoct23 = 16438;
        var feenov23 = 23176;
        var feedec23 = 19845;

        var feejan24 = 21356;
        var feefeb24 = 18734;
        var feemar24 = 24586;
        var feeapr24 = 16987;
        var feemay24 = 20432;
        var feejun24 = 19875;
        var feejul24 = 17543;
        var feeogs24 = 23678;
        var feesep24 = 20156;
        var feeoct24 = 18932;
        var feenov24 = 22345;
        var feedec24 = 21765;

        var feejan25 = 22987;
        var feefeb25 = 19876;
        var feemar25 = 24123;
        var feeapr25 = 20453;
        var feemay25 = 23789;
        var feejun25 = 21654;
        var feejul25 = 19234;
        var feeogs25 = 24987;
        var feesep25 = 22345;
        var feeoct25 = 20876;
        var feenov25 = 23456;
        var feedec25 = 21987;

        // Dummy data for teacher allowances
        var alwjan22 = 13724;
        var alwfeb22 = 6269;
        var alwmar22 = 7056;
        var alwapr22 = 14661;
        var alwmay22 = 13063;
        var alwjun22 = 8686;
        var alwjul22 = 10165;
        var alwogs22 = 11046;
        var alwsep22 = 14948;
        var alwoct22 = 7011;
        var alwnov22 = 9543;
        var alwdec22 = 12657;

        var alwjan23 = 9876;
        var alwfeb23 = 7654;
        var alwmar23 = 12345;
        var alwapr23 = 8765;
        var alwmay23 = 11234;
        var alwjun23 = 9876;
        var alwjul23 = 10987;
        var alwogs23 = 12456;
        var alwsep23 = 9876;
        var alwoct23 = 11234;
        var alwnov23 = 13456;
        var alwdec23 = 10987;

        var alwjan24 = 11235;
        var alwfeb24 = 9845;
        var alwmar24 = 13564;
        var alwapr24 = 10987;
        var alwmay24 = 12687;
        var alwjun24 = 11235;
        var alwjul24 = 9845;
        var alwogs24 = 14567;
        var alwsep24 = 11235;
        var alwoct24 = 13456;
        var alwnov24 = 12345;
        var alwdec24 = 10987;

        var alwjan25 = 12567;
        var alwfeb25 = 10987;
        var alwmar25 = 14567;
        var alwapr25 = 11987;
        var alwmay25 = 13645;
        var alwjun25 = 12345;
        var alwjul25 = 10987;
        var alwogs25 = 15678;
        var alwsep25 = 12876;
        var alwoct25 = 14321;
        var alwnov25 = 13456;
        var alwdec25 = 12345;

        // Define the chart data and options
        var chartData = {
            labels: ['Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November','Disember'],
            datasets: [{
                backgroundColor: 'rgba(0,0,255,1.0)',
                borderColor: 'rgba(0,0,255,0.1)',
                data: [],
                label: 'Jumlah Yuran(RM)',
            }, {
                backgroundColor: 'rgba(255, 99, 71, 1)',
                borderColor: 'rgba(255, 108, 49, 0.3)',
                data: [],
                label: 'Jumlah Elaun(RM)',
            }]
        };

        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: true,
            },
            scales: {
                yAxes: [{ ticks: { min: 0, max: 50000 } }],
                xAxes: [{
                    ticks: {
                        maxRotation: 45,
                        minRotation: 45
                    },
                    categoryPercentage: 0.5, // Adjust this value to increase space between groups
                    barPercentage: 0.5       // Adjust this value to control the bar width
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'end',
                    color: 'black',
                    font: {
                        weight: 'bold'
                    },
                    formatter: function(value, context) {
                        return 'RM' + value;
                    },
                    display: function(context) {
                        return window.innerWidth >= 768; // Hide labels on screens smaller than 768px
                    }
                }
            }
        };

        // Create an empty chart instance
        var chart = new Chart(document.getElementById('myChart'), {
            type: 'bar', // Change this line to 'bar'
            data: chartData,
            options: chartOptions,
            plugins: [ChartDataLabels] // Add this line to enable the datalabels plugin
        });

        // Function to update the chart based on the selected year
        function updateChart() {
            var selectedYear = document.getElementById('yearSelect').value;
            var feeData = [];
            var allowanceData = [];

            // Retrieve the data for the selected year
            switch (selectedYear) {
                case '2022':
                    feeData = [feejan22,feefeb22,feemar22, feeapr22, feemay22, feejun22, feejul22, feeogs22, feesep22, feeoct22, feenov22, feedec22];
                    allowanceData = [alwjan22,alwfeb22,alwmar22, alwapr22, alwmay22, alwjun22, alwjul22, alwogs22, alwsep22, alwoct22, alwnov22, alwdec22];
                    break;
                case '2023':
                    feeData =[feejan23,feefeb23,feemar23,feeapr23,feemay23,feejun23,feejul23,feeogs23,feesep23,feeoct23,feenov23,feedec23];
                    allowanceData =[alwjan23,alwfeb23,alwmar23,alwapr23,alwmay23,alwjun23,alwjul23,alwogs23,alwsep23,alwoct23,alwnov23,alwdec23];
                    break;
                case '2024':
                    feeData = [feejan24,feefeb24,feemar24, feeapr24, feemay24, feejun24,feejul24,feeogs24,feesep24,feeoct24,feenov24,feedec24];
                    allowanceData = [alwjan24,alwfeb24,alwmar24, alwapr24, alwmay24, alwjun24,alwjul24,alwogs24,alwsep24,alwoct24,alwnov24,alwdec24];
                    break;
                case '2025':
                    feeData = [feejan25,feefeb25,feemar25,feeapr25,feemay25,feejun25,feejul25,feeogs25,feesep25,feeoct25,feenov25,feedec25];
                    allowanceData = [alwjan25,alwfeb25,alwmar25,alwapr25,alwmay25,alwjun25,alwjul25,alwogs25,alwsep25,alwoct25,alwnov25,alwdec25];
                    break;
                default:
                    // Default to 2024 if no year selected
                    feeData = [feejan24,feefeb24,feemar24, feeapr24, feemay24, feejun24,feejul24,feeogs24,feesep24,feeoct24,feenov24,feedec24];
                    allowanceData = [alwjan24,alwfeb24,alwmar24, alwapr24, alwmay24, alwjun24,alwjul24,alwogs24,alwsep24,alwoct24,alwnov24,alwdec24];
                    break;
            }

            // Update the chart data
            chart.data.datasets[0].data = feeData;
            chart.data.datasets[1].data = allowanceData;
            chart.update();
        }

        // Initialize the chart with data from 2024 on page load
        window.onload = function() {
            document.getElementById('yearSelect').value = '2024';
            updateChart();
        };
    </script>

</div>
