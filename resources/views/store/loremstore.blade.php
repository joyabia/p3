
@extends('layout')


 @section('content')

 <div class='row'>
	


<div class="panel panel-default">
<div class="panel-body">
<?php //$paragraphs = $generator->getParagraphs(1);
echo implode('<p>', $userparagraph); ?>
</div>
</div>



</div>
 @endsection
