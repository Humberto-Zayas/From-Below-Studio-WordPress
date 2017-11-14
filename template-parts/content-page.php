<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */
?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<?php //frombelowstudiotheme_post_thumbnail(); ?>

	<div class="entry-content">
		
    <?php

		//the_content();

		/*
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'frombelowstudiotheme' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'frombelowstudiotheme' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) )
		*/
		?>
	</div> -->
<?php if (is_page( array('Cart', 'Checkout'))):?>
  <?php the_content(); ?>

<?php else:?>

  <div class="home" data-ix="navbar-desktop-scrolled-reveal" id="hero">
    <div class="div-block" data-ix="home-hero-reveal"></div>
    <div class="div-block-7">
      <h2 class="heading oswald" data-ix="just-work"><span class="text-span"><span data-ix="new-interaction">FROM</span> <span data-ix="below-reveal">BELOW</span></span><span data-ix="studio-reveal" class="text-span-2">&nbsp;STUDIO</span></h2>
      <h5 class="heading-2" data-ix="about-bg-reveal">Sounds from the Underground</h5>
      <div class="div-block-14" data-ix="about-bg-reveal"></div>
      <h5 class="heading-2 sub-cta" data-ix="about-bg-reveal-2">New Jersey Recording Studio<br> <span class="text-span-27"><a href="tel:+1-609-469-4340" class="link-3">(609)-469-4340</a></span></h5>
      <div class="fbs-button" data-ix="contact-reveal-6"><span class="text-span-12"></span> &nbsp;BOOK YOUR SESSION</div>
    </div>
  </div>
  <div class="services-section" data-ix="service-bg-reveal">
    <div class="services-background" id="service-section"></div>
    <div class="fbs-container">
      <h1 class="heading-13">SERVICES</h1>
      <div class="text-block-13">From Below offers recording and audio mixing services. The studio is also available for production uses.</div>
      <div class="w-row">
        <div class="column-19 w-clearfix w-col w-col-6" data-ix="fade-up-recording-service">
          <h1 class="heading-17">RECORDING <span class="text-span-20">SERVICES</span></h1>
          <div class="div-block-30"></div>
          <p class="service-icon"></p>
          <p class="list-item-4">From Below records songs, mixtapes, EP's, LP's for artists of multiple genres.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Industry quality recording booth, microphones, outboard gear. Fits guitar, bass, keyboards, violin, brass and many instruments.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Mood lighting - set the tone of your session with Hue Lighting.</p>
          <p class="service-icon"></p>
          <p class="list-item-4"><span>Plug in your inputs/outputs in control room and booth. Bring your Laptop, Keyboards/Synth, XLR Cables, 1/4in. cables, Aux Cord. </span></p>
          <p class="service-icon"></p>
          <p class="list-item-4">Sound treated booth, control room, and waiting area available.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Seating area available. Relax and watch the session live on studio monitor.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Access to your bounces, tracks and project files.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Free Backup Studio keeps files backed up for use and edit.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Multiple sessions and blocks available.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Charing ports available for USB/Android/iPhone.</p>
        </div>
        <div class="column-20 w-clearfix w-col w-col-6" data-ix="fade-up-mixing-service">
          <h1 class="heading-17">MIXING <span class="text-span-20">SERVICES</span></h1>
          <div class="div-block-30"></div>
          <p class="service-icon"></p>
          <p class="list-item-4">Full mix down available for albums, mixtapes, podcasts, instrument solo's, drums and more.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">2 track mix down available for&nbsp;vocals over instrumental beat.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Full mix down service with stems for a full and dynamic mix.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Includes up to 3 revisions per song requested. More available on request.</p>
          <p class="service-icon-micing"></p>
          <p class="list-item-4">Mix leveling, signal monitoring/processing, ratio and threshold compression.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Creative effect processing - Equalization, Compression and Dynamics, Reverb, Delay.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Industry standard RTAS/VST plug-ins, Pro Tools, UAD Powered Plug-Ins, Waves Collection and many more.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Online mixing services available.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Custom edits upon request - create performance ready mixes, clip edits/fades/chops, looping, song layout and more.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">16bit/24bit 44.1/48khz uncompressed high quality master bounce and stems.</p>
          <p class="service-icon"></p>
          <p class="list-item-4">Mixing sessions saved for free on computer and access to your files.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="pricing-section" data-ix="pricing-bg-color-reveal">
    <div class="pricing-bg-color" id="pricing-section"></div>
    <div class="fbs-container pricing-tablet-padding">
      <h1 class="heading-13">PRICING</h1>
      <div class="text-block-13">Promotional pricing for recording and mixing packages. Single sessions and mixes available as well.</div>
      <div class="tabs w-tabs" data-duration-in="300" data-duration-out="100">
        <div class="w-tab-menu">
          <a class="tab-link-2 w-inline-block w-tab-link" data-w-tab="Tab 1">
            <div class="text-block-29">RECORDING</div>
          </a>
          <a class="tab-link-2 w--current w-inline-block w-tab-link" data-w-tab="Tab 2">
            <div>MIXING</div>
          </a>
          <a class="studio-hidden-tab-title tab-link-2 w-inline-block w-tab-link" data-w-tab="Tab 3">
            <div>STUDIO SERVICES</div>
          </a>
        </div>
        <div class="tabs-content-2 w-tab-content">
          <div class="tab-pane w-tab-pane" data-w-tab="Tab 1">
            <div class="text-block-30">Click left and right to see pricing options*</div>
            <div class="mobile-pricing-slider w-slider" data-animation="slide" data-disable-swipe="1" data-duration="500" data-infinite="1">
              <div class="mask w-slider-mask">
                <div class="slide-9 w-slide">
                  <ul class="recording-pricing-1 w-list-unstyled">
                    <li class="first-item-title list-item-2">Standard rate</li>
                    <li class="item-pricing list-item-2">$35*<br><span class="text-span-7">per hour</span></li>
                    <li class="list-item-2">Industry Quality Recording</li>
                    <li class="list-item-2">Session Bounce</li>
                    <li class="list-item-2">Rough Mix</li>
                    <li class="list-item-2">Pro Tools Session</li>
                    <li class="list-item-2">*Minimum 2 Hours</li>
                    <li class="last-item-button list-item-2"><span data-ix="contact-reveal" class="text-span-8">BOOK NOW</span></li>
                  </ul>
                </div>
                <div class="w-slide">
                  <ul class="recording-pricing-2-mobile w-list-unstyled">
                    <li class="first-item-title list-item-2">Packages</li>
                    <li class="item-pricing list-item-2">$170-$800*<br><span class="text-span-7">based on number of tracks</span></li>
                    <li class="list-item-2">3 Tracks/$170</li>
                    <li class="list-item-2">6 Tracks/$380</li>
                    <li class="list-item-2">9 Tracks/$590</li>
                    <li class="list-item-2">12 Tracks/$800</li>
                    <li class="list-item-2">*Dedicated Studio Time</li>
                    <li class="last-item-button list-item-2"><span data-ix="contact-reveal" class="text-span-8">BOOK NOW</span></li>
                  </ul>
                </div>
                <div class="w-slide">
                  <ul class="recording-pricing-3-mobile w-list-unstyled">
                    <li class="first-item-title list-item-2">Custom project</li>
                    <li class="item-pricing list-item-2">Got a Budget?*<br><span class="text-span-9">*Pricing and service negotiable</span></li>
                    <li class="list-item-2">Please contact for more info.</li>
                    <li class="list-item-2">Perfect for those with specific needs.</li>
                    <li class="list-item-2">Voice Recording, Voice Overs &amp; more</li>
                    <li class="list-item-2">Pricing for your project.</li>
                    <li class="list-item-2">*Pricing and service negotiable.</li>
                    <li class="last-item-button list-item-2"><span data-ix="contact-reveal" class="text-span-8">BOOK NOW</span></li>
                  </ul>
                </div>
              </div>
              <div class="arrow-style left-arrow-2 w-slider-arrow-left">
                <div class="icon-4 w-icon-slider-left"></div>
              </div>
              <div class="arrow-style right-arrow-3 w-slider-arrow-right">
                <div class="icon-3 w-icon-slider-right"></div>
              </div>
              <div class="slide-nav-4 w-round w-slider-nav"></div>
            </div>
            <ul class="recording-pricing-1-desktop w-list-unstyled">
              <li class="first-item-title list-item-2">Standard rate</li>
              <li class="item-pricing list-item-2" data-ix="pricing-item-reveal">$35*<br><span class="text-span-7">*per hour/recording only</span></li>
              <li class="list-item-2" data-ix="pricing-item-reveal-5">*Minimum 2 Hours</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-2">Industry Quality Recording</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-3">Session/Project Bounce</li>
              <li class="last-item-button list-item-2" data-ix="pricing-item-reveal-6"><span data-ix="contact-reveal-6" class="text-span-8">BOOK NOW</span></li>
            </ul>
            <ul class="recording-pricing-2-desktop w-list-unstyled">
              <li class="first-item-title list-item-2">Packages</li>
              <li class="item-pricing list-item-2" data-ix="pricing-item-reveal">$170-$800*<br><span class="text-span-7">*includes rough reference mix</span></li>
              <li class="list-item-2" data-ix="pricing-item-reveal-2">3 Hours/$170</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-3">6 Hours/$380</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-4">9 Hours/$590</li>
              <li class="last-item-button list-item-2" data-ix="pricing-item-reveal-6"><span data-ix="contact-reveal-6" class="text-span-8">BOOK NOW</span></li>
            </ul>
            <ul class="recording-pricing-3-desktop w-list-unstyled">
              <li class="first-item-title list-item-2">Custom project</li>
              <li class="item-pricing list-item-2" data-ix="pricing-item-reveal">Customize*<br><span class="text-span-7">*Pricing varies</span></li>
              <li class="list-item-2" data-ix="pricing-item-reveal-2">Please contact for more info.</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-4">Voice Recording, Voice Overs &amp; more</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-5">*Pricing based on size of work</li>
              <li class="last-item-button list-item-2" data-ix="pricing-item-reveal-6"><span data-ix="contact-reveal-6" class="text-span-8">BOOK NOW</span></li>
            </ul>
          </div>
          <div class="w--tab-active w-tab-pane" data-w-tab="Tab 2">
            <div class="mobile-pricing-slider w-slider" data-animation="slide" data-disable-swipe="1" data-duration="500" data-infinite="1">
              <div class="w-slider-mask">
                <div class="slide-9 w-slide">
                  <ul class="mixing-pricing-1-mobile w-list-unstyled">
                    <li class="first-item-title list-item-2">2 Track mix</li>
                    <li class="item-pricing list-item-2">$70/Track<br><span class="text-span-9">*Revisions available</span></li>
                    <li class="list-item-2">Sessions with Engineer</li>
                    <li class="list-item-2">Industry Quality Mix Down</li>
                    <li class="list-item-2">Session Bounces</li>
                    <li class="list-item-2">Full Mix With Revisions</li>
                    <li class="list-item-2">Stems needed for best results</li>
                    <li class="list-item-2">*3 Revisions</li>
                    <li class="last-item-button list-item-2"><span class="text-span-8">BOOK NOW</span></li>
                  </ul>
                </div>
                <div class="w-slide">
                  <ul class="mixing-pricing-2-mobile w-list-unstyled">
                    <li class="first-item-title list-item-2">full stems mix</li>
                    <li class="item-pricing list-item-2">$100/Track*<br><span class="text-span-9">*Revisions available</span></li>
                    <li class="list-item-2">Sessions with Engineer</li>
                    <li class="list-item-2">Industry Quality Mix Down</li>
                    <li class="list-item-2">Session Bounces</li>
                    <li class="list-item-2">Full Mix With Revisions</li>
                    <li class="list-item-2">Stems needed for best results</li>
                    <li class="list-item-2">*Multiple Revisions</li>
                    <li class="last-item-button list-item-2"><span class="text-span-8">BOOK NOW</span></li>
                  </ul>
                </div>
              </div>
              <div class="arrow-style left-arrow-2 w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
              </div>
              <div class="arrow-style right-arrow-3 w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
              </div>
              <div class="slide-nav-4 w-round w-slider-nav"></div>
            </div>
            <ul class="mixing-pricing-1-desktop w-list-unstyled">
              <li class="first-item-title list-item-2">2 track mix down</li>
              <li class="item-pricing list-item-2">$70/Song</li>
              <li class="list-item-2">Online Mixing Service Available</li>
              <li class="list-item-2">Industry Quality Mix Down</li>
              <li class="list-item-2">Session/Project Bounce</li>
              <li class="list-item-2">3 Revisions Included</li>
              <li class="last-item-button list-item-2"><span data-ix="contact-reveal-3" class="text-span-8">CONTACT</span></li>
            </ul>
            <ul class="mixing-pricing-2-desktop w-list-unstyled">
              <li class="first-item-title list-item-2">full stem mix down</li>
              <li class="item-pricing list-item-2">$100/Song</li>
              <li class="list-item-2">Online Mixing Service Available</li>
              <li class="list-item-2">Industry Quality Mix Down</li>
              <li class="list-item-2">Session/Project Bounce</li>
              <li class="list-item-2">3 Revisions Included</li>
              <li class="last-item-button list-item-2"><span data-ix="contact-reveal-3" class="text-span-8">CONTACT</span></li>
            </ul>
          </div>
          <div class="studio-hidden-tab w-tab-pane" data-w-tab="Tab 3">
            <ul class="studio-pricing-card studio-services-pricing w-list-unstyled">
              <li class="first-item-title list-item-2">rent the studio/personal use</li>
              <li class="item-pricing list-item-2">$100/Hour*<br><span class="text-span-9">*per hour</span></li>
              <li class="list-item-2">Rent studio for listening/production session</li>
              <li class="list-item-2">Access to all studio gear and software</li>
              <li class="list-item-2">Rent the studio to make beats/produce on your own</li>
              <li class="list-item-2">Easily connect your PC, Laptop and Equipment</li>
              <li class="list-item-2">*3 Hours Minimum/Engineer on standby if needed</li>
              <li class="last-item-button list-item-2"><span class="text-span-8">BOOK NOW</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="div-block-27" data-ix="pricing-item-reveal-7">
        <h1 class="heading-13" data-ix="pricing-item-reveal-8">Do you have a project that doesn't fit these options?</h1>
        <div class="custom-project-button fbs-button" data-ix="contact-reveal-3">LET'S TALK</div>
      </div>
    </div>
  </div>
  



