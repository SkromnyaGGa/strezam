<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="footer-top">
			<a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url( strezam_image( 'site_logo', 'logo.png' ) ); ?>" alt="Стрезам">
			</a>
			<nav class="footer-nav" aria-label="Меню в підвалі">
				<a href="#mechanism">Механізм дії</a>
				<a href="#evidence">Клінічна ефективність</a>
				<a href="#indications">Показання та дозування</a>
				<a href="#evidence">Клінічні випадки</a>
				<a href="#materials">Матеріали для завантаження</a>
			</nav>
		</div>
		<div class="footer-cards">
			<section>
				<h2>Про препарат</h2>
				<p>Зареєстровано в Україні, Р.П. № UA/XXXX/01/01 від DD.MM.YYYY.</p>
				<p>Категорія відпуску: рецептом.</p>
				<a class="footer-link" href="#materials">Відкрити повну інструкцію для медичного застосування</a>
			</section>
			<section>
				<h2>Представництво в Україні:</h2>
				<p>вул. [Назва], [номер], м. Київ, 0XXXX</p>
				<p>+380 (44) XXX-XX-XX</p>
				<p><a href="mailto:office@example.com">office@example.com</a></p>
			</section>
			<section>
				<h2>Фармаконагляд</h2>
				<p>Повідомити про побічну реакцію або відсутність ефективності:</p>
				<p>Якщо вам стало відомо про виникнення побічних реакцій при застосуванні препарату, будь ласка, повідомте нас:</p>
				<p><a href="mailto:pharmacovigilance@example.com">pharmacovigilance@example.com</a></p>
				<p>+380 (44) XXX-XX-XX</p>
			</section>
		</div>
		<div class="footer-bottom">
			<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Всі права захищено. Інформація для медичних та фармацевтичних працівників. Матеріали, розміщені на цьому сайті, призначені виключно для використання фахівцями галузі охорони здоров’я в професійній діяльності. Інформація не може бути використана для самостійної діагностики чи лікування пацієнтами.</p>
			<p class="footer-legal">
				<a href="#materials">Політика конфіденційності</a>
				<a href="#materials">Умови використання</a>
				<a href="#materials">Cookie-файли</a>
			</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
