<div class="flex flex-col gap-2 my-2 text-start justify-start">
    <div>
        {{ html()->label('Nombre permiso') }}
    </div>
    <div>
        {{ html()->text('name')->class('input input-bordered input-sm') }}
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div>
        {{ html()->label('Descripcion') }}
    </div>
    <div>
        {{ html()->text('description')->class('input input-sm input-bordered') }}
    </div>
    <div>
    </div>
</div>
