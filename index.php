<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vamos mudar portugal</title>
        <meta name="description" content="">
        <meta name="author" content="ink, cookbook, recipes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- Place favicon.ico and apple-touch-icon(s) here  -->


        <!-- load Ink's css from the cdn -->
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.1/css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.1/css/font-awesome.min.css">

        <!-- load Ink's css for IE8 -->
        <!--[if lt IE 9 ]>
            <link rel="stylesheet" href="http://cdn.ink.sapo.pt/3.1.1/css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <![endif]-->

        <!-- test browser flexbox support and load legacy grid if unsupported -->
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.1/js/modernizr.js"></script>
        <script type="text/javascript">
            //if (window.location.protocol != "https:")
            //    window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);
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

            article header{
                padding: 0;
                overflow: hidden;
            }

            article footer {
                background: none;
            }

            article {
                padding-bottom: 2em;
                border-bottom: 1px solid #ccc;
            }

            .date {
                float: right;
            }

            summary {
                font-weight: 700;
                line-height: 1.5;
            }

            footer {
                background: #ccc;
            }
        </style>
    </head>

    <body>

        <div class="ink-grid">


            <!-- Add your site or application content here -->

            <header class="clearfix vertical-padding">

                <h1 class="logo xlarge-push-left large-push-left">
                    Vamos mudar Portugal<small>e podes ajudar a discutir como?</small>
                </h1>

            </header>

            <section class="column-group gutters article push-left">
                <div class="xlarge-70 large-70 medium-60 small-100 tiny-100">
                    <article>
                        <header>
                            <h1 class="push-left">Como discutir?</h1>
                        </header>
                        <summary>O que começa com uma revolta por situações alheias, é agora a minha causa.</summary>
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

                    </article>
                </div>
            </section>
            <section class="xlarge-30 large-30 medium-40 small-100 tiny-100 push-right">
                <h2>Projectos Amigos</h2>
                <ul class="unstyled">
                    <li class="column-group half-gutters">
                        <div class="all-60 small-50 tiny-50"></div>
                    </li>

                </ul>
            </section>
        </div>
        <footer class="clearfix">
            <div class="ink-grid">
                <ul class="unstyled inline half-vertical-space">
                    <li class="active"><a href="https://vamosmudarportugal.org/#comment-1889946659">About</a></li>
                </ul>
                <p class="note">Vamosmudarportugal.org o site que tu podes fazer mudar. :)</p>
            </div>
        </footer>
    </body>
    <!--
Em nome da transparência! ;)
<?php
echo file_get_contents('/home/vamosmudarportugal_org/public_html/git.txt');
?>
-->
</html>
