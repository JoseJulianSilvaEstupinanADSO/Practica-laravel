@vite('resources/css/app.css')
@include("layouts.navigation")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="w-full flex flex-col items-center">
    <div class="w-1/2 flex flex-col items-center p-4 gap-4">
        <div class="w-full text-center">
            <h1 class="font-bold text-2xl">
                Listado de permisos
            </h1>
        </div>
        <div class="w-full flex justify-end gap-6">
            <a href="{{ route('permissions.create') }}" class="btn btn-sm">Crear permiso <i class="fa-solid fa-user-lock"></i></a>
            <a href="{{ route('roles.index') }}" class="btn btn-sm">Listado de roles <i class="fa-solid fa-address-book"></i></a>
        </div>
        <table border="" class="w-full text-xs text-center table-zebra">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($permissions as $permission )
                    <tr>
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->name}}</td>
                        <td>
                            <div class="flex flex-col w-full gap-2">
                                <a
                                    href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-xs w-full">
                                    Editar
                                    {{-- Editar --}}
                                </a>
                                {{ html()->modelForm($permission, 'DELETE')->route('permissions.destroy', $permission->id)->open() }}
                                    <button class="btn btn-xs btn-error w-full">
                                        Eliminar
                                        {{-- Eliminar --}}
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
