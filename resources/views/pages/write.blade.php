<x-layout>
    <form action="/news" method="POST" enctype="multipart/form-data" class="form bg-primary d-flex flex-column justify-content-around w-75 py-3 px-5 mt-5 news-form"> 
        @csrf   
        <input type="text" name="title" placeholder="News title...">
        <input type="text" name="subtitle" placeholder="Subtitle...">
        <input type="file" name="image">
        <textarea name="content" cols="30" rows="10"></textarea>     
        <input type="submit" value="SUBMIT">       
    </form>
</x-layout>