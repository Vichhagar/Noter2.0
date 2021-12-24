<x-layout>
    <x-slot name="content"> 
    <main class="main1">
        <div class="header" style="margin-bottom: 2rem;">
            <a href={{ url("/") }}><img src="img/Logo.png" alt="noter logo"></a>
            <p style="margin-right: 8rem" class="welcome">Welcome back! {{ auth() -> user() -> username }}</p>
            <div class="link">
                <form method="POST" action="/logout">
                    @csrf
                <button type="submit" style="border: none;background: none; cursor:pointer"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        <p style="color: #fff;">Yayy! you found me.</p>
        <div class="add">
            <a class="plus" style="padding: 1.5rem" href={{ url("/dashboard/create") }}><i class="fas fa-plus"></i></a>
            <div class="state">
                {{ $total }} Total Notes <br/>
                @if ($public > 1)
                    {{ $public }} Public Notes
                @else
                    {{ $public }} Public Note
                @endif
                
            </div>
        </div>

        <form action="#" method="GET" class="search-form">
            <input type="text" name="search" placeholder="Search by title...">
            <button type="submit"><i style="font-size: 14px" class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </form>

        <div class="content">
            @foreach ($notes as $note)
            <article>
                <h3><a href="dashboard/{{ $note->id }}"><h1>{{ $note -> title }}</a></h3>
                <h5>{{ $note -> created_at }}</h5>
                <p>{!! substr($note -> content, 0,100) !!}</p>
                <div>
                    <a href="dashboard/notes/{{ $note -> id }}/edit" style="margin-right: 0.5rem;"><i class="far fa-edit" style="font-size: 16px;"></i> | </a>
                    <a href="dashboard/notes/{{ $note -> id }}/delete"><i class="far fa-trash-alt" style="font-size: 16px;"></i></a>
                </div>
            </article>
            @endforeach
        </div>
    </main>
</x-slot>
</x-layout>