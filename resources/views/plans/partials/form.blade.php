<div>
    {{ html()->label('name') }}
    {{ html()->text('name') }}
    @error('name')
        {{ $message }}
    @enderror
    {{ html()->label('precio') }}
    {{ html()->text('precio') }}
    @error('precio')
        {{ $message }}
    @enderror
    {{ html()->label('body') }}
    {{ html()->text('body') }}
    @error('body')
        {{ $message }}
    @enderror
    
</div>
