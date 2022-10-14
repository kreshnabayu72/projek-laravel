<x-layout>
<header class="bg-primary">
    <a href="/news/{{$newsList[0]['id']}}">
        <img src={{$newsList[0]->image? asset("/storage/".$newsList[0]->image): asset("noimg.jpg")}} alt="">
        <div class="ms-2">
            <h1>{{$newsList[0]['title']}}</h1>
            <div>
                <h4>{{$newsList[0]['created_at']}}</h4>
            </div>
        </div>
    </a>     
</header>
<section class="bg-primary w-100 my-3 pb-3">
    <div class="container text-center">
        <div class="row h-100">
            <div class="col">
                <h4 class="mb-3">Kumpulan Berita</h4>
                @foreach ($newsList as $news)
                    <x-news-box :news="$news"/>
                @endforeach             
            </div>
            <div class="col">
                <h4 class="mb-3">Berita Teratas</h4>
                <div class="top-news h-75 bg-dark-blue">
                    <ol class="w-75 mx-auto text-white h-100 d-flex flex-column justify-content-around">
                        @foreach ($newsList as $topnews)
                            <li>
                                <a href="/news">{{$topnews['title']}}</a>
                            </li>
                        @endforeach    
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

</x-layout>
