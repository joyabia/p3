@extends('layout')


 @section('content')

 <div class='row'>

 

 <?php
// require the Faker autoloader
require_once 'vendor\fzaninotto\faker\src\autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)
 
// use the factory to create a Faker\Generator instance
	
 $faker = Faker\Factory::create();

 ?>

 @for ($i = 1; $i <=$users; $i++)
<div class="panel panel-default">
<div class="panel-body">
 <strong>Username: </strong><?php echo $faker->name; ?><br/>

@if(Input::has('address'))
 <strong>Address: </strong><?php  echo $faker->address; ?><br/>
 @endif

 @if(Input::has('profile'))
<strong>Profile:  </strong><?php echo $faker->text; ?><br/>
@endif
</div>
</div>
@endfor

</div>
 @endsection