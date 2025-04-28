<h1>Cadastrar Sala</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="{{ route('salas.store') }}" method="POST">
    @csrf
    Nome: <input type="text" name="nome"><br>
    Capacidade: <input type="number" name="capacidade"><br>
    <button type="submit">Cadastrar</button>
</form>
