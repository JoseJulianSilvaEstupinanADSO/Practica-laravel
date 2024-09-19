<div>
    {{ html()->label('name') }}
    {{ html()->text('name') }}
    @error('name')
        {{ $message }}
    @enderror
    {{ html()->label('telefono') }}
    {{ html()->text('telefono') }}
    @error('telefono')
        {{ $message }}
    @enderror
    {{ html()->label('direccion') }}
    {{ html()->text('direccion') }}
    @error('direccion')
        {{ $message }}
    @enderror
</div>
