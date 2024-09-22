@vite('resources/css/app.css')
@include("layouts.navigation")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="w-screen flex flex-col justify-center items-center">
    <div class="w-1/2 flex flex-col p-4">
        <div class="text-center">
            <h1 class="font-bold text-2xl">
                Roles registrados
            </h1>
        </div>
        <div class="p-4 w-full flex justify-end gap-4">
            <a href="{{ route('roles.create') }}" class="btn btn-sm">Nuevo Rol <i class="fa-solid fa-user-plus"></i></a>
            <a href="{{ route('permissions.index') }}" class="btn btn-sm">Permisos <i class="fa-solid fa-user-lock"></i></a>
        </div>
        <table class="w-full text-center text-xs table-zebra">
            <thead class="text-center">
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($roles as $role )
                    <tr class="my-2">
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>
                            <div class="flex flex-col gap-2 justify-center">
                                <a
                                    href="{{ route('roles.edit', $role->id) }}" class="btn btn-xs w-full">
                                    Editar
                                </a>
                                {{ html()->modelForm($role, 'DELETE')->route('roles.destroy', $role->id)->open() }}
                                    <button class="btn btn-xs btn-error text-white w-full">
                                        Eliminar
                                    </button>
                                {{ html()->closeModelForm() }}
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
