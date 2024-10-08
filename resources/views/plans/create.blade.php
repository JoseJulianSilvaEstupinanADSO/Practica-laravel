@vite('resources/css/app.css')
@include("layouts.navigation")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="w-creen flex flex-col justify-center items-center">
    <div class="w-1/2 flex-1 flex-col gap-4 p-4">
        {{ html()->form()->route('plans.store')->open() }}
            <div class="w-full">
                @include('plans.partials.form')
                <button type="submit" class="btn btn-sm btn-success w-full">Crear</button>
            </div>
        {{ html()->form()->close() }}
        <a href="{{ route('plans.index') }}" class="btn btn-sm w-full">Listado de planes</a>
    </div>
</div>
