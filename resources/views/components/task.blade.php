@if($data ?? '')
    <div class="task">
        <div class="title">
            <form method="POST" action="{{route('task.toggle', ['id' => $data['id']])}}">
                @csrf

                <input
                    type="checkbox"
                    name="is_done"
                    @if($data['is_done']) checked @endif
                    onchange="this.form.submit()"
                >
            </form>

            <div class="title_label">{{$data['title'] ?? ''}}</div>
        </div>
        <div class="priority">
            <div class="sphere"></div>
            <div>{{$data['category']->title ?? ''}}</div>
        </div>
        <div class="actions">
            <a href="{{route('task.show', ['id' => $data['id']])}}"> <img src="/assets/images/icon-edit.png"></a>

            <form method="POST" action="{{route('task.delete', ['id' => $data['id']])}}">
                @csrf

                <button type="submit"> <img src="/assets/images/icon-delete.png"></button>
            </form>
        </div>
    </div>
@endif
