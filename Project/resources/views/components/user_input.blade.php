<div class="grid space-y-2 ">
    <label for="email">Email</label>
    <input type="email" name="login_email" id="email" placeholder="Enter email"
        class="border rounded-lg p-2" value="{{old('login_email')}}">
    <span class="text-red-600 text-sm ">* <small>
            @error('login_email')
                {{$message}}
            @enderror
        </small></span>
</div>
<!-- resources/views/form.blade.php -->
<!-- <div>
    <label for="{{ $name }}">{{ $label }}:</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" required>
</div> -->