@vite(['resources/css/app.css', 'resources/js/app.js'])
@include("layouts.navigation")
<div>
    <a href=" {{route('plans.create')}} ">Crear plan</a>
    <h1>Planes</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Acciones</th>
            <th>Comprar</th>
        </thead>
        <tbody>
            @foreach ($plans as $plan)
                <tr>
                    <td> {{$plan->name}} </td>
                    <td> {{$plan->precio}} </td>
                    <td> {{$plan->body}} </td>
                    <td> 
                        <a 
                            href="{{ route('plans.edit', $plan->id) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        {{ html()->modelForm($plan, 'DELETE')->route('plans.destroy', $plan->id)->open() }}
                            <button class="btn btn-outline-danger delete">
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                    <td>
                        {{ html()->form()->route('plans.buyplan')->open() }}

                            {{ html()->hidden('id')->value($plan->id) }}

                            <button type="submit" class="btn btn-outline-dark">Comprar</button>

                        {{ html()->form()->close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
