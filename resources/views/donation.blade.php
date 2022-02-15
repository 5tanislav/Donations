<x-layout>
    <div class="don">
        <div class="button">
            <form action="{{ route('donations.create') }}">
                <p><input class="btn" type="Submit" value="Donate"></p>
            </form>
        </div>
        @if(!is_null(session('status')) && !empty(session('message')))
            <div class="alert {{ session('status')
                ? 'alert-success'
                : 'alert-danger' }} alert_message">
                {{ session('message') }}
            </div>
        @endif
        <div class="cards">
            <h3>Cards</h3>
        </div>
        <div class="row">
            @foreach($widgetsData as $widgetData)
                <x-widget :widgetData="$widgetData"/>
            @endforeach
        </div>
        <div class="chart">
            <h3>Chart</h3>
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
        <div class="donators_table">
            <h3>Donators</h3>
        </div>
        <div class="donators">
        <x-table :donations="$donations"/>
        </div>
            {{ $donations->links() }}
    </div>
</x-layout>
