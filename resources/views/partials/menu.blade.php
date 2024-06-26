<header>
    <div class="px-3 py-2 text-bg-dark border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/"
                    class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="{{ route('index') }}"
                            class="nav-link  {{ Route::currentRouteName() == 'index' ? 'text-primary' : 'text-white' }}">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <i class="fa-solid fa-house"></i>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('coomic.index') }}"
                            class="nav-link {{ Route::currentRouteName() == 'coomic.index' ? 'text-primary' : 'text-white' }}"">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <i class="fa-solid fa-chalkboard"></i>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('coomic.create') }}"
                            class="nav-link {{ Route::currentRouteName() == 'coomic.create' ? 'text-primary' : 'text-white' }}"">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <i class="fa-solid fa-circle-plus"></i>
                            </svg>
                            Aggiungi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('trash') }}"
                            class="nav-link {{ Route::currentRouteName() == 'trash' ? 'text-primary' : 'text-white' }}">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <i class="fa-solid fa-trash-can"></i>
                            </svg>
                            Cestino
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
