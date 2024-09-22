<div>
    {{ html()->label('name') }}
    {{ html()->text('name') }}
    @error('name')
        {{ $message }}
    @enderror
    {{ html()->label('body') }}
    {{ html()->text('body') }}
    @error('body')
        {{ $message }}
    @enderror
    {{ html()->label('last') }}
    {{ html()->select('last', $status = [
        1 => 'si',
        0  => 'no'
    ])->placeholder("Seleccion ...") }}
    @error('last')
        {{ $message }}
    @enderror
    {{ html()->hidden('modulo_id')->value($modulo->id) }}
    @error('modulo_id')
        {{ $message }}
    @enderror
</div>
