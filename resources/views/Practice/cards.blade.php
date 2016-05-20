@extends('layout/main')

@section('contents')
<div class="row">
<h1 class="col-md-6 col-md-offset-3">My ALL CARDS</h1>
<div class='col-md-6 col-md-offset-3 list-group'>
@foreach($User as $record)


<p class='list-group-item'><a href="cards/{{ $record->idcards }}">{{ $record->CardName }}</a><br/></p>



@endforeach
</div>
</div>
<!--@foreach($User as $Users)
@foreach($Users as $x=>$values)

<div> <a href='{{"Practice/cards"}}'>{{$values}}</a></div>

@endforeach
@endforeach-->
@stop