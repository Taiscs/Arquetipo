
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste de Personalidade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h4"><b>Teste de Personalidade</b></span>
    </div>
</nav>
<div class="container">


<form class="formulario" name="" method="post" action="envio.php">


<!-- Card Informativo do teste -->
<div class="card">
    <div class="card-body">
        <b>*</b> Teste contém 15 perguntas,<br>
        <b>*</b>Procure um lugar calmo e tranquilo para realizá-lo, <br>
        <b>*</b>Não existem respostas certas ou erradas esta é uma ferramenta de auto-conhecimento
        a intenção é conhecer melhor o seu Perfil e potencial.<br>
        <b>*</b>Ao clicar em Próximo Você não poderá alterar suas respostas, mas não se preocupe seja o mais intuitivo Possível<br>
        Vamos Lá!
        </b>
    </div>
</div><p></p>

<div id="perguntas">
    <!-- Pergunta 1 -->
    <div class="pergunta" id="pergunta1">
        <div class="card text-bg-info mb-3" style="max-width: 22rem;">
            <div class="card-header"><b>Questão 1</b></div>
            <div class="card-body">
                <h5 class="card-title">Pergunta 1</h5>
                <p class="card-text">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vbtn-radio1" id="vbtn-radio1" value="Inocente" required>
                        <label class="form-check-label" for="vbtn-radio1">Opção 1</label><br>
                        <input class="form-check-input" type="radio" name="vbtn-radio1" id="vbtn-radio2" value="Sabio" required>
                        <label class="form-check-label" for="vbtn-radio2">Opção 2</label><br>
                        <input class="form-check-input" type="radio" name="vbtn-radio1" id="vbtn-radio3" value="Lider" required>
                        <label class="form-check-label" for "vbtn-radio3">Opção 3</label><br>
                        <input class="form-check-input" type="radio" name="vbtn-radio1" id="vbtn-radio4" value="Aventureiro" required>
                        <label class="form-check-label" for="vbtn-radio4">Opção 4</label>
                    </div>
                </p>
            </div>
        </div>
    </div>
    <!-- Pergunta 2 (copie e ajuste a pergunta) -->
    <div class="pergunta" id="pergunta2" style="display: none;">
        <div class="card text-bg-info mb-3" style="max-width: 22rem;">
            <div class="card-header"><b>Questão 2</b></div>
            <div class="card-body">
                <h5 class="card-title">Pergunta 2</h5>
                <p class="card-text">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vbtn-radio2" id="vbtn-radio5" value="Inocente" required>
                        <label class="form-check-label" for="vbtn-radio5">Opção 1</label><br>
                        <input class="form-check-input" type="radio" name="vbtn-radio2" id="vbtn-radio6" value="Sabio" required>
                        <label class="form-check-label" for="vbtn-radio6">Opção 2</label><br>
                        <input class="form-check-input" type="radio" name="vbtn-radio2" id="vbtn-radio7" value="Lider" required>
                        <label class="form-check-label" for="vbtn-radio7">Opção 3</label><br>
                        <input class="form-check-input" type="radio" name="vbtn-radio2" id="vbtn-radio8" value="Aventureiro" required>
                        <label class="form-check-label" for="vbtn-radio8">Opção 4</label>
                    </div>
                </p>
            </div>
        </div>
    </div>

    <!-- Adicione mais perguntas aqui conforme necessário -->

  <!-- Pergunta 3 (copie e ajuste a pergunta) -->
  <div class="pergunta" id="pergunta3" style="display: none;">
            <div class="card text-bg-info mb-3" style="max-width: 22rem;">
                <div class="card-header"><b>Questão 3</b></div>
                <div class="card-body">
                    <h5 class="card-title">Pergunta 3</h5>
                    <p class="card-text">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio3" id="vbtn-radio1"value="Inocente">
                    <label class="form-check-label" for="vbtn-radio1">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio3" id="vbtn-radio2" value="Sabio">
                    <label class="form-check-label" for="vbtn-radio1">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio3" id="vbtn-radio3" value="Lider">
                    <label class="form-check-label" for="vbtn-radio1">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio3" id="vbtn-radio4" value="Aventureiro">
                    <label class="form-check-label" for="vbtn-radio1">Opção 4</label>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>


     <!-- Pergunta 3 (copie e ajuste a pergunta) -->
     <div class="pergunta" id="pergunta4" style="display: none;">
            <div class="card text-bg-info mb-3" style="max-width: 22rem;">
                <div class="card-header"><b>Questão 4</b></div>
                <div class="card-body">
                    <h5 class="card-title">Pergunta 4</h5>
                    <p class="card-text">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio4" id="vbtn-radio1" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio1">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio4" id="vbtn-radio2" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio1">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio4" id="vbtn-radio3" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio1">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio4" id="vbtn-radio4" value="Aventureiro">
                    <label class="form-check-label" for="vbtn-radio1">Opção 4</label>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    

 <!-- Pergunta 3 (copie e ajuste a pergunta) -->
 <div class="pergunta" id="pergunta5" style="display: none;">
            <div class="card text-bg-info mb-3" style="max-width: 22rem;">
                <div class="card-header"><b>Questão 5</b></div>
                <div class="card-body">
                    <h5 class="card-title">Pergunta 5</h5>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio5" id="vbtn-radio1"value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio5">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio5" id="vbtn-radio2"value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio5">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio5" id="vbtn-radio3" value="Lider">
                    <label class="form-check-label" for="vbtn-radio5">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio5" id="vbtn-radio4" value="Aventureiro" >
                    <label class="form-check-label" for="vbtn-radio5">Opção 4</label>
                        </div>
                    </p>
                </div>
            </div>
        </div>


  <!-- Pergunta 6 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta6" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 6</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 6</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio6" id="vbtn-radio9" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio9">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio6" id="vbtn-radio10" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio10">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio6" id="vbtn-radio11" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio11">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio6" id="vbtn-radio12" value="Aventureiro">
                    <label class="form-check-label" for="vbtn-radio12">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>

