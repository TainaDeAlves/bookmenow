<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoockMeNow-Serviços</title>
</head>

<body>
    @include('includes.menu')
    
    <h1>Seviços</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Reiciendis iure rem repellendus at commodi<br> adipisci ratione corporis.
        Expedita, id! Delectus aut minima <br>reiciendis error recusandae
        aperiam cum dolores saepe nesciunt!Lorem <br>ipsum dolor sit amet consectetur adipisicing elit.
        Reiciendis iure rem repellendus at commodi<br> adipisci ratione corporis.
        Expedita, id! Delectus <br>aut minima reiciendis error recusandae
        aperiam cum dolores saepe nesciunt!
    </p>

    <ul>
        @foreach ( $listaservicos as $servico )

        <li>{{$servico}}</li>
            
        @endforeach
    </ul>
</body>

</html>
