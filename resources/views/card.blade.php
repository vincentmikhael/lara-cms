@extends('layout')

@section('content')
<h1>CRUD CARD</h1>

@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

<form enctype="multipart/form-data" action="{{route('store.card')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-3">
            <label for="">Lat</label>
            <input type="text" name="lat" class="form-control" placeholder="Lat">
            @error('lat')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-xs-3">
            <label for="">Lng</label>
            <input type="text" name="lng" class="form-control" placeholder="Lng">
            @error('lng')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-xs-3">
            <label for="">Level</label>
            <select name="level_id" class="form-control">
                <option selected disabled>Level</option>
                @foreach ($levels as $item)
                <option value="{{$item->id}}">{{$item->level}}</option>
                @endforeach
            </select>
            @error('level_id')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-xs-3">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option selected value="1">Active</option>
                <option value="0">Hide</option>
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
                <input type="text" class="form-control" name="cardName" placeholder="Name">
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

<hr>

<div class="row">
    @foreach ($cards as $item)
    <div class="col-md-4">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">{{$item->cardName}}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
                <img class="img-responsive" style="height: 180px; width: 100%; object-fit: cover;"
                    src="{{asset('storage/'.$item->display_image)}}" alt="">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Lat</td>
                            <td>{{$item->lat}}</td>

                        </tr>
                        <tr>
                            <td>Lng</td>
                            <td>{{$item->lng}}</td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td>{{$item->level->level}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                @if ($item->status == 1)
                                <div class="label label-success label-as-badge">Active</div>
                                @else
                                <div class="label label-danger label-as-badge">Hide</div>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="display: flex; align-items: center;">
                    <a href="{{route('edit.card',$item->id)}}" style="margin-top: -14px">
                        <div class="label label-warning label-as-badge" style="margin-right: 5px">Edit</div>
                    </a>
                    <form action="{{route('delete.card')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <input type="hidden" name="image" value="{{$item->display_image}}">
                        <button type="submit" class="label label-danger label-as-badge">Delete</button>
                    </form>

                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    @endforeach
</div>
@endsection