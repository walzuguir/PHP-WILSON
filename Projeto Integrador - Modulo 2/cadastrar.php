<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="img/senac-logo-4.png" />
    <title>Cadastro</title>
    <style> 
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            height: 100%;

        }
        .box{
            color: white;
            position: relative;
            top: 400px;
            left: 696px;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 85%;
        }
        .imagem{
            width: 50px;
            transform: translate( 60px, 150px);
            position: relative;
 
        }
        .modal-title{
            position: relative;
            top: -1300px;
            width: 150px;
            transform: translate( 340px, 10px);
            text-decoration: none;    
        }
        .modal-body {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #ff8f00;
        border: none;
        border-radius: 15px;
        box-shadow: 0 14px #4169E1;
        transform: translate(278px, -250px);
        }

        .modal-body:hover {background-color: #ff0000}

        .modal-body:active {
        background-color: #4169E1;
        box-shadow: 0 5px #666;
        }
        .modal-body {
        display: inline-block;
        padding: 15px 25px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #ff8f00;
        border: none;
        border-radius: 15px;
        box-shadow: 0 14px #4169E1;
        transform: translate(240px, -1300px);
        }

        .modal-body:hover {background-color: #ff0000}

        .modal-body:active {
        background-color: #4169E1;
        box-shadow: 0 5px #666;
        }
        .botao1{
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #ff8f00;
        border: none;
        border-radius: 15px;
        box-shadow: 0 14px #4169E1;
        transform: translate(650px, -1296px);
        }
        .botao1:hover {background-color: #ff0000}
        .botao1:active {
        background-color: #4169E1;
        box-shadow: 0 5px #666;
        }
        .apostilas{
            width: 50px;
            transform: translate( 750px, -230px);
            position: relative;  
        }
        fieldset{
            border: 3px solid #ff8f00;
        }
        legend{
            border: 1px solid #4169E1;
            padding: 10px;
            text-align: center;
            background-color: #4169E1;
            border-radius: 8px;
        }
        .Titulo1{
            position: relative;
            text-align: center;
            border: 2px solid #ff8f00;
            border-radius: 100px;
            border-width: 5px;
            border-style: groove;
            width: 450px;
            transform: translate( 449px, 50px);
            font-family: Arial, Helvetica, sans-serif;
        }
        .inputBoxNome{
            position: relative;
            width: 239px;
        }
        .inputBoxEmail{
            position: relative;
            width: 239px;
            top: -57px;
            left: 40%;
            right: 40%;
        }
        .inputBoxTelefone{
            position: relative;
            width: 239px;
            top: -76px;
            left: 80%;
            right: 80%;
        }
        .inputBoxCidade{
            position: relative;
            width: 239px;
            top: -113px;
            left: 80%;
            right: 80%;
        }
        .inputBoxEstado{
            position: relative;
            width: 239px;
            top: -168px;
            left: 40%;
            right: 40%;
        }
        .inputBoxEndereço{
            position: relative;
            width: 239px;
            top: -57px;
            left: 5px;
            right: 5px;
        }
        .inputBoxBairro{
            position: relative;
            width: 239px;
            top: -112px;
            left: 40%;
            right: 40%;
        }
        .inputBoxNivelEscola
        {
            position: relative;
            width: 239px;
            top: -168px;
            left: 80%;
            right: 80%;
        }
        .inputBoxEstudaAonde{
            position: relative;
            width: 239px;
            top: -100px;
            left: 5px;
            right: 5px;
        }
        .inputBoxQoCurso{
            position: relative;
            width: 239px;
            top: -158px;
            left: 40%;
            right: 40%;
        }
        .inputBoxExperienciaÁrea{
            position: relative;
            width: 239px;
            top: -215px;
            left: 80%;
            right: 80%;
        }
        .inputBoxExpectativasPósCurso{
            position: relative;
            width: 239px;
            top: -100px;
            left: 5px;
            right: 5px;
        }
        .inputBoxOqLevouEscolher{
            position: relative;
            width: 239px;
            top: -60px;
            left: 40%;
            right: 40%;
        }
        .inputBoxMotivoMat{
            position: relative;
            width: 239px;
            top: -40px;
            left: 80%;
            right: 80%;

        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: -15px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="Titulo1">
    <h1>Cadastro do Perfil do Aluno</h1>
    </div>
    <div class="imagem">
    <img src="img/Usuario.png" alt="Usuario">
    </div>
    <div class="apostilas">
    <img src="img/Livros-removebg-preview.png" alt="Apostilas">
    </div>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Fórmulário do Aluno</b></legend>
                <br><br><br>
                <div class="inputBoxNome">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBoxEmail">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <div class="inputBoxTelefone">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br><br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBoxCidade">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBoxEstado">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBoxEndereço">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBoxBairro">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Bairro</label>
                </div>
                <br><br>
                <div class="inputBoxNivelEscola">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Nivel de escolaridade</label>
                </div>
                <br><br>
                <div class="inputBoxEstudaAonde">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Estuda aonde atualmente?</label>
                </div>
                <br><br>
                <div class="inputBoxQoCurso">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Qual o curso?</label>
                </div>
                <div class="inputBoxMotivoMat">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Motivo da matricula</label>
                </div>
                <div class="inputBoxOqLevouEscolher">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">O que te levou a escolher este curso?
                    </label>
                </div>
                <div class="inputBoxExperienciaÁrea">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Tem experiencia em área do curso?
                    </label>
                </div>      
                <div class="inputBoxExpectativasPósCurso">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Suas Expectativas pós-curso
                    </label>
                </div>                                                              
          </form>
        <br><br>
      <div>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Selecione uma foto</h5>
        </div>
        <div class="modal-body">
             <form action="enviarFoto.php" method="POST">
                 <input type="file"/>
            </form>
        </div>
        <a href="principal.php">
        <button class="botao1">Seu curso</button>
        </a>
      </div>
    </div>
  </div>
</body>
</html> 