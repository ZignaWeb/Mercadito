<?php 
	include("cp/r/sql.php");
	include("cp/r/funciones.php");
?>
  
  	<div  class="row">  
  
        
        <article>
        
        	<div class="small-12 "><img src="r/img/titulos/marcas.png" class="small-12 titulo"></div>
          <? 
						$pt="SELECT * FROM `ag_marcas` WHERE `mostrar`=1";
						$pq=mysql_query($pt);
						while ($pd=mysql_fetch_assoc($pq)){
							$mt="SELECT * FROM `ag_media` WHERE `dep_table`='marcas' AND `dep_id`='".$pd["id"]."' AND `mostrar`='1'";
							$mq=mysql_query($mt);
							$md=mysql_fetch_assoc($mq);
							
							echo	' <div class="small-4 medium-3 column left text-center">
												<img src="cp/uploads/thumb/'.$md["url"].'" class="small-12">
												<p class="small-12 text-center no-margin">'.$pd["nombre"].'</p>
											</div>
												
										';
							
							};
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
