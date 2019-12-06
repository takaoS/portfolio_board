@section('header')
<header class="mb-3 py-2 bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">

            {{-- Go to home --}}
            <a href="/person" class="navbar-brand">Home</a>

            {{-- Humberger menu from this line --}}
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menu" class="collapse navbar-collapse">
                {{-- Go to each menu --}}
                <ul class="navbar-nav">
                    <li class="navbar-item mx-2"><a href="/person/add" class="navbar-link text-dark">Add Person</a></li>
                    <li class="navbar-item mx-2"><a href="/board"      class="navbar-link text-dark">Boards List</a></li>
                    <li class="navbar-item mx-2"><a href="/board/add"  class="navbar-link text-dark">Add Board</a></li>
                </ul>
            </div>
            {{-- Humberger menu until this line --}}

        </nav>
    </div>
</header>
@endsection
