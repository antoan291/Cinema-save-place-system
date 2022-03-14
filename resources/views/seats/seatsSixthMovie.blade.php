@extends('layouts.app')

@section('content')


<div class="container">
<div style="margin-top:30px;margin-right:20px; " class="row pt-5 pb-4">


<div style="margin-left:64px;"  class="row pt-2 pb-1 ">
    <div style="display: flex;">

4 Ред
@foreach (range(1, 12) as $item)
@if(App\Models\SeatsSecondMovie::find($item))


<form  method="post" action="{{ route('sixthMovie.destroy',  $item) }}">
        @csrf
        @method('delete')
        <!-- <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/> -->
        <input type="hidden" name="id" value="{{ $item }}"/>
        <input type="hidden" name="row_seats" value="4"/>
        <input type="hidden" name="seat_id" value="{{ $item }}"/>
        <input type="hidden" name="project" value="6"/>
        <button type="submit"   style="margin-left:10px; width:80px; display:inline;"  class="btn btn-danger">{{$item}}</button>


    </form>

            @else
      
        <form  method="post" action="/sixthMovie">
   
        @csrf 
        <!-- <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/> -->
        <input type="hidden" name="id" value="{{ $item }}"/>
            <input type="hidden" name="row_seats" value="4"/>
            <input type="hidden" name="seat_id" value="{{  $item }}"/>
            <input type="hidden" name="project" value="6"/>
            <button  type="submit"  style="width:80px; margin-left:10px;"  class="btn btn-success">{{ $item}}</button>
            
            
 
        </form> 

        @endif
@endforeach
</div>
</div>

<div class="row pt-3 pb-1 ">
    <div style="display: flex;">
        3 Ред
@foreach (range(13, 26) as $item)
        @if(App\Models\SeatsSecondMovie::find($item))
        <form method="post" action="{{ route('sixthMovie.destroy', $item)}}">
        @csrf
        @method('delete')
        <input type="hidden" name="id" value="{{ $item}}"/>
        <input type="hidden" name="row_seats" value="3"/>
        <input type="hidden" name="seat_id" value="{{ $item }}"/>
        <input type="hidden" name="project" value="6"/>
        <button type="submit"  style="width:80px; margin-left:10px;"  class="btn btn-danger">{{$item}}</button>

            </form>


            @else
            <form  method="post" action="/sixthMovie">
        @csrf 
        <input type="hidden" name="id" value="{{ $item}}"/>
            <input type="hidden" name="row_seats" value="3"/>
            <input type="hidden" name="seat_id" value="{{ $item }}"/>
            <input type="hidden" name="project" value="6"/>
            <button type="submit"  style="width:80px; margin-left:10px;"  class="btn btn-success">{{$item}}</button>
            

            </form> 
            @endif
@endforeach
</div>
</div>
<div class="row pt-3 pb-1 ">
    <div style="display: flex;">
2 Ред
@foreach (range(27, 40) as $item)

        @if(App\Models\SeatsSecondMovie::find($item))
        <form method="post" action="{{ route('sixthMovie.destroy', $item) }}">
        @csrf
        @method('delete')
        <input type="hidden" name="id" value="{{ $item}}"/>
            <input type="hidden" name="row_seats" value="2"/>
            <input type="hidden" name="seat_id" value="{{ $item }}"/>
            <input type="hidden" name="project" value="6"/>
        <button type="submit"  style="width:80px; margin-left:10px;"  class="btn btn-danger">{{$item}}</button>

            </form>


            @else
            <form  method="post" action="/sixthMovie">
        @csrf 
        <input type="hidden" name="id" value="{{ $item}}"/>
            <input type="hidden" name="row_seats" value="2"/>
            <input type="hidden" name="seat_id" value="{{ $item }}"/>
            <input type="hidden" name="project" value="6"/>
            <button type="submit"  style="width:80px; margin-left:10px;"  class="btn btn-success">{{$item}}</button>
            

            </form> 
            @endif
@endforeach
</div>
</div>

<div class="row pt-3 pb-1 ">
    <div style="display: flex;">
1 Ред

@foreach (range(41, 54) as $item)

        @if(App\Models\SeatsSecondMovie::find($item))
        <form method="post" action="{{ route('sixthMovie.destroy', $item) }}">
        @csrf
        @method('delete')
        <input type="hidden" name="id" value="{{ $item}}"/>
            <input type="hidden" name="row_seats" value="1"/>
            <input type="hidden" name="seat_id" value="{{ $item }}"/>
            <input type="hidden" name="project" value="6"/>
        <button type="submit"  style="width:80px; margin-left:10px;"  class="btn btn-danger">{{$item}}</button>

            </form>


            @else
            <form  method="post" action="/sixthMovie">
        @csrf 
        <input type="hidden" name="id" value="{{ $item}}"/>
            <input type="hidden" name="row_seats" value="1"/>
            <input type="hidden" name="seat_id" value="{{ $item }}"/>
            <input type="hidden" name="project" value="6"/>
            <button type="submit"  style="width:80px; margin-left:10px;"  class="btn btn-success">{{$item}}</button>
            

            </form> 
            @endif
@endforeach
</div>

</div>
</div>
</div>

    </div>
    <div class="justify-content-center">
    <button style="width:1050px; margin-left:230px;" class="btn btn-dark">Екран</button>
        </div>
</div>
@endsection