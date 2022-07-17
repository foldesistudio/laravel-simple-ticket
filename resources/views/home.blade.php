@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p> {{ __('You are logged in!') }} </p>
                   <p> {{ __('Please select an event!') }} </p>

                    <hr>

                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-md-3">
                                    <a href=" {{ route('post',$post->slug) }}">
                                        <img src="{{ Voyager::image( $post->image ) }}" class="img-thumbnail" loading="lazy">
                                        <span>{{ $post->title }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br><br>

</div>
@endsection
