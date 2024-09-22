<div class="flex flex-col gap-2 my-2 text-start justify-start">
    <div class="w-full text-center">
        <h1 class="font-bold text-2xl">Creacion de un nuevo rol</h1>
    </div>
    <div>
        {{ html()->label('Nombre rol')}}
    </div>
    <div>
        {{ html()->text('name')->class("input input-sm input-bordered w-full")->placeholder('Nombre del rol')}}
        @error('name')
            {{ $message }}
        @enderror
    </div>
</div>
<hr>
<div class="w-full flex flex-wrap">
    @forelse ($permissions as $permission)
        <div class="p-3">
            {{ html()->checkbox('permissions[]', isset($permissions_role) && $permissions_role->contains($permission->id) ? true : false, $permission->id)->class('checkbox')->id('permission_' . $permission->id) }}
            {{ html()->label($permission->name, 'permission_' . $permission->id)->class('form-check-label') }}
        </div>
    @empty
    @endforelse
</div>
