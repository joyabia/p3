
@extends('layout')


 @section('content')

 <div class='row'>
	
 <?php
$generator = new Badcow\LoremIpsum\Generator();

?>
@for ($i = 1; $i <=$paragraph; $i++)
<div class="panel panel-default">
<div class="panel-body">
<?php $paragraphs = $generator->getParagraphs(1);
echo implode('<p>', $paragraphs); ?>
</div>
</div>
@endfor


</div>
 @endsection
