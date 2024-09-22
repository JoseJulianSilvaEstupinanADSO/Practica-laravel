<div class="flex flex-col gap-2 my-2 text-start justify-start">
    <div class="w-full text-center">
        <h1 class="font-bold text-2xl">Creacion de nuevo permiso</h1>
    </div>
    <div>
        {{ html()->label('Nombre permiso') }}
    </div>
    <div>
        {{ html()->text('name')->class('input input-bordered input-sm w-full')->placeholder('Nombre del permiso') }}
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div>
        {{ html()->label('Descripcion') }}
    </div>
    <div>
        {{ html()->text('description')->class('input input-sm input-bordered w-full')->placeholder('Descripcion del permiso') }}
    </div>
    <hr>
</div>
