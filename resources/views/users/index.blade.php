@vite(['resources/css/app.css', 'resources/js/app.js'])
@include("layouts.navigation")

<div>
    <table border="">
        <thead>
            <th>Nombre</th>
            <th>Documento</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->documento}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        {{ html()->modelForm($user, 'POST', 'users.edit')->open() }}
                            {{ html()->hidden('id')->value($user->id) }}
                            <button type="submit">Editar</button>
                        {{ html()->closeModelForm() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>