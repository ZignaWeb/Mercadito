<?php 
	include("cp/r/sql.php");
	include("cp/r/funciones.php");
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mercadito Web</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="r/css/foundation.css" />
    <link rel="stylesheet" href="r/css/daisynav.css" />    
     <link rel="stylesheet" href="r/css/zigna.css" />
    <script src="js/vendor/modernizr.js"></script> 
    <script src="js/vendor/jquery.js"></script>   
  </head>
  <style>
  	
	/*li { text-decoration:none; list-style:none;}	*/
  </style>
  <body >  
  
<header>
            <a href="#home" class="small-8 column "><img src="r/img/Logo.png"></a>

            
            <!-- ************* NAV ************** -->
            
            <!-- Toggle button for menu, you can place it anywhere --> 
            <div class="menu-toggle-button clear" data-menu-id="demo-menu">Menu</div>            
            <!-- Menu Structure -->
                        <ul class="menu-list" id="demo-menu" style="padding-left:15px;">
                          <li><a href="#servicios">Servicios</a></li>
                          <li><a href="#marcas">Marcas</a></li>              
                          <li><a href="#novedades">Novedades</a></li>
                          <li><a href="#quienessomos">Quienes somos</a></li>
                          <li><a href="#contacto">Contacto</a></li>
                          <li class=" right  hide-for-small-only"><a class="bchat" href="www.zigna.com.ar">¡Hace tu pedido online!</a></li>
                           <li class=" show-for-small-only "><a  class="bchat"  href="#">¡Hace tu pedido online!</a></li>
                                        
                        </ul>            
            <!-- ************* end-NAV ************** -->            
</header> 
<div id="container">

</div>   
<iframe src="http://www.buzzchat.com.ar/client" class="chat">

</iframe>
 		<div class="minimize"></div>
 		<div class="close"></div>

     
   
<footer class="small-12 column" >
    	
        <div class="small-12 medium-4 column ">
            <a href="#home"><img alt="Mercadito" src="r/img/Logo_sobre_madera.png "></a>
        </div>
        
        <ul class=" medium-8  column  ">
          <li class="small-11 push-1 column">Lun a Sab 8:30hs a 13:30hs y 17:30hs a 21hs</li>
          <li class="small-11 push-1 column"> Av. Fernando Fader 3603</li>
          
          <li  class="small-12 column">
          	<div class="small-1 column">
            	<img class="right" src="r/img/tel.png" alt="telefono" />
            </div>
            <p class="small-11 column">
            	Tel.:(0351) 4814323
            </p>
         
          </li>
         
          <li class="small-12 column">
          	<div class="small-1 column">
            	<img class="right" src="r/img/mail.png" alt="email" />
            </div>
            <p class="small-11 column">
            	 info@mercaditodelcerro.com.ar
            </p>
            
          </li>
        </ul>
           
</footer> 
 
     <script src="js/vendor/jquery.js"></script>
     <script src="js/jquery.daisynav.min.js"></script> 
     <script src="js/foundation.min.js"></script>         
     <script type="text/javascript">
            $.ajaxSetup({ cache:false });
            
            // AJAX llamado direct url input
            if(window.location.hash){
                openUrl((window.location.hash).replace("#","")+'.php' );
            } else {
                window.location="#home";
            }
            // AJAX llamado cuando cambia el HASH
            $(window).hashchange( function(){
                openUrl((window.location.hash).replace("#","")+'.php');
            });
        
            // AJAX cambiar contenido
            function openUrl(loadUrl){
							if(loadUrl=="home.php"){
									$("body").attr("id","").attr("id","home");
								}else if(loadUrl=="contacto.php"){
										$("body").attr("id","").attr("id","contacto");
									}else{
										$("body").attr("id","");
										}

				  		$("#container").load(loadUrl);
            }
						
    </script>    
    <script type="text/javascript">
				var mini=0;
				$(".bchat").click(function(event){
					event.preventDefault();
					$(".chat").css("opacity","1").css("height","350px");
					$(".minimize").css("display","block");
					$(".close").css("display","block");
				
					document.getElementById("#goback").css("display","block");
					$("#logout").css("display","block");
				});
				
				$(".minimize").click(function(event){
					event.preventDefault();
					 if(mini==0){
						mini=1;
						$(".chat").css("height","31px");
						$(".minimize").css("bottom","6px");
						$(".close").css("bottom","6px");
					}else if(mini==1){
						mini=0;
						$(".chat").css("height","350px");
						$(".minimize").css("bottom","325px");
						$(".close").css("bottom","325px");
					};

				});
				$(".close").click(function(event){
					$(".chat").css("opacity","0").css("height","0px");
					$(".minimize").css("display","none");
					$(".close").css("display","none");
				});
					
			$(document).ready(function(e) {
				checkOnline();
				countdown();
				
				function checkOnline () {
					$.get("http://buzzchat.com.ar/client/checkifonlineadmin.php",{},function(data){
					//	alert(data);
					});
				}
				
				function countdown () {
					timeoutWith = setInterval (function(){checkOnline()},	3000);
				}
			
		});
		</script>
	
  </body>
</html>
