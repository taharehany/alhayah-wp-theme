<?php /*Template Name: homePage */ ?>
<?php get_header(); ?>

<!--main slider-->
<section class="main-slider">
	<div class="main-slider-carousel owl-carousel owl-theme">
		<?php
		$args = array(
			'post_type' => 'hero',
			'post_status' => 'publish',
		);
		$query = new wp_query($args);
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
		?>
				<div class="slider-item">
					<?php the_post_thumbnail('', ['class' => 'img-fluid']); ?>
					<div class="item-details">
						<div class="container">
							<div class="item-text">
								<h1 class="title"><?php the_title(); ?></h1>
								<?php the_content(); ?>
								<div class="item-btn"><a class="btn" href="#services">تعرف على الخدمات</a></div>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		}
		?>
	</div>
</section>
<!--main slider-->

<!--about us-->
<section class="about" id="about">
	<div class="container">
		<div class="content">
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'about_us',
					'post_status' => 'publish',
					'posts_per_page' => 1,
				);
				$query = new wp_query($args);
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
				?>
						<div class="col-lg-6">
							<div class="about-image">
								<?php the_post_thumbnail('', ['class' => 'img-fluid']); ?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="main-title">
								<h2><?php the_title(); ?></h2>
								<span class="bottom-title"><?php the_field('sub_title'); ?></span>
							</div>
							<div class="about-text">
								<?php the_content(); ?>
							</div>
							<div class="about-btn"><a class="btn" href="#services">تعرف على الخدمات</a></div>
						</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</section>
<!--about us-->

<!--video-->
<section class="video" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/images/bgs/bg-1.jpeg')">
	<div class="container">
		<div class="content">
			<?php
				$args = array(
					'post_type' => 'video',
					'post_status' => 'publish',
					'posts_per_page' => 1,
				);
				$query = new wp_query($args);
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
			?>
			<div class="vid-icon"><a href="<?php the_field('video_url'); ?>" data-fancybox=""> <i class="bi bi-play-fill"></i></a></div>
			<div class="vid-text">
				<p><?php the_title(); ?></p>
				<h2>قطاعات الأعمال</h2>
			</div>
			<?php
				}
			}
			?>
		</div>
	</div>
</section>
<!--video-->

<!--about tabs-->
<section class="about-tabs" id="works">
	<div class="container">
		<div class="content">
			<ul class="nav nav-pills" role="tablist">
				<?php
					$args = array(
						'post_type' => 'business_sectors',
						'post_status' => 'publish',
						'posts_per_page' => 4,
					);
					$query = new wp_query($args);
					if ($query->have_posts()) {
						$i = 0;
						while ($query->have_posts()) {
						$query->the_post();
						$i++; 
				?>
				<li class="nav-item" role="presentation">
					<button class="nav-link <?php if($i == 1) echo 'active'; ?>" id="about-<?php echo $i ?>-tab" data-bs-toggle="pill" data-bs-target="#about-<?php echo $i ?>" type="button" role="tab" aria-controls="about-<?php echo $i ?>" aria-selected="true"><?php the_title(); ?></button>
				</li>
				<?php
					}
				}
				?>
			</ul>
			<div class="tab-content">
				<?php
					$args = array(
						'post_type' => 'business_sectors',
						'post_status' => 'publish',
						'posts_per_page' => 4,
					);
					$query = new wp_query($args);
					if ($query->have_posts()) {
						$i = 0;
						while ($query->have_posts()) {
						$query->the_post();
						$i++; 
				?> 
				<div class="tab-pane fade <?php if($i == 1) echo 'show active'; ?>" id="about-<?php echo $i ?>" role="tabpanel" aria-labelledby="about-<?php echo $i ?>-tab">
					<div class="row">
						<div class="col-lg-7">
							<div class="title">
								<h3><?php the_field('internal_title'); ?></h3>
							</div>
							<div class="text">
								<?php the_content(); ?>
							</div>
						</div>
						<div class="col-lg-5">
							<?php the_post_thumbnail('', ['class' => 'image img-fluid']); ?>
						</div>
					</div>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</section>
<!--about tabs-->

<!--cta-->
<section class="cta">
	<div class="container">
		<div class="content">
			<div class="row">
				<?php
					$args = array(
						'post_type' => 'why_us',
						'post_status' => 'publish',
						'posts_per_page' => 1,
					);
					$query = new wp_query($args);
					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
				?>
				<div class="col-lg-6">
					<div class="image">
						<?php the_post_thumbnail('', ['class' => 'image img-fluid']); ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="text">
						<div class="main-title">
							<h2><?php the_title(); ?></h2>
						</div>
						<?php the_content(); ?>
						<div class="btns"><a class="btn" href="#contact" rel="nofollow">اطلب الآن</a></div>
					</div>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</section>
<!--cta-->

<!--services-->
<section class="services" id="services">
	<div class="container">
		<div class="main-title">
			<h2>خدمات الحياة إيجيبت</h2>
			<p>نحن نهدف إلى تقديم الحل الأمثل لكافة مشاكل المياه عن طريق المنتجات والخدمات الأتية:</p>
		</div>
		<div class="content">
			<div class="row">
				<?php
					$args = array(
						'post_type' => 'services',
						'post_status' => 'publish',
					);
					$query = new wp_query($args);
					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
				?>
				<div class="col-lg-4 col-md-6 box">
					<div class="service-box">
						<div class="image">
							<?php the_post_thumbnail('', ['class' => 'image img-fluid']); ?>
						</div>
						<div class="details">
							<h3 class="title"><?php the_title(); ?></h3>
							<div>
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</section>
<!--services-->

<!--contact bg-->
<section class="contact-bg" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/images/bgs/bg-2.jpg')">
	<div class="container">
		<div class="content">
			<?php
				$args = array(
					'post_type' => 'call_to_action', 
					'post_status' => 'publish',
					'posts_per_page' => 1,
				);
				$query = new wp_query($args);
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
			?>
			<div class="icon">
					<a href="tel:<?php the_field('mobile_number'); ?>">
					<i class="bi bi-telephone-outbound"></i>
				</a>
			</div>
			<div class="text">
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
			</div>
			<?php
				}
			}
			?>
		</div>
	</div>
