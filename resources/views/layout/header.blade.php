<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color:white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin:0;
        }
        .posts{
            color:grey;
            height:100%;
            background-color: antiquewhite;
            padding: 10;
        }

    </style>
</head>
<body>
    <div style="width:auto; height:200px; background-color: teal; padding:20px">@yield('content')</div>
    <div class="posts">
        
        
        @yield('posts')
        

    </div>
    
</body>
</html>