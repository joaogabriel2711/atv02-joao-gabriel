<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulario-psw</title>
</head>


<body>

    <div class="cabecalho">

        <h1 style="text-align: center;">FORMULÁRIO PSW</h1>

    </div>

    <div class="nav">

        <ul>
            <li><a href="#nome">Nome</a></li>
            <li><a href="#sexo">Sexo</a></li>
            <li><a href="#nascimento">Nascimento</a></li>
            <li><a href="#transporte">Transporte</a></li>
            <li><a href="#ano">Ano E.M.</a></li>
            <li><a href="#cursos">Curso</a></li>
            <li><a href="#materia">Matéria</a></li>
            <li><a href="#cor">Cor</a></li>
            <li><a href="#email">E-mail</a></li>
            <li><a href="#senha">Senha</a></li>
            <li><a href="#fone">Telefone</a></li>
            <li><a href="#foto">Foto</a></li>
            <li><a href="#feedback">Feedback</a></li>
        </ul> 

<br>
<br>        


    </div>


    <div class="forms">

<br>
<br>


        <div id="nome">
            <label for="nome"> <strong>Nome Completo: </strong> </label><br><br>
            <input type="text" id="nome" name="nome">
        </div>
<br>
<br>
         
        <div id="sexo">
            <p> <strong> Sexo: </strong> </p>
            <input type="radio" id="masc" name="sexo" value="masculino">
            <label for="masc">Masculino</label><br>
            <input type="radio" id="femi" name="sexo" value="feminino">
            <label for="femi">Feminino</label><br>
            <input type="radio" id="outr" name="sexo" value="outro">
            <label for="outr">Outro</label>
        </div>

<br>
<br>
<br>
    
        <div id="nascimento">
            <label for="nascimento"> <strong> Data de Nascimento: </strong> </label> <br> <br>
            <input type="date" id="nascimento" name="nascimento">
        </div>

<br>
<br>
 
        <div id="transporte">
            <p> <strong> Meio de Transporte: </strong> </p>       
            <input type="checkbox" id="veiculo1" name="veiculo1" value="bicicleta">
            <label for="veiculo1"> Bicicleta</label><br>
            <input type="checkbox" id="veiculo2" name="veiculo2" value="carro">
            <label for="veiculo2"> Carro</label><br>
            <input type="checkbox" id="veiculo3" name="veiculo3" value="moto">
            <label for="veiculo3"> Moto</label><br>
            <input type="checkbox" id="veiculo4" name="veiculo4" value="outro">
            <label for="veiculo3"> Outro</label>
        </div>
<br>
<br>
<br> 

        <div id="ano">
            <label for="ano-em"> <strong> Ano do Ensino Médio (1 a 3): </strong> </label> <br> <br> 
            <input type="number" id="ano-em" name="ano-em" min="1" max="3" placeholder="">
        </div>

<br>
<br>
<br>

        <div id="cursos">
            <label for="cursos"> <strong> Curso Integrado ao Ensino Médio: </strong> </label> <br><br>
            <select id="cursos" name="cursos">
              <option value="agropecuaria">Agropecuária</option>
              <option value="agroindustria">Agroindústria</option>
              <option value="informatica" selected>Infomática</option>
            </select> 
        </div>

<br>
<br>
    
        <div id="materia">
            <p> <strong> Matéria Preferida: </strong> </p>
            <input list="materias" placeholder="Ex. Matemática">
             <datalist id="materias">
              <option value="Matemática">
              <option value="Português">
              <option value="Inglês">
              <option value="PSW">
              <option value="ASW">
              <option value="Filosofia">
              <option value="História">
              <option value="Geografia">
              <option value="PI">
              <option value="Sociologia">
             </datalist>
        </div>

<br>
<br>
<br>

        <div id="cor">
            <label for="cor-pref"> <strong> Cor Preferida: </strong><br><br> </label>
            <input type="color" id="cor-pref" name="cor-pref">
        </div>

<br>
<br>
<br>    

        <div id="email">
            <label for="email"> <strong> E-mail: </strong> </label> <br> <br>
            <input type="email" id="email" name="email" placeholder="Ex. xxxxxx@xxxx.com">
        </div>

<br>
<br>
<br>

        <div id="senha">
            <label for="senha"><strong> Senha:</strong></label><br><br>
            <input type="password" id="senha" name="senha" minlength="8" placeholder="Ex. xxxxxxxx">
        </div>

<br>
<br>
<br>

        <div id="fone">
            <label for="fone"><strong> Telefone: </strong></label> <br> <br>
            <input type="tel" id="fone" name="fone" pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}" placeholder="Ex. xx 9xxxx-xxxx">
        </div>

<br>
<br>
<br>

        <div id="foto">
            <label for="foto-pessoal"> <strong> Insira sua Foto: </strong> </label> <br> <br>
            <input type="file" id="foto-pessoal" name="foto-pessoal">
        </div>

<br>
<br>
<br>  



        <div id="feedback">
            <fieldset>
            <legend> <strong> Feedback: </strong> </legend>
            <textarea name="feedback" rows="3" cols="30">
Deixe aqui seu feedback sobre o formulário!
            </textarea> 

            <button type="button" onclick="alert('Pois é com o ponto de vista de outras pessoas que conseguimos enxergar melhor o nosso projeto!')">Por que deixar um feedback?</button> 
            </fieldset>
        </div>

<br>
<br> 
        <div id="confirmar">
            <input type="submit" value="Confirmar">
        </div>

        <div id="resetar">
            <input type="reset" value="Resetar">
        </div>
         

    </div>

<br>
<br>
<br>
<br>
    <div class="rodape">
        <h3>© TODOS OS DIREITOS RESERVADOS À João Gabriel Tunes da Costa Leite 2AII</h3>
    </div>

</body>
</html>