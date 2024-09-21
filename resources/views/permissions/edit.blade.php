@vite('resources/css/app.css')
@include("layouts.navigation")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="w-screen flex flex-col justify-center items-center">
    <div class="w-1/2 flex flex-col p-4">
        {{ html()->modelForm($permission, 'PUT')->route('permissions.update', $permission->id)->open() }}
    
        <div>
            @include('permissions.partials.form')
            <button type="submit" class="btn btn-sm w-full btn-success">Editar</button>
        </div>
        
        {{ html()->closeModelForm() }}
        <a href="{{ route('permissions.index') }}" class="btn btn-sm w-full">Listado de permisos</a>
    </div>
</div>
