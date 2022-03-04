<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin:0;
        }
        .header{
            background-color: teal;
            width:100%;
            height:auto;
            padding:10;
            color:white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{$post->title}}</h1>
    </div>
    <p>{{$post->description}}</p>
</body>
</html>