<div class="about-section" data-ix="about-bg-reveal" id="about">
    <div class="div-block-28"></div>
    <div class="fbs-container">
      <h3 class="heading-10-copy w-clearfix">ABOUT FROM BELOW <span class="text-span-24">STUDIO</span></h3>
      <div class="text-block-9">From Below is a recording studio in Central New Jersey. It features two professionally sound treated rooms including; a control room for mixing, mastering and listening and a vocal and instrument booth. From Below offers Industry standard hardware, software and recording/mixing services. Available for live recording sessions, full albums/projects, mixing, online mixing and listening sessions. Book your session today.</div>
      <div class="about-us-row w-row">
        <div class="column-7 w-col w-col-6">
          <div class="slider-2 w-slider" data-animation="slide" data-autoplay="1" data-delay="4000" data-duration="500" data-infinite="1">
            <div class="slider-title">
              <h4 class="heading-11">THE STUDIO</h4>
            </div>
            <div class="w-slider-mask">
              <div class="slide-2 w-slide"><a class="lightbox-link w-inline-block w-lightbox" href="#"><img class="image-2" src="<?php bloginfo('template_url');?>/images/avalong-demoshot.jpg"><script class="w-json" type="application/json">{ "group": "From Below Studio and Gear", "items": [{
  "type": "image",
  "_id": "597e88a186142700013beaf4",
  "fileName": "597e88a186142700013beaf4_avalong-demoshot.jpg",
  "origFileName": "avalong-demoshot.jpg",
  "width": 4096,
  "height": 2304,
  "fileSize": 3275458,
  "url": "images/avalong-demoshot_1.jpg"
}, {
  "cdnUrl": "https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg",
  "width": 150,
  "height": 150,
  "fileName": "image-placeholder.svg",
  "origFileName": "image-placeholder.svg",
  "url": "https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg",
  "_id": "example_img",
  "type": "image",
  "fileSize": 2063
}] }</script></a></div>
              <div class="slide-2 w-slide"><a class="lightbox-link w-inline-block w-lightbox" href="#"><img class="image-2" src="<?php bloginfo('template_url');?>/images/IMG_20170722_142734_347_1500772896518.jpg"><script class="w-json" type="application/json">{ "group": "From Below Studio and Gear", "items": [{
  "type": "image",
  "_id": "5968fb45e56b44588fa3eff5",
  "fileName": "5968fb45e56b44588fa3eff5_bg-test-fbs.jpg",
  "origFileName": "bg-test-fbs.jpg",
  "width": 1698,
  "height": 1018,
  "fileSize": 1046127,
  "url": "images/bg-test-fbs.jpg"
}, {
  "type": "image",
  "_id": "597350db55f0c353c22f6535",
  "fileName": "597350db55f0c353c22f6535_bg_pic1.jpg",
  "origFileName": "bg_pic1.jpg",
  "width": 1600,
  "height": 1000,
  "fileSize": 278482,
  "url": "images/bg_pic1.jpg"
}, {
  "type": "image",
  "_id": "597403f72e734d4747106efd",
  "fileName": "597403f72e734d4747106efd_IMG_20170722_142734_347_1500772896518.jpg",
  "origFileName": "IMG_20170722_142734_347_1500772896518.jpg",
  "width": 1440,
  "height": 1440,
  "fileSize": 114332,
  "url": "images/IMG_20170722_142734_347_1500772896518.jpg"
}, {
  "type": "image",
  "_id": "597e88a186142700013beaf4",
  "fileName": "597e88a186142700013beaf4_avalong-demoshot.jpg",
  "origFileName": "avalong-demoshot.jpg",
  "width": 4096,
  "height": 2304,
  "fileSize": 3275458,
  "url": "images/avalong-demoshot_1.jpg"
}] }</script></a></div>
            </div>
            <div class="w-slider-arrow-left" data-ix="about-from-below-studio-slider-1-init">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="right-arrow-2 w-slider-arrow-right" data-ix="about-from-below-studio-slider-1-init">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-2 w-round w-slider-nav" data-ix="about-from-below-studio-slider-1-init"></div>
          </div>
        </div>
        <div class="column-27 w-col w-col-6">
          <div class="slider-2 w-slider" data-animation="slide" data-autoplay="1" data-delay="4000" data-duration="500" data-infinite="1">
            <div class="slider-title">
              <h4 class="heading-11">OUTBOARD GEAR &amp; PLUGINS</h4>
            </div>
            <div class="w-slider-mask">
              <div class="slide-2 w-slide"><a class="lightbox-link w-inline-block w-lightbox" href="#"><img class="image-2" src="<?php bloginfo('template_url');?>/images/avalong-demoshot.jpg"><script class="w-json" type="application/json">{ "group": "From Below Studio and Gear", "items": [{
  "type": "image",
  "_id": "597e88a186142700013beaf4",
  "fileName": "597e88a186142700013beaf4_avalong-demoshot.jpg",
  "origFileName": "avalong-demoshot.jpg",
  "width": 4096,
  "height": 2304,
  "fileSize": 3275458,
  "url": "images/avalong-demoshot_1.jpg"
}, {
  "cdnUrl": "https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg",
  "width": 150,
  "height": 150,
  "fileName": "image-placeholder.svg",
  "origFileName": "image-placeholder.svg",
  "url": "https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg",
  "_id": "example_img",
  "type": "image",
  "fileSize": 2063
}] }</script></a></div>
              <div class="slide-2 w-slide"><a class="lightbox-link w-inline-block w-lightbox" href="#"><img class="image-2" src="<?php bloginfo('template_url');?>/images/IMG_20170722_142734_347_1500772896518.jpg"><script class="w-json" type="application/json">{ "group": "From Below Studio and Gear", "items": [{
  "type": "image",
  "_id": "5968fb45e56b44588fa3eff5",
  "fileName": "5968fb45e56b44588fa3eff5_bg-test-fbs.jpg",
  "origFileName": "bg-test-fbs.jpg",
  "width": 1698,
  "height": 1018,
  "fileSize": 1046127,
  "url": "images/bg-test-fbs.jpg"
}, {
  "type": "image",
  "_id": "597350db55f0c353c22f6535",
  "fileName": "597350db55f0c353c22f6535_bg_pic1.jpg",
  "origFileName": "bg_pic1.jpg",
  "width": 1600,
  "height": 1000,
  "fileSize": 278482,
  "url": "images/bg_pic1.jpg"
}, {
  "type": "image",
  "_id": "597403f72e734d4747106efd",
  "fileName": "597403f72e734d4747106efd_IMG_20170722_142734_347_1500772896518.jpg",
  "origFileName": "IMG_20170722_142734_347_1500772896518.jpg",
  "width": 1440,
  "height": 1440,
  "fileSize": 114332,
  "url": "images/IMG_20170722_142734_347_1500772896518.jpg"
}, {
  "type": "image",
  "_id": "597e88a186142700013beaf4",
  "fileName": "597e88a186142700013beaf4_avalong-demoshot.jpg",
  "origFileName": "avalong-demoshot.jpg",
  "width": 4096,
  "height": 2304,
  "fileSize": 3275458,
  "url": "images/avalong-demoshot_1.jpg"
}] }</script></a></div>
            </div>
            <div class="w-slider-arrow-left" data-ix="about-from-below-studio-slider-1-init">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="right-arrow-2 w-slider-arrow-right" data-ix="about-from-below-studio-slider-1-init">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-3 w-round w-slider-nav" data-ix="about-from-below-studio-slider-1-init"></div>
          </div>
        </div>
      </div>
      <div class="about-divider"></div>
      <div class="about-us-row w-row">
        <div class="column-8 w-col w-col-6">
          <h3 class="heading-10 w-clearfix">ABOUT YOUR <span class="text-span-25">ENGINEER<br></span></h3>
          <div class="text-block-9">From Below is a recording studio in Central New Jersey. It features two professionally sound treated rooms including; a control room for mixing, mastering and listening and a vocal and instrument booth. From Below offers Industry standard hardware, software and recording/mixing services. Available for live recording sessions, projects, mixing, online mixing and listening sessions. Book your session today.</div>
        </div>
        <div class="column-29 w-col w-col-6">
          <div class="slider-2 w-slider" data-animation="slide" data-duration="500" data-infinite="1">
            <div class="slider-title">
              <h4 class="heading-11">THE ENGINEER</h4>
            </div>
            <div class="w-slider-mask">
              <div class="slide-2 w-slide"><a class="lightbox-link w-inline-block w-lightbox" href="#"><img class="image-2" src="<?php bloginfo('template_url');?>/images/avalong-demoshot.jpg"><script class="w-json" type="application/json">{ "group": "From Below Studio and Gear", "items": [{
  "type": "image",
  "_id": "597e88a186142700013beaf4",
  "fileName": "597e88a186142700013beaf4_avalong-demoshot.jpg",
  "origFileName": "avalong-demoshot.jpg",
  "width": 4096,
  "height": 2304,
  "fileSize": 3275458,
  "url": "<?php bloginfo('template_url');?>/images/avalong-demoshot_1.jpg"
}, {
  "cdnUrl": "https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg",
  "width": 150,
  "height": 150,
  "fileName": "image-placeholder.svg",
  "origFileName": "image-placeholder.svg",
  "url": "https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg",
  "_id": "example_img",
  "type": "image",
  "fileSize": 2063
}] }</script></a></div>
              <div class="slide-2 w-slide"><a class="lightbox-link w-inline-block w-lightbox" href="#"><img class="image-2" src="<?php bloginfo('template_url');?>/images/IMG_20170722_142734_347_1500772896518.jpg"><script class="w-json" type="application/json">{ "group": "From Below Studio and Gear", "items": [{
  "type": "image",
  "_id": "5968fb45e56b44588fa3eff5",
  "fileName": "5968fb45e56b44588fa3eff5_bg-test-fbs.jpg",
  "origFileName": "bg-test-fbs.jpg",
  "width": 1698,
  "height": 1018,
  "fileSize": 1046127,
  "url": "<?php bloginfo('template_url');?>/images/bg-test-fbs.jpg"
}, {
  "type": "image",
  "_id": "597350db55f0c353c22f6535",
  "fileName": "597350db55f0c353c22f6535_bg_pic1.jpg",
  "origFileName": "bg_pic1.jpg",
  "width": 1600,
  "height": 1000,
  "fileSize": 278482,
  "url": "<?php bloginfo('template_url');?>/images/bg_pic1.jpg"
}, {
  "type": "image",
  "_id": "597403f72e734d4747106efd",
  "fileName": "597403f72e734d4747106efd_IMG_20170722_142734_347_1500772896518.jpg",
  "origFileName": "IMG_20170722_142734_347_1500772896518.jpg",
  "width": 1440,
  "height": 1440,
  "fileSize": 114332,
  "url": "<?php bloginfo('template_url');?>/images/IMG_20170722_142734_347_1500772896518.jpg"
}, {
  "type": "image",
  "_id": "597e88a186142700013beaf4",
  "fileName": "597e88a186142700013beaf4_avalong-demoshot.jpg",
  "origFileName": "avalong-demoshot.jpg",
  "width": 4096,
  "height": 2304,
  "fileSize": 3275458,
  "url": "<?php bloginfo('template_url');?>/images/avalong-demoshot_1.jpg"
}] }</script></a></div>
            </div>
            <div class="w-slider-arrow-left" data-ix="about-from-below-studio-slider-1-init">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="right-arrow-2 w-slider-arrow-right" data-ix="about-from-below-studio-slider-1-init">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-2 w-round w-slider-nav" data-ix="about-from-below-studio-slider-1-init"></div>
          </div>
        </div>
      </div>
      <div class="div-block-49 w-clearfix">
        <div class="div-block-48">
          <div class="misc-menu-item" data-ix="contact-reveal-2">Studio Policy</div>
          <div class="misc-menu-item" data-ix="contact-reveal">Contact</div>
          <div class="misc-menu-item social-misc"><a href="https://facebook.com/frombelowstudio" class="link-14"></a>&nbsp;|&nbsp;<span class="link-13"></span><a href="https://twitter.com/frombelowstudio" target="_blank" class="link-13"></a>&nbsp;|&nbsp;<a href="https://instagram.com/frombelowstudio" target="_blank" class="link-15"></a></div>
        </div><img class="image-3" src="<?php bloginfo('template_url');?>/images/fbs-ccinfo.png"></div>
    </div>
  </div>




  <div class="contact-section">
    <div class="fbs-container">
      <div class="div-block-42">
        <h1 class="heading-22">CON<span><span>TACT <span data-ix="new-interaction" class="text-span-26"><br></span></span>
          </span>
        </h1>
        <h5 class="heading-22-copy">Give me a call/text: <a href="tel:609-469-4340" class="link-3">609-469-4340<br xmlns="http://www.w3.org/1999/xhtml"></a><span><span><span data-ix="contact-section-reveal" class="text-span-26"></span></span>
          </span>
        </h5>
        <div class="form-normal-social"><span class="text-span-29"></span><a href="https://instagram.com/frombelowstudio" target="_blank" class="link-12"></a> | <a href="https://twitter.com/frombelowstudio" target="_blank" class="link-5"></a> | <a href="https://facebook.com/frombelowstudio" target="_blank" class="link-6"></a></div>
        <div class="w-form">
          <form class="form-2" data-name="Contact Form" id="wf-form-Contact-Form" name="wf-form-Contact-Form"><input autofocus="autofocus" class="text-field-3 w-input" data-name="name" id="name-3" maxlength="256" name="name" placeholder="Enter your name" required="required" type="text"><input class="text-field-3 w-input" data-name="emailAddress" id="emailAddress" maxlength="256" name="emailAddress" placeholder="Enter your email" required="required" type="email"><input class="text-field-3 w-input" data-name="phone-number" id="phone-number" maxlength="256" name="phone-number" placeholder="Phone Number" type="text"><label class="field-label-6" for="How-Did-You-Hear-About-Us">What service are you interested in?</label>
            <div class="div-block-44">
              <div class="radio-button-field-2 w-radio"><input class="radio-button-2 w-radio-input" data-name="Service Type" id="Recording-2" name="Service-Type" type="radio" value="Recording"><label class="field-label-5 w-form-label" for="Recording-2">Recording</label></div>
              <div class="radio-button-field-2 w-radio"><input class="radio-button-2 w-radio-input" data-name="Service Type" id="Mixing-2" name="Service-Type" type="radio" value="Mixing"><label class="field-label-5 w-form-label" for="Mixing-2">Mixing</label></div>
              <div class="radio-button-field-2 w-radio"><input class="radio-button-2 w-radio-input" data-name="Service Type" id="Studio Use" name="Service-Type" type="radio" value="Studio Use"><label class="field-label-5 w-form-label" for="Studio Use">Studio Use</label></div>
            </div>
            <div class="div-block-44"><label class="field-label-6" for="How-Did-You-Hear-About-Us">How did you hear about From Below Studio?</label><select class="select-field w-select" data-name="How Did You Hear About Us" id="How-Did-You-Hear-About-Us" name="How-Did-You-Hear-About-Us" required="required"><option value="Website">Website</option>
