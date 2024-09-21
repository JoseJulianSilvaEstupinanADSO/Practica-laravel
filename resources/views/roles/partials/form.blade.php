<div class="flex flex-col gap-2 my-2 text-start justify-start">
    <div>
        {{ html()->label('Nombre rol')}}
    </div>
    <div>
        {{ html()->text('name')->class("input input-sm input-bordered")}}
        @error('name')
            {{ $message }}
        @enderror
    </div>
</div>
<div class="w-full flex flex-wrap">
    @forelse ($permissions as $permission)
        <div class="p-3">
            {{ html()->checkbox('permissions[]', isset($permissions_role) && $permissions_role->contains($permission->id) ? true : false, $permission->id)->class('checkbox')->id('permission_' . $permission->id) }}
            {{ html()->label($permission->name, 'permission_' . $permission->id)->class('form-check-label') }}
        </div>
    @empty
    @endforelse
</div>  