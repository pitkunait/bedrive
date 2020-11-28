@extends('common::framework')

@section('progressive-app-tags')
	<link rel="manifest" href="client/manifest.json">
	<meta name="theme-color" content="#1976d2">
@endsection

@section('angular-styles')
    {{--angular styles begin--}}
		<link rel="stylesheet" href="client/styles.ad79e8d05c75455030dd.css">
	{{--angular styles end--}}
@endsection

@section('angular-scripts')
    {{--angular scripts begin--}}
		<script src="client/runtime-es2015.079d2104455a7fd227c6.js" type="module"></script>
		<script src="client/runtime-es5.079d2104455a7fd227c6.js" nomodule defer></script>
		<script src="client/polyfills-es5.fcf14f22db72d103a477.js" nomodule defer></script>
		<script src="client/polyfills-es2015.cf8a40a25e05e5019c0d.js" type="module"></script>
		<script src="client/main-es2015.ad03a1dd0f3781611ef9.js" type="module"></script>
		<script src="client/main-es5.ad03a1dd0f3781611ef9.js" nomodule defer></script>
	{{--angular scripts end--}}
@endsection
