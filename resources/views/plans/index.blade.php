@vite(['resources/css/app.css', 'resources/js/app.js'])
@include("layouts.navigation")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="w-screen flex flex-col justify-center items-center">
    <div class="p-2">
        <h1 class="font-bold text-2xl">
            Planes de subscripcion
        </h1>
    </div>
    <div class="w-1/2 flex flex-col p-4">
        <div class="p-4 w-full flex justify-end gap-4">
            <a href=" {{route('plans.create')}} " class="btn">Crear plan</a>
        </div>
        <table class="table-zebra">
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
</div>
