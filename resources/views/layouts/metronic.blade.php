<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
	<head>
		<meta charset="utf-8" />

		{{-- Title Section --}}
		<title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

		{{-- Meta Data --}}
		<meta name="description" content="@yield('page_description', $page_description ?? '')"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		{{-- Favicon --}}
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

		{{-- Fonts --}}
		{{ Metronic::getGoogleFontsInclude() }}

		{{-- Global Theme Styles (used by all pages) --}}
		@foreach(config('layout.resources.css') as $style)
			<link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
		@endforeach

		{{-- Layout Themes (used by all pages) --}}
		@foreach (Metronic::initThemes() as $theme)
			<link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
		@endforeach

		<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />

		{{-- Includable CSS --}}
		@yield('styles')
	</head>
	<body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>
		@if (config('layout.page-loader.type') != '')
			@include('layout.partials._page-loader')
		@endif

		@include('layouts.base._layout')

		<script>var HOST_URL = "{{ route('quick-search') }}";</script>

		{{-- Global Config (global config for global JS scripts) --}}
		<script>
			var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
		</script>

		{{-- Global Theme JS Bundle (used by all pages)  --}}
		@foreach(config('layout.resources.js') as $script)
			<script src="{{ asset($script) }}" type="text/javascript"></script>
		@endforeach

		{{-- DataTables Scripts --}}
		<script src="{{ mix('js/app.js') }}"></script>
		<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

		{{-- Includable JS --}}
		@yield('scripts')
	</body>
</html>