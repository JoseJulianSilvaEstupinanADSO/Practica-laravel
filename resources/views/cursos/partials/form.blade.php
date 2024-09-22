<div>
    {{ html()->label('title') }}
    {{ html()->text('title') }}
    @error('title')
        {{ $message }}
    @enderror
    {{ html()->label('body') }}
    {{ html()->text('body') }}
    @error('body')
        {{ $message }}
    @enderror
    {{ html()->label('doc_instructor') }}
    {{ html()->text('doc_instructor') }}
    @error('doc_instructor')
        {{ $message }}
    @enderror
    {{ html()->label('status') }}
    {{ html()->select('status', $status = [
        1 => 'Activo',
        0  => 'Inactivo'
    ])->placeholder("Seleccion ...") }}
    @error('status')
        {{ $message }}
    @enderror
    {{ html()->label('organization') }}
    {{ html()->select('organization', $organizations)->placeholder("Seleccion ...") }}
    @error('organization')
        {{ $message }}
    @enderror
</div>
