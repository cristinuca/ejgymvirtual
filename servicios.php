
<?php include  'log/header.php'?>

<link rel="stylesheet" href="styleserv.css">

    

<style>
*{
box-sizing: border-;
margin: 0;
padding: 0;

}
*container{
opacity: .3;
}

.emergente{

width: 400px;
height: 200px;
position: fixed;
background-color: rgb(192, 122, 17);
top: 50%;
margin-left: 200px;
margin-top: 100px;
border: 1px solid darkolivegreen;
padding: 20px;
text-align: center;
box-shadow: 10px 10px 10px wheat;
}


.emergente p{
    font-size: 24px;
}


.emergente .boton{
font-size: 18px;
padding: 10px;
border: 10px solid rgb(107, 255, 129);
border-radius: 5px;
display: inline-block;
width: 150px;
margin-top: 32px;
box-shadow: 10px 10px 10px rgb(168, 29, 243);



}

.menor{background-color: rgb(240, 166, 255);}
.mayor{background-color: rgb(188, 90, 227);}
.menor:hover{background-color: rgb(0, 255, 140);}
.mayor:hover{background-color: rgb(100, 255, 175);}
</style>






<script>

window.onload = init;
function init(){
document.querySelector(" .emergente .menor").addEventListener("click" , adios);
document.querySelector(" .emergente .mayor").addEventListener("click" , hola);


}

function adios(){
location.href="rutina.php";
}


function hola(){
location.href="nutri.php";

}




</script>


<script src="j"></script>

</style>





</head>


<body style="background-color: gray; background-image: url('log/img/servicio.jpg'); background-repeat: no-repeat;  " id="body2" >
    


<div class="emergente"
style="margin-left: 1450px; margin-top: -150px; width: 400px; height: 400px; background-image: url('log/img/serv.jpg'); background-repeat: no-repeat; background-size: cover;  "
>
<p>Elige una Opcion</p>
<div class="boton menor">Rutinas</div>
<div class="boton mayor">Nutricion</div>


</div>


<div
    class="container"
    style="margin-top: 800px; margin-left: 50px;"

>
   


<!----BOOTSTRAP /PAGINATION, la explicacion esta en imc.php aqui--->
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="imc.php">Calcula IMC</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

</div>
</body>
