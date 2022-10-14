<x-layout>
    <form action="/register" method="POST"  class="form bg-primary d-flex flex-column justify-content-around w-75 py-3 px-5 mt-5">
        @csrf
        <input type="text" name="username" placeholder="Enter your username...">
        <input type="password" name="password" placeholder="Enter your password...">
        <input type="password" name="password_confirmation" placeholder="Confirm your password...">
        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        <div class="w-100 d-flex flex-column text-center">
            <p>Sudah punya akun? <a href="/login" class="text-dark">login</a></p>
            <input type="submit" value="REGISTER">
        </div> 
    </form>
</x-layout>