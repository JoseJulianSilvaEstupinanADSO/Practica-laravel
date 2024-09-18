<div>
    {{ html()->modelForm($plan, 'PUT')->route('plans.update', $plan->id)->open() }}

        @include('plans.partials.form')

        <button type="submit" class="btn btn-outline-dark">Editar</button>

    {{ html()->closeModelForm() }}
</div>
