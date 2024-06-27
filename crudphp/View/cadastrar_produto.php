<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <section >
        <div >
            <h1>Cadastro de Produto:</h1>
            <form action="/crudphp/Controller/produto_controller.php" method="POST">
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome"/><br><br>

                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria">
                    <option value="Enlatados">Enlatados</option>
                    <option value="Biscoitos">Biscoitos</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Alcoolicos">Alcoólicos</option>
                    <option value="Sobremesas">Sobremesas</option>
                    <option value="Frios">Frios</option>
                    <option value="Molhos">Molhos</option>
                    <option value="Grãos">Grãos</option>
                    <option value="Cereais">Cereais</option>
                    <option value="Condimentos">Condimentos</option>
                    <option value="Vegetais">Vegetais</option>
                    <option value="Frutas">Frutas</option>
                </select><br><br>
                
                <label for="valor">Valor</label><br>
                <input type="text" name="valor" id="valor"/><br><br>

                <label for="validade">Validade</label><br>
                <input type="text" name="validade" id="validade"/><br><br>

                <input type="submit" value="Cadastrar"/><br><br>
            </form>
        </div>
    </section>
</body>
</html>

