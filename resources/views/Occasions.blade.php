<x-layout.layout>
<div class="col-12 d-flex justify-content-center">
    <div class="p-5 col-10 bg-light text-center">
        <h1>Occasions</h1>
        <table class="table mt-5 table-secondary">
            <thead>
            <tr>
                <th scope="col">Occasion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($occasions as $occasion)
            <tr>
                <td><a href="{{url('event/'.$occasion->id)}}">{{$occasion->name}}</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-layout.layout>
