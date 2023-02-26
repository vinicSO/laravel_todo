@if($data ?? '')
    <div class="task">
        <div class="title">
            <input type="checkbox"
                   @if($data['is_done']) checked @endif
            >
            <div class="title_label">{{$data['title'] ?? ''}}</div>
        </div>
        <div class="priority">
            <div class="sphere"></div>
            <div>{{$data['category']->title ?? ''}}</div>
        </div>
        <div class="actions">
            <a href="{{route('task.show', ['id' => $data['id']])}}"> <img src="/assets/images/icon-edit.png"></a>
            <a href="#"> <img src="/assets/images/icon-delete.png"></a>
        </div>
    </div>
@endif
