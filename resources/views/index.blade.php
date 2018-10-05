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
	
@endsection

{{-- Add at <footer> --}}
@section('footer_content')
	@parent
	
@endsection

{{-- Add at <body> --}}
@section('include_script')
	@parent

@endsection