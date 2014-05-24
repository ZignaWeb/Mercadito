
    
    <div class="row">  
    	
        
        <article class="contacto">
        	<div class="small-12 "><img src="r/img/titulos/contacto.png" class="small-12 titulo"></div>
			
      
           <div class="small-12 medium-6 column no-padding" id="mensaje" style="position:relative; overflow:auto;">
             	<form id="sendMail" action="r/code/sendmail.php" method="post">
              	<label> <input class="validar" type="text" name="name"placeholder="Nombre" required="required"></label>
              	<label><input class="validar" type="text" name="lastname"placeholder="Apellido" required="required"></label>
                <label><input class="validar" type="email" name="email" placeholder="Email" required ></label>
                <label> <input class="validar" type="tel" name="phone" placeholder="Telefono" required></label>
                <label><textarea class="validar" name="question"  placeholder="Consulta" required ></textarea></label>
                <input class=" button" type="submit" value="Enviar">
              </form>
              <div id="enviando">
              	<span>Enviando</span>
              </div>
            </div>
  
  
          
          
          		<ul class="small-12 medium-5 left no-margin ">
                  <li class="small-11 push-1 column">Horario de atencion:</li>
                  <li class="small-11 push-1 column">Lunes a Sabado 8:30hs</li>
                  <li class="small-11 push-1 column">De 8:30hs a 13:30hs y de 17:30hs a 21hs</li>
                  <li class="small-11 push-1 column"> Av. Fernando Fader 3603</li>
                  
                  <li  class="small-12 column">
                    <div class="small-1 column no-padding no-margin" >
                      <img class="right" src="r/img/tel-negro.png" alt="telefono" />
                    </div>
                    <p class="small-11 column no-padding no-margin">
                      Tel.: 414323 - 4824130
                    </p>
                 
                  </li>
                 
                  <li class="small-12 column">
                    <div class="small-1 column no-padding no-margin">
                      <img class="right" src="r/img/mail-negro.png" alt="email" />
                    </div>
                    <p class="small-11 column no-padding no-margin">
                       info@mercaditodelcerro.com.ar
                    </p>
                    
                  </li>
        			</ul>
          
         
            
           <div class="small-12 column mapa">
          	<div class="  small-12 column">
            	<p>Visitá nuestro local en Fernándo Fader 3425 (esquina Otero)</p>
            </div>
            <div class="small-12 column">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13624.89543551447!2d-64.22824347613056!3d-31.380390425746437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDIyJzQ1LjIiUyA2NMKwMTMnMzguOSJX!5e0!3m2!1sen!2s!4v1392908948077" width="100%" height="350" frameborder="0" style="border:0" class="small-12 column"></iframe>
            </div>
            
          </div>
            
        </article>
        
   
   	 </div>
  </body>
</html>
    <script type="text/javascript">
	
	
$(".validar").change(function(){
		fromValidator (this);
	});

	$('#sendMail').submit(function(event) {
	  event.preventDefault();
	  $("#enviando").fadeIn();
	  var url = $(this).attr('action');
	  var datos = $(this).serialize();
 
	  $.post(url, datos, function(resultado) {
			$('#mensaje').html(resultado);
	  });

	});
	function fromValidator (selector) {
	
	var tag = $(selector).prop('tagName');
	var val = $(selector).val();
	var nam = $(selector).attr("name");
	var rel = $(selector).attr("rel");
	
	var type  = $(selector).attr("type");
	var index = types.indexOf(type);
	var regx  = regxs[index];
	
	if (rel){
		if (val==$("[name="+rel+"]").val()){
			$(selector).css("color", "#000");
			$("#"+nam+".valError").slideUp();
		}else{
			$(selector).css("color", "#F30");
			if ($("#"+nam+".valError")){
			$("#"+nam+".valError").remove();
			}
			$(selector).after("<div class='valError' id='"+nam+"'>No coincide</div>");
		}
	}else{
		if (val.match(regx)){
			$(selector).css("color", "#000");
			$("#"+nam+".valError").slideUp();
		}else{
			$(selector).css("color", "#F30");
			if ($("#"+nam+".valError")){
			$("#"+nam+".valError").remove();
			}
			$(selector).after("<div class='valError' id='"+nam+"'>"+error[index]+"</div>");
		}
	}
	
}
	</script>