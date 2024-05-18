<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Laravel Project</title>
</head>
<body>
    <h1> hello world ! This is a demo page</h1>
    @if ($name=='Rabbe')
        {{$name}}
    @elseif ($id==2246)
        {{$id}}
    @else
        {{'This is not Rabbe'}}
    @endif
</body>
</html>