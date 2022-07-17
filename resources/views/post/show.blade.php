@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Event') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                <h1 class="text-capitalize">{{ $post->title }}</h1>
                                <small><time>{{$post->created_at->diffForHumans()}}</time></small>
                                <img src="{{ Voyager::image( $post->image ) }}" class="img-fluid" loading="lazy">
                                <h2 class="mt-3">{{ __('Description') }}</h2>
                                <p>{!! $post->body !!}</p>

                                <h2 class="mt-3 text-capitalize">{{ __('Event date') }}</h2>
                                <p>{{$post->event_date  }} </p>

                                <h2 class="mt-3 text-capitalize">{{ __('Ticket Price') }}</h2>
                                <p>{{$post->ticket_price}} {{ setting('site.currency')  }}</p>

                                <h2 class="mt-3 text-capitalize">{{ __('Performer') }}</h2>
                                <p>{{$post->performer?->name}}</p>

                                <h2 class="mt-3 text-capitalize">{{ __('Location') }}</h2>
                                <p>{{$post->location?->name}}</p>

                                <h2 class="mt-3 text-capitalize">{{ __('Attend for the event') }}</h2>


                                @php
                                    $selected = false;
                                @endphp

                                @foreach($post->atendees as $attendee)

                                    @if($attendee->id == auth()->user()->id)
                                        {{ __('You attended for this event!') }} ✅

                                        @php
                                        $selected = true;
                                        @endphp
                                   @endif


                               @endforeach
                               <form method="post" action="{{ route('ticket-store',$post->slug)}}">
                                   @csrf
                                   <input name='post_id' type="hidden" value="{{$post->id}}">
                                   <fieldset>
                                       <div class="mb-3">
                                           <label for="disabledSelect" class="form-label">{{ __('Please select an option!') }}</label>
                                           <select id="disabledSelect" class="form-select" name="ticket2user">
                                               <option value="1" {{ $selected === true ? "selected" : "" }} >{{ __('Going') }}</option>
                                               <option value="0" {{ $selected === false ? "selected" : "" }}>{{ __('Not intrested') }}</option>
                                           </select>
                                       </div>
                                       <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                   </fieldset>
                               </form>

                           </div>
                       </div>
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
