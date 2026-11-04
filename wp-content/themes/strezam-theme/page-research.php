<?php
/**
 * Research page.
 *
 * Template Name: Research
 *
 * @package Strezam
 */

$studies = array(
	array( 'S.213/GB', 'Здорові добровольці, дорослі', 'N=42 (100–1 500 мг, одноразова доза)', 'Одноразова доза', 'Плацебо, N=14 (по 2 учасники в кожній з 7 груп)' ),
	array( 'LORETI', 'Здорові добровольці, дорослі', 'N=24 (50–100 мг, одноразова доза)', 'Одноразова доза', 'Лоразепам 2 мг, N=12; Плацебо, N=12' ),
	array( 'ETIXEL', 'Здорові добровольці, чоловіки', 'N=22 (100–200 мг двічі на день)', '100–200 мг двічі на день', 'Плацебо, N=22' ),
	array( 'ETILANCE', 'Здорові добровольці, пацієнти похилого віку', 'N=30 (100 мг, одноразова доза)', 'Одноразова доза', 'Лоразепам 2 мг, N=30; Плацебо, N=30' ),
	array( 'EQUESTRE', 'Здорові добровольці, дорослі', 'N=32 (100 мг, одноразова доза)', 'Одноразова доза', 'Етифоксин базовий' ),
	array( 'S.137/GB', 'Тривога різного походження', 'N=14 (50 мг тричі на день)', '50 мг тричі на день', '/' ),
	array( 'S.137/GB', 'Тривога різного походження', 'N=30 (50 мг тричі на день)', '50 мг тричі на день', '/' ),
	array( 'S.139/GB', 'Тривога різного походження', 'N=25 (50 мг тричі на день)', '50 мг тричі на день', 'Клобазам 10 мг тричі на день, N=25' ),
	array( 'S.132/GB', 'Тривога різного походження', 'N=28 (50 мг тричі на день)', '50 мг тричі на день', 'Плацебо, N=24' ),
	array( 'S.134/GB', 'Тривога різного походження', 'N=20 (50 мг тричі на день)', '50 мг тричі на день', 'Клобазам 10 мг тричі на день, N=20' ),
	array( 'S.135/GB', 'Тривога різного походження', 'N=23 (50 мг тричі на день)', '50 мг тричі на день', 'Сульпірид 50 мг тричі на день, N=23' ),
	array( 'STRETI S.226/GB', 'ADWA, HAM-A ≥ 18', 'N=83 (150–200 мг на день)', '150–200 мг на день', 'Буспірон 15–20 мг на день, N=87' ),
	array( 'ETILOR S.392/EN', 'ADWA, HAM-A ≥ 20', 'N=93 (50 мг тричі на день)', '50 мг тричі на день', 'Лоразепам 1,5 мг на день, N=96' ),
	array( 'ETIZAL S.650/EN', 'ADWA, HAM-A ≥ 20', 'N=100 (50 мг тричі на день)', '50 мг тричі на день', 'Альпразолам 0,5 мг тричі на день, N=101' ),
	array( 'AMETIS', 'ADWA, HAM-A ≥ 20', 'N=250 (200 мг на день)', '200 мг на день', 'Лоразепам 2 мг на день, N=125; Плацебо, N=250' ),
);

$endpoints = array(
	array( 'Середня зміна підшкали психічних симптомів за шкалою HAM-A від вихідного рівня до 28-го дня', '−7,49', '−7,55' ),
	array( 'Середня зміна підшкали соматичних симптомів за шкалою HAM-A від вихідного рівня до 28-го дня', '−6,05', '−5,82' ),
	array( 'Середня зміна за шкалою клінічного глобального враження тяжкості захворювання (CGI-S) від вихідного рівня до 28-го дня', '−1,23', '−1,31' ),
	array( 'Частка пацієнтів із відповіддю за шкалою клінічного глобального враження покращення (CGI-I) на 28-й день', '86,70 %', '87,20 %' ),
	array( 'Частка пацієнтів із відповіддю за шкалою глобального враження пацієнта покращення (PGI-I) на 28-й день', '82,80 %', '86,40 %' ),
);

get_header();
?>