<!-- Pergunta 7 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta7" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 7</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 7</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio7" id="vbtn-radio13" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio13">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio7" id="vbtn-radio14" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio14">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio7" id="vbtn-radio15" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio15">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio7" id="vbtn-radio16" value="Aventureiro" >
                    <label class="form-check-label" for="vbtn-radio16">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>

<!-- Pergunta 8 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta8" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 8</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 8</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio8" id="vbtn-radio17" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio17">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio8" id="vbtn-radio18" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio18">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio8" id="vbtn-radio19" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio19">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio8" id="vbtn-radio20" value="Aventureiro" >
                    <label class="form-check-label" for="vbtn-radio20">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>

<!-- Pergunta 9 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta9" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 9</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 9</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio9" id="vbtn-radio21" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio21">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio9" id="vbtn-radio22" value="Sabio">
                    <label class="form-check-label" for="vbtn-radio22">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio9" id="vbtn-radio23" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio23">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio9" id="vbtn-radio24" value="Aventureiro">
                    <label class="form-check-label" for="vbtn-radio24">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>

<!-- Pergunta 10 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta10" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 10</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 10</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio10" id="vbtn-radio25" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio25">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio10" id="vbtn-radio26" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio26">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio10" id="vbtn-radio27" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio27">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio10" id="vbtn-radio28" value="Aventureiro">
                    <label class="form-check-label" for="vbtn-radio28">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>

<!-- Pergunta 11 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta11" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 11</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 11</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio11" id="vbtn-radio29" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio29">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio11" id="vbtn-radio30" value="Sabio">
                    <label class="form-check-label" for="vbtn-radio30">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio11" id="vbtn-radio31" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio31">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio11" id="vbtn-radio32" value="Aventureiro" >
                    <label class="form-check-label" for="vbtn-radio32">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>

<!-- Pergunta 12 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta12" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 12</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 12</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio12" id="vbtn-radio33" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio33">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio12" id="vbtn-radio34" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio34">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio12" id="vbtn-radio35" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio35">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio12" id="vbtn-radio36" value="Aventureiro">
                    <label class="form-check-label" for="vbtn-radio36">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>


        
   <!-- Pergunta 13 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta13" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 13</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 13</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio13" id="vbtn-radio37" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio37">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio13" id="vbtn-radio38" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio38">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio13" id="vbtn-radio39"  value="Lider" >
                    <label class="form-check-label" for="vbtn-radio39">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio13" id="vbtn-radio40"  value="Aventureiro">
                    <label class="form-check-label" for="vbtn-radio40">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>

<!-- Pergunta 14 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta14" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 14</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 14</h5>
            <p class= "card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio14" id="vbtn-radio41" value="Inocente" >
                    <label class="form-check-label" for="vbtn-radio41">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio14" id="vbtn-radio42" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio42">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio14" id="vbtn-radio43" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio43">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio14" id="vbtn-radio44" value="Aventureiro" >
                    <label class="form-check-label" for="vbtn-radio44">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>

<!-- Pergunta 15 (copie e ajuste a pergunta) -->
<div class="pergunta" id="pergunta15" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Questão 15</b></div>
        <div class="card-body">
            <h5 class="card-title">Pergunta 15</h5>
            <p class="card-text">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vbtn-radio15" id="vbtn-radio45" value="Inocente"  >
                    <label class="form-check-label" for="vbtn-radio45">Opção 1</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio15" id="vbtn-radio46" value="Sabio" >
                    <label class="form-check-label" for="vbtn-radio46">Opção 2</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio15" id="vbtn-radio47" value="Lider" >
                    <label class="form-check-label" for="vbtn-radio47">Opção 3</label><br>
                    <input class="form-check-input" type="radio" name="vbtn-radio15" id="vbtn-radio48" value="Aventureiro">
                    <label class="form-check-label" for="vbtn-radio48">Opção 4</label>
                </div>
            </p>
        </div>
    </div>
</div>


