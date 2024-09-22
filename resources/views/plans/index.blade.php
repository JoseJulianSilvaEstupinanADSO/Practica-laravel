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
            <a href=" {{route('plans.create')}} " class="btn btn-sm">Crear plan <i class="fa-brands fa-bitcoin"></i></a>
        </div>
        <table class="w-full table-zebra text-center text-xs">
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                    <tr>
                        <td> {{$plan->name}} </td>
                        <td> {{$plan->precio}} </td>
                        <td class="truncate"> {{$plan->body}} </td>
                        <td> {{$plan->cant_subs}} </td>
                        <td>
                            <div class="flex flex-col gap-2">
                                <a
                                    href="{{ route('plans.edit', $plan->id) }}" class="btn btn-xs w-full">
                                    Editar
                                </a>
                                {{ html()->modelForm($plan, 'DELETE')->route('plans.destroy', $plan->id)->open() }}
                                    <button class="btn btn-error btn-xs w-full">
                                        Eliminar
                                    </button>
                                {{ html()->closeModelForm() }}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
