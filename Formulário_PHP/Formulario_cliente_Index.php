<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    
<h1>Formulário do Cliente &#129297</h1>

   <form action="form_cliente.php" method="post"
     <!--method="get" -->
     
  <label for="nome"> Nome: </label>
     <br>
  <input type="text" id="nome" name="nome">
     <br>
  <label for="cpf">CPF(Cadastro de pessoas físicas):</label>
     <br>
  <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
     <br>
  <label for="telefone">Telefone com DDD:</label>
     <br>
  <input type="text" id="telefone" name="telefone" placeholder="(00)000000000">
     <br><br>
     <h3 style="color:blue;"><u>Sexo:</u></h3>
  <input type="radio" name="sexo" value="Masculino"/>Masculino
     <br>
  <input type="radio" name="sexo" value="Feminino"/>Feminino
     <br>
  <input type="radio" name="sexo" value="Outros"/>Prefiro não me identificar  
     <br>
     <h3> Marque a opção de acordo com sua posse </h3>
  <input type="checkbox" name="materiais" value="materias">
  <label for="geladeira"> Você tem geladeira em casa</label> 
     <br>
  <input type="checkbox" name="materiais" value="materias">
  <label for="maquina"> Você tem máquina de lavar em casa</label
     <br><br>
     <input type="checkbox" name="materiais" value="materias">
  <label for="carro"> Você tem carro em casa</label
     <br><br>
     <input type="checkbox" name="materiais" value="materias">
  <label for="computador"> Você tem computador em casa</label
     <br><br>
     <input type="checkbox" name="materiais" value="materias">
  <label for="energia"> Você tem energia elétrica em casa</label
     <br><br>
          <input type="checkbox" name="materiais" value="materias">
  <label for="energia"> Você tem máquina de lavar louça em casa</label
     <br><br><br>
     <input type="submit" value="Salvar" />
    
</form>
      
  </body>
</html>