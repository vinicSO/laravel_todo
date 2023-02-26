<div class="input_area">
    @foreach($options as $option)
        <button
            class="{{$option['class']}}"
            type="{{$option['type']}}"
        >
            {{$option['label']}}
        </button>
    @endforeach
</div>
