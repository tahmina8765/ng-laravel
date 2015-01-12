<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laravel PHP Framework</title>
        <style>
            @import url(//fonts.googleapis.com/css?family=Lato:700);

            body {
                margin:0;
                font-family:'Lato', sans-serif;
                color: #999;
            }      

            a, a:visited {
                text-decoration:none;
            }

            h1 {
                font-size: 32px;
                margin: 16px 0 0 0;
            }
        </style>
        <script>
        var x = 10;
        var foo = {
            x: 20,
            bar: function(){
                var x = 30;
                return this.x;
            }
        }
        
        console.log(foo.bar());
        </script>
    </head>
    <body>
        @yield('content')
    </body>
</html>
