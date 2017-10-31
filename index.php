<?php include("header.php") ?>

		 <div class="banner">
		</div>
		<hr />
		<section>
			<div id="home">
				<h3>
					"Miráme con Amor, soy igual que tú!"<br>
				</h3>
				<p><i class="fa fa-quote-left"></i>La verdadera caridad surge espontáneamente de un corazón simpático, antes de que cualquier petición sea hecha. Ella es la persona que da, no de vez en cuando, pero constantemente.<i class="fa fa-quote-right"></i><br> Proverbio Budista</p><br>
			</div>
			<hr />
			
			<div id="qsomos">
				<h4>
					Quién Somos?<br>
				</h4>
					<div id="lay">

				<iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/ugANFYVUNhc" frameborder="1">
				</iframe>

				<p>
					Somos una asociación sin ánimo de lucro<br> y no somos un colegio, somos talleres<br> productivos donde buscamos hacer a<br> los niños y jóvenes con <br>discapacidad: <br>productivos, competitivos y aceptados.	
				</p>
			</div>

			</div>

			<hr />
			<div id="vol">
				<h5>
					     Voluntários
				</h5>	
				<p>
					Algunos recuerdos de nuestros voluntários, estes que dejarón su familia, su casa, y comodidad para dar a nosotros cariño, atención, amor y su tiempo!
				</p>
				

				<script type="text/javascript">
					var imagens=["Imagens/1.jpg","Imagens/2.jpg","Imagens/5.jpg","Imagens/6.jpg","Imagens/7.jpg","Imagens/8.jpg","Imagens/9.jpg","Imagens/10.jpg"]
					var imagemAtual=0;
					function trocaImagem(){
						imagemAtual = (imagemAtual + 1) % 10;
						document.querySelector('.fotos img').src = imagens[imagemAtual];
					}
					setInterval(trocaImagem, 2000);

				</script>
					
				<figure class="fotos">
					<img src="Imagens/1.jpg">	
				</figure>	
			</div>

			<hr />

			<div id="contacto">
				<h6>
					Contacto
				</h6>
				<p>
					Encuentranos pués en las redes sociales! <br>Venga Conocer y hacer parte de nuestra familia!
				</p>	

				<figure id="rso">
					<a href="https://www.facebook.com/angel.maryvalero"><i class="fa fa-facebook-square fa-5x"></i></a>

					<a href="http://angelmaryvalero.blogspot.com.br/"><i class="fa fa-rss-square fa-5x"></i></a>

					<a href="https://www.youtube.com/results?search_query=angel+mary+valero"><i class="fa fa-youtube-play fa-5x" fa-5x"></i></a>
				</figure>
				<p>
					O si desea dejanos un mensaje!
				</p>
			</div>
				<form>
					<div>	
						<label for="name">Nombre:</label>
						<input type="text" id="nome"/>
					</div>
					<div>
	        			<label for="mail">Correo:</label>
	        			<input type="email" id="mail" />
	    			</div>
	    			<div>
	        			<label for="msg">Mensaje:</label>
	        			<textarea id="msg"></textarea>
	    			</div>
	    			<div id="button">
	        			<button type="submit">Enviar su mensaje</button>
	    			</div>
				</form>
		</section>

		<script type="text/javascript">
			document.getElementById("button")=function(){
				alert("Enviado!");
			}
		</script>
		<script src="http://code.jquery.com/jquery-1.12.0.min.js">
	</script>
	<script >
		$(".bmenu").click(function(){
			$(".menu").show();
		});	
		$(".bclose").click(function(){
			$(".menu").hide();
		});
	</script>
	<script>	
		$(".menu li a").click(function(){
			$(".menu").hide();
		});
	</script>

	<?php include("footer.php") ?>