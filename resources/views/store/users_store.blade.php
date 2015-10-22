@extends('layout')

<div  class="container">
 @section('content')

 <div class='row'>

 

 <?php
// require the Faker autoloader

// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)
 
// use the factory to create a Faker\Generator instance
	
 $faker = Faker\Factory::create();

 ?>

 @for ($i = 0; $i <=$users; $i++)
<div class="alert alert-success">
<p>
 <strong>Username: </strong><?php echo $faker->name; ?><br/>

@if(Input::has('address'))
 <strong>Address: </strong><?php  echo $faker->address; ?><br/>
  @endif
 @if(Input::has('profile'))
<strong>Profile:  </strong><?php echo $faker->text; ?><br/>
@endif
</p>
</div>
@endfor

</div>
 @endsection