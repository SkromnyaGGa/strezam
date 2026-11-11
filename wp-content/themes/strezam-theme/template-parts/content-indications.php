<?php
$groups = array(
	array(
		'image' => 'first person.png',
		'icon'  => 'icon-heart.svg',
		'title' => 'Серцево-судинні',
		'rows'  => array(
			array( 'Прискорене серцебиття, тахікардія' ),
			array( 'Біль або дискомфорт у грудях' ),
			array( 'Короткочасне підвищення артеріального тиску' ),
			array( 'Передпритомний стан', 'Припливи жару' ),
			array( 'Холодні й вологі долоні' ),
		),
	),
	array(
		'image' => 'fourth person.png',
		'icon'  => 'icon-neuro.svg',
		'title' => 'Неврологічні',
		'rows'  => array(
			array( 'Запаморочення', 'Головний біль', 'Тремор' ),
			array( 'М’язові посмикування, здригання', 'Парестезії' ),
			array( 'Напруження та біль у м’язах', 'Порушення сну' ),
		),
	),
	array(
		'image' => 'second person.png',
		'icon'  => 'icon-breath.svg',
		'title' => 'Дихальні',
		'rows'  => array(
			array( 'Відчуття «клубка» в горлі', 'Задишка' ),
			array( 'Відчуття браку повітря' ),
			array( 'Нерівномірність дихання' ),
			array( 'Незадоволеність вдихом' ),
		),
	),
	array(
		'image' => 'fifth person.png',
		'icon'  => 'icon-gut.svg',
		'title' => 'Шлунково-кишкові',
		'rows'  => array(
			array( 'Нудота', 'Сухість у роті', 'Диспепсія' ),
			array( 'Діарея або закріп', 'Біль у животі' ),
			array( 'Метеоризм', 'Порушення апетиту' ),
		),
	),
	array(
		'image' => 'third person.png',
		'icon'  => 'icon-temp.svg',
		'title' => 'Терморегуляторні',
		'rows'  => array(
			array( 'Безпричинний субфебрилітет', 'Озноб' ),
		),
	),
	array(
		'image' => 'sixth person.png',
		'icon'  => 'icon-uro.svg',
		'title' => 'Сечостатеві',
		'rows'  => array(
			array( 'Прискорене сечовипускання' ),
			array( 'Зниження лібідо' ),
			array( 'Імпотенція (еректильна дисфункція)' ),
		),
	),
);
?>
<section id="indications" class="section indications-section">
	<div class="container">
		<p class="eyebrow eyebrow--left"><span>показання</span></p>
		<h2 class="align-left"><?php echo esc_html( strezam_field( 'indications_title', 'Коли варто згадати про Стрезам?' ) ); ?></h2>
		<p class="lead">Тривожність — це не лише емоційний стан. Вона може супроводжуватися фізичними проявами з боку різних систем організму.</p>
		<div class="indication-grid">
			<?php foreach ( $groups as $group ) : ?>
				<article class="indication-card">
					<img src="<?php echo esc_url( strezam_asset( $group['image'] ) ); ?>" alt="" class="indication-photo" width="202" height="297">
					<div class="indication-body">
						<h3>
							<img class="indication-icon" src="<?php echo esc_url( strezam_figma( $group['icon'] ) ); ?>" alt="" width="46" height="46">
							<?php echo esc_html( $group['title'] ); ?>
						</h3>
						<div class="pills">
							<?php foreach ( $group['rows'] as $row ) : ?>
								<div class="pill-row">
									<?php foreach ( $row as $symptom ) : ?>
										<span><?php echo esc_html( $symptom ); ?></span>
									<?php endforeach; ?>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
