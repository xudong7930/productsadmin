<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products List</title>
</head>
<body>
    <ul>
        @foreach ($products as $product)
            <li style="background: yellow; color: black;">{{$product->name}}: {{$product->price}}</li>
        @endforeach
    </ul>
</body>
</html>