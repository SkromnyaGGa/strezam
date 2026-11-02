<?php
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
						<h3><span class="mini-icon mini-icon--<?php echo esc_attr( $group['icon'] ); ?>" aria-hidden="true"></span><?php echo esc_html( $group['title'] ); ?></h3>
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
