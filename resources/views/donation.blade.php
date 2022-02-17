<x-layout>
<div class="don">
    <div class="p-3 mb-3 bg-success text-white text-center">
        <i class="fa fa-search"></i> DONATION CAMPAIGN
    </div>
    <div class="container">
        <div class="d-flex justify-content-end">
            <form action="{{ route('donations.create') }}">
                <button type="submit" class="btn btn-primary mb-3">
                    Donation
                </button>
            </form>
        </div>
    </div>
        @if(!is_null(session('status')) && !empty(session('message')))
            <div class="text-center my-3 alert {{ session('status')
                ? 'alert-success'
                : 'alert-danger' }} alert_message">
                {{ session('message') }}
            </div>
        @endif
        <div class="row justify-content-evenly">
            @foreach($widgetsData as $widgetData)
                <x-widget :widgetData="$widgetData"/>
            @endforeach
        </div>
        <div class="chart">
            <div id="linechart"
                 style="width: 900px; height: 500px; margin-left: 235px">
            </div>
            <script>
                var chartData = {{ Illuminate\Support\Js::from($result) }}
            </script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable(chartData);
                    var options = {
                        hAxis: {
                            format: 'yyyy-MM-dd'
                        },
                        curveType: 'function',
                        legend: {
                            position: 'bottom'
                        }
                    };
                    var chart = new google.visualization.LineChart(
                        document.getElementById('linechart')
                    );
                    chart.draw(data, options);
                }
            </script>
        </div>
        <p class="h3 text-center">Donators</p>
        <div class="donators">
        <x-table :donations="$donations"/>
        </div>
            {{ $donations->links() }}
    </div>
</x-layout>
