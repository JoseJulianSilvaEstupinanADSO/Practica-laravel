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
    {{ html()->label('cant_subs') }}
    {{ html()->text('cant_subs') }}
    @error('cant_subs')
        {{ $message }}
    @enderror
    
</div>
