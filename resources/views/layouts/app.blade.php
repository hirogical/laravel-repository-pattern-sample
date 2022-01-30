<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-size:16pt;
                color:#999;
                margin: 5px;
            }

            h1 {
                font-size:50pt;
                text-align:right;
                color:#f6f6f6;
                margin:-20px 0px -30px 0px;
                letter-spacing:-4pt;
            }

            ul {
                font-size:12pt;ß
            }

            hr {
                margin: 25px 100px;
                border-top: 1px
                dashed #ddd;
            }

            .menutitle {
                font-size:14pt;
                font-weight:bold;
                margin: 0px;
            }

            .content {
                margin:10px;
            }

            .footer {
                text-align:right;
                font-size:10pt;
                margin:10px;
                border-bottom:solid 1px #ccc; color:#ccc;
            }

            th {
                background-color:#999;
                color:#FFF;
                padding:5px 10px;
            }

            td {
                border:solid 1px #aaa;
                color:#999;
                padding:5px 10px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
