<div>
    <a href=" {{ route('contenidos.create', $modulo->id) }} ">Crear contenido</a>
    <table border="">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>ultiomo</th>
            <th>Modulo</th>
            <th>Acciones</th>
            <th>contenido</th>
        </thead>
        <tbody>
            @foreach ($contenidos as $contenido )
                <tr>
                    <td>{{$contenido->id}}</td>
                    <td>{{$contenido->name}}</td>
                    <td>{{$contenido->last}}</td>
                    <td>{{$contenido->modulo_id}}</td>
                    <td> 
                        <a 
                            href="{{ route('contenidos.edit', $contenido->id) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        {{ html()->modelForm($contenido, 'DELETE')->route('contenidos.destroy', $contenido->id)->open() }}
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

