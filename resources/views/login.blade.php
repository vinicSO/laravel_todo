<x-layout page="ToDo | Login">

    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>

    Login
    <a href="{{route('home')}}">Ir para home</a>
</x-layout>
