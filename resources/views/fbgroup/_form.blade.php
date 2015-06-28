<!-- Name Field -->
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Facebook Group Name', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                <span class="help-block text-danger">
                    {{ $errors -> first('name') }}
                </span>
    </div>
</div>

<!-- Name Field -->
<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
    {!! Form::label('url', 'Facebook Group URL', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
                <span class="help-block text-danger">
                    {{ $errors -> first('url') }}
                </span>
    </div>
</div>