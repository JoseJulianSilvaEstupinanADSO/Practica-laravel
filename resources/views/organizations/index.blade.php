@vite('resources/css/app.css')
@include("layouts.navigation")

<div>
    <a href="{{ route('organizations.create') }}">Añadir organizacion</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </thead>
        <tbody>
            @foreach ($organizations as $organization )
                <tr>
                    <td>{{$organization->id}}</td>
                    <td>{{$organization->name}}</td>
                    <td>{{$organization->direccion}}</td>
                    <td>{{$organization->telefono}}</td>
                    <td> 
                        <a 
                            href="{{ route('organizations.edit', $organization->id) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        {{ html()->modelForm($organization, 'DELETE')->route('organizations.destroy', $organization->id)->open() }}
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