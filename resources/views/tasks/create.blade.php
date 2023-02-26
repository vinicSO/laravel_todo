<x-layout page="ToDo | Nova Tarefa">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form>

            <x-form.input label="Título da tarefa" name="title" placeholder="Digite o título da tarefa" required/>

            <x-form.input label="Data de Realização" name="due_date" type="date" required/>

            <x-form.select label="Categoria" name="category" required>
                <option>Valor qualquer</option>
            </x-form.select>

            <x-form.textarea label="Descrição da tarefa" name="description" placeholder="Digite uma descrição para sua tarefa"/>

            <x-form.optionsarea
                :options="[
                    [
                        'class' => 'btn btn-primary',
                        'type' => 'submit',
                        'label' => 'Criar Tarefa'
                    ],
                    [
                        'class' => 'btn',
                        'type' => 'reset',
                        'label' => 'Resetar'
                    ]
                ]"
            />

        </form>
    </section>
</x-layout>
