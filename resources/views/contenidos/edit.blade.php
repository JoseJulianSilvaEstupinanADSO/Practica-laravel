<div>
    {{ html()->modelForm($contenido, 'PUT')->route('contenidos.update', $contenido->id)->open() }}

        @include('contenidos.partials.form')

        <button type="submit" class="btn btn-outline-dark">Editar</button>

    {{ html()->closeModelForm() }}
</div>