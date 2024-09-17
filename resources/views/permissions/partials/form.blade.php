<div>
    {{ html()->label('name') }}
    {{ html()->text('name') }}
    @error('name')
        {{ $message }}
    @enderror
</div>
