<x-layout>
    <section class="bg-primary w-100 mt-3 px-3">
        <h1 class="text-center">{{$news['title']}}</h1>
        <p>{{$news['subtitle']}}</p>
        <img src={{$news->image? asset("/storage/".$news->image): asset("noimg.jpg")}} alt="">
        <div class="news-info">
            <p >Waktu terbit: {{$news['created_at']}}</p>
            <p>Penulis: {{$writer['username']}}</p>
        </div>
        <p class="">{!! nl2br(e($news['content']))!!}</p>
    </section>
</x-layout>