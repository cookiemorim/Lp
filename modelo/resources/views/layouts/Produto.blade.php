<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('produto.store')}}" method="POST">
        @csrf

        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do produto" required><br><br>

        <label>Valor: </label>
        <input type="text" name="valor" id="valor" placeholder="Usar '.' separar real do centavo" required><br><br>

        <label>descrição: </label>
        <input type="date" name="vencimento" id="vencimento"  required><br><br>

        <button type="submit">Cadastrar</button>

    </form>

    
    
</body>
</html>