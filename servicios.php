<?php 
	include("cp/r/sql.php");
	include("cp/r/funciones.php");
?>  
  	<div id=content class="row">  
    
    	       
        <article> 
        	<div class="small-12 "><img src="r/img/titulos/nuestroservicios.png" class="small-12 titulo"></div>
            <div class="small-12 medium-6 column">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit fermentum aliquam. Proin egestas tortor non tortor pretium aliquam. Duis a massa vitae leo tempus auctor. Nunc luctus aliquam urna pulvinar hendrerit. Duis iaculis dui a dolor vehicula, a rutrum urna volutpat. Suspendisse tempor dui sed orci adipiscing ultrices.</div>
            <div class="small-12 medium-6 column">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit fermentum aliquam. Proin egestas tortor non tortor pretium aliquam. Duis a massa vitae leo tempus auctor. Nunc luctus aliquam urna pulvinar hendrerit. Duis iaculis dui a dolor vehicula, a rutrum urna volutpat. Suspendisse tempor dui sed orci adipiscing ultrices.</div>  
            
            	<? 
								$st="SELECT * FROM `ag_rubros` WHERE `mostrar`=1";
								$sq=mysql_query($st);
								while ($sd=mysql_fetch_assoc($sq)){
									$mt="SELECT * FROM `ag_media` WHERE `dep_table`='rubros' AND `dep_id`='".$sd["id"]."' AND `mostrar`='1'";
									$mq=mysql_query($mt);
									$md=mysql_fetch_assoc($mq);
								
									echo	' 
														<div class="small-6 large-3 column left text-center">
																<img src="cp/uploads/thumb/'.$md["url"].'">
																<p class="fontMedium">'.$sd["nombre"].'</p>
																<p>'.$sd["desc"].'</p>
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
