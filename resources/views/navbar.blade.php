<div class="w-screen bg-orange-200 p-4">
    <div class="navbar bg-base-100 my-0 mx-auto bg-transparent max-w-5xl">
        <div class="flex-1">
            <a class="text-2xl font-bold">Cursos online</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 flex gap-5">
                @if (Route::has('login'))
                    @auth
                        <!-- Si el usuario está autenticado, mostrar el Dashboard -->
                        <li>
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                        </li>
                    @else
                        <!-- Si el usuario no está autenticado, mostrar Log in y Register -->
                        <li>
                            <a
                                href="{{ route('login') }}"
                                class="btn btn-sm"
                            >
                                Ingresar
                            </a>
                        </li>

                        @if (Route::has('register'))
                            <li>
                                <a
                                    href="{{ route('register') }}"
                                    class="btn btn-outline btn-sm border-none"
                                >
                                    Registro
                                </a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</div>
