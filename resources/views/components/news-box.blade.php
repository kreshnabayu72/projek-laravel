<a href="/news/{{$news['id']}}">
    <section class="news-box bg-dark-blue text-white d-flex justify-content-center align-items-center p-2 mb-2">
        <img src={{$news->image? asset("/storage/".$news->image): asset("noimg.jpg")}} class="w-50 h-100" alt="">
        <div class="ms-3 py-3 w-50">
            <h6>{{$news['title']}}</h6>
            <p>{{$news['created_at']}}</p>
        </div>
    </section>
</a>
