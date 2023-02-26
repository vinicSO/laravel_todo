<x-layout>

    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar Tarefa
        </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header_line"></div>
            <div class="graph_header_date">
                <img src="assets/images/icon-prev.png">

                13 de Dez

                <img src="assets/images/icon-next.png">

            </div>
        </div>

        <div class="graph_header_subtitle">
            Tarefas: <b>3/6</b>
        </div>

        <div class="graph_placeholder">

        </div>

        <div class="tasks_left">
            <img src="/assets/images/icon-info.png">
            <p class="tasks_left_label">Restam 3 tarefas para serem realizadas</p>
        </div>
    </section>

    <section class="list">
        <div class="list_header">
            <select class="list_header_select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>

        <div class="task_list">

            @php
                $tasks = [
                    ['id' => '1', 'done' => false, 'title' => 'Minha primeira Task', 'category' => 'Categoria 1'],
                    ['id' => '2', 'done' => true, 'title' => 'Minha segunda Task', 'category' => 'Categoria 2'],
                    ['id' => '3', 'done' => false, 'title' => 'Minha terceira Task', 'category' => 'Categoria 1']
                ]
            @endphp
            <x-task :data=$tasks[0] />
            <x-task :data=$tasks[1] />
            <x-task :data=$tasks[2] />
            <x-task />
        </div>
    </section>
</x-layout>
