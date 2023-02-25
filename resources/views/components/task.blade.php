@if($data ?? '')
    <div class="task">
        <div class="title">
            <input type="checkbox"
                   @if($data['done']) checked @endif
            >
            <div class="title_label">{{$data['title'] ?? ''}}</div>
        </div>
        <div class="priority">
            <div class="sphere"></div>
            <div>{{$data['category'] ?? ''}}</div>
        </div>
        <div class="actions">
            <a href="http://localhost:8000/tasks/edit/{{$data['id']}}"> <img src="/assets/images/icon-edit.png"></a>
            <a href="http://localhost:8000/tasks/delete/{{$data['id']}}"> <img src="/assets/images/icon-delete.png"></a>
        </div>
    </div>
@endif
