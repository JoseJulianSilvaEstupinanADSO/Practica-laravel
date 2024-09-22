@vite('resources/css/app.css')
@include("layouts.navigation")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="w-screen flex flex-col justify-center items-center">
    <div class="w-1/2 flex flex-col gap-4 p-4">
        {{ html()->form()->route('roles.store')->open() }}

            <div class="flex flex-col gap-2 justify-center">
                @include('roles.partials.form')
                <button type="submit" class="btn btn-sm btn-success text-white w-full">Crear <i class="fa-solid fa-plus"></i></button>
                <a href="{{ route('roles.index') }}" class="w-full btn btn-sm">Listar roles</a>
            </div>

        {{ html()->form()->close() }}
    </div>
</div>
