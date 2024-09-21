<div>
    {{ html()->modelForm($modulo, 'PUT')->route('modulos.update', $modulo->id)->open() }}

        @include('modulos.partials.form')

        <button type="submit" class="btn btn-outline-dark">Editar</button>

    {{ html()->closeModelForm() }}
</div>