<?php
$icons = array(
	'heart'  => 'M12 21s-6.5-4.2-6.5-9A3.8 3.8 0 0 1 12 9a3.8 3.8 0 0 1 6.5 3c0 4.8-6.5 9-6.5 9z',
	'neuro'  => 'M9 4a3 3 0 0 0-3 3v1a3 3 0 0 0 0 6v1a3 3 0 0 0 3 3h1v2h4v-2h1a3 3 0 0 0 3-3v-1a3 3 0 0 0 0-6V7a3 3 0 0 0-3-3H9zm3 4a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2H9a1 1 0 1 1 0-2h2V9a1 1 0 0 1 1-1z',
	'breath' => 'M8 5c0 4 3 6 3 10a3 3 0 1 1-6 0c0-1 .4-2 1-3C4 10 4 7 6 5c.7 1.2 1.4 1.6 2 0zm8 0c0 4 3 6 3 10a3 3 0 1 1-6 0c0-1 .4-2 1-3-2-2-2-5 0-7 .7 1.2 1.4 1.6 2 0z',
	'gut'    => 'M8 4h2c3 0 4 2 4 4 0 2 1 3 3 3v2c-3 0-5-1.5-5-4 0-1-.5-2-2-2H8a3 3 0 0 0 0 6h3v2H8a5 5 0 0 1 0-10zm6 8c2 1 3 3 3 5a3 3 0 1 1-6 0h2a1 1 0 1 0 2 0c0-1-.5-2-1.5-3L14 12z',
	'temp'   => 'M10 4h4v8.2a4 4 0 1 1-4 0V4zm2 14a2 2 0 0 0 1-3.7V8h-2v6.3A2 2 0 0 0 12 18z',
	'uro'    => 'M12 3c3 3 6 5 6 9a6 6 0 1 1-12 0c0-4 3-6 6-9zm0 8a2 2 0 1 0 .01 4.01A2 2 0 0 0 12 11z',
);

$groups = array(
	array(
		'image'    => 'card-heart.png',
		'field'    => 'indication_heart',
		'icon'     => 'heart',
		'title'    => 'Серцево-судинні',
		'symptoms' => array( 'Прискорене серцебиття, тахікардія', 'Біль або дискомфорт у грудях', 'Короткочасне підвищення артеріального тиску', 'Передпритомний стан', 'Припливи жару', 'Холодні й вологі долоні' ),
	),
	array(
		'image'    => 'card-neuro.png',
		'field'    => 'indication_neuro',
		'icon'     => 'neuro',
		'title'    => 'Неврологічні',
		'symptoms' => array( 'Запаморочення', 'Головний біль', 'Тремор', 'М’язові посмикування, здригання', 'Парестезії', 'Напруження та біль у м’язах', 'Порушення сну' ),
	),
	array(
		'image'    => 'card-breath.png',
		'field'    => 'indication_breath',
		'icon'     => 'breath',
		'title'    => 'Дихальні',
		'symptoms' => array( 'Відчуття «клубка» в горлі', 'Задишка', 'Відчуття браку повітря', 'Нерівномірність дихання', 'Незадоволеність вдихом' ),
	),
	array(
		'image'    => 'card-gut.png',
		'field'    => 'indication_gut',
		'icon'     => 'gut',
		'title'    => 'Шлунково-кишкові',
		'symptoms' => array( 'Нудота', 'Сухість у роті', 'Диспепсія', 'Діарея або закреп', 'Біль у животі', 'Метеоризм', 'Порушення апетиту' ),
	),
	array(
		'image'    => 'card-temp.png',
		'field'    => 'indication_temp',
		'icon'     => 'temp',
		'title'    => 'Терморегуляторні',
		'symptoms' => array( 'Безпричинний субфебрилітет', 'Озноб' ),
	),
	array(
		'image'    => 'card-uro.png',
		'field'    => 'indication_uro',
		'icon'     => 'uro',
		'title'    => 'Сечостатеві',
		'symptoms' => array( 'Прискорене сечовипускання', 'Зниження лібідо', 'Імпотенція (еректильна дисфункція)' ),
	),
);
?>
<section id="indications" class="section indications-section">
	<div class="container">
		<p class="eyebrow eyebrow--left"><span>показання</span></p>
		<h2 class="align-left"><?php echo esc_html( strezam_field( 'indications_title', 'Коли варто згадати про Стрезам?' ) ); ?></h2>
		<p class="lead">Тривожність — це не лише емоційний стан.<br>Вона може супроводжуватися фізичними проявами з боку різних систем організму.</p>
		<div class="indication-grid">
			<?php foreach ( $groups as $group ) : ?>
				<article class="indication-card">
					<img src="<?php echo esc_url( strezam_image( $group['field'], $group['image'] ) ); ?>" alt="" class="indication-photo">
					<div>
						<h3><span class="mini-icon mini-icon--<?php echo esc_attr( $group['icon'] ); ?>" aria-hidden="true"><svg viewBox="0 0 24 24" width="14" height="14"><path fill="currentColor" d="<?php echo esc_attr( $icons[ $group['icon'] ] ); ?>"/></svg></span><?php echo esc_html( $group['title'] ); ?></h3>
						<ul class="pills">
							<?php foreach ( $group['symptoms'] as $symptom ) : ?>
								<li><?php echo esc_html( $symptom ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
