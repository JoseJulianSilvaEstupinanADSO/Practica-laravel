<div>
    {{ html()->modelForm($role, 'PUT')->route('roles.update', $role->id)->open() }}

        @include('roles.partials.form')

        <button type="submit" class="btn btn-outline-dark">Editar</button>

    {{ html()->closeModelForm() }}
</div>
