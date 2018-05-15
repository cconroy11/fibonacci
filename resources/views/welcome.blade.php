<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

        <title>Fibonnaci Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .fib-result {
                font-size: 38px;
                position: absolute;
                left: 4em;
                right: 4em;
            }
            .fib-result-inner {
                margin-top: 1em;
            }
            .fib-form {
                display: flex;
                position: relative;
            }
            #fib-input {
                padding: 0.5em 1em;
            }
            #fib-button {
                background-color: #000;
                border: 0;
                color: #fff;
                flex: 1 0 auto;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                Fibonacci
                </div>

                <div class="fib-form">
                    <input id="fib-input" type="number" placeholder="Input">
                    <button id="fib-button" onclick="fibButton()">Submit</button>  
                </div>

                <div class="fib-result">
                    <div class="fib-result-inner">
                    </div>
                </div>

                <script>
                        
                    function fibButton() {
                        var fibVal = $('#fib-input').val();
                        console.log('clicked ' + fibVal);
                        $.get( "http://127.0.0.1:8000/api/fib/" + fibVal, function( data ) {
                            $( ".fib-result-inner" ).html( data );
                        });
                    }
                </script>

            </div>
        </div>
    </body>
</html>
