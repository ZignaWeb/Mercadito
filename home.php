<?php 
	include("cp/r/sql.php");
	include("cp/r/funciones.php");
?>  
    
       <div class="small-12 pizarra column">
          <div class="row">
             <ul data-orbit class="orbit-container ">
             	<? 						
							  $hoy = date("Y-m-d H:i:s");
								$nt="SELECT  *  FROM `ag_novedades` WHERE `creada` <= '$hoy' AND `hasta` > '$hoy' AND `mostrar`=1";
								$nq= mysql_query ($nt);
								while ($nd= mysql_fetch_assoc($nq)){
														
															$rt=" SELECT url FROM `ag_media` WHERE `dep_table` = 'rubros'  AND `dep_id`= '".$nd['rubroid']."'";	
															$rq=mysql_query($rt);
															$rd=mysql_fetch_assoc($rq);
															
															echo '
																			<li>
																				<img src="cp/uploads/thumb/'.$rd["url"].'"/>
																				 <div class="orbit-caption">
																						<div >
																							<div>
																								<h1>'.$nd["titulo"].'</h1>
																								<p>'.$nd["desc"].'</p>
																							</div>
																					 </div>
																				 </div>
																			</li>
															
																	 ';}
							?>
             		 
                            
                           
                            
                            
                            
              </ul> 
           </div>
        </div>
                    
                     
        
    <div class="row">  
    	
 
        <article class="home">
         
            <ul class="small-12 column no-bullet deco">
            	
            	   <? 
										$pt="SELECT * FROM `ag_marcas` WHERE `mostrar`=1";
										$pq=mysql_query($pt);
										while ($pd=mysql_fetch_assoc($pq)){
											$mt="SELECT * FROM `ag_media` WHERE `dep_table`='marcas' AND `dep_id`='".$pd["id"]."' AND `mostrar`='1'";
											$mq=mysql_query($mt);
											$md=mysql_fetch_assoc($mq);
									 		
											echo	' 
															<li class="small-3 medium-2 large-1 ">
																<a class="th" href="">
																		<img src="cp/uploads/thumb/'.$md["url"].'">
																</a>
                							</li>	
														';
											
											};
								?>
              
              
               
            </ul>
            
             <ul class="small-12 no-bullet column  ">
                
                  <li class="small-12 medium-4 column">
                  	<h2 class="right small-9 medium-7 large-8">Hace tu orden</h2>
                    <p class="right small-9 medium-7 large-8">Llamanos o chatea con nosotros para hacer tu pedido</p>
                  </li>
                <li class="small-12 medium-4 column">
                  	<h2 class="right small-9 medium-7 large-8">Confirmacion</h2>
                    <p class="right small-9 medium-7 large-8">Confirma tu compra y monto.Envianos tus datos de envio</p>
                  </li>
                 <li class="small-12 medium-4 column">
                  	<h2 class="right small-9 medium-7 large-8">Pago y Envio</h2>
                    <p class="right small-9 medium-7 large-8">Defini fecha y hora para el envio y lo pagas cuando lo recibis</p>
                  </li>	
						 </ul>
          
          <div class="small-12 column mapa">
          	<div class="small-6 column">
            	<p>Llamanos al 0351 156 156</p>
            </div>
            <div class="small-6 column">
            	<p>Chatea con un vendedor</p>
            </div>
            <div class="small-12 column">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13624.89543551447!2d-64.22824347613056!3d-31.380390425746437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDIyJzQ1LjIiUyA2NMKwMTMnMzguOSJX!5e0!3m2!1sen!2s!4v1392908948077" width="100%" height="350" frameborder="0" style="border:0" class="small-12 column"></iframe>
            </div>
            <div class="  small-12 column">
            	<p>Visitá nuestro local en Fernándo Fader 3425 (esquina Otero)</p>
            </div>
          </div>
            
        </article>
        
   
   	 </div>
   

        
		 <script>
	 	jQuery(document).ready(function($){
		$.daisyNav();
		});
     	$(document).foundation({
		  orbit: {
			animation: 'fade',
			timer_speed: 10000,
			pause_on_hover: false,
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
