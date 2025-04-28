<h1>Reservar Sala</h1>

<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
    Sala:
    <select name="sala_id">
        @foreach($salas as $sala)
            <option value="{{ $sala->id }}">{{ $sala->nome }} (Capacidade: {{ $sala->capacidade }})</option>
        @endforeach
    </select><br>
    
    Usuário: <input type="text" name="usuario"><br>
    Data: <input type="date" name="data"><br>
    Horário: <input type="time" name="horario"><br>
    <button type="submit">Reservar</button>
</form>
