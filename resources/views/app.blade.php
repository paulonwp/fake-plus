@extends('common::framework')

@section('angular-styles')
    {{-- angular styles begin --}}
    <link rel="stylesheet" href="client/styles.ca5e0b1a48b7d2b7d055.css" media="print" onload="this.media=&apos;all&apos;">
    <link rel="stylesheet" href="client/styles.ca5e0b1a48b7d2b7d055.css">
    {{-- angular styles end --}}
@endsection

@section('angular-scripts')
    {{-- angular scripts begin --}}
    <script>
        setTimeout(function() {
            var spinner = document.querySelector('.global-spinner');
            if (spinner) spinner.style.display = 'flex';
        }, 50);
    </script>
    <script src="client/runtime.f2d1a1fe20df3870e292.js" defer></script>
    <script src="client/polyfills.e85190139dc8f6acda60.js" defer></script>
    <script src="client/main.2f956a11ab3586a59232.js" defer></script>
    {{-- angular scripts end --}}
@endsection
