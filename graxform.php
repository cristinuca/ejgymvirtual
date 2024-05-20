
<?php include  'log/header.php'?>   <!---en este caso el footer esta vacio pq lo hice directamnte en el index, pero puedo
                                     hacerlo dentro del archivo footer y asi si qro ponerlo en todas las pags copio esta misma formula
                                     del php iclude cambiando el archivo y lo coloco abajo ya que es un footer ---->

    

<style>
*{margin:0;padding:0;box-sizing:border-box;}


#emergente{ 
position:absolute;
width:600px;
height:600px;
top:50%;
left:50%;
margin-top:-300px;
margin-left:-300px ;
background:url(log/img/giphy.gif) 0 0 no-repeat;
box-shadow: 0px 0px 50px darkgreen;
border-radius: 10px;
display: none;

}






</style>






<body style="background-color: rgb(243, 243, 166);">
   
<div id="emergente">

    <h2 style="margin-top: 200px; text-align: center; margin-top: 50px;">Será contactado en breve  <span style="color: aquamarine;font-size: 30px;">ok?</span></h2>


</div>



<script>
window.onload = init;
function init(){
setTimeout(susto,2000);


}

function susto(){
    document.getElementById("emergente").style.display="block";
    sonido = document.createElement("audio")
    sonido.src="vacasonido.mp3";
    document.getElementById("emergente").appendChild(sonido);
    sonido.play();
}




</script>

</body>
