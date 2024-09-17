@vite('resources/css/app.css')
@include("layouts.navigation")

<div>
    <a href="{{ route('permissions.create') }}">Crear permiso</a>
    <table border="">
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
                        <a 
                            href="{{ route('permissions.edit', $permission->id) }}">
                            Editar
                            {{-- Editar --}}
                        </a>
                    </td>
                    <td>
                        {{ html()->modelForm($permission, 'DELETE')->route('permissions.destroy', $permission->id)->open() }}
                            <button class="btn btn-outline-danger delete">
                                Eliminar
                                {{-- Eliminar --}}
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                </tr>
                   
            @endforeach
        </tbody>
    </table>
</div>