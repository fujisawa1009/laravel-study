@extends('layouts.default')

@section('title', '世界の時間')
@section('content')
    <dl>
        @foreach($times as $city => $time)
            <dt>{{ $city }}</dt>
            <dd>{{ $time }}</dd>
        @endforeach
    </dl>
@endsection
