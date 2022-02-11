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

            <!-- <div class="col-header">Last month amount: <br> {{ $month }}$ </div>
            <div class="col-header">All time amount: <br> {{ $sum }}$ </div> -->
        </div>
        <div class="chart">
            <h3>Chart</h3>
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

