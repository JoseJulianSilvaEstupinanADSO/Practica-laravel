<div>
    <h1>Comprar plan {{$plan->name}} </h1>
    {{ html()->form()->route('plans.store')->open() }}

        {{ html()->hidden('id')->value($plan->id) }}

        <button type="submit" class="btn btn-outline-dark">Comprar</button>

    {{ html()->form()->close() }}
</div>
