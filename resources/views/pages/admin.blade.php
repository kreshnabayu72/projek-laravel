<x-layout>
    <section class="mt-3 w-100 d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-center">Pengaturan Berita</h1>
        <table class="bg-primary w-75 border mt-3">
            <tr class="border">
                <th>Penulis</th>
                <th>Judul</th>
                <th>Opsi</th>
            </tr>
            @foreach ($newsList as $news)
            <tr>
                <td>{{$news['title']}}</td>
                <td>{{$news['title']}}</td>
                <td>
                    <form action="/news/{{$news['id']}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </section>
</x-layout>