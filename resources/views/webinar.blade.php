@extends('master')

@section('body')
    <div class="container">
        <div class="col-md-offset-1 col-md-7">
            <h4>{{ $webinar->title }}</h4>
            <hr/>
            {!! $webinar->video_embed !!} <br/><br/>

            {{  $webinar->description }} <br/><br/>

            <hr/>
            <br/><br/>

            <div class="disqus">
                <div id="disqus_thread"></div>
                <script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES * * */
                    var disqus_shortname = 'bddevsclub';

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function () {
                        var dsq = document.createElement('script');
                        dsq.type = 'text/javascript';
                        dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript"
                                                                  rel="nofollow">comments
                        powered by Disqus.</a></noscript>
            </div>

        </div>


    </div>

@endsection