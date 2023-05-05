<x-layout.layout>

    <div class="col-12 d-flex justify-content-center">
        <div class="p-5 col-10 bg-light">
            <h1>{{$event->name}}</h1>
            <h1>Book: {{$place}} place</h1>
            <form class="col-6" action="{{url('/event/booking')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="mb-2">Phone number</label>
                    <input type="text" class="form-control" name="number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="mb-2">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                    <input type="hidden" name="event_id" value="{{$event->id}}">
                    <input type="hidden" name="place_number" value="{{$place}}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>

</x-layout.layout>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>
