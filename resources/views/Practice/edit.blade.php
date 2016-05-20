
@extends('layout/main')

@section('contents')
<?php 
echo $update;

?>

<hr>
<form method="post" action="{{URL::Route('addnote')}}">
    <div class="form-group">
    <h3 class="glyphicon glyphicon-plus">EDIT NOTE</h3>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $id }}">
        
    <textarea class="form-control" name='body'></textarea>
    </div><br>
   <div class="form-group col-md-2">
        <input type="submit"class="form-control btn-success" value='EDIT NOTES'>
    
   </div>
</form>

@stop