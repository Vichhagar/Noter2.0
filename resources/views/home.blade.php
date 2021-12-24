<x-layout>
    <x-slot name="content">  
        <main class="main1">
            <div class="header">
                <a href="/"><img src="img/Logo.png" alt="noter logo"></a>
                @auth
                    <div class="link">
                        <h3 class="welcome" style="margin-right: 1rem">{{ auth() -> user() -> username }} | </h3>
                        <a href={{ url("./dashboard") }} style="margin-right: 0.5rem"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
                    </div>
                @else
                    <div class="link">
                        <a href={{ url("./login") }}><i class="fas fa-sign-in-alt"></i></a>
                        <a href={{ url("./registration") }}><i class="fas fa-user-plus"></i></a>
                    </div>
                @endauth
            </div>
            <form action="#" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search by title...">
                <button type="submit"><i style="font-size: 14px" class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </form>
            <div id="div"></div>
            <p>Last Reload: <?php echo date('H:i:s') ?> <spam class="tip" style="font-size: 12px">(Reload to see lastest posts)</spam></p>
            <div class="content">
                @foreach ($notes as $note)
                <article>
                    <h3><h1>{{ $note -> title }}</h3>
                        <h5>{{ $note -> created_at }}</h5>
                        <p>{!! substr($note -> content, 0,100) !!}</p>
                    <div>
                        <a href="/home/{{ $note->id }}"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 16px;"></i></a>
                    </div>
                </article>
                @endforeach
            </div>
        </main>
    </x-slot>
</x-layout>