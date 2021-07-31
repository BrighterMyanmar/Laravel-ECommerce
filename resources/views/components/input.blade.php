<div class="mb-3">
    <label for="{{$name}}" class="form-label">
        @php 
            echo Str::ucfirst($cn ?? $name)
        @endphp
    </label>
    <input type="{{$type  ?? "text"}}" 
    name="{{$name}}"
    class="form-control rounded-0" id="{{$name}}" value="{{$value ?? ""}}">
</div>
