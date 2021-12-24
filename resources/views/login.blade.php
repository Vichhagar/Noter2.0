<x-layout>
    <x-slot name="content"> 
    <main>
        <div class="left-section">
            <a href="/"><img src="img/Logo.png" alt="noter logo"></a>
            <p class="login-info">Log in to start review and record what you have learn on noter.</p>
            <form method="POST" action="/login">
                @csrf
                <input name="username" type="text" placeholder="Username" value="{{ old('username') }}">
                @error('username')
                <p  style="color: red; font-size: 13px; text-align: left; margin-top: -0.5rem; margin-left: 1rem">{{ $message }}</p>
                @enderror

                <input name="password" type="password" placeholder="Password">
                @error('password')
                <p  style="color: red; font-size: 13px; text-align: left; margin-top: -0.5rem; margin-left: 1rem">{{ $message }}</p>
                @enderror

                <input id="login-submit" type="submit" value="LOGIN">
            </form>
            <p class="account-info"><span class="no-account">Don't have an account?</span> <a href={{ url("./registration") }}>Register</a></p>
        </div>
        <div class="right-section">
            <img src="img/LetterLogo.png" alt="noter letter logo white">
        </div>
    </main>
</x-slot>
</x-layout>