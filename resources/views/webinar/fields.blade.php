@section('header')
    <script type="text/javascript" src="/static/datetimepicker/jquery.datetimepicker.js">
    </script>

    <link rel="stylesheet" href="/static/datetimepicker/jquery.datetimepicker.css"/>
@endsection


            <!-- Title -->
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Title', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            <span class="help-block text-danger">
                    {{ $errors -> first('title') }}
                </span>
        </div>
    </div>


    <!-- Date Time -->
    <div class="form-group{{ $errors->has('date_time') ? ' has-error' : '' }}">
        {!! Form::label('date_time', 'Scheduled Date Time', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('date_time', null, ['class' => 'form-control']) !!}
            <span class="help-block text-danger">
                    {{ $errors -> first('date_time') }}
                </span>
        </div>
    </div>


    <!-- Video Embed -->
    <div class="form-group{{ $errors->has('video_embed') ? ' has-error' : '' }}">
        {!! Form::label('video_embed', 'Video Embed Code', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('video_embed', null, ['class' => 'form-control']) !!}
            <span class="help-block text-danger">
                    {{ $errors -> first('video_embed') }}
                </span>
        </div>
    </div>

    <!-- Description -->
    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        {!! Form::label('description', 'Description', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            <span class="help-block text-danger">
                    {{ $errors -> first('description') }}
                </span>
        </div>
    </div>




