
<div>
    {{ html()->form()->route('modulos.store')->open() }}

        @include('modulos.partials.form')

        <button type="submit" class="btn btn-outline-dark">Crear</button>

    {{ html()->form()->close() }}
</div>
