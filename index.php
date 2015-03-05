<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>vamosmudarportugal.org</title>
        <meta name="description" content="">
        <meta name="author" content="ink, cookbook, recipes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- Place favicon.ico and apple-touch-icon(s) here  -->


        <!-- load Ink's css from the cdn -->
        <link rel="stylesheet" type="text/css" href="http://cdn.indk.sapo.pt/3.1.1/css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.1/css/font-awesome.min.css">

        <!-- load Ink's css for IE8 -->
        <!--[if lt IE 9 ]>
            <link rel="stylesheet" href="http://cdn.ink.sapo.pt/3.1.1/css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <![endif]-->

        <!-- test browser flexbox support and load legacy grid if unsupported -->
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.1/js/modernizr.js"></script>
        <script type="text/javascript">
            Modernizr.load({
              test: Modernizr.flexbox,
              nope : 'http://cdn.ink.sapo.pt/3.1.1/css/ink-legacy.min.css'
            });
        </script>

        <!-- load Ink's javascript files from the cdn -->
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.1/js/holder.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.1/js/ink-all.min.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.1/js/autoload.js"></script>


        <style type="text/css">

            body {
                background: #ededed;
            }

            header h1 small:before  {
                content: "|";
                margin: 0 0.5em;
                font-size: 1.6em;
            }

            footer {
                background: #ccc;
            }

        </style>

    </head>

    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=645938285549890&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="ink-grid">

            <!--[if lte IE 9 ]>
            <div class="ink-alert basic" role="alert">
                <button class="ink-dismiss">&times;</button>
                <p>
                    <strong>You are using an outdated Internet Explorer version.</strong>
                    Please <a href="http://browsehappy.com/">upgrade to a modern browser</a> to improve your web experience.
                </p>
            </div>
            -->

            <!-- Add your site or application content here -->

            <header class="vertical-space">
                <h1>Vamos mudar Portugal<small>vamos todos discutir como?</small></h1>
                <div class="fb-like" data-href="http://vamosmudarportugal.org" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
                <nav class="ink-navigation">
                    <ul class="menu horizontal black">
                        <li class="active"><a href="https://vamosmudarportugal.org/#comment-1889946659">Motivações</a></li>

                    </ul>
                </nav>
            </header>
            <div class="column-group gutters">
                <div class="all-100">
                    <h2>Discussões em curso.</h2><h6>As mais votadas, primeiro.</h6>
                </div>
            </div>
            <div class="column-group gutters">
                <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES * * */
                        var disqus_shortname = 'vamosmudarportugal';
                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            </div>
        </div>
        <footer class="clearfix">
            <div class="ink-grid">
                <ul class="unstyled inline half-vertical-space">
                    <li class="active"><a href="https://vamosmudarportugal.org/#comment-1889946659">About</a></li>
                </ul>
                <p class="note">vamosmudarportugal.org 2015.</p>
            </div>
        </footer>
    </body>
</html>
<!--
Em nome da transparência! ;)
<?php
echo file_get_contents('/home/vamosmudarportugal_org/public_html/git.txt');
?>
-->
