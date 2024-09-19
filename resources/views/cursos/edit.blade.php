<div>
    {{ html()->modelForm($curso, 'PUT')->route('cursos.update', $curso->id)->open() }}

        @include('cursos.partials.form')

        <button type="submit" class="btn btn-outline-dark">Editar</button>

    {{ html()->closeModelForm() }}
</div>
