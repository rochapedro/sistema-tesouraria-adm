<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página de criação</h1>
    <form action="{{ route('administrative-codes.store') }}" method="POST">
        @csrf
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description">
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>