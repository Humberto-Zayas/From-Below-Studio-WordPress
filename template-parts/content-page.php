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
<?php if (!is_page('welcome')):?>
  <?php the_content(); ?>

<?php else:?>

  <div class="home" data-ix="navbar-desktop-scrolled-reveal" id="hero">
    <?php echo do_shortcode('[contact-form-7 id="173" title="Test Quote"]');?>
    <div class="div-block" data-ix="home-hero-reveal"></div>
    <div class="div-block-7">
      <h2 class="heading oswald" data-ix="just-work"><span class="text-span"><span data-ix="new-interaction">FROM</span> <span data-ix="below-reveal">BELOW</span></span><span data-ix="studio-reveal" class="text-span-2">&nbsp;STUDIO</span></h2>
      <h5 class="heading-2" data-ix="about-bg-reveal">Sounds from the Underground</h5>
      <div class="div-block-14" data-ix="about-bg-reveal"></div>
      <h5 class="heading-2 sub-cta" data-ix="about-bg-reveal-2">New Jersey Recording Studio<br> <span class="text-span-27"><a href="tel:+1-609-469-4340" class="link-3">(609)-469-4340</a></span></h5>
      <div class="fbs-button" data-ix="contact-reveal-3"><span class="text-span-12"></span> &nbsp;BOOK YOUR SESSION</div>
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
          <a class="tab-link-2 w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
            <div class="text-block-29">RECORDING</div>
          </a>
          <a class="tab-link-2 w-inline-block w-tab-link" data-w-tab="Tab 2">
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
              <li class="last-item-button list-item-2" data-ix="pricing-item-reveal-6"><span data-ix="contact-reveal-3" class="text-span-8">BOOK NOW</span></li>
            </ul>
            <ul class="recording-pricing-2-desktop w-list-unstyled">
              <li class="first-item-title list-item-2">Packages</li>
              <li class="item-pricing list-item-2" data-ix="pricing-item-reveal">$170-$800*<br><span class="text-span-7">*includes rough reference mix</span></li>
              <li class="list-item-2" data-ix="pricing-item-reveal-2">3 Hours/$170</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-3">6 Hours/$380</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-4">9 Hours/$590</li>
              <li class="last-item-button list-item-2" data-ix="pricing-item-reveal-6"><span data-ix="contact-reveal-3" class="text-span-8">BOOK NOW</span></li>
            </ul>
            <ul class="recording-pricing-3-desktop w-list-unstyled">
              <li class="first-item-title list-item-2">Custom project</li>
              <li class="item-pricing list-item-2" data-ix="pricing-item-reveal">Customize*<br><span class="text-span-7">*Pricing varies</span></li>
              <li class="list-item-2" data-ix="pricing-item-reveal-2">Please contact for more info.</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-4">Voice Recording, Voice Overs &amp; more</li>
              <li class="list-item-2" data-ix="pricing-item-reveal-5">*Pricing based on size of work</li>
              <li class="last-item-button list-item-2" data-ix="pricing-item-reveal-6"><span data-ix="contact-reveal-3" class="text-span-8">BOOK NOW</span></li>
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
  



