<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <style type="text/css">
        #tamanhoContainer {
            width: 500px;

        }
        #botao {
            background-color: #792A03; /*cor de fundo*/
            color: #ffffff /*cor da lebra*/
        }
    </style>

</head>
<body>
<div class="container" id="tamanhoContainer" style="margin-top: 40px">
    <h4>Formulário de Cadastro</h4>
    <form style="margin-top: 20px;">
        <div class="mb-3">
            <label>Nro Produto</label>
            <input type="number" class="form-control" placeholder="Insira o número do Produto">
        </div>
        <div class="mb-3">
            <label>Nome Produto</label>
            <input type="number" class="form-control" placeholder="Insira o nome do Produto">
        </div>
        <div class="mb-3">
            <label>Categoria</label>
            <select class="form-select">
                <option selected>Escolha a Categoria</option>
                <option value="1">Periféricos</option>
                <option value="2">Hardware</option>
                <option value="3">Sofware</option>
                <option value="4">Celulares</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" class="form-control" placeholder="Insira a Quantidade do Produto">
        </div>
        <div class="mb-3">
            <label>Fornecedor</label>
            <select class="form-select">
                <option selected>Escolha o Fornecedor</option>
                <option value="1">Forn A</option>
                <option value="2">Forn B</option>
                <option value="3">Forn C</option>
                <option value="4">Forn D</option>
            </select>
        </div>
        <div style="text-align: right;">
        <button type="submit" id= "botao"class="btn btnsm">Cadastrar</button>
        </div>
    </form>
</div>    
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>