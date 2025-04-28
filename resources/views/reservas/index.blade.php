<h1>Reservas Ativas</h1>

<table border="1">
    <tr>
        <th>Sala</th>
        <th>Usuário</th>
        <th>Data</th>
        <th>Horário</th>
    </tr>
    @foreach($reservas as $reserva)
    <tr>
        <td>{{ $reserva->sala->nome }}</td>
        <td>{{ $reserva->usuario }}</td>
        <td>{{ \Carbon\Carbon::parse($reserva->data)->format('d/m/Y') }}</td>
        <td>{{ $reserva->horario }}</td>
    </tr>
    @endforeach
</table>
