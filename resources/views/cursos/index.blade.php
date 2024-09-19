@vite('resources/css/app.css')
@include("layouts.navigation")

<div>
    <a href="{{ route('cursos.create') }}">Añadir Curso</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Instructor</th>
            <th>Organizacion</th>
            <th>Acciones</th>
            <th>Comprar</th>
        </thead>
        <tbody>
            @foreach ($cursos as $curso )
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->title}}</td>
                    <td>{{$curso->body}}</td>
                    <td>{{$curso->status}}</td>
                    <td>{{$curso->doc_instructor}}</td>
                    <td> 
                        @foreach ($curso->organization as $org )
                            {{$org->name}}
                        @endforeach 
                    </td>
                    <td> 
                        <a 
                            href="{{ route('cursos.edit', $curso->id) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        {{ html()->modelForm($curso, 'DELETE')->route('cursos.destroy', $curso->id)->open() }}
                            <button class="btn btn-outline-danger delete">
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                    <td>
                        {{ html()->form()->route('cursos.subs_curso')->open() }}

                            {{ html()->hidden('id')->value($curso->id) }}

                            <button type="submit" class="btn btn-outline-dark">Comprar</button>

                        {{ html()->form()->close() }}
                    </td>
                </tr>
                   
            @endforeach
        </tbody>
    </table>
</div>