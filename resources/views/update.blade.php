@extends('master')

@section('content')




    <div class="row list-group-item">

        <form method="POST" action="/update/{{$page->id}}/{{$noteid}} ">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name = "text" class="form-control" placeholder="Update {{$notetext}}  . . ."><br>
                <span class="input-group-btn">
            <button class="btn btn-default" type="submit">update</button>
          </span>
            </div>
        </form>
    </div>

@stop