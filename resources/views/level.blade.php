@extends('layout')

@section('content')
<h1>CRUD LEVEL</h1>

@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif


<form method="POST" action="{{route('store.level')}}">
    @csrf
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="">Level</label>
                <input type="number" class="form-control" name="level" placeholder="Level">
                @error('level')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="">Score</label>
                <input type="number" class="form-control" placeholder="score" name="score_range">
                @error('score_range')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
    </div>

    <button class="btn btn-primary">Submit</button>
</form>

<hr>
<div class="row">
    @foreach ($levels as $level)
    <div class="col-xs-3">
        <div class="card">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-star" style="margin-top: 20px"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Level : {{$level->level}}</span>
                    <span class="info-box-number">Score : {{$level->score_range}}</span>

                    <form action="{{route('delete.level',$level->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="label label-danger label-as-badge">Delete</button>
                    </form>

                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection