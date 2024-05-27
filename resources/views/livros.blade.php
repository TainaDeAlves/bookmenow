<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros</title>
</head>
<body>
    @include('includes.menu')

    <h1>Livros</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis omnis
         impedit quae asperiores ducimus <br>perspiciatis, blanditiis a fugiat, tempora error
          laboriosam minus unde nesciunt  <br>quia, laborum quod sunt eos! Asperiores!rem ipsum dolo
          r sit amet consectetur adipisicing <br> elit. Veritatis omnis
          impedit quae asperiores ducimus <br> perspiciatis, blanditiis a fugiat, tempora error
           laboriosam minus unde nesciunt quia <br>, laborum quod sunt eos! Asperirem ipsum dolo
           r sit amet consectetur adipisicing <br> elit. Veritatis omnis
           impedit quae asperiores ducimus perspiciatis, <br> blanditiis a fugiat, tempora error
            laboriosam minus unde nesciunt quia, laborum quod sunt eos! Asperi</p>

            <ul>
                @foreach ($listalivros as  $livro)
                    <li>{{$livro}}</li>
                @endforeach
            </ul>
</body>
</html>