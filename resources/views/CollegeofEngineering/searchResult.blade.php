<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        {{-- {{ $results }} --}}
        @foreach( $results as $result)
            <li>
                {{ $result ->last_name }}
                {{ $result ->first_name }}
            </li>
        @endforeach
    </ul>
</body>
</html>