@extends('layout')

@section('content')
<h1>EDIT CARD</h1>

<form enctype="multipart/form-data" action="{{route('update.card',$card->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-3">
            <label for="">Lat</label>
            <input type="text" value="{{$card->lat}}" name="lat" class="form-control" placeholder="Lat">
            @error('lat')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-xs-3">
            <label for="">Lng</label>
            <input type="text" value="{{$card->lng}}" name="lng" class="form-control" placeholder="Lng">
            @error('lng')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-xs-3">
            <label for="">Level</label>
            <select name="level_id" class="form-control">
                <option disabled>Level</option>
                @foreach ($levels as $item)
                <option value="{{$item->id}}" {{$card->level_id == $item->id ? 'selected' : ''}}>{{$item->level}}
                </option>
                @endforeach
            </select>
            @error('level_id')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-xs-3">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="1" {{$card->status == 1 ? 'selected' : ''}}>Active</option>
                <option value="0" {{$card->status == 0 ? 'selected' : ''}}>Hide</option>
            </select>
            @error('status')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="">Card Name</label>
                <input type="text" value="{{$card->cardName}}" class="form-control" name="cardName" placeholder="Name">
                @error('cardName')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image">
                @error('image')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
    </div>

    <button class="btn btn-primary">Submit</button>
</form>
@endsection