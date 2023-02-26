<x-layout page="ToDo | Tarefa">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Tarefa</h1>
        <form method="POST" action="{{route('task.update', ['id' => $task->id])}}">
            @csrf

            <x-form.input
                label="Título da tarefa"
                name="title"
                placeholder="Digite o título da tarefa"
                value="{{$task->title}}"
                required
            />

            <x-form.input
                label="Data de Realização"
                name="due_date"
                type="datetime-local"
                value="{{$task->due_date}}"
                required
            />

            <x-form.select label="Categoria" name="category_id" required>
                @foreach($categories as $category)

                    <option
                        value="{{$category->id}}"

                        @if($category->id == $task->category_id) selected @endif
                    >
                        {{$category->title}}
                    </option>
                @endforeach

            </x-form.select>

            <x-form.textarea
                label="Descrição da tarefa"
                name="description"
                placeholder="Digite uma descrição para sua tarefa"
                value="{{$task->description}}"
            />

            <x-form.optionsarea
                :options="[
                    [
                        'class' => 'btn btn-primary',
                        'type' => 'submit',
                        'label' => 'Salvar'
                    ]
                ]"
            />

        </form>
    </section>
</x-layout>
