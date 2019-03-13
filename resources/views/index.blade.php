@extends('layouts._layout')
@section('content')
<a href="{{ route('banner.index', ['banner_id' => $banner[0]->id ]) }}">
    <div id="banner">
        <p><h2>{{ $banner[0]->text }}</h2></p>
    </div>
</a>
@endsection