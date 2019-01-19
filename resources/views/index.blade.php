@extends('layouts.master')

{{-- Setting yield --}}
@section('site-title', 'Sample Site')

{{-- Add at <head>  --}}
@section('include_head')
	@parent

@endsection

{{-- Add at <header> --}}
@section('header_content')
	@parent
	
@endsection

{{-- Add at <main> --}}
@section('main_content')
	@parent
	<div id="testabc"></div>
@endsection

{{-- Add at <footer> --}}
@section('footer_content')
	@parent
	
@endsection

{{-- Add at <body> --}}
@section('include_script')
	@parent
	@include('core-ajax.system')
	<script>
		$(function() {
			var ajax = new System();
			ajax.done_func = function(response) {
    			System.message_success('Test.',function(){
    				$('#testabc').html(response.html);
    				$('#testabc').css('background-color','yellow');
    			});
    			//console.log(html);
	    	};
	    	ajax.connect("POST","/test",{
	            		"m_category_id": 11111  
		    },false);
			
		});
	</script>
@endsection