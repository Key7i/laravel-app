@extends('layouts.app')

@section('title')
    <div class="col-sm">
        <div class="probootstrap-text">
            <h1 class="probootstrap-heading text-white mb-4">{{$title}}</h1>
            <div class="probootstrap-subheading mb-5">
                <p class="h4 font-weight-normal">{{$subtitle}}</p>
            </div>
        </div>
    </div>
@endsection
@section('content')
    {!!$body!!}
@endsection