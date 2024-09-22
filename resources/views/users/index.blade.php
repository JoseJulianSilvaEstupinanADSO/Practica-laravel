@vite(['resources/css/app.css', 'resources/js/app.js'])
@include("layouts.navigation")

<div class="container w-screen flex flex-col items-center">
    <div class="p-2">
        <h1 class="font-bold text-2xl">
            Usuarios registrados
        </h1>
    </div>
    <div class="p-8 rounded-xl my-6 w-11/12">
        <table class="w-full text-center table-zebra text-xs">
            <thead>
                <th>Nombre</th>
                <th>Documento</th>
                <th>E-mail</th>
                <th>Telefono</th>
                <th>
                    Acciones
                </th>
            </thead>
            <tbody >
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->documento}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->telefono}}</td>
                        <td class="flex items-center justify-center">
                            {{ html()->modelForm($user, 'POST', 'users.edit')->open() }}
                                {{ html()->hidden('id')->value($user->id) }}
                                <button type="submit" class="btn btn-xs w-full">Editar</button>
                            {{ html()->closeModelForm() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
