<label for="{{$name}}" class="form-label">
    @php
    echo Str::ucfirst($cn ?? $name)
    @endphp
</label>
<select class="form-select rounded-0" name="{{$name}}">
    @php
    $cid = $oldcat ?? 0;
    @endphp
    @foreach($lists as $list)
    <option value="{{$list->id}}" <?php echo $cid == $list->id ? 'selected' : '';?>>{{$list->name}}</option>
    @endforeach
</select>
