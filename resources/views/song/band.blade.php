@extends('layouts.main')

@section('title', 'Band New Song')

@section('content')

    @if($band == 'POTATO')
        <h2>Band :: {{ $band }}</h2>
        <h3>Song :: {!! $song !!}</h3>
    @else
        No Band And Song
    @endif

    @php
        echo rand(1,20);
    @endphp

@endsection

{{--@for($i=0; $i < 10; $i++)--}}
    {{--{{ $i }}--}}
{{--@endfor--}}

{{--<?php--}}
{{--if(isset($band)){--}}
    {{--echo $band;--}}
{{--}--}}
{{--?>--}}

{{--full--}}
{{--{{ isset($band) ? $band : 'Default' }}--}}

{{--short--}}
{{--{{ $name or 'Default' }}--}}