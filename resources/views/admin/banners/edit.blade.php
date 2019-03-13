@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <hr/>
        <form class="form-horizontal" action="{{route('admin.banner.update', $banner)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}


            @include('admin.banners.partials.form')
        </form>

    </div>

@endsection