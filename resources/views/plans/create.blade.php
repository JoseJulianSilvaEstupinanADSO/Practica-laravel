<div>
    {{ html()->form()->route('plans.store')->open() }}

        @include('plans.partials.form')

        <button type="submit" class="btn btn-outline-dark">Crear</button>

    {{ html()->form()->close() }}
</div>
