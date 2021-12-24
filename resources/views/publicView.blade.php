<x-layout>
    <x-slot name="content"> 
        <main class="main">
            <div class="header" style="margin-bottom: 2rem;">
                <a href={{ url("/") }}><img src={{ url("img/Logo.png") }} alt="noter logo"></a>
            </div>
                <h1>{{ $note->title }}</h1>
                <p>{{ $note->created_at }}</p>
                <div  style="overflow-y:scroll; height: 38vh; margin-top: 1rem;">
                    <p>{!! $note->content !!}</p>
                </div>
                <p style="margin: 0.5rem 0;">
                    <?php if($note->isPublic == 1) echo "This note is public.";
                    else echo "This note is private."
                    ?>
                </p>
                <div class="formButton">
                    <a class="viewPage" href="/"><i class="fa fa-check" aria-hidden="true"></i></a>
                </div>
        </main>
    </x-slot>
</x-layout>