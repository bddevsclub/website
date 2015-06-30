@extends('master')

@section('body')
    <div class="container">
        <div class="col-md-offset-1 col-md-7">
            <h4><a href="{{ route('webinar.show', [$last_webinar->id])  }}">{{ $last_webinar->title }}</a></h4>
            {!! $last_webinar->video_embed !!} <br/><br/>
            <hr/>
            <strong>{{ date('Y-m-d H:i', strtotime($last_webinar->date_time))  }}</strong><br/>
            {{ $last_webinar->description }} <br/><br/>
            <hr/>
        </div>


        <div class="col-md-4">
            <h4>{{ trans_choice('models.fbgroup',2) }}:</h4>
            <ul>
                @foreach($groups as $group)
                    <li><a target="_blank" href="{{ $group->url }}">{{ $group->name }}</a></li>
                @endforeach
            </ul>


            <h4>{{ trans('texts.upcoming', ['session' => trans_choice('models.webinar',2)])}}:</h4>

            @if($next_webinars)
                <ul>
                    @foreach($next_webinars as $event)
                        <li><a href="{{ route('webinar.show', [$event->id])  }}">{{ $event->title }}</a>
                            ({{ date('M d', strtotime($event->date_time))  }})</li>

                    @endforeach
                </ul>
            @else
                {{ trans('texts.no_upcoming', ['session' => trans_choice('models.webinar',2)])}}
            @endif

        </div>

    </div>


@endsection