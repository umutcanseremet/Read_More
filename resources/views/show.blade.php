<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla {
            font-family: karla;
        }
    </style>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body>
@foreach($topic as $list)
    <article class="flex flex-col shadow my-4">
        <a  class="hover:opacity-75">
            <img width="300" height="100" src="{{$list['image']}}">
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
            <a  class="text-3xl font-bold hover:text-gray-700 pb-4">{{$list['topic']}}</a>
            <p  class="text-sm pb-8">
                <a  class="font-semibold hover:text-gray-800"></a>{{$list['writer']}}

            </p>
            <p></p>
        </div>

    </article>
@endforeach
</body>
</html>







