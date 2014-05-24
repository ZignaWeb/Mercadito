<?php 
	include("cp/r/sql.php");
	include("cp/r/funciones.php");
?>
  	<div  class="row">  
   
        
        <article>
        	<div class="small-12 "><img src="r/img/titulos/novedades.png" class="small-12 titulo"></div>
        <?php
						$hoy = date("Y-m-d H:i:s");
												
						$nt="SELECT  *  FROM `ag_novedades` WHERE `creada` <= '$hoy' AND `hasta` > '$hoy' AND `mostrar`=1";
						$nq= mysql_query ($nt);
						
						while ($nd= mysql_fetch_assoc($nq)){
					     $dias	= (strtotime($nd["creada"])-strtotime($nd["hasta"]))/86400;
					  		$dias 	= abs($dias); $dias = floor($dias);			
						
								$mt="SELECT url FROM `ag_media` WHERE `dep_table` = 'novedades'  AND `mostrar`=1 AND `dep_id`='".$nd["id"]."'" ;
								$mq=mysql_query($mt);
								$md=mysql_fetch_assoc($mq);
							
								
							if(!$md["url"]){
										$rt=" SELECT url FROM `ag_media` WHERE `dep_table` = 'rubros'  AND `dep_id`= '".$nd['rubroid']."'";	
										$rq=mysql_query($rt);
										$md=mysql_fetch_assoc($rq);
									
								};
									  
										echo '<div class="small-12 column">
															<img src="cp/uploads/thumb/'.$md["url"].'" class="medium-3 left">
															<h3 class="small-12 medium-6 column"> '.$nd["titulo"].' </h3>	
															<p class="small-12 medium-3 column">'.'Desde: '.fFecha($nd["creada"])."</br>".'Hasta: '.fFecha($nd["hasta"]).'</p>
															<p class="small-12 medium-9 column"> '.$nd["desc"].'</p>
															<p class="small-12 medium-9 column text-right">¡Quedan '.$dias.' días para aprobechar esta oferta!</p>
													</div>';
						} 
						
			
				
					?>
        	
        	
            
           
        </article>
        
        
   	 </div>
     
           
     <script>
	 	jQuery(document).ready(function($){
		$.daisyNav();
		});
     	$(document).foundation({
		  orbit: {
			animation: 'fade',
			timer_speed: 20000,
			pause_on_hover: true,
			resume_on_mouseout: false,
			animation_speed: 500,
			navigation_arrows: true,
			bullets: true,
			next_on_click: true,
			slide_number: false,
			timer: true,
			variable_height: true			
		  }
		});
     </script>
  </body>
</html>
