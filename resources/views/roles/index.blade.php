@vite('resources/css/app.css')
@include("layouts.navigation")

<div>
    <a href="{{ route('roles.create') }}">Nuevo Rol</a>
    <a href="{{ route('permissions.index') }}">Permisos</a>
    <table border="">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($roles as $role )
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td> 
                        <a 
                            href="{{ route('roles.edit', $role->id) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        {{ html()->modelForm($role, 'DELETE')->route('roles.destroy', $role->id)->open() }}
                            <button class="btn btn-outline-danger delete">
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                </tr>
                   
            @endforeach
        </tbody>
    </table>
</div>