</section>
<!--contact bg-->

<!--clients-->
<section class="clients" id="clients">
	<div class="container">
		<div class="content">
			<div class="clients-carousel owl-carousel owl-theme">
				<?php
					$args = array(
						'post_type' => 'clients', 
						'post_status' => 'publish',
					);
					$query = new wp_query($args);
					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
				?>
				<div class="item"><?php the_post_thumbnail('', ['class' => 'image img-fluid']); ?></div>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</section>
<!--clients-->

<!--map-->
<section class="map">
	<?php
		$args = array(
			'post_type' => 'contact_info', 
			'post_status' => 'publish',
			'posts_per_page' => 1,
		);
		$query = new wp_query($args);
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
	?>
	<iframe src="<?php the_field('location'); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	<?php
		}
	}
	?>
</section>
<!--map-->

<!--contact info-->
<section class="contact-info" id="contact">
	<div class="container">
		<div class="content">
			<div class="details">
				<div class="row">
					<?php
						$args = array(
							'post_type' => 'contact_info', 
							'post_status' => 'publish',
							'posts_per_page' => 1,
						);
						$query = new wp_query($args);
						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
					?>
					<div class="col-md-4">
						<div class="info-box">
							<div class="icon"><i class="bi bi-pin-map"></i></div>
							<div class="info">
								<h4>العنوان</h4>
								<p><?php the_field('address'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info-box">
							<div class="icon"><i class="bi bi-telephone"></i></div>
							<div class="info">
								<h4>الهاتف</h4>
								<p> <a href="tel:<?php the_field('mobile'); ?>" dir="ltr" style="color:#ff4917;font-size:24px;font-wight: 800"><?php the_field('mobile'); ?></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info-box">
							<div class="icon"><i class="bi bi-envelope"> </i></div>
							<div class="info">
								<h4>الإيميل</h4>
								<p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
			<div class="text">
				<div class="info-logo"><a href="index.html"> <img class="img-fluid" data-src="images/logo-white.png" alt=""></a></div>
				<p>متخصصون في تكنولوجيا معالجة المياه بأحدث الأساليب العلمية نوفر لكم أفضل الحلول لمعالجة المياه و ما عليكم إلا اختيار الأنسب من بينها لدينا أحدث الطرق والأساليب لمعالجة المياه و تنقيتها من البكتريا و الشوائب مع الحياة.. لا داعي للقلق من تغير لون أو رائحة أو طعم المياه فمهمتنا أن نعيد للمياه نقاءها ننفرد بخدمة عملاء مميزة علميًا ومهنيًا مع الحياة ستصل لكل ما هو حديث ومتطور في عالم المياه و تنقيتها.</p>
			</div>
			<div class="social-links">
				<div class="links"><a class="bi bi-facebook" href="https://www.facebook.com/alhayahegypt1"></a><a class="bi bi-youtube" href="https://www.youtube.com/channel/UCokE3DJMeS5kHRyPdQOJu_w"></a></div>
			</div>
		</div>
	</div>
</section>
<!--contact info-->

<?php get_footer(); ?>