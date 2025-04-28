<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Salas de Reunião</title>
</head>
<body>
    <h1>Salas de Reunião Cadastradas</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('salas.create') }}">Cadastrar Nova Sala</a> |
    <a href="{{ route('reservas.index') }}">Ver Reservas Ativas</a>

    <table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
        <thead>
            <tr>
                <th>Nome da Sala</th>
                <th>Capacidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($salas as $sala)
                <tr>
                    <td>{{ $sala->nome }}</td>
                    <td>{{ $sala->capacidade }} pessoas</td>
                    <td>
                        <a href="{{ route('reservas.create', ['sala_id' => $sala->id]) }}">Reservar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhuma sala cadastrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
