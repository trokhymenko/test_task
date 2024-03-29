@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-5">
                <form action="{{route('home')}}" method="get" class="mt-4 mb-2">
                    <div class="input-group">
                        <input type="number" name="search" id="search" value="{{$search}}" class="form-control rounded-start" placeholder="Search Driver ID" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </div>
            <div class="col-3 mt-4 mb-2">
                <a href="{{route('report')}}" class="btn btn-primary">Calculate Payable Time</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Trip ID</th>
                        <th scope="col">Driver ID</th>
                        <th scope="col">Pickup</th>
                        <th scope="col">Dropoff</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trips as $trip)
                        <tr>
                            <td>{{$trip->trip_id}}</td>
                            <td>{{$trip->driver_id}}</td>
                            <td>{{$trip->pickup}}</td>
                            <td>{{$trip->dropoff}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{$trips->links()}}
            </div>
        </div>
    </div>
@endsection
