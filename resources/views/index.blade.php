@extends('layout')

@section('content')

<div class="row">
<div class="col-md-1">
</div>

<!--Users Form -->
<div class="col-md-5" id="users_form">
 {!! Form::open(array('route' => 'userstore', 'class' => 'form')) !!}
<fieldset>
<legend>Generate Users</legend>
 {!! Form::label('How many user accounts do you want to generate (1-10)') !!} 
 {!! Form::text('users', null,
 array('required',
 'class'=>'form-control',
 'placeholder'=>'')) !!}
 <!--Display error is user enters more than 10)-->
 @foreach($errors->all() as $error)
 @if(strpos($error, 'user'))
 <li class="err_message">{{ $error }}</li>
 @endif
 @endforeach

<!--the extra features check buttons-->
<br/>
<p> Add Extra Features</p>
  
 
{!!  Form::checkbox('address', 'value') !!}
 {!! Form::label('address', 'Address') !!}

     {!!  Form::checkbox('profile', 'value') !!}
     {!! Form::label('profile', 'Profile') !!}

{!!  Form::checkbox('password', 'value') !!}
 {!! Form::label('password', 'Generate Password') !!}



<ul>

 </ul>
{!! Form::submit('Submit',
 array('class'=>'btn btn-primary')) !!}
<br/>

</fieldset>

{!! Form::close() !!}

</div>

<div class="col-md-5" id="lorem_form">
{!! Form::open(array('route' => 'loremstore', 'class' => 'form')) !!}
  <fieldset>
  <legend> Lorem Ipsum Text Generator </legend>
 {!! Form::label('how many paragraphs of text do you want to generate (1-10)') !!}
 {!! Form::text('paragraph', null,
 array('required',
 'class'=>'form-control',
 'placeholder'=>'',
 'size'=> 5)) !!}
<br/>


@foreach($errors->all() as $error)
@if(strpos($error, 'paragraph'))
 <li class="err_message">{{ $error }}</li>
 @endif
 @endforeach

<br/>
  <br/>
 <br/>
 {!! Form::submit('Submit',
 array('class'=>'btn btn-primary')) !!}
 </fieldset>

 {!! Form::close() !!}
</div>

<div class="col-md-1">
</div>
</div>
@endsection