@vite('resources/css/app.css')
@include("layouts.navigation")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="w-screen flex flex-col justify-center items-center">
    <div class="w-1/2 flex flex-col p-4">
        {{ html()->modelForm($organization, 'PUT')->route('organizations.update', $organization->id)->open() }}
        <div>
            @include('organizations.partials.form')
            <button type="submit" class="btn btn-success btn-sm w-full">Editar</button>
        </div>
        {{ html()->closeModelForm() }}
        <a href="{{ route('organizations.index') }}" class="w-full btn btn-sm">Listado de organizaciones</a>
    </div>
</div>
