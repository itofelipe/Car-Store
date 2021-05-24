
	<section id="nossos-carros" class="nossos-carros">
		<div class="container">
			<div class="row">
				<div class="titulo fadeInLeft animated wow">
					<h2><span>NOSSOS</span></h2>
					<h2>CARROS</h2>
				</div>

				<?php echo do_shortcode("[auto_listings_listings columns='4' orderby='date' order='desc' view='grid' number='4' compact='false']"); ?>

				<div class="nossos-carros-botao-ver-mais col-md-12 fadeInLeft animated wow">
					<a href="/listings">
						<button>
							<p>VER TODOS OS CARROS</p>
						</button>
					</a>
				</div>
				
			</div>
		</div>
	</section>
