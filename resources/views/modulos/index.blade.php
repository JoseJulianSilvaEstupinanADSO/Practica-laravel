<div>
    <a href=" {{ route('modulos.create', $curso->id) }} ">Crear modulo</a>
    <table border="">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>ver</th>
        </thead>
        <tbody>
            @foreach ($modulos as $modulo )
                <tr>
                    <td>{{$modulo->id}}</td>
                    <td>{{$modulo->name}}</td>
                    <td> 
                        <a 
                            href="{{ route('modulos.edit', $modulo->id) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        {{ html()->modelForm($modulo, 'DELETE')->route('modulos.destroy', $modulo->id)->open() }}
                            <button class="btn btn-outline-danger delete">
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                    <td> 
                        <a 
                            href="{{ route('contenidos.index', $modulo->id) }}">
                            ver
                        </a>
                    </td>
                </tr>
                   
            @endforeach
        </tbody>
    </table>
</div>
