<div class="flex flex-col gap-2 my-2 text-start justify-center">
    <div>
        {{ html()->label('Nombre del plan') }}
    </div>
    <div>
        {{ html()->text('name')->class('input input-sm input-bordered')->placeholder('Nombre del plan') }}
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div>
        {{ html()->label('Precio del plan') }}
    </div>
    <div>
        {{ html()->text('precio')->class('input input-sm input-bordered') }}
        @error('precio')
            {{ $message }}
        @enderror
    </div>
    <div>
        {{ html()->label('Descripcion del plan') }}
    </div>
    <div>
        {{ html()->Textarea('body')->class('textarea textarea-bordered') }}
        @error('body')
            {{ $message }}
        @enderror
    </div>
    <div>
        {{ html()->label('Cantidad de cursos') }}
    </div>
    <div>
        {{ html()->text('cant_subs') }}
        @error('cant_subs')
            {{ $message }}
        @enderror
    </div>
    
</div>
