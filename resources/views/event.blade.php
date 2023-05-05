<x-layout.layout>
<div class="col-12 d-flex justify-content-center">
    <div class="p-5 col-10 bg-light text-center">
        <h1>Occasion: {{$occasion->name}}</h1>
        <table class="table mt-5 table-secondary">
            <thead>
            <tr>
                <th scope="col">Occasion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td><a href={{url("/event/$event->id/places")}}>{{$event->name}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-layout.layout>
