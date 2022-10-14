<x-layout>
    <form action="/login" method="POST" class="form bg-primary d-flex flex-column justify-content-around w-75 py-3 px-5 mt-5"> 
        @csrf   
        <input type="text" name="username" placeholder="Enter your username...">
        <input type="password" name="password" placeholder="Enter your password...">
        <div class="w-100 d-flex flex-column text-center">
            <p>Tidak punya akun? <a href="/register" class="text-dark">daftar</a></p>
            <input type="submit" value="LOGIN">
        </div>
    </form>
</x-layout>