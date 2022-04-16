

<?php 
 
 $categorias= [];
 $categorias[] ='infantil';
 $categorias[] ='adolecente';
 $categorias[] ='adulto';
 $categorias[] ='idoso';

// VALIDAR INFORMAÇOES 
if(empty($nome)){
  echo 'O nome não pode estar vazio';
  return;
}

if(strlen($nome) <3){
  echo 'O nome deve conter mais de 3 caracteres';
  return;
}

if(strlen($nome) > 40){
  echo 'Nome  não aceito';
  return;
}

//----------------------------------
 $nome = $_POST['nome'];
 $idade = $_POST['idade'];

 if($idade >= 6 && $idade <= 12)
 {
    for($i = 0; $i <= count($categorias); $i++){

      if($categorias[$i] == 'infantil')
        echo "O nadador " .$nome." compete na categoria infantil";
      
    }
 }
 else if($idade >= 13 && $idade <= 18){
  for($i = 0; $i <= count($categorias); $i++){

    if($categorias[$i] == 'adolecente')
      echo "O nadador " .$nome." compete na categoria adolecente";
    
  }
 }
 else{
  for($i = 0; $i <= count($categorias); $i++){

    if($categorias[$i] == 'adulto')
      echo "O nadador " .$nome." compete na categoria adulto";
    
  }
 }

 