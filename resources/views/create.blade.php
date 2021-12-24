<x-layout>
    <x-slot name="content">  
    <main class="main">
        <div class="header" style="margin-bottom: 2rem;">
            <a href={{ url("/dashboard") }}><img src={{ url("img/Logo.png") }} alt="noter logo"></a>
        </div>
        <form method="POST" action="/note">
            @csrf
            <input name="title" id="addNote" type="text" placeholder="Title of the Note.">
            <textarea name="content" rows="17" cols="40" placeholder="Write the content of your note here..."></textarea>
            <input id="makePublic" name="isPublic" type="checkbox" value="true">
            <label for="isPublic">Public</label>
            <div class="formButton">
                <button type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
            </div>
        </form>
    </main>
</x-slot>
</x-layout>