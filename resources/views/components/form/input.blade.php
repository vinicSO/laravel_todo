<div class="input_area">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>

    <input
        type="{{empty($type) ? 'text' : $type}}"
        id="{{$name}}"
        name="{{$name}}"
        type="text"
        placeholder="{{$placeholder ?? ''}}"
        value="{{empty($value) ? '' : $value}}"
        {{empty($required) ? '' : 'required'}}
    />
</div>
