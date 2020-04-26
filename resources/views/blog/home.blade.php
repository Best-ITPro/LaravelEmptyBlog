@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <img src="/images/LaravelLogo.png" id="index_logo" class="img-thumbnail">
            <br>
            {{ config('app.name') }} ;)
        </div>

        @include('blog.links')

    </div>


@endsection