<main id="primary" class="site-main research-page">
	<section class="research-block">
		<div class="container">
			<div class="research-heading">
				<a class="research-back" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="На головну">
					<svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" d="M15 5l-7 7 7 7"/></svg>
				</a>
				<h1><?php echo esc_html( strezam_field( 'research_title', 'Дослідження' ) ); ?></h1>
			</div>

			<h2><?php echo esc_html( strezam_field( 'research_table_title', 'Дослідження СТРЕЗАМ (етифоксин)' ) ); ?></h2>

			<div class="research-scroll">
				<table class="study-table">
					<thead>
						<tr>
							<th>Назва дослідження</th>
							<th>Критерії включення</th>
							<th>Кількість пацієнтів на етифоксині</th>
							<th>Добове дозування</th>
							<th>Контрольна група (Порівняння)</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ( $studies as $row ) : ?>
							<tr>
								<th scope="row"><?php echo esc_html( $row[0] ); ?></th>
								<td><?php echo esc_html( $row[1] ); ?></td>
								<td><?php echo esc_html( $row[2] ); ?></td>
								<td><?php echo esc_html( $row[3] ); ?></td>
								<td><?php echo esc_html( $row[4] ); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th scope="row">Загальна кількість пацієнтів</th>
							<td></td>
							<td>839</td>
							<td></td>
							<td>917</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</section>

	<section class="research-block research-block--soft">
		<div class="container">
			<div class="research-2026-head">
				<div>
					<h2>Нове дослідження — 2026</h2>
					<p>Ефективність та безпека <strong>етифоксину</strong> порівняно з <strong>альпразоламом</strong> при генералізованих тривожних розладах із соматичними симптомами: рандомізоване подвійне сліпе порівняльне дослідження</p>
				</div>
				<article class="research-note">
					<span class="research-icon" aria-hidden="true">
						<svg viewBox="0 0 48 48" width="36" height="36"><circle cx="16" cy="16" r="6" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="30" cy="18" r="5" fill="none" stroke="currentColor" stroke-width="2"/><path fill="none" stroke="currentColor" stroke-width="2" d="M6 34c1-6 5-9 10-9s9 3 10 9M26 34c.6-4 3-7 7-7 4 0 6 3 7 7"/></svg>
					</span>
					<p>Рандомізоване подвійне сліпе порівняльне дослідження</p>
				</article>
			</div>

			<div class="research-facts">
				<article>
					<span class="research-icon" aria-hidden="true">
						<svg viewBox="0 0 48 48" width="32" height="32"><circle cx="24" cy="24" r="14" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="24" cy="24" r="8" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="24" cy="24" r="2" fill="currentColor"/></svg>
					</span>
					<div>
						<h3>Популяція</h3>
						<p>Пацієнти з генералізованим тривожним розладом із соматичними симптомами</p>
					</div>
				</article>
				<article>
					<span class="research-icon" aria-hidden="true">
						<svg viewBox="0 0 48 48" width="32" height="32"><rect x="10" y="12" width="28" height="10" rx="5" fill="none" stroke="currentColor" stroke-width="2"/><path d="M24 12v10" stroke="currentColor" stroke-width="2"/><rect x="10" y="26" width="28" height="10" rx="5" fill="none" stroke="currentColor" stroke-width="2"/><path d="M24 26v10" stroke="currentColor" stroke-width="2"/></svg>
					</span>
					<div>
						<h3>Лікування (28 днів)</h3>
						<ul>
							<li><i class="dot dot--violet"></i> Етифоксин (СТРЕЗАМ) 50 мг 3 рази на добу</li>
							<li><i class="dot dot--indigo"></i> Альпразолам 0,5 мг 3 рази на добу</li>
						</ul>
					</div>
				</article>
				<article>
					<span class="research-icon" aria-hidden="true">
						<svg viewBox="0 0 48 48" width="32" height="32"><circle cx="17" cy="16" r="4" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="31" cy="16" r="4" fill="none" stroke="currentColor" stroke-width="2"/><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" d="M8 34c1.2-5 4.5-8 9-8s7.8 3 9 8M22 34c.8-4 3.2-6.5 7-6.5S36 30 37 34"/></svg>
					</span>
					<div>
						<h3>Кількість пацієнтів</h3>
						<p class="fact-total">N = 260</p>
						<ul>
							<li><i class="dot dot--violet"></i> Етифоксин (n = 131)</li>
							<li><i class="dot dot--indigo"></i> Альпразолам (n = 129)</li>
						</ul>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="research-block">
		<div class="container">
			<h2>Ефективність: Зміна балів за шкалою HAM-A</h2>
			<p class="research-lead">середньої зміни рівня тривоги від вихідного рівня до 28 дня</p>

			<div class="hama-layout">
				<div class="hama-notes">
					<article>
						<span class="research-icon" aria-hidden="true">
							<svg viewBox="0 0 48 48" width="28" height="28"><rect x="12" y="8" width="24" height="32" rx="3" fill="none" stroke="currentColor" stroke-width="2"/><path fill="none" stroke="currentColor" stroke-width="2" d="M18 18h12M18 24h12M18 30h8"/></svg>
						</span>
						<p>Середня зміна балів за шкалою тривоги HAM-A через 28 днів лікування</p>
					</article>
					<article>
						<span class="research-icon" aria-hidden="true">
							<svg viewBox="0 0 48 48" width="28" height="28"><circle cx="24" cy="24" r="14" fill="none" stroke="currentColor" stroke-width="2"/><path fill="none" stroke="currentColor" stroke-width="2" d="M16 24l5 5 11-12"/></svg>
						</span>
						<p><strong>Етифоксин</strong> продемонстрував не менш ефективний результат (non-inferiority) порівняно з альпразоламом щодо зниження балів за шкалою HAM-A.</p>
					</article>
				</div>

				<figure class="hama-chart">
					<span class="hama-axis-title">Зменшення балів HAM-A</span>
					<div class="hama-plot">
						<div class="hama-row">
							<span>Етифоксин (СТРЕЗАМ)</span>
							<div class="hama-bar hama-bar--strezam" style="--w: 84.4%"><b>−13,5</b></div>
						</div>
						<div class="hama-row">
							<span>Альпразолам</span>
							<div class="hama-bar hama-bar--alp" style="--w: 83.8%"><b>−13,4</b></div>
						</div>
						<div class="hama-scale" aria-hidden="true"><span>0</span><span>−4</span><span>−8</span><span>−12</span><span>−16</span></div>
					</div>
				</figure>
			</div>
			<p class="research-cite">Prabhakar K. et al. Efficacy and safety of etifoxine versus alprazolam in generalized anxiety disorders with somatic symptoms: A randomized, double-blind, comparative study. J Anxiety Disord. 2026; epub 2026 Feb 25. doi: 10.1016/j.janxdis.2026.103147.</p>
		</div>
	</section>

	<section class="research-block research-block--soft">
		<div class="container">
			<h2>Вторинні кінцеві точки</h2>
			<p class="research-lead">Усі вторинні кінцеві точки були порівнянними між етифоксином і альпразоламом</p>
			<div class="research-scroll">
				<table class="endpoint-table">
					<thead>
						<tr>
							<th>Показники</th>
							<th>Етифоксин</th>
							<th>Альпразолам</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ( $endpoints as $endpoint ) : ?>
							<tr>
								<td><?php echo esc_html( $endpoint[0] ); ?></td>
								<td><?php echo esc_html( $endpoint[1] ); ?></td>
								<td><?php echo esc_html( $endpoint[2] ); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<section class="research-block">
		<div class="container">
			<h2>Безпека лікування</h2>
			<p class="research-lead">Повідомлялись лише легкі побічні реакції, що виникли під час лікування (TEAEs) при застосуванні етифоксину та альпразоламу</p>
			<div class="safety-layout">
				<div class="teae-list">
					<article>
						<span class="research-icon research-icon--fill" aria-hidden="true">
							<svg viewBox="0 0 48 48" width="36" height="36"><circle cx="24" cy="12" r="5" fill="currentColor"/><path fill="currentColor" d="M24 19c-6 0-10 3-10 6v2h6l2 12h4l2-12h6v-2c0-3-4-6-10-6z"/></svg>
						</span>
						<p><strong>15 TEAEs</strong><br>у 13 пацієнтів, які отримували <b>етифоксин</b></p>
					</article>
					<article>
						<span class="research-icon research-icon--fill" aria-hidden="true">
							<svg viewBox="0 0 48 48" width="36" height="36"><circle cx="24" cy="12" r="5" fill="currentColor"/><path fill="currentColor" d="M24 19c-6 0-10 3-10 6v2h6l2 12h4l2-12h6v-2c0-3-4-6-10-6z"/></svg>
						</span>
						<p><strong>11 TEAEs</strong><br>у 10 пацієнтів, які отримували <b>альпразолам</b></p>
					</article>
				</div>
				<article class="conclusion-card">
					<span class="pill-art" aria-hidden="true">
						<svg viewBox="0 0 88 88" width="88" height="88">
							<rect x="18" y="22" width="36" height="48" rx="8" fill="#e9f4ff" stroke="#3c2f8c" stroke-width="2"/>
							<rect x="24" y="16" width="24" height="10" rx="2" fill="#d7ebff" stroke="#3c2f8c" stroke-width="2"/>
							<rect x="28" y="34" width="16" height="8" rx="4" fill="#6b46e5"/>
							<rect x="28" y="46" width="16" height="8" rx="4" fill="#f0b429"/>
							<rect x="46" y="40" width="28" height="16" rx="8" fill="#efe7fb" stroke="#6b46e5" stroke-width="2"/>
							<rect x="60" y="40" width="14" height="16" rx="8" fill="#6b46e5"/>
						</svg>
					</span>
					<div>
						<h3>Висновок</h3>
						<ul>
							<li>Етифоксин 50 мг був порівнянним з альпразоламом 0,5 мг <strong>як за ефективністю, так і за безпекою.</strong></li>
							<li>Етифоксин може розглядатися як перспективна альтернатива для лікування генералізованого тривожного розладу (ГТР) <strong>без ризику формування лікарської залежності.</strong></li>
						</ul>
					</div>
				</article>
			</div>
			<p class="research-cite">TEAEs (Treatment-Emergent Adverse Events): небажані явища, що виникли під час лікування або побічні явища, що виникли після початку лікування.</p>
		</div>
	</section>
</main>

<?php
get_footer();
