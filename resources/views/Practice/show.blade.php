@extends('layout/main')

@section('contents')
<div class="row col-md-12">
<div class="col-md-6 col-md-offset-3">
<h1>{{$cards[0]->CardName}}</h1>

<ul class="list-group">
@foreach($card as $note)
@foreach($note as $notes=>$key)
<li class="list-group-item">{{$key}}</li>
@endforeach
@endforeach
</ul>
<hr>
<form method="post" action="{{URL::Route('addnote')}}">
    <div class="form-group">
    <h3 class="glyphicon glyphicon-plus">Add Notes</h3>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $id }}">
        
    <textarea class="form-control" name='body'></textarea>
    </div><br>
   <div class="form-group col-md-2">
        <input type="submit"class="form-control btn-success" value='Submit'>
    
   </div>
</form>
</div>
</div>
@stop




