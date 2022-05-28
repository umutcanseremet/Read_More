 <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Ana Sayfa</title>
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
        <a href="{{route('add_text')}}">Yazı Ekle</a>
        @foreach($veri as $item)
        <article class="flex flex-col shadow my-4">
            <a  class="hover:opacity-75">
                <img width="100" height="100" src="{{ asset('' . Str::afterLast($item->image, 'public/')) }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$item['topic']}}</a>
                <a href="#" class="pb-6">{{$item['writer']}}</a>
                <a href="{{route('show', [$item['id'], $item['slug']])}}" class="uppercase text-gray-800 hover:text-black">Devamını Oku<i

                        class="fas fa-arrow-right"></i></a>
                @endforeach
            </div>
        </article>
        </body>
        </html>
