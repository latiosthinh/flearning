<?php
$blocks = rwmb_meta( 'layout', null, get_queried_object_id() );

foreach ( $blocks as $b ) :
?>

<section class="page-block <?= $b[ 'layout_background' ] ? 'has-background' : '' ?>"
	style="background-image:url(<?= wp_get_attachment_url( $b[ 'layout_background' ], 'full' ) ?>)">
	<div class="container">
		<?php if ( 1 == $b['style'] ) : ?>
		<!-- ************* Style 1 ************* -->
			
			<div class="row <?= 1 == $b['reverse'] ? 'reverse' : '' ?>">
				<div class="<?= 1 == $b['small'] ? 'col-6' : 'col-5' ?>">
					<?= $b[ 'layout_content' ] ?>

					<?php if ( $b['layout_button'] ) : ?>
					<div class="dflex button-list">
						<?php foreach ( $b['layout_button'] as $button ) : ?>
							<?php if ( $button['is_video'] ) : ?>

							<a class="button-3 popup-open" class="popup-open" data-popup="<?= $button['button_url'] ?>">
								<img src="<?= NOVUS_IMG . '/play-4.svg' ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php else : ?>

							<a class="button-3" href="<?= $button['button_url'] ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>

				<div class="<?= 1 == $b['small'] ? 'col-6' : 'col-7' ?> video">
					<img style="width:<?= $b['layout_image_width'] ?>%" src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>">

					<?php if ( $b[ 'layout_video' ] ) : ?>
					<button class="play popup-open" data-popup="<?= $b[ 'layout_video' ]; ?>">
						<img src="<?= NOVUS_IMG . '/play-1.png' ?>" style="width:56px;height:56px;">
					</button>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		
		<?php if ( 2 == $b['style'] ) : ?>
		<!-- ************* Style 2 ************* -->
			
			<div class="row block-style-2 <?= 1 == $b['reverse'] ? 'reverse' : '' ?>">
				<div class="col-12 title">
					<h2><?= $b['layout_title'] ?></h2>
				</div>

				<div class="col-6 image">
					<img src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>">
				</div>

				<div class="col-6">
					<?php
					$items = $b['layout_box_icon'];

					foreach ( $items as $i ) :
					?>

					<div class="item">
						<div class="icon-wrapper">
							<img style="width:<?= $i['width'] ?>px;height:<?= $i['height'] ?>px" src="<?= wp_get_attachment_url( $i['icon'] ) ?>">
						</div>

						<div>
							<?= $i['text'] ?>
						</div>
					</div>

					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>


		<?php if ( 3 == $b['style'] ) : ?>
			<!-- ************* Style 3 ************* -->
			
			<div class="box box-orange dflex flex-column aic clw">
				<div><?= $b['layout_content'] ?></div>
				
				<?php if ( $b['layout_button'] ) : ?>
				<div class="dflex jcc button-list">
					<?php foreach ( $b['layout_button'] as $button ) : ?>
						<?php if ( $button['is_video'] ) : ?>

						<a class="button-5 popup-open" class="popup-open" data-popup="<?= $button['button_url'] ?>">
							<?= $button['button_text'] ?>
						</a>

						<?php else : ?>

						<a class="button-5" href="<?= $button['button_url'] ?>">
							<?= $button['button_text'] ?>
						</a>

						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>


		<?php if ( 4 == $b['style'] ) : ?>
			<!-- ************* Style 4 ************* -->
			
			<div class="row block-style-4 <?= 1 == $b['reverse'] ? 'reverse' : '' ?>">
				<div class="col-5 left">
					<?= $b['layout_content'] ?>

					<div class="dflex aic button-list">
						<?php foreach ( $b['layout_button'] as $button ) : ?>
							<?php if ( $button['is_video'] ) : ?>

							<a class="button-4 popup-open" class="popup-open" data-popup="<?= $button['button_url'] ?>">
								<img src="<?= NOVUS_IMG . '/play-4.svg' ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php else : ?>

							<a class="button-1" href="<?= $button['button_url'] ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="col-7 image">
					<img src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>">
				</div>

				<div class="col-12">
					<div class="content clw">
						<?= $b['layout_content_bottom'] ?>
					</div>
				</div>
			</div>
		<?php endif; ?>


		<?php if ( 5 == $b['style'] ) : ?>
			<!-- ************* Style 5 ************* -->
			<div class="row <?= 1 == $b['reverse'] ? 'reverse' : '' ?>">
				<div class="col-4">
					<?= $b['layout_content'] ?>
				
					<?php if ( $b['layout_button'] ) : ?>
					<div class="dflex button-list">
						<?php foreach ( $b['layout_button'] as $button ) : ?>
							<?php if ( $button['is_video'] ) : ?>

							<a class="button-3 popup-open" class="popup-open" data-popup="<?= $button['button_url'] ?>">
								<img src="<?= NOVUS_IMG . '/play-4.svg' ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php else : ?>

							<a class="button-1" href="<?= $button['button_url'] ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>

				<div class="col-8 box-icon-white">
					<div class="row">
						<?php
						$tips = $b['layout_box_icon'];

						foreach ( $tips as $i ) :
						?>

						<div class="col-6 item">
							<div class="dflex aic jcsb">
								<img src="<?= wp_get_attachment_url( $i['icon'] ) ?>">

								<?= $i['text'] ?>
							</div>
						</div>

						<?php endforeach; ?>
					</div>
				</div>
		<?php endif; ?>


		<?php if ( 6 == $b['style'] ) : ?>
		<!-- ************* Style 6 ************* -->

			<div class="row item block-style-6 <?= 1 == $b['reverse'] ? 'reverse' : '' ?>">
				<?php if ( $b['layout_content'] ) : ?>
					<div class="col-12 tac">
						<?= $b['layout_content'] ?>
					</div>
				<?php endif; ?>

				<div class="col-6">
					<?= $b['layout_textbox'] ?>

					<?php if ( $b['layout_button'] ) : ?>
					<div class="dflex button-list">
						<?php foreach ( $b['layout_button'] as $button ) : ?>
							<?php if ( $button['is_video'] ) : ?>

							<a class="button-4 popup-open" class="popup-open" data-popup="<?= $button['button_url'] ?>">
								<img src="<?= NOVUS_IMG . '/play-4.svg' ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php else : ?>

							<a class="button-1" href="<?= $button['button_url'] ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>

				<div class="col-6 video">
					<img style="width:<?= $b['layout_image_width'] ?>%" class="image" src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>" style="<?= ! $b['layout_textbox_float'] ? 'max-width:unset' : '' ?>">

					<?php if ( ! $b['layout_textbox_float'] && $b['layout_video'] ) : ?>
						<button class="play popup-open" data-popup="<?= $b['layout_video'] ?>">
							<img src="<?= NOVUS_IMG . '/play-1.png' ?>" style="width:56px;height:56px;">
						</button>
					<?php endif; ?>
					
					<?php if ( $b['layout_textbox_float'] ) : ?>
					<div class="box">
						<p><?= $b['layout_textbox_float'] ?></p>
						<a class="dflex aic popup-open" data-popup="<?= $b['layout_video'] ?>">
							<img src="<?= NOVUS_IMG . '/play-3.svg' ?>">
							<b>Watch Video</b>
						</a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>


		<?php if ( 7 == $b['style'] ) : ?>
		<!-- ************* Style 7 ************* -->

			<div class="row block-style-7 items <?= 1 == $b['reverse'] ? 'reverse' : '' ?>">

				<div class="col-12">
					<?= $b['layout_content'] ?>
				</div>

				<div class="col-6">
				<?php
				$toggle = $b['layout_toggle'];

				foreach ( $toggle as $t ) :
				?>
					<?php if ( $t['title'] && $t['label'] ) : ?>
						<h3><?= $t['title'] ?></h3>
					<?php endif; ?>

					<div class="accordions">
						<h3 class="h3 control">
							<?= $t['label'] ? $t['label'] : $t['title'] ?>
							<img src="<?= NOVUS_IMG . '/right.svg' ?>">
						</h3>
						<div class="panel">
							<?= $t['text'] ?>

							<?php if ( $t['button_url'] ) : ?>
							<div>
								<a href="<?= $t['button_url'] ?>" class="button-1"><?= $t['button_text'] ?></a>
							</div>
							<?php endif; ?>
						</div>
					</div>

				<?php endforeach; ?>
				</div>

				<div class="col-6">
					<div class="video">
						<img style="width:<?= $b['layout_image_width'] ?>%" src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>">

						<?php if ( $b[ 'layout_video' ] ) : ?>
						<button class="play popup-open" data-popup="<?= $b[ 'layout_video' ]; ?>">
							<img src="<?= NOVUS_IMG . '/play-1.png' ?>" style="width:56px;height:56px;">
						</button>
						<?php endif; ?>
					</div>
				</div>
			</div>

		<?php endif; ?>


		<?php if ( 8 == $b['style'] ) : ?>
		<!-- ************* Style 8 ************* -->

			<div class="row block-style-8">
				<div class="col-12">
					<?= $b[ 'layout_content' ]; ?>
				</div>

				<?php
				$videos = $b['layout_video_group'];

				foreach ( $videos as $v ) :
				?>
				<div class="col-4 item">
					<div class="video">
						<img src="<?= wp_get_attachment_image_src( $v[ 'image' ], 'thumb-video' )[0] ?>">

						<?php if ( $v[ 'video' ] ) : ?>
						<button class="play popup-open" data-popup="<?= $v[ 'video' ]; ?>">
							<img src="<?= NOVUS_IMG . '/play-1.png' ?>" style="width:56px;height:56px;">
						</button>
						<?php endif; ?>
					</div>
					<a href="<?= $v['url'] ?>"><?= $v['title'] ?></a>
				</div>
				<?php endforeach; ?>
			</div>

		<?php endif; ?>

		<?php if ( 9 == $b['style'] ) : ?>
			<!-- ************* Style 9 ************* -->
			
			<div class="block-style-9 clw dflex flex-wrap aic">
				<div class="col-6">
					<?= $b[ 'layout_content' ]; ?>
				</div>

				<div class="col-6 video">
					<img style="width:<?= $b['layout_image_width'] ?>%" src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>">
				</div>
			</div>
		<?php endif; ?>

		<?php if ( 10 == $b['style'] ) : ?>
			<!-- ************* Style 10 ************* -->
			
			<div class="row block-style-10">
				<div class="col-12">
					<?= $b[ 'layout_content' ]; ?>

					<?php if ( $b['layout_button'] ) : ?>
					<div class="dflex jcc button-list">
						<?php foreach ( $b['layout_button'] as $button ) : ?>
							<?php if ( $button['is_video'] ) : ?>

							<a class="button-3 popup-open" class="popup-open" data-popup="<?= $button['button_url'] ?>">
								<img src="<?= NOVUS_IMG . '/play-4.svg' ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php else : ?>

							<a class="button-1" href="<?= $button['button_url'] ?>">
								<?= $button['button_text'] ?>
							</a>

							<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( 11 == $b['style'] ) : ?>
			<!-- ************* Style 11 ************* -->
			<div class="row block-style-11">
				<div class="col-12">
					<?= $b['layout_content'] ?>
				</div>

				<?php
				$tips = $b['layout_box_icon'];

				foreach ( $tips as $i ) :
				?>

				<div class="col-4">
					<div class="item">
						<img src="<?= wp_get_attachment_url( $i['icon'] ) ?>">

						<div class="content">
							<?= $i['text'] ?>
						</div>
					</div>
				</div>

				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if ( 12 == $b['style'] ) : ?>
			<!-- ************* Style 12 ************* -->
			<div class="row block-style-12 accordions">
				<?php if ( $b['layout_content'] ) : ?>
				<div class="col-12 accordions_title">
					<?= $b['layout_content'] ?>
				</div>
				<?php endif; ?>

				<?php
				$accs = $b['layout_toggle'];
				foreach ( $accs as $a ) :
				?>

					<div class="col-12">
						<div class="faq-block">
							<h4 class="control"><?= $a[ 'title' ] ?></h4>
							<div class="panel">
								<?= $a[ 'text' ] ?>
							</div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php endforeach; ?>