<option value="Instagram">Instagram</option>
<option value="Twitter">Twitter</option>
<option value="Facebook">Facebook</option>
<option value="Recommendation">Recommendation</option>
<option value="Google Search">Google Search</option>
<option value="Other">Other</option></select></div><textarea class="text-field-3 textarea w-input" data-name="message" id="message" maxlength="5000" name="message" placeholder="Tell me about your project" required="required"></textarea><input class="contact-button fbs-button w-button" data-wait="Sending..." type="submit" value="Send"></form>
          <div class="success-message w-form-done">
            <div class="text-block-26">Thanks for reaching out. I usually respond in under 48 hours. You can call or text 609-469-4340 for a faster reply.<br><br>Please take time to check out the <span data-ix="contact-reveal-2" class="text-span-30">Studio Policy</span> while you wait for your reply.</div>
          </div>
          <div class="error-message w-form-fail">
            <div class="text-block-28">*Name and email are required to send a message.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="policy-section">
    <div class="fbs-container">
      <div class="div-block-42">
        <h1 class="policy-heading">STUDIO POLICY <span data-ix="contact-section-reveal-2" class="text-span-26"></span><br><span><span><span data-ix="new-interaction" class="text-span-26"><br></span></span>
          </span>
        </h1>
        <div class="policy-text">1. The Client agrees to pay for studio time at the rate in effect at the time of booking. A non refundable 50% deposit is required 48 hours in advance of a session. This deposit will secure the Client’s scheduled time slot. Without a deposit, the scheduled time slot may be forfeited to another client. Deposits will be refunded if a session is canceled with at least 48 hours notice.&nbsp;
          <br><br>2. The Studio will provide studio time and the services of a recording engineer for the duration required by the Client. Any additional services, including, but not limited to mixing, mastering, and adding to or modifying tracks when done outside the agreed upon time slot may require additional fees.&nbsp;
          <br><br>3. The Studio is not responsible for lost, damaged, or stolen items that are left behind by a client. Any property left past 7 days will become property of DLM Recording Studio unless other arrangements have been made.&nbsp;
          <br><br>4. In the event a piece of equipment owned by DLM Recording studio, or any part of its facility, becomes damaged by the Client or anyone in the Client’s party due to negligence, accident or willful act, the Client agrees to pay monetary compensation in the amount of full replacement value of the damaged item.&nbsp;
          <br><br>5. The Client shall abide by the set of studio rules, which are attached to this agreement. Disobedience of these rules by the Client or anyone in the Client’s party will be grounds for removal of said person(s) from the premises, immediate termination of this agreement, and loss of future use of DLM Recording Studio. In the event of termination of this agreement due to such causes, there will be no refund of monies paid by the Client. The Studio or its representative will have sole right to make such a determination.&nbsp;
          <br><br>6. The Client agrees to allow its name, photographic image, and/or musical samples to be used on the Studio’s website and/or for other promotional purposes. DLM Recording Studio will not sell or allow downloads of the client’s music without prior agreement.&nbsp;
          <br><br>7. If the Studio must cancel a session due to illness, equipment malfunction, or other reasonable cause, the Studio will reschedule the session at the earliest available time agreed upon by both parties. In the event neither the Client nor the Studio can agree upon a date and time for a session, the Studio will refund the deposit.&nbsp;
          <br><br>8. The Client releases DLM Recording Studio from any harm or damage that may occur to any person in the Client’s party or to equipment belonging to the client.&nbsp;
          <br><br>9. The Client is responsible for obtaining all mechanical licenses for music that the Client does not own the rights. All such rights must be obtained prior to duplication or replication.&nbsp;
          <br><br> 10. In the event any technical issues occur with the Studio’s equipment during a session, the clock will stop and the client will not be charged for the time it takes to fix the issue.&nbsp;
          <br><br> 11. Studio time includes setup time, break down time, and any breaks taken by the artist(s) or engineer. The engineer will be allowed a break of up to 15 minutes every 2 hours to alleviate ear fatigue. The Client will be allowed a 30 minute meal break during a session of more than 4 hours. This break will not be counted as time towards the session.&nbsp;
          <br><br> 12. The Studio will retain ownership of all master recordings and will not release them to the Client until all amounts owed under this Agreement are paid in full.<br>&nbsp;
          <br> 13. This constitutes the entire agreement between the Client and Studio, and may not be modified, changed, or terminated in any way unless there is a written agreement signed by both parties.</div>
      </div>
    </div>
  </div>
  <div class="booking-section">
    <!-- <span data-ix="booking-close" class="text-span-26"></span><br><span><span><span data-ix="booking-close" class="text-span-26"><br></span></span>
          </span> -->
    <?php echo do_shortcode('[product_page id="49"]'); ?>
   <!--  <div class="fbs-container">
      <div class="div-block-42"> -->
        
        <!-- <div class="div-block-52">
          <h1 class="calendar-title">October 2017</h1>
          <h1 class="calendar-left-arrow nav-link"></h1>
          <h1 class="calendar-right-arrow nav-link"></h1>
        </div>
        <div class="w-row">
          
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">SUN</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">MON</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">TUE</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">WED</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">THU</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">FRI</div>
          </div>
        </div>
        <div class="w-row">
         
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">1</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">2</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">3</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">4</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">5</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">6</div>
          </div>
        </div>
        <div class="w-row">
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">8</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">9</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">10</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">11</div>
          </div>
          <div class="column-31 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32-copy">12</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">13</div>
          </div>
        </div>
        <div class="div-block-50">
          <h1 class="calendar-date-title">October 12th, 2017</h1>
          <div class="div-block-51">
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33-copy">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
          </div>
        </div>
        <div class="w-row">
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">8</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">9</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">10</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">11</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">12</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">13</div>
          </div>
        </div>
      </div> -->
    <!-- </div> -->
  </div>
  <?php endif;?>
  
	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'frombelowstudiotheme' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

<!-- </article> --><!-- #post-## -->
