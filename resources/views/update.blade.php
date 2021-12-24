<x-layout>
    <x-slot name="content"> 
        <main class="main">
            <div class="header" style="margin-bottom: 2rem;">
                <a href={{ url("/dashboard") }}><img src={{ url("img/Logo.png") }} alt="noter logo"></a>
            </div>
            <form method="POST" action="/{{ $note->id }}">
                @method('PUT')
                @csrf
                <input name="title" id="addNote" type="text" value="{{ $note->title }}">
                <textarea name="content" rows="17" cols="40" placeholder="Write the content of your note here...">{{ $note->content }}</textarea>
                <input id="makePublic" name="isPublic" type="checkbox" value="true"
                    <?php if($note->isPublic == 1) echo "checked" ?>
                >
                <label for="isPublic">Public</label>
                <div class="formButton">
                    <button type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                </div>
            </form>
        </main>
    </x-slot>
</x-layout>