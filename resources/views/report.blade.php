@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-5">
                <form action="{{route('report')}}" method="get" class="mt-4 mb-2">
                    <div class="input-group">
                        <input type="number" name="search" id="search" value="{{$search}}" class="form-control rounded-start" placeholder="Search Driver ID" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </div>
            <div class="col-3 mt-4 mb-2">
                <a href="{{route('home')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Driver ID</th>
                        <th scope="col">Payable Time (minutes)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($drivers as $driver)
                        <tr>
                            <td>{{$driver->driver_id}}</td>
                            <td>{{$driver->time}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{$drivers->links()}}
            </div>
        </div>
    </div>
@endsection
