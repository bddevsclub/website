@section('header')
    <link rel="stylesheet" href="/static/datetimepicker/jquery.datetimepicker.css"/>
    <script type="text/javascript" src="/static/datetimepicker/jquery.datetimepicker.js"></script>
    <script>
        $(document).ready(function () {
            $("#date_time").datetimepicker();
        });
    </script>
@endsection

{!! Former::text('title') !!}
{!! Former::text('date_time') !!}
{!! Former::textarea('video_embed')->rows(5) !!}
{!! Former::text('description') !!}
