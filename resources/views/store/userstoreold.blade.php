@extends('layout')

<div  class="container">
 @section('content')

 <div class='row'>

  
<?php $arraycount = count($username)?>

 <!--output the username choices-->
@foreach($username as $usr)

<!--<p> {{{$usr}}}</p>-->

<p>
<div class="alert alert-success">
@foreach(explode("%", $usr) as $usr1)
{{$usr1}}<br/>
@endforeach
</p>
</div>
@endforeach

</div>



</div>
 @endsection