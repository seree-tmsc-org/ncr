<!doctype html>
<html lang="en">
	<head>
		<?php require_once("include/library.php"); ?>
		
		<!--
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
		-->
		
		<style>
			body {font-family:Arial;}
			h2 {margin:5px;}
			input[type=text] {margin:10px}
			input[type=button] {margin:10px}  
			.containerxx {width: 20%; float:left;clear: right;margin:10px; border-radius: 5px;}
			.sortable1 { list-style-type: none; margin:0; padding:2px; min-height:30px; border-radius: 5px;}
			.sortable1 li { margin: 3px 3px 3px 3px; /*padding: 0.4em;*/ padding-left: 1.5em; /*font-size: 1.4em;*/ height: 18px;}
			.sortable1 li span { position: absolute; margin-left: -1.3em; }

			.card{background-color:white;border-radius:3px;}
		</style>
		
		<!--
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		-->
		
		<script>
			$(function() {
				$( ".sortable1" ).sortable({
					connectWith: ".connectedSortable",
					receive: function( event, ui ) {
					$(this).css({"background-color":"blue"});
					}
				}).disableSelection();

				$('.add-button').click(function() {
					var txtNewItem = $('#new_text').val();
					$(this).closest('div.containerxx').find('ul').append('<li class="card">'+txtNewItem+'</li>');
				});    
			});
		</script>      
	</head>
	
	<body>

		<div>
			<div class="containerxx" style="background-color:pink;">
				<h2>TODO</h2>
				<ul class="sortable1 connectedSortable">
					<li class="card">Activity A1</li>
					<li class="card">Activity A2</li>
					<li class="card">Activity A3</li>
				</ul>
				<div class="link-div">
					<input type="text" id="new_text" value=""/>
					<input type="button" name="btnAddNew" value="Add" class="add-button"/>
				</div>
			</div>

			<div class="containerxx" style="background-color:orange;">
				<h2>In Progress</h2>
				<ul class="sortable1 connectedSortable" >
					<li class="card">Activity B1</li>
					<li class="card">Activity B2</li>
				</ul>
			</div>

			<div class="containerxx" style="background-color:yellow;">
				<h2>Verification</h2>
				<ul class="sortable1 connectedSortable" >
					<li class="card">Activity C1</li>
					<li class="card">Activity C2</li>
				</ul>
			</div>
			
			<div class="containerxx" style="background-color:green;">
				<h2>Done</h2>
				<ul class="sortable1 connectedSortable" >
				</ul>
			</div>
		</div>

	</body>

	
</html>