@section('header')
    <link rel="stylesheet" href="/static/datetimepicker/jquery.datetimepicker.css"/>
    <script type="text/javascript" src="/static/datetimepicker/jquery.datetimepicker.js"></script>
    <script>
        $(document).ready(function () {
            $("#date_time").datetimepicker();
        });
    </script>
@endsection

{!! Former::text('webinar_title') !!}
{!! Former::text('webinar_date_time') !!}
{!! Former::textarea('webinar_video_embed')->rows(5) !!}
{!! Former::text('webinar_description') !!}
