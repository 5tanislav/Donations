<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">{{$widgetData['title']}}</div>
    <div class="card-body">
    <h5 class="card-title">{{$widgetData['money']}}$</h5>
    <p class="card-text">
        @if (!empty($widgetData['name']))
        {{$widgetData['name']}}
        @endif</p>
    </div>
</div>
