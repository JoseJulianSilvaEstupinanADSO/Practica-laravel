<div>
    {{ html()->form()->route('cursos.store')->open() }}

        @include('cursos.partials.form')

        <button type="submit" class="btn btn-outline-dark">Crear</button>

    {{ html()->form()->close() }}
</div>
