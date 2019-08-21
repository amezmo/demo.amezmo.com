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
            @include('header')

            <div class="content">
                <h1>
                    Queue tutorial
                </h1>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            @if(session('queue_success'))
                            <div class="alert alert-success">
                                Great! Now go to the Amezmo Dashboard and view the logs for your Queue.
                            </div>
                            @endif
                            <p>
                                This project has a default redis connection queue setup. To setup your queue,
                                make sure you go to Workers > New and provide the following command
                                <code>php /webroot/artisan queue:work redis --sleep=10 --tries=1 -vvv</code>
                            </p>

                            <p>To test your queue, and see the log output, you can hit the following endpoint. This simply
                                dispatches the
                                <a href="https://github.com/amezmo/demo.amezmo.com/blob/master/app/Jobs/TestJob.php">TestJob</a> class
                                onto the default queue.
                                <a href="/test-queues">Click here to Dispatch TestJob</a>
                            </p>
                        </div>
                    </div>
                </div>

                @include('footer')
            </div>
        </div>
    </body>
</html>
