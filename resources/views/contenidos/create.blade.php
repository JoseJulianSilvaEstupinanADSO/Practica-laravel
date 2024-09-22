
<div>
    {{ html()->form()->route('contenidos.store')->open() }}

        @include('contenidos.partials.form')

        <button type="submit" class="btn btn-outline-dark">Crear</button>

    {{ html()->form()->close() }}
</div>
 