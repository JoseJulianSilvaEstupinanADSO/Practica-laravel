<div>
    {{ html()->modelForm($permission, 'PUT')->route('permissions.update', $permission->id)->open() }}

        @include('permissions.partials.form')

        <button type="submit" class="btn btn-outline-dark">Editar</button>

    {{ html()->closeModelForm() }}
</div>
