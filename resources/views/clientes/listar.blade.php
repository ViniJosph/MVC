<html>

<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
        </tr>
        @foreach($clientes as $cliente)
        <tr>
        <td>{{$cliente->nome}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
