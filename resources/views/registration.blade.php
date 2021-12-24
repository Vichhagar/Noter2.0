<x-layout>
    <x-slot name="content"> 
    <main class="registration-page">
        <div class="right-section">
            <img src="img/LetterLogo.png" alt="noter letter logo white">
        </div>
        <div class="left-section">
            <a href="/"><img src="img/Logo.png" alt="noter logo"></a>
            <p class="login-info"></p>
            <form method="POST" action="/registration">
                @csrf

                <input type="Email" name="email" placeholder="Email" value="{{ old('email') }}">

                @error('email')
                    <p  style="color: red; font-size: 13px; text-align: left; margin-top: -0.5rem; margin-left: 1rem">{{ $message }}</p>
                @enderror

                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">

                @error('username')
                    <p  style="color: red; font-size: 13px; text-align: left; margin-top: -0.5rem; margin-left: 1rem">{{ $message }}</p>
                @enderror
                <div class="password">
                <input type="password" placeholder="Password" name="password" ">
                @error('password')
                    <p  style="color: red; font-size: 13px; text-align: left; margin-top: -0.5rem; margin-left: 1rem">{{ $message }}</p>
                @enderror
                {{-- <input type="password" placeholder="Confirm Password" name="password_confirmation"> --}}
                </div>
                <input id="login-submit" type="submit" value="REGISTER">
            </form>
            <p class="account-info"><span class="no-account">Already have an account?</span>  <a href={{ url("./login") }}>Login Here</a></p>
        </div>
    </main>
</x-slot>
</x-layout>