<div data-ix="about-bg-reveal" id="about" class="about-section">
    <div class="div-block-28"></div>
    <div class="fbs-container">
      <h3 class="heading-10-copy w-clearfix">ABOUT FROM BELOW <span class="text-span-24">STUDIO</span></h3>
      <div class="text-block-9">From Below is a recording studio in Central New Jersey. It features two professionally sound treated rooms including; a control room for mixing, mastering and listening and a vocal and instrument booth. From Below offers Industry standard hardware, software and recording/mixing services. Available for live recording sessions, full albums/projects, mixing, online mixing and listening sessions. View our studio and gear below.</div>
      <div class="about-us-row w-row">
        <div class="column-7 w-col w-col-6">
          <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider-2 w-slider">
            <div class="slider-title">
              <h4 class="heading-11">THE STUDIO</h4>
            </div>
            <div class="w-slider-mask">
              <div class="slide-2 w-slide"><a href="#" class="lightbox-link w-inline-block w-lightbox"><img src="<?php bloginfo('template_url');?>/images/_JP_6513.jpg" alt="From Below Studio - Central New Jersey Recording Studio" class="image-2"><script type="application/json" class="w-json">{
  "items": [
    {
      "width": 1620,
      "caption": "Watch the recording session from the waiting room. ",
      "height": 1080,
      "fileName": "_JP_6513.jpg",
      "origFileName": "_JP_6513.jpg",
      "url": "<?php bloginfo('template_url');?>/images/_JP_6513.jpg",
      "_id": "5a0a3787d65a2f0001bdd1a5",
      "type": "image",
      "fileSize": 111754
    }
  ],
  "group": "From Below Studio and Gear"
}</script></a></div>
              <div class="slide-2 w-slide"><a href="#" class="lightbox-link w-inline-block w-lightbox">
                <img src="<?php bloginfo('template_url');?>/images/01-control-room-01.jpg" alt="From Below Studio Control Room New Jersey Recording Studio" class="image-2"><script type="application/json" class="w-json">{
  "items": [
    {
      "width": 1620,
      "caption": "Control room mixing desk",
      "height": 1080,
      "fileName": "01-control-room-01.jpg",
      "origFileName": "01-control-room-01.jpg",
      "url": "<?php bloginfo('template_url');?>/images/01-control-room-01.jpg",
      "_id": "5a0a38b15f389a000169d194",
      "type": "image",
      "fileSize": 147493
    }
  ],
  "group": "From Below Studio and Gear"
}</script></a></div>
              <div class="slide-2 w-slide"><a href="#" class="lightbox-link w-inline-block w-lightbox"><img src="<?php bloginfo('template_url');?>/images/mic-studio.jpg" class="image-2-copy"><script type="application/json" class="w-json">{
  "items": [
    {
      "width": 720,
      "caption": "The recording booth is fully treated for the clearest sound quality. ",
      "height": 1080,
      "fileName": "mic-studio-long.jpg",
      "origFileName": "mic-studio-long.jpg",
      "url": "<?php bloginfo('template_url');?>/images/mic-studio-long.jpg",
      "_id": "5a0b15f7d65a2f0001be704b",
      "type": "image",
      "fileSize": 113774
    }
  ],
  "group": "From Below Studio and Gear"
}</script></a></div>
              <div class="slide-2 w-slide">
                <a href="#" class="lightbox-link w-inline-block w-lightbox">
                  <div class="div-block-53">
                    <div class="text-block-34">Click here to see the studio image gallery <span class="text-span-31"></span></div>
                  </div>
                  <script type="application/json" class="w-json">
                      {
                        "items": [{
                            "width": 1440,
                            "height": 1440,
                            "fileName": "597403f72e734d4747106efd_IMG_20170722_142734_347_1500772896518.jpg",
                            "origFileName": "IMG_20170722_142734_347_1500772896518.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/IMG_20170722_142734_347_1500772896518.jpg",
                            "_id": "597403f72e734d4747106efd",
                            "type": "image",
                            "fileSize": 114332
                          },
                          {
                            "width": 1620,
                            "height": 1080,
                            "fileName": "_JP_6442.jpg",
                            "origFileName": "_JP_6442.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/_JP_6442.jpg",
                            "_id": "5a0a4390e1339f0001a8b353",
                            "type": "image",
                            "fileSize": 89768
                          },
                          {
                            "width": 720,
                            "caption": "Control room looking into recording booth",
                            "height": 1080,
                            "fileName": "_JP_6454.jpg",
                            "origFileName": "_JP_6454.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/_JP_6454.jpg",
                            "_id": "5a0a43a9d092d00001e0914c",
                            "type": "image",
                            "fileSize": 52679
                          },
                          {
                            "width": 720,
                            "caption": "Recording booth with mics",
                            "height": 1080,
                            "fileName": "_JP_6461.jpg",
                            "origFileName": "_JP_6461.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/_JP_6461.jpg",
                            "_id": "5a0a43b6e1339f0001a8b35f",
                            "type": "image",
                            "fileSize": 79017
                          },
                          {
                            "width": 1620,
                            "caption": "View from the booth into control room",
                            "height": 1080,
                            "fileName": "_JP_6476.jpg",
                            "origFileName": "_JP_6476.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/_JP_6476.jpg",
                            "_id": "5a0a43cfd65a2f0001bdd94e",
                            "type": "image",
                            "fileSize": 74937
                          },
                          {
                            "width": 1620,
                            "caption": "View from waiting area into booth and control room",
                            "height": 1080,
                            "fileName": "_JP_6496.jpg",
                            "origFileName": "_JP_6496.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/_JP_6496.jpg",
                            "_id": "5a0a43e5d345d400015dbae4",
                            "type": "image",
                            "fileSize": 112687
                          },
                          {
                            "width": 720,
                            "caption": "The recording booth is fully treated for the clearest sound quality. ",
                            "height": 1080,
                            "fileName": "mic-studio-long.jpg",
                            "origFileName": "mic-studio-long.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/mic-studio-long.jpg",
                            "_id": "5a0b15f7d65a2f0001be704b",
                            "type": "image",
                            "fileSize": 113774
                          }
                        ], 
                        "group": "From Below Studio and Gear"
                      }
                    </script>
                </a>
              </div>
            </div>
            <div data-ix="about-from-below-studio-slider-1-init" class="w-slider-arrow-left">
              <div class="w-icon-slider-left"></div>
            </div>
            <div data-ix="about-from-below-studio-slider-1-init" class="right-arrow-2 w-slider-arrow-right">
              <div class="w-icon-slider-right"></div>
            </div>
            <div data-ix="about-from-below-studio-slider-1-init" class="slide-nav-2 w-round w-slider-nav"></div>
          </div>
        </div>
        <div class="column-27 w-col w-col-6">
          <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider-2 w-slider">
            <div class="slider-title">
              <h4 class="heading-11">OUTBOARD GEAR &amp; PLUGINS</h4>
            </div>
            <div class="w-slider-mask">
              <div class="slide-2 w-slide"><a href="#" class="lightbox-link w-inline-block w-lightbox"><img src="<?php bloginfo('template_url');?>/images/03-avalon-01.jpg"  class="image-2"><script type="application/json" class="w-json">{
  "items": [
    {
      "width": 1620,
      "caption": "Avalon 737sp Vocal Preamp",
      "height": 1080,
      "fileName": "03-avalon-01.jpg",
      "origFileName": "03-avalon-01.jpg",
      "url": "<?php bloginfo('template_url');?>/images/03-avalon-01.jpg",
      "_id": "5a0a3b37d092d00001e08dbd",
      "type": "image",
      "fileSize": 148597
    }
  ],
  "group": "Outboard Gear Plugins"
}</script></a></div>
              <div class="slide-2 w-slide"><a href="#" class="lightbox-link w-inline-block w-lightbox"><img src="<?php bloginfo('template_url');?>/images/_JP_6407.jpg"  class="image-2"><script type="application/json" class="w-json">{
  "items": [
    {
      "width": 1620,
      "caption": "RME Audio Interface",
      "height": 1080,
      "fileName": "_JP_6407.jpg",
      "origFileName": "_JP_6407.jpg",
      "url": "<?php bloginfo('template_url');?>/images/_JP_6407.jpg",
      "_id": "5a0a3d21e1339f0001a8b0ae",
      "type": "image",
      "fileSize": 88407
    }
  ],
  "group": "Outboard Gear Plugins"
}</script></a></div>
              <div class="slide-2 w-slide"><a href="#" class="lightbox-link w-inline-block w-lightbox"><img src="<?php bloginfo('template_url');?>/images/_JP_6436.jpg" alt="Hundreds of top tier plug-in suites" class="image-2"><script type="application/json" class="w-json">{
  "items": [
    {
      "width": 1620,
      "height": 1080,
      "fileName": "_JP_6436.jpg",
      "origFileName": "_JP_6436.jpg",
      "url": "<?php bloginfo('template_url');?>/images/_JP_6436.jpg",
      "_id": "5a0a3d4cd65a2f0001bdd4a0",
      "type": "image",
      "fileSize": 173352
    }
  ],
  "group": "Outboard Gear Plugins"
}</script></a></div>
              <div class="slide-2 w-slide">
                <a href="#" class="lightbox-link w-inline-block w-lightbox">
                  <div class="div-block-53-copy">
                    <div class="text-block-34">Click here to see the outboard gear &amp; plugins <span class="text-span-31"></span></div>
                  </div>
                  <script type="application/json" class="w-json">
                      {
                        "items": [{

                            
                          
                            "width": 1620,
                            "caption": "Big Knob",
                            "height": 1080,
                            "fileName": "_JP_6420.jpg",
                            "origFileName": "_JP_6420.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/_JP_6420.jpg",
                            "_id": "5a0a45f85f389a000169d74b",
                            "type": "image",
                            "fileSize": 85604
                          },
                          {
                            "width": 720,
                            "height": 1080,
                            "fileName": "_JP_6466.jpg",
                            "origFileName": "_JP_6466.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/_JP_6466.jpg",
                            "_id": "5a0a460fe1339f0001a8b50f",
                            "type": "image",
                            "fileSize": 75278
                          },
                          {
                            "width": 1620,
                            "caption": "Shure mics",
                            "height": 1080,
                            "fileName": "_JP_6491.jpg",
                            "origFileName": "_JP_6491.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/_JP_6491.jpg",
                            "_id": "5a0a46275f389a000169d75d",
                            "type": "image",
                            "fileSize": 68972
                          },
                          {
                            "type": "image",
                            "_id": "5a0a4645d345d400015dbbbf",
                            "fileName": "06-outboard-01.jpg",
                            "origFileName": "06-outboard-01.jpg",
                            "width": 1620,
                            "height": 1080,
                            "fileSize": 108708,
                            "url": "<?php bloginfo('template_url');?>/images/06-outboard-01.jpg"
                          },
                          {
                            "width": 1620,
                            "caption": "Mackie Studio Monitors",
                            "height": 1080,
                            "fileName": "08-mackie-01.jpg",
                            "origFileName": "08-mackie-01.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/08-mackie-01.jpg",
                            "_id": "5a0a46557dd52a00016a45cc",
                            "type": "image",
                            "fileSize": 84483
                          },
                          {
                            "width": 1620,
                            "caption": "UAD Sound Processing",
                            "height": 1080,
                            "fileName": "10-uad-01.jpg",
                            "origFileName": "10-uad-01.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/10-uad-01.jpg",
                            "_id": "5a0a46637dd52a00016a45d2",
                            "type": "image",
                            "fileSize": 78207
                          },
                          {
                            "width": 1620,
                            "caption": "Presonus",
                            "height": 1080,
                            "fileName": "12-presonus-01.jpg",
                            "origFileName": "12-presonus-01.jpg",
                            "url": "<?php bloginfo('template_url');?>/images/12-presonus-01.jpg",
                            "_id": "5a0a4673d345d400015dbbcc",
                            "type": "image",
                            "fileSize": 80812
                          }
                        ],
                        "group": "Outboard Gear Plugins"
                      }
                    </script>
                </a>
              </div>
            </div>
            <div data-ix="about-from-below-studio-slider-1-init" class="w-slider-arrow-left">
              <div class="w-icon-slider-left"></div>
            </div>
            <div data-ix="about-from-below-studio-slider-1-init" class="right-arrow-2 w-slider-arrow-right">
              <div class="w-icon-slider-right"></div>
            </div>
            <div data-ix="about-from-below-studio-slider-1-init" class="slide-nav-3 w-round w-slider-nav"></div>
          </div>
        </div>
      </div>
      <div class="about-divider"></div>

      <div class="div-block-49 w-clearfix">
        <div class="div-block-48">
          <!-- <div data-ix="contact-reveal-2" class="misc-menu-item">Studio Policy</div> -->
          <div data-ix="contact-reveal" class="misc-menu-item">Contact</div>
          <div class="misc-menu-item social-misc"><a target="_blank" href="https://facebook.com/frombelowstudio" class="link-14"></a> | <span class="link-13"></span><a target="_blank" href="https://twitter.com/frombelowstudio" target="_blank" class="link-13"></a> | <a target="_blank" href="https://instagram.com/frombelowstudio" target="_blank" class="link-15"></a></div>
        </div><img src="<?php bloginfo('template_url');?>/images/fbs-ccinfo.png" class="image-3"></div>
    </div>
  </div>


  <?php // contact form
    include(get_template_directory() . "/template-parts/partials/contact-form-template.php"); 
  ?>

  <div class="booking-section">
    <!-- <span data-ix="booking-close" class="text-span-26"></span><br><span><span><span data-ix="booking-close" class="text-span-26"><br></span></span>
          </span> -->
    <?php //echo do_shortcode('[product_page id="49"]'); ?>
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
