<?php require_once 'log/header.php'?>



<body style="background-image: url('log/img/imc.jpg'); background-size: cover; background-repeat: no-repeat;">
    








<form action="coneximc.php" style="text-align: center; margin-top: 300px; margin-left: 900px; width: 200px;">

    <input type="text" class="form-control" name="peso" id="" aria-describedby="helpid" placeholder="KILOS"><br>
    <input type="text" class="form-control" name="altura" id="" aria-describedby="helpid" placeholder="ALTURA">
    
    
    
    <button  type="submit" class="btn=primary text-center;">Calcular tu IMC</button>
    
    
    
    </form>

    <div
    class="container"
    style="margin-top: 400px; margin-right: 100px;"
>
   
</div>

  <!----- esto lo puse pq se me ocurrio, para pasar de una pagona a otra ,x ej para una pagina de fotos o lo q qras---->
    <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>    <!---en el href enlazas la pag donde se vaya---->
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="servicios.php">Servicios</a>  
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>   <!---pones las paginas q qras--->
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

</div>




</body>
