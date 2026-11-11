<section id="mechanism" class="section mechanism-section">
	<div class="container">
		<p class="eyebrow"><span>подвійний механізм</span></p>
		<h2><?php echo esc_html( strezam_field( 'mechanism_title', 'Два механізми - одна анксіолітична дія' ) ); ?></h2>
		<div class="mechanism-stage">
			<img class="mechanism-diagram" src="<?php echo esc_url( strezam_figma( 'mechanism.svg' ) ); ?>" alt="">
			<div class="mechanism-row">
				<article class="mechanism-card mechanism-card--gaba">
					<img class="mechanism-shape" src="<?php echo esc_url( strezam_figma( 'mechanism-gold.svg' ) ); ?>" alt="" width="384" height="281">
					<div class="mechanism-card-copy">
						<h3>Пряма модуляція ГАМК<sub>A</sub>-рецептора</h3>
						<p>Етіфоксин модулює ГАМК<sub>A</sub>-рецептори через β2/β3-субодиниці</p>
					</div>
				</article>
				<img class="mechanism-plus" src="<?php echo esc_url( strezam_figma( 'icon-plus.svg' ) ); ?>" alt="" width="76" height="76">
				<article class="mechanism-card mechanism-card--bdnf">
					<img class="mechanism-shape" src="<?php echo esc_url( strezam_figma( 'mechanism-blue.svg' ) ); ?>" alt="" width="385" height="282">
					<div class="mechanism-card-copy">
						<h3>Стимуляція нейротрофічного фактора BDNF</h3>
						<p>Етіфоксин стимулює синтез нейростероїдів (алопрегнанолону)</p>
					</div>
				</article>
			</div>
			<img class="mechanism-plus mechanism-plus--mobile" src="<?php echo esc_url( strezam_figma( 'icon-plus.svg' ) ); ?>" alt="" width="76" height="76">
			<p class="mechanism-result">
				<img class="mechanism-result-shape" src="<?php echo esc_url( strezam_figma( 'mechanism-result.svg' ) ); ?>" alt="" width="350" height="68">
				<span>Анксіолітична дія</span>
			</p>
		</div>
	</div>
</section>
