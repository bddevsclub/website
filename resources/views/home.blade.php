@extends('master')

@section('body')
    <div class="container">
        <div class="col-md-offset-1 col-md-7">
            <h4><a href="">{{ $last_webinar->title }}</a></h4>
            {!! $last_webinar->video_embed !!} <br/><br/>
            <hr/>
            <strong>{{ date('Y-m-d H:i', strtotime($last_webinar->date_time))  }}</strong><br/>
            {{ $last_webinar->description }} <br/><br/>
            <hr/>

        </div>


        <div class="col-md-4">
            <h4>Facebook Groups:</h4>
            <ul>
                @foreach($groups as $group)
                    <li><a target="_blank" href="{{ $group->url }}">{{ $group->name }}</a></li>
                @endforeach
            </ul>


            <h4>Coming Sessions:</h4>

            @if($next_webinars)
                <ul>
                    @foreach($next_webinars as $event)
                        <li><a href="{% url 'webinar_view' event.id %}">{{ $event->title }}</a></li>

                    @endforeach
                </ul>
            @else
                No upcoming sessions!
            @endif

        </div>

    </div>


@endsection