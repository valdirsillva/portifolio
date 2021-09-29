<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device=width, initial-scale=1">
	

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<script src="lightbox/lightbox-plus-jquery.min.js"></script>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



</head>
<body>



	  <div class="container">
	  	 <div class="galery-ci">
	  	  <div class="row">
	  	  	 <?php
              $count = 20;
              for ($i=0; $i < 20; $i++) { ?>
              	<div class="col-md-3">
	  	  	   	   <a href="/galeria/certificados/{$i}.jpg" data-lightbox="mygallery" data-title="Comunicados internos"><img src="images/Comunicado2018-08-0809_53_13.jpg" class="img-responsive"></a>
	  	  	     </div>
              <?php }  ?>
	  	  </div>
	  </div>
	 </div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

 

</body>
</html>