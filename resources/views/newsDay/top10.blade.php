@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Country</th>
                <th>Mentions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mentions as $country => $amount)
                <tr>
                    {{--{{ dd($countries) }}--}}
                    <td>{{ $countries[$country]["name"][0] }}</td>
                    <td>{{ $amount }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection