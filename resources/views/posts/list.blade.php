<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            a {
                color: #0178ff;
            }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-lg-12 justify-content-center">
                            <h1>
                                Posts
                            </h1>
                            <p>
                                <a href="/posts/new">Create post</a>
                            </p>
                        </div>
                    </div>

                    <div class="row pb-3">
                        <div class="col-lg-12">
                            <pre>{{ $posts }}</pre>
                        </div>
                    </div>
                </div>

                <div class="links">
                    <a href="/queues">Queue tutorial</a>
                    <a href="/hello">Hello</a>
                    <a href="/posts/new">Database Tutorial</a>
                    <a href="https://docs.amezmo.com">Amezmo Docs</a>
                </div>
            </div>
        </div>
    </body>
</html>
