<div class="flex flex-col gap-2 my-2 text-start justify-center">
    <div class="w-full text-center">
        <h1 class="font-bold text-2xl">
            Creacion de un nuevo plan
        </h1>
    </div>
    <div>
        {{ html()->label('Nombre del plan') }}
    </div>
    <div>
        {{ html()->text('name')->class('input input-sm input-bordered w-full')->placeholder('Nombre del plan') }}
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div>
        {{ html()->label('Precio del plan') }}
    </div>
    <div>
        {{ html()->text('precio')->class('input input-sm input-bordered w-full')->placeholder('Precio del plan') }}
        @error('precio')
            {{ $message }}
        @enderror
    </div>
    <div>
        {{ html()->label('Descripcion del plan') }}
    </div>
    <div>
        {{ html()->Textarea('body')->class('textarea textarea-bordered textarea-xs w-full')->placeholder('Agregue una descripcion del plan') }}
        @error('body')
            {{ $message }}
        @enderror
    </div>
    <div>
        {{ html()->label('Cantidad de cursos') }}
    </div>
    <div>
        {{ html()->text('cant_subs')->class('input input-sm input-bordered w-full')->placeholder('Cantidad de cursos admitidos') }}
        @error('cant_subs')
            {{ $message }}
        @enderror
    </div>
    <hr>
</div>
