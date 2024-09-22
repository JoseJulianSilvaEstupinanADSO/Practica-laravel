@vite('resources/css/app.css')
@include("layouts.navigation")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class=" w-screen flex flex-col justify-center items-center">
    <div class="w-1/2 flex flex-col p-4">
        <div class="text-center">
            <h1 class="font-bold text-2xl">
                Organizaciones registradas
            </h1>
        </div>
        <div class="p-4 w-full flex justify-end gap-4">
            <a href="{{ route('organizations.create') }}" class="btn btn-sm">Añadir organizacion <i class="fa-solid fa-city"></i></a>
        </div>
        <table class="w-full text-xs text-center table-zebra">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
            </thead>
            <tbody>
                @foreach ($organizations as $organization )
                    <tr>
                        <td>{{$organization->id}}</td>
                        <td>{{$organization->name}}</td>
                        <td>{{$organization->direccion}}</td>
                        <td>{{$organization->telefono}}</td>
                        <td>
                            <div class="flex flex-col w-full gap-2">
                                <a
                                    href="{{ route('organizations.edit', $organization->id) }}" class="btn btn-xs w-full">
                                    Editar
                                </a>
                                {{ html()->modelForm($organization, 'DELETE')->route('organizations.destroy', $organization->id)->open() }}
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
