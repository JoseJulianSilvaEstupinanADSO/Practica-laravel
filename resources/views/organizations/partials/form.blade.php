<div class="flex flex-col gap-2 my-2 text-start justify-start">
    <div class="w-full text-center">
        <h1 class="font-bold text-2xl">
            Creacion de la organizacion
        </h1>
    </div>
    <div>
        <div>
            {{ html()->label('Nombre de la organizacion') }}
        </div>
        <div>
            {{ html()->text('name')->class('input input-bordered input-sm w-full')->placeholder('Organizacion') }}
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            {{ html()->label('Telefono de contacto') }}
        </div>
        <div>
            {{ html()->text('telefono')->class('input input-bordered input-sm w-full')->placeholder('Telefono') }}
            @error('telefono')
                {{ $message }}
            @enderror
        </div>
        <div>
            {{ html()->label('Direccion de la empresa') }}
        </div>
        <div>
            {{ html()->text('direccion')->class('input input-bordered input-sm w-full')->placeholder('Direccion') }}
            @error('direccion')
                {{ $message }}
            @enderror
        </div>
    </div>
    <hr>
</div>
