<x-layout page="ToDo | Nova Tarefa">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form>
            <div class="input_area">
                <label for="title">Título da tarefa</label>
                <input id="title" name="title" type="text" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="input_area">
                <label for="due_date">Data de Realização</label>
                <input id="due_date" name="due_date" type="date" required>
            </div>
            <div class="input_area">
                <label for="category">Categoria</label>
                <select id="category" name="category" required>
                    <option selected disabled value>Selecione a categoria</option>
                </select>
            </div>
            <div class="input_area">
                <label for="description">Descrição da tarefa</label>
                <textarea id="description" name="description" placeholder="Digite uma descrição para sua tarefa"></textarea>
            </div>
        </form>
    </section>
</x-layout>
