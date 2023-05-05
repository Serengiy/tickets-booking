<x-layout.layout>
<div class="col-12 d-flex justify-content-center">
    <div class="p-5 col-10 bg-light text-center d-grid justify-content-center">
        <h1>Event: {{$event->name}}</h1>
        <h1>Total places: {{$total_places}}</h1>
        <div class=" row p-5 bg-info col-12 d-flex gap-2">
            @for($i=1; $i<=$total_places; $i++)
                @if(in_array($i, $places))
                    <div class="btn col-1 btn-danger">{{$i}}</div>
                @else
                    <a href="{{url("event/$event->id/book/$i")}}" class="btn col-1 btn-primary">{{$i}}</a>
                @endif
            @endfor
        </div>
        <div class="row p-5 bg-info col-12 d-flex gap-2">
        </div>
    </div>
</div>
</x-layout.layout>
<script>

</script>
