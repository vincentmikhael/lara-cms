@extends('layout')

@section('content')
<h1>DATA SCORE</h1>

<table id="table-score" class="table table-bordered">
    <thead>
        <tr>
            <th>User</th>
            <th>Card</th>
            <th>Score</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($scores as $item)
        <tr>
            <td>{{$item->user->email}}</td>
            <td>{{$item->card->cardName}}</td>
            <td>{{$item->score}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection