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
    {{ html()->hidden('curso_id')->value($curso->id) }}
    @error('curso_id')
        {{ $message }}
    @enderror
</div>
