
	

@extends('layout')


 @section('content')
<div  class="container">
 <div class='row'>

  
<?php $arraycount = count($username)?>

 <!--output the username choices-->
@foreach($username as $usr)


<div class="alert alert-success">
<p>
@foreach(explode("%", $usr) as $usr1)
{{$usr1}}<br/>
@endforeach
</p>
</div>
@endforeach

</div>
</div>



 @endsection
