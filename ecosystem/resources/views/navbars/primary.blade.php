<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="{{ route('home.index') }}">Clean Starter</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsPrimary" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsPrimary">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clean.customer.index') }}">Customers</a>
            </li>
        </ul>

    </div>

</nav>
