<html lang="en">
    {{-- installed Blade snippets --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello, this is blade</h1>
    <a href="/about">Go to about {{2+2}} page</a>
    <p>The current year is {{date('Y')}}</p>

    <h3> {{ $name }} </h3>
    {{-- $name comes from 'name' => $ourName --}}
    <h3> {{ $catname }} </h3>

    <ul>
        @foreach($allAnimals as $animal)
        <li> {{$animal}} </li>
        @endforeach
    </ul>



</body>

</html>