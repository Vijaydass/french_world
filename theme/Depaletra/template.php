<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/


# Include the header template
include('include/header.inc.php'); 
?>

	<section class="section section-inset-1 bg-default text-center bg-image background-position-1" id="home" style="background-image: url(images/bg-image-1-1920x800.jpg)">
		<div class="container">
			<div class="title-style-1-wrap">
			<div class="oh-desktop wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
				<h1 class="title-style-1 wow slideInRight" style="visibility: visible; animation-name: slideInRight;"><?php get_page_title(); ?></h1>
			</div>
			</div>
		</div>
	</section>

	<section class="section section-xl bg-default">
		<div class="container">
			<div class="row row-50 row-md-60 justify-content-center justify-content-xl-between">
			<div class="col-lg-8">
				<div class="row row-50 row-md-60 row-lg-80">
				<div class="col-12">
					<article class="post post-modern">
					<div class="post-modern-panel">
						<div>
							<a class="post-modern-tag link-tag" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">News</a>
						</div>
						<div>
						<time class="post-modern-time" datetime="<?php get_page_date('Y-m-d'); ?>"><?php get_page_date('F jS, Y'); ?></time>
						</div>
					</div>
					<h3 class="post-modern-title"><?php get_page_title(); ?></h3>
					<div class="post-modern-figure"><img class="img-custom-2" src="./Blog Post_files/post-4-770x500.jpg" alt="" width="770" height="500">
					</div>
					<?php get_page_content(); ?>
					<!-- <p class="post-modern-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet</p>   
					 
					-->
					<!-- <div class="single-post-bottom-panel">
						<div class="group-md group-justify justify-content-center justify-content-sm-between">
						<div>
							<ul class="list-tags">
							<li><a class="link-tag" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">News</a></li>
							<li><a class="link-tag" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">Trends</a></li>
							<li><a class="link-tag" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">Web Design</a></li>
							</ul>
						</div>
						<div>
							<ul class="list-inline list-social list-inline-sm">
							<li><a class="icon fa fa-linkedin" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#"></a></li>
							<li><a class="icon fa fa-twitter" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#"></a></li>
							<li><a class="icon fa fa-facebook" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#"></a></li>
							<li><a class="icon fa fa-instagram" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#"></a></li>
							</ul>
						</div>
						</div>
					</div> -->
					</article>
				</div>
				<!-- <div class="col-12">
					<h4 class="single-post-title">3 Comments</h4>
					<div class="box-comment">
					<div class="unit flex-column flex-sm-row unit-spacing-md">
						<div class="unit-left"><a class="box-comment-figure" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#"><img src="./Blog Post_files/user-1-100x100.jpg" alt="" width="100" height="100"></a></div>
						<div class="unit-body">
						<div class="group-sm group-justify">
							<div>
							<div class="group-xs group-middle">
								<h5 class="box-comment-author"><a href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">Jane Doe</a></h5><a class="box-comment-reply" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">Reply</a>
							</div>
							</div>
							<div class="box-comment-time">
							<time datetime="2024-08-30">Aug 30, 2024</time>
							</div>
						</div>
						<p class="box-comment-text">Lorem ipsum dolor sit amet, has mutat labores nostrum ei. Duo te blandit erroribus, ut sea ipsum nonumy, mel no ignota accusamus gloriatur. Id has habeo regione, explicari hendrerit reprimique cum te.</p>
						</div>
					</div>
					<div class="box-comment">
						<div class="unit flex-column flex-sm-row unit-spacing-md">
						<div class="unit-left"><a class="box-comment-figure" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#"><img src="./Blog Post_files/user-2-100x100.jpg" alt="" width="100" height="100"></a></div>
						<div class="unit-body">
							<div class="group-sm group-justify">
							<div>
								<div class="group-xs group-middle">
								<h5 class="box-comment-author"><a href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">Jessica Brown</a></h5><a class="box-comment-reply" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">Reply</a>
								</div>
							</div>
							<div class="box-comment-time">
								<time datetime="2024-08-30">Aug 30, 2024</time>
							</div>
							</div>
							<p class="box-comment-text">Vortexs nocere, tanquam camerarius urbs. Observare inciviliter ducunt ad emeritis fuga. Cum luna messis, omnes valebates.</p>
						</div>
						</div>
					</div>
					</div>
					<div class="box-comment">
					<div class="unit flex-column flex-sm-row unit-spacing-md">
						<div class="unit-left"><a class="box-comment-figure" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#"><img src="./Blog Post_files/user-3-100x100.jpg" alt="" width="100" height="100"></a></div>
						<div class="unit-body">
						<div class="group-sm group-justify">
							<div>
							<div class="group-xs group-middle">
								<h5 class="box-comment-author"><a href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">Nick Stevens</a></h5><a class="box-comment-reply" href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html#">Reply</a>
							</div>
							</div>
							<div class="box-comment-time">
							<time datetime="2024-08-30">Aug 30, 2024</time>
							</div>
						</div>
						<p class="box-comment-text">Eheu. Gluten camerarius lacta est. Fugas sunt spatiis de fortis deus. Bassus, teres brabeutas sapienter consumere de emeritis, lotus zeta. A falsis, usus rusticus castor. Candidatuss sunt zeluss de.</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col-12">
					<h4 class="single-post-title">Leave a comment</h4>
					<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://ld-wt73.template-help.com/wt_prod-20956/bat/rd-mailform.php" novalidate="novalidate">
					<div class="row row-20 row-md-30">
						<div class="col-sm-6">
						<div class="form-wrap">
							<input class="form-input form-control-has-validation" id="contact-first-name-2" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
							<label class="form-label rd-input-label" for="contact-first-name-2">First Name</label>
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-wrap">
							<input class="form-input form-control-has-validation" id="contact-last-name-2" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
							<label class="form-label rd-input-label" for="contact-last-name-2">Last Name</label>
						</div>
						</div>
						<div class="col-12">
						<div class="form-wrap">
							<label class="form-label rd-input-label" for="contact-message-2">Message</label>
							<textarea class="form-input textarea-lg form-control-has-validation form-control-last-child" id="contact-message-2" name="phone" data-constraints="@Required"></textarea><span class="form-validation"></span>
						</div>
						</div>
					</div>
					<button class="button button-default" type="submit">Submit</button>
					</form>
				</div> -->
				</div>
			</div>
			<?php include('include/sidebar.inc.php'); ?>            
			</div>
		</div>
	</section>
<!-- include the footer template -->
<?php include('include/footer.inc.php'); ?>