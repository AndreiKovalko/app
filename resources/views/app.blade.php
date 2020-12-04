@extends('common::framework')

@section('angular-styles')
    {{--angular styles begin--}}
		<link rel="stylesheet" href="client/styles.ce15eaef741386f4e52c.css">
	{{--angular styles end--}}
@endsection

@section('angular-scripts')
    {{--angular scripts begin--}}
		<script>
        setTimeout(function() {
            var spinner = document.querySelector('.global-spinner');
            if (spinner) spinner.style.display = 'flex';
        }, 50);
    </script>
		<script src="client/runtime-es2015.c4aa295937818f1dbc9a.js" type="module"></script>
		<script src="client/runtime-es5.c4aa295937818f1dbc9a.js" nomodule="" defer></script>
		<script src="client/polyfills-es5.b2122b634160e5de32d8.js" nomodule="" defer></script>
		<script src="client/polyfills-es2015.5e276e3a1eeb91bd1927.js" type="module"></script>
		<script src="client/main-es2015.eb6cefba1f2e8427910d.js" type="module"></script>
		<script src="client/main-es5.eb6cefba1f2e8427910d.js" nomodule="" defer></script>
	{{--angular scripts end--}}
@endsection
