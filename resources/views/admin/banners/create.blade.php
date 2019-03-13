@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    <hr/>
    <form class="form-horizontal" action="{{route('admin.banner.store')}}" method="post">
        {{ csrf_field() }}
        @include('admin.banners.partials.form')
    </form>
</div>

@endsection