<!-- Div de resultado -->
<div id="resultado" style="display: none;">
    <div class="card text-bg-info mb-3" style="max-width: 22rem;">
        <div class="card-header"><b>Resultado</b></div>
        <div class="card-body">
            <h5 class="card-title">Seu resultado:</h5>

            <div class="form-group">
                <label for="input-resultado" name="label-resultado" id="label-resultado">Descreva a ocorrência:</label>
                <!-- Adicione um campo de entrada oculto para armazenar o resultado -->
                <input type="hidden" name="resultado" id="input-resultado">
            </div>
            <p class="card-text">
                <!-- Aqui será exibido o resultado com base nas respostas escolhidas -->
            </p>
        </div>
    </div>
</div>

<div id="contato" style="display: none;">
    <h5> contato</h5>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="telefone" class="form-control" name="telefone" id="telefone" required>
    </div>
</div>

<button class="btn btn-primary" id="btn-proximo">Próximo</button>
<button class="btn btn-success" id="btn-resultado" style="display: none;">Ver Resultado</button>



<script>
    // Rastrear o número da pergunta atual
    let perguntaAtual = 1;

    // Variável para armazenar o resultado
    let resultado = '';

    // Referência aos elementos HTML
    const perguntas = document.querySelectorAll('.pergunta');
    const btnProximo = document.querySelector('#btn-proximo');
    const btnResultado = document.querySelector('#btn-resultado');
    const divResultado = document.querySelector('#resultado');
    const divContato = document.querySelector('#contato');
    const btnEnviar = document.querySelector('#btn-enviar');

    // Adicionar um ouvinte de clique para o botão Próximo
    btnProximo.addEventListener('click', function () {
        // Validar se alguma opção foi selecionada para a pergunta atual
        const perguntaAtualElement = document.querySelector(`#pergunta${perguntaAtual}`);
        const selectedValue = perguntaAtualElement.querySelector('input[name="vbtn-radio' + perguntaAtual + '"]:checked');
        if (!selectedValue) {
            alert('Por favor, selecione uma opção antes de prosseguir.');
            return;
        }

        perguntaAtualElement.style.display = 'none';
        perguntaAtual++;

        if (perguntaAtual <= 15) {
            const proximaPergunta = document.querySelector(`#pergunta${perguntaAtual}`);
            proximaPergunta.style.display = 'block';
        }

        if (perguntaAtual === 16) {
            // Todas as perguntas foram respondidas, mostrar div de resultado
            divResultado.style.display = 'none';
            divContato.style.display = 'block';
            btnProximo.style.display = 'none';
            btnResultado.style.display = 'block';
        }
    });

    // Adicionar um ouvinte de clique para o botão Resultado
    btnResultado.addEventListener('click', function () {
        // Exibir o resultado após o clique no botão "Ver Resultado"
        divResultado.style.display = 'block';
        btnProximo.style.display = 'none';
        btnResultado.style.display = 'none';
        // Chamar função para calcular e exibir o resultado
        calcularResultado();

        // Defina o valor do campo de entrada oculto 'input-resultado' com o resultado
        const resultadoInput = document.getElementById('input-resultado');
        resultadoInput.value = resultado;
    });

    // Função para calcular o resultado com base nas respostas
    function calcularResultado() {
        const respostasPorCategoria = {
            Inocente: 0,
            Sabio: 0,
            Lider: 0,
            Aventureiro: 0
        };

        for (let i = 1; i <= 15; i++) {
            const selectedValue = document.querySelector('input[name="vbtn-radio' + i + '"]:checked');
            if (selectedValue) {
                const categoria = selectedValue.value;
                respostasPorCategoria[categoria]++;
            }
        }

        let respostaMaisComum = '';
        let contagemMaisComum = 0;

        for (const categoria in respostasPorCategoria) {
            const contagem = respostasPorCategoria[categoria];
            if (contagem > contagemMaisComum) {
                respostaMaisComum = categoria;
                contagemMaisComum = contagem;
            }
        }

        // Armazenar o resultado na variável 'resultado'
        resultado = respostaMaisComum;

        // Exibir o resultado na label da div de resultado
        const labelResultado = document.getElementById('label-resultado');
        labelResultado.textContent = 'Seu resultado: ' + respostaMaisComum;
    }

    // Adicionar um ouvinte de clique para o botão Enviar
    btnEnviar.addEventListener('click', function () {
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const telefone = document.getElementById('telefone').value;

        // Realizar validações necessárias

        // Enviar dados para o arquivo envio.php
        const formData = new FormData();
        formData.append('nome', nome);
        formData.append('email', email);
        formData.append('telefone', telefone);
        formData.append('resultado', resultado); // Agora enviamos o resultado

        fetch('envio.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                alert(data); // Exibe uma mensagem de confirmação
                // Após o envio bem-sucedido, você pode redirecionar o usuário para a página "index" aqui
                window.location.href = 'index.html'; // Substitua 'index.html' pelo caminho correto da sua página index
            })
            .catch(error => {
                alert('Erro no envio do formulário');
            });
    });
</script>
</body>
</html>



