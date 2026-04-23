<?php
/**
 * Template Name: Home Template v2
 * Stella Pastry & Cafe — Homepage
 * Copy: exact per 828 Marketing Solutions brief
 * Features: Rotating hero media · Flip product cards · Motion reviews carousel
 */
get_header(); ?>

<main class="st-home" id="st-main">

  <?php
    /* ── Image & video assets ── */
    $img_hero       = 'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?q=80&w=1800&auto=format&fit=crop';
    $img_slice      = 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=1400&auto=format&fit=crop';
    $img_espresso   = 'https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=1200&auto=format&fit=crop';
    $img_storefront = 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=1400&auto=format&fit=crop';
    $img_cases      = 'https://images.unsplash.com/photo-1483695028939-5bb13f8648b0?q=80&w=1400&auto=format&fit=crop';
    $img_tiramisu   = 'https://images.unsplash.com/photo-1542124948-dc391252a940?q=80&w=1200&auto=format&fit=crop';
    $img_cannoli    = 'https://images.unsplash.com/photo-1559622214-f8a9850965bb?q=80&w=1200&auto=format&fit=crop';

    $hero_video_main = 'http://stella-pastry-cafe.local/wp-content/uploads/2026/04/A003_04171703_C255.mp4';

    /* ── Products (copy exact from brief) ── */
    $products = [
      [
        'title'     => 'Sacripantina',
        'badge'     => 'Only Here',
        'badge_on'  => true,
        'front_copy'=> 'Vanilla sponge, zabaione, rum. The cake that only exists here — made the same way since 1942.',
        'back_title'=> 'The One & Only',
        'back_copy' => 'A vanilla sponge soaked in rum, layered with zabaione — egg yolks, sweet butter, Marsala, and sherry — dusted with fine cake crumbs. Shaped into its iconic dome. Light as a whisper. Unforgettable as a memory.',
        'price'     => 'Slice $8.75 · 8" $57.90',
        'link'      => '#the-sacripantina',
        'image'     => $img_hero,
        'num'       => '001',
        'accent'    => '#7A1F2E',
      ],
      [
        'title'     => 'Tiramisu',
        'badge'     => 'Best in SF',
        'badge_on'  => true,
        'front_copy'=> 'Vanilla sponge, espresso, rum, mascarpone. Called the best tiramisu in San Francisco by dozens of customers.',
        'back_title'=> 'A North Beach Classic',
        'back_copy' => 'Layers of mascarpone, espresso-soaked sponge, and a touch of rum. Made fresh each morning, the same way it has always been done. Served by the slice or as a whole cake.',
        'price'     => 'Slice $8.75 · 8" $57.90',
        'link'      => '#order-delivery',
        'image'     => $img_espresso,
        'num'       => '002',
        'accent'    => '#3a5e90',
      ],
      [
        'title'     => 'Cannoli',
        'badge'     => '',
        'badge_on'  => false,
        'front_copy'=> 'Crisp shell, sweetened ricotta, chocolate chips. Fried fresh. The way a cannoli should be.',
        'back_title'=> 'Fried Fresh Daily',
        'back_copy' => 'A crisp pastry shell filled with sweetened ricotta and chocolate chips, fried fresh every morning. No shortcuts. No pre-fills. The way a cannoli should be — period.',
        'price'     => '$7.75 each',
        'link'      => '#order-delivery',
        'image'     => $img_cases,
        'num'       => '003',
        'accent'    => '#e7bd7b',
      ],
    ];

    /* ── Reviews ── */
    $reviews = [
      ['text' => '"The Sacripantina is simply something else. I\'ve never tasted anything like it in San Francisco."', 'author' => 'Gianna R.', 'stars' => 5],
      ['text' => '"The tiramisu here is the best in the city. I\'ve tried dozens and this wins, every time."',           'author' => 'Marco T.', 'stars' => 5],
      ['text' => '"We\'ve been coming since 1998. It has never changed and I hope it never does."',                    'author' => 'Patricia M.', 'stars' => 5],
      ['text' => '"We ordered a Sacripantina for our wedding. Our guests still talk about it two years later."',       'author' => 'Sofia & James', 'stars' => 5],
      ['text' => '"The display cases, the smell of coffee, the warmth. Nothing in North Beach is like this."',        'author' => 'David L.', 'stars' => 5],
    ];
  ?>

<!-- ═══════════════════════════════════════════════
     SECTION 1 · HERO (MEDIA ROTATOR)
═══════════════════════════════════════════════ -->
<section id="top" class="st-hero">

  <div class="st-hero-media" aria-hidden="true">
    <div class="st-hero-slide is-active is-video">
      <video
        class="st-hero-video"
        autoplay
        muted
        playsinline
        preload="metadata"
        poster="<?php echo esc_url($img_hero); ?>">
        <source src="<?php echo esc_url($hero_video_main); ?>" type="video/mp4">
      </video>
    </div>
  </div>

  <div class="st-hero-scrim"></div>
  <div class="st-grain" aria-hidden="true"></div>

  <div class="st-year-float" aria-hidden="true">
    <span>E</span><span>S</span><span>T</span>
    <span class="st-year-num">1942</span>
  </div>

  <div class="st-hero-content">

    <div class="st-eyebrow st-fade-up" style="--d:.05s">
      <span class="st-ey-rule"></span>
      North Beach, San Francisco &nbsp;·&nbsp; Since 1942
    </div>

    <h1 class="st-h1 st-fade-up" style="--d:.15s">
      <span class="st-h1-thin">The House of</span>
      <span class="st-h1-italic">Sacripantina.</span>
    </h1>

    <p class="st-hero-sub st-fade-up" style="--d:.25s">
      Some things cannot be found anywhere else in the world.<br class="st-br-md">
      The Sacripantina is one of them.
    </p>

    <p class="st-hero-body st-fade-up" style="--d:.33s">
      A vanilla sponge soaked in rum, layered with zabaione — that delicate custard of egg yolks, sweet butter, Marsala, and sherry — dusted with fine cake crumbs and shaped into its iconic dome.
    </p>

    <p class="st-hero-body st-fade-up" style="--d:.39s">
      Light as a whisper. Unforgettable as a memory.
    </p>

    <p class="st-hero-body st-fade-up" style="--d:.43s">
      It has been made this way, in this corner of North Beach, for over eighty years. Come find it.
    </p>

    <div class="st-hero-ctas st-fade-up" style="--d:.50s">
      <a href="#order-delivery" class="st-btn-gold">
        <span>Order Now</span>
        <svg width="15" height="15" viewBox="0 0 15 15" fill="none">
          <path d="M2.5 7.5h10M8 3l4.5 4.5L8 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>

      <a href="#brand-quote" class="st-btn-ghost">
        <span>Our Story</span>
      </a>
    </div>

  </div><!-- /hero-content -->

  <div class="st-scroll-cue" aria-hidden="true">
    <div class="st-scroll-bar"></div>
    <span>Scroll</span>
  </div>

</section>

  <!-- ═══════════════════════════════════════════════
       SECTION 2 · QUICK ACTIONS
       4-column bar — exact copy from brief
  ═══════════════════════════════════════════════ -->
<nav class="st-qa" aria-label="Quick actions">
  <div class="st-qa-grid">
    <?php
      $qa = [
        ['n'=>'01','title'=>'Order Now',        'copy'=>'DoorDash · Uber Eats or visit us',        'href'=>'#order-delivery'],
        ['n'=>'02','title'=>'Catering',         'copy'=>'Weddings · Events Delivery available',    'href'=>'#catering'],
        ['n'=>'03','title'=>'The Sacripantina', 'copy'=>'Only here. Since 1942',                   'href'=>'#the-sacripantina'],
        ['n'=>'04','title'=>'Visit Us',         'copy'=>'Open daily 7:30am–8pm · 446 Columbus Ave','href'=>'#visit-us'],
      ];
      foreach($qa as $item): ?>
      <a href="<?php echo esc_url($item['href']); ?>" class="st-qa-tile">
        <span class="st-qa-n"><?php echo $item['n']; ?></span>

        <div class="st-qa-body">
          <strong class="st-qa-title"><?php echo esc_html($item['title']); ?></strong>
          <span class="st-qa-copy"><?php echo esc_html($item['copy']); ?></span>
        </div>

        <span class="st-qa-arrow" aria-hidden="true">→</span>
        <div class="st-qa-bar"></div>
      </a>
    <?php endforeach; ?>
  </div>
</nav>

  <!-- ═══════════════════════════════════════════════
       SECTION 3 · PRODUCT CAROUSEL
       'From Our Cases' — Flip cards
  ═══════════════════════════════════════════════ -->
  <section id="from-our-cases" class="st-products">

    <div class="st-bg-word" aria-hidden="true">CASES</div>

    <div class="st-products-inner">

      <div class="st-products-header st-reveal-up">
        <div>
          <p class="st-label">From Our Cases</p>
          <h2 class="st-section-h">Made Fresh.<br><em>Every Morning.</em></h2>
        </div>
        <p class="st-products-aside">
          Three signatures from the case, anchored by the one thing that only exists here.
        </p>
      </div>

      <div class="st-flip-grid">
        <?php foreach($products as $i => $p): ?>
          <div class="st-flip-wrap st-reveal-stagger" style="--si:<?php echo $i; ?>">
            <div class="st-flip-card" tabindex="0" role="button" aria-label="See details for <?php echo esc_attr($p['title']); ?>">

              <div class="st-flip-front">
                <div class="st-flip-img-wrap">
                  <img src="<?php echo esc_url($p['image']); ?>"
                       alt="<?php echo esc_attr($p['title']); ?>"
                       class="st-flip-img" loading="lazy">
                  <div class="st-flip-img-scrim"></div>
                  <?php if($p['badge_on']): ?>
                    <span class="st-flip-badge"><?php echo esc_html($p['badge']); ?></span>
                  <?php endif; ?>
                  <span class="st-flip-num"><?php echo $p['num']; ?></span>
                </div>

                <div class="st-flip-body">
                  <h3 class="st-flip-title"><?php echo esc_html($p['title']); ?></h3>
                  <p class="st-flip-copy"><?php echo esc_html($p['front_copy']); ?></p>
                  <div class="st-flip-foot">
                    <div>
                      <span class="st-price-lab">Price</span>
                      <span class="st-price-val"><?php echo esc_html($p['price']); ?></span>
                    </div>
                    <span class="st-flip-hint">Hover to reveal ↗</span>
                  </div>
                </div>

                <div class="st-flip-accent" style="background:<?php echo $p['accent']; ?>"></div>
              </div>

              <div class="st-flip-back" style="--accent:<?php echo $p['accent']; ?>">
                <div class="st-flip-back-inner">
                  <span class="st-flip-back-num"><?php echo $p['num']; ?></span>
                  <h3 class="st-flip-back-title"><?php echo esc_html($p['title']); ?></h3>
                  <p class="st-flip-back-sub"><?php echo esc_html($p['back_title']); ?></p>
                  <p class="st-flip-back-copy"><?php echo esc_html($p['back_copy']); ?></p>
                  <div class="st-flip-back-price"><?php echo esc_html($p['price']); ?></div>
                  <a href="<?php echo esc_url($p['link']); ?>" class="st-flip-back-btn">
                    <span>Discover</span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </a>
                </div>
              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       SECTION 4 · SACRIPANTINA FEATURE
  ═══════════════════════════════════════════════ -->
  <section id="the-sacripantina" class="st-feature">

    <div class="st-feature-inner">

      <div class="st-feat-visual st-reveal-left">

        <div class="st-feat-img-main">
          <img src="<?php echo esc_url($img_hero); ?>" alt="The Sacripantina — whole cake" loading="lazy">
          <div class="st-corner st-c-tl"></div>
          <div class="st-corner st-c-br"></div>
        </div>

        <div class="st-feat-slice">
          <img src="<?php echo esc_url($img_slice); ?>" alt="Sacripantina cross-section slice" loading="lazy">
          <span>Cross-section · Zabaione layers</span>
        </div>

        <div class="st-layers st-reveal-up">
          <div class="st-layers-hdr">
            <div class="st-layers-rule"></div>
            <span>Layer Breakdown</span>
          </div>
          <?php
            $layers = [
              'Fine cake crumb dusting',
              'Zabaione cream',
              'Vanilla sponge soaked in rum',
              'Zabaione cream',
              'Vanilla sponge',
            ];
            foreach($layers as $li => $l): ?>
            <div class="st-layer" style="--li:<?php echo $li; ?>">
              <span class="st-layer-n"><?php echo $li+1; ?></span>
              <span class="st-layer-dash"></span>
              <span class="st-layer-text"><?php echo esc_html($l); ?></span>
            </div>
          <?php endforeach; ?>
        </div>

      </div>

      <div class="st-feat-copy st-reveal-right">
        <p class="st-label">Our Signature</p>
        <h2 class="st-feat-h">The<br><em>Sacripantina.</em></h2>
        <p class="st-feat-italic">Only here. Since 1942.</p>
        <p class="st-feat-body">
          There is no other cake like this. Vanilla sponge soaked in rum, layered with zabaione — egg yolks, sweet butter, Marsala, sherry — finished with a dusting of fine crumbs. Light as a whisper. It cannot be explained. It can only be tasted.
        </p>

        <div class="st-feat-prices">
          <?php foreach([['Slice','$8.75'],['6" Cake','$45.00'],['8" Cake','$57.90']] as [$pl,$pv]): ?>
            <div class="st-feat-price-blk">
              <span class="st-feat-price-lab"><?php echo $pl; ?></span>
              <span class="st-feat-price-val"><?php echo $pv; ?></span>
            </div>
          <?php endforeach; ?>
        </div>

        <a href="#order-delivery" class="st-btn-gold">
          <span>Order the Sacripantina</span>
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M2.5 7.5h10M8 3l4.5 4.5L8 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       SECTION 5 · ORDER + CATERING
  ═══════════════════════════════════════════════ -->
  <section class="st-oc">
    <div class="st-oc-inner">

      <article id="order-delivery" class="st-oc-card st-oc-light st-reveal-left">
        <span class="st-oc-num-bg">01</span>
        <p class="st-label">Available Now</p>
        <h3 class="st-oc-h">Order for<br><em>Delivery</em></h3>
        <p class="st-oc-body">
          The Sacripantina — and everything else in our cases — is available for delivery via DoorDash and Uber Eats. Or come find us at 446 Columbus Ave, every day from 7:30am.
        </p>
        <ul class="st-oc-list">
          <li>DoorDash and Uber Eats delivery available</li>
          <li>In-store daily 7:30am–8:00pm (Fri &amp; Sat until 11pm)</li>
          <li>Outdoor seating · ADA accessible · Dogs welcome</li>
        </ul>
        <a href="#" class="st-btn-gold">
          <span>Order Now</span>
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M2.5 7.5h10M8 3l4.5 4.5L8 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </article>

      <article id="catering" class="st-oc-card st-oc-dark st-reveal-right">
        <span class="st-oc-num-bg">02</span>
        <p class="st-label st-label-gold">Weddings · Celebrations · Events</p>
        <h3 class="st-oc-h">Catering &amp;<br><em>Custom Orders</em></h3>
        <p class="st-oc-body">
          From a birthday cake to a wedding — Stella has been part of the most important moments of San Francisco families for over eighty years. Let us be part of yours.
        </p>
        <ul class="st-oc-list">
          <li>Custom cakes for weddings, birthdays, anniversaries, christenings</li>
          <li>Corporate gifting and event catering</li>
          <li>Orders: (415) 986-2914</li>
        </ul>
        <a href="#" class="st-btn-ghost-warm">
          <span>Inquire About Catering</span>
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M2.5 7.5h10M8 3l4.5 4.5L8 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </article>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       SECTION 6 · REVIEWS
  ═══════════════════════════════════════════════ -->
  <section class="st-reviews">
    <div class="st-reviews-inner">

      <div class="st-reviews-hdr st-reveal-up">
        <p class="st-label">What They Say</p>
        <h2 class="st-section-h-sm"><em>Voices of North Beach</em></h2>
      </div>

      <div class="st-car-viewport" id="st-car-viewport">
        <div class="st-car-track" id="st-car-track">
          <?php foreach($reviews as $ri => $r): ?>
            <div class="st-car-slide" data-index="<?php echo $ri; ?>">
              <div class="st-review-card">
                <div class="st-review-stars">
                  <?php for($s=0;$s<$r['stars'];$s++) echo '<span>★</span>'; ?>
                </div>
                <blockquote class="st-review-text"><?php echo esc_html($r['text']); ?></blockquote>
                <cite class="st-review-author">— <?php echo esc_html($r['author']); ?></cite>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="st-car-controls">
        <button class="st-car-btn" id="st-car-prev" aria-label="Previous">←</button>
        <div class="st-car-dots" id="st-car-dots" role="tablist">
          <?php foreach($reviews as $ri => $r): ?>
            <button class="st-car-dot <?php echo $ri===0?'is-on':''; ?>"
                    aria-label="Go to review <?php echo $ri+1; ?>"
                    data-idx="<?php echo $ri; ?>"></button>
          <?php endforeach; ?>
        </div>
        <button class="st-car-btn" id="st-car-next" aria-label="Next">→</button>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       SECTION 7 · VISIT US
  ═══════════════════════════════════════════════ -->
  <section id="visit-us" class="st-visit">
    <div class="st-visit-inner">

      <div class="st-visit-copy st-reveal-left">
        <p class="st-label">Find Us</p>
        <h2 class="st-section-h">446<br><em>Columbus Ave.</em></h2>
        <div class="st-visit-rows">
          <?php foreach([
            ['Address','446 Columbus Ave, North Beach, San Francisco, CA 94133'],
            ['Hours','Open Daily 7:30 AM – 8:00 PM · Fri &amp; Sat until 11:00 PM'],
            ['Phone','(415) 986-2914'],
            ['Order','DoorDash · Uber Eats · In-store pickup'],
          ] as [$vl,$vv]): ?>
            <div class="st-visit-row">
              <span class="st-visit-lab"><?php echo $vl; ?></span>
              <span class="st-visit-val"><?php echo $vv; ?></span>
            </div>
          <?php endforeach; ?>
        </div>
        <a href="https://maps.google.com/?q=446+Columbus+Ave+San+Francisco"
           target="_blank" rel="noopener" class="st-btn-gold">
          <span>Get Directions</span>
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M2.5 7.5h10M8 3l4.5 4.5L8 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>

      <div class="st-visit-imgs st-reveal-right">
        <div class="st-visit-img-a"><img src="<?php echo esc_url($img_storefront); ?>" alt="Stella Pastry exterior" loading="lazy"></div>
        <div class="st-visit-img-b"><img src="<?php echo esc_url($img_cases); ?>" alt="Display cases" loading="lazy"></div>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       SECTION 8 · BRAND QUOTE
  ═══════════════════════════════════════════════ -->
  <section id="brand-quote" class="st-quote">
    <div class="st-quote-inner st-reveal-up">
      <div class="st-quote-ornament">✦ ✦ ✦</div>
      <div class="st-open-mark">"</div>
      <blockquote class="st-quote-text">
        Stella Pastry &amp; Cafe opened its doors on Columbus Avenue in 1942. Since then, it has passed from one Italian family to the next — each one committed to protecting the recipes, preserving the flavors, and never compromising on the craft. Over eighty years later, nothing has changed.
      </blockquote>
      <div class="st-quote-attr">
        <div class="st-quote-rule"></div>
        <span>Since 1942 &nbsp;·&nbsp; North Beach, San Francisco &nbsp;·&nbsp; The House of Sacripantina</span>
        <div class="st-quote-rule"></div>
      </div>
    </div>
  </section>

</main>

<style>
@import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Lato:wght@300;400;700&display=swap");

:root{
  --espresso: #1e1410;
  --espresso-mid: #2b1e1a;
  --cream:    #ebe6e0;
  --burgundy: #7a1f2e;
  --gold:     #e7bd7b;
  --gold-lt:  #f0d4a8;
  --navy:     #3a5e90;
  --sky:      #a4ccd4;

  --surface-light: #ebe6e0;
  --surface-page:  #e8e2da;
  --surface-quote: #ddd7ce;

  --ink:   #1a100e;
  --text:  #3d312c;
  --soft:  rgba(61,49,44,.72);
  --bd:    rgba(58,49,44,.12);
  --bd-md: rgba(58,49,44,.20);

  --fd: "Playfair Display", Georgia, serif;
  --fb: "Lato", system-ui, sans-serif;

  --ease-out: cubic-bezier(.16,1,.3,1);
}

.st-home{
  font-family: var(--fb);
  background: var(--surface-page);
  color: var(--text);
  overflow-x: hidden;
}
.st-home *, .st-home *::before, .st-home *::after{ box-sizing:border-box; }
.st-home a{ text-decoration:none; color:inherit; }
.st-home img{ display:block; max-width:100%; }
.st-home em{ font-style:italic; }

.st-label{
  display:inline-flex; align-items:center; gap:10px;
  font-family:var(--fb); font-size:9.5px; font-weight:700;
  text-transform:uppercase; letter-spacing:.28em;
  color:var(--burgundy);
}
.st-label::before{
  content:''; display:block; width:20px; height:1.5px;
  background:var(--gold);
}
.st-label-gold{ color:var(--gold-lt); }
.st-label-gold::before{ background:var(--gold); }

.st-section-h{
  font-family:var(--fd);
  font-size:clamp(2.4rem,4.8vw,3.8rem);
  font-weight:600; line-height:.95;
  letter-spacing:-.04em; color:var(--ink);
  margin:.5rem 0 0;
}
.st-section-h em{ color:var(--burgundy); }
.st-section-h-sm{
  font-family:var(--fd);
  font-size:clamp(1.8rem,3.2vw,2.6rem);
  font-weight:500; letter-spacing:-.03em; color:var(--ink);
  margin:.4rem 0 0;
}
.st-section-h-sm em{ color:var(--burgundy); }

.st-btn-gold,
.st-btn-ghost,
.st-btn-ghost-warm,
.st-flip-back-btn{
  text-shadow:0 1px 1px rgba(0,0,0,.12);
}

.st-btn-gold{
  display:inline-flex; align-items:center; gap:9px;
  padding:13px 26px;
  background:var(--gold);
  color:#21110d;
  font-family:var(--fb); font-size:10.5px; font-weight:800;
  text-transform:uppercase; letter-spacing:.18em;
  position:relative; overflow:hidden;
  isolation:isolate;
  border:1px solid rgba(122,31,46,.20);
  transition:transform .3s, box-shadow .3s, color .3s, border-color .3s, background .3s;
  box-shadow:0 12px 28px rgba(122,31,46,.16);
}
.st-btn-gold::before{
  content:''; position:absolute; inset:0;
  background:var(--burgundy);
  transform:scaleX(0); transform-origin:left;
  transition:transform .45s var(--ease-out);
  z-index:0;
}
.st-btn-gold:hover,
.st-btn-gold:focus-visible{
  transform:translateY(-2px);
  color:var(--cream);
  border-color:rgba(122,31,46,.55);
  box-shadow:0 16px 34px rgba(122,31,46,.22);
}
.st-btn-gold:hover::before,
.st-btn-gold:focus-visible::before{ transform:scaleX(1); }
.st-btn-gold > span,
.st-btn-gold > svg,
.st-btn-ghost > span,
.st-btn-ghost > svg,
.st-btn-ghost-warm > span,
.st-btn-ghost-warm > svg,
.st-flip-back-btn > span,
.st-flip-back-btn > svg{ position:relative; z-index:1; }
.st-btn-gold svg,
.st-btn-ghost svg,
.st-btn-ghost-warm svg,
.st-flip-back-btn svg{ flex-shrink:0; }
.st-btn-gold svg path,
.st-btn-ghost svg path,
.st-btn-ghost-warm svg path,
.st-flip-back-btn svg path{ stroke:currentColor; }

.st-btn-ghost{
  display:inline-flex; align-items:center; gap:8px;
  padding:12px 22px;
  border:1.5px solid rgba(245,239,232,.56);
  color:#ffffff !important;
  background:rgba(255,255,255,.12);
  font-family:var(--fb); font-size:10.5px; font-weight:700;
  text-transform:uppercase; letter-spacing:.18em;
  backdrop-filter:blur(8px);
  box-shadow:0 8px 20px rgba(0,0,0,.10);
  transition:border-color .3s, background .3s, color .3s, box-shadow .3s;
}
.st-btn-ghost:hover,
.st-btn-ghost:focus-visible{
  border-color:var(--gold);
  background:rgba(122,31,46,.88);
  color:#fff;
  box-shadow:0 10px 24px rgba(122,31,46,.20);
}

.st-btn-ghost-warm{
  display:inline-flex; align-items:center; gap:8px;
  padding:12px 22px;
  border:1.5px solid rgba(231,189,123,.58);
  color:#ffffff !important;
  background:rgba(231,189,123,.20);
  font-family:var(--fb); font-size:10.5px; font-weight:700;
  text-transform:uppercase; letter-spacing:.18em;
  box-shadow:0 8px 20px rgba(0,0,0,.12);
  transition:border-color .3s, background .3s, color .3s, box-shadow .3s;
}
.st-btn-ghost-warm:hover,
.st-btn-ghost-warm:focus-visible{
  border-color:var(--gold);
  background:rgba(122,31,46,.92);
  color:#fff;
  box-shadow:0 10px 24px rgba(122,31,46,.22);
}

.st-hero{
  position:relative;
  min-height:100vh;
  display:flex;
  flex-direction:column;
  justify-content:flex-end;
  background:var(--espresso);
  overflow:hidden;
}
.st-hero-media{
  position:absolute;
  inset:0;
  z-index:0;
}
.st-hero-slide{
  position:absolute;
  inset:0;
  opacity:1;
  visibility:visible;
  transform:scale(1.04);
}
.st-hero-slide.is-image{
  background-size:cover;
  background-position:center center;
  background-repeat:no-repeat;
}
.st-hero-video{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}
.st-hero-scrim{
  position:absolute;
  inset:0;
  z-index:1;
  background:
    linear-gradient(110deg,
      rgba(30,20,16,.86) 0%,
      rgba(30,20,16,.72) 34%,
      rgba(30,20,16,.46) 62%,
      rgba(30,20,16,.22) 100%
    ),
    radial-gradient(
      ellipse 58% 78% at 12% 88%,
      rgba(122,31,46,.22),
      transparent 58%
    ),
    radial-gradient(
      ellipse 44% 34% at 82% 18%,
      rgba(164,204,212,.10),
      transparent 70%
    );
}
.st-grain{
  position:absolute;
  inset:0;
  pointer-events:none;
  z-index:2;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  background-size:200px;
  opacity:.025;
  mix-blend-mode:overlay;
}
.st-year-float{
  position:absolute;
  right:2.5rem;
  top:50%;
  transform:translateY(-50%);
  z-index:4;
  display:none;
  writing-mode:vertical-rl;
  text-orientation:mixed;
  gap:6px;
  align-items:center;
}
@media(min-width:1200px){
  .st-year-float{ display:flex; }
}
.st-year-float span{
  font-family:var(--fb);
  font-size:8px;
  font-weight:700;
  letter-spacing:.35em;
  text-transform:uppercase;
  color:rgba(235,230,224,.28);
}
.st-year-num{
  font-family:var(--fd)!important;
  font-style:italic;
  font-size:11px!important;
  letter-spacing:.2em!important;
  color:rgba(231,189,123,.58)!important;
  margin-top:8px;
}
.st-hero-content{
  position:relative;
  z-index:5;
  max-width:1400px;
  width:100%;
  margin:0 auto;
  padding:8.5rem 2rem 5.5rem;
}
@media(min-width:1024px){
  .st-hero-content{
    padding:10rem 3rem 6.5rem;
    max-width:900px;
  }
}
.st-eyebrow{
  display:inline-flex;
  align-items:center;
  gap:12px;
  font-family:var(--fb);
  font-size:10px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:.3em;
  color:var(--sky);
  margin-bottom:1.5rem;
}
.st-ey-rule{
  display:block;
  width:30px;
  height:1px;
  background:var(--sky);
  opacity:.85;
}
.st-h1{
  font-family:var(--fd);
  font-size:clamp(2.9rem,7.2vw,5.8rem);
  font-weight:600;
  line-height:.9;
  letter-spacing:-.045em;
  margin:0 0 2rem;
  text-shadow:0 10px 30px rgba(0,0,0,.22);
}
.st-h1-thin{
  display:block;
  color:rgba(235,230,224,.78);
  font-weight:300;
  font-style:normal;
}
.st-h1-italic{
  display:block;
  font-style:italic;
  color:#fff;
}
.st-hero-sub{
  font-size:clamp(1.05rem,2vw,1.25rem);
  font-weight:300;
  line-height:1.65;
  color:rgba(255,255,255,.88);
  margin-bottom:.95rem;
  max-width:680px;
}
.st-hero-body{
  font-size:15px;
  line-height:1.85;
  color:rgba(235,230,224,.76);
  max-width:620px;
  margin-bottom:.8rem;
}
.st-hero-ctas{
  display:flex;
  flex-wrap:wrap;
  gap:14px;
  margin-top:2.2rem;
}
.st-br-md{ display:none; }
@media(min-width:640px){
  .st-br-md{ display:block; }
}
.st-scroll-cue{
  position:absolute;
  bottom:2rem;
  left:50%;
  transform:translateX(-50%);
  z-index:6;
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:8px;
}
.st-scroll-bar{
  width:1px;
  height:48px;
  background:linear-gradient(180deg,transparent,var(--gold));
  animation:scrollPulse 2.2s ease infinite;
}
@keyframes scrollPulse{
  0%,100%{ opacity:.25; transform:scaleY(.7); }
  50%{ opacity:1; transform:scaleY(1); }
}
.st-scroll-cue span{
  font-family:var(--fb);
  font-size:8.5px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:.3em;
  color:rgba(235,230,224,.42);
}
.st-fade-up{
  opacity:0;
  transform:translateY(28px);
  animation:fadeUp .85s var(--ease-out) forwards;
  animation-delay:var(--d,.1s);
}
@keyframes fadeUp{
  to{ opacity:1; transform:none; }
}
@media(max-width:1023px){
  .st-hero{ min-height:92vh; }
  .st-hero-content{ padding:7.5rem 1.4rem 5rem; }
  .st-h1{ font-size:clamp(2.7rem,11vw,4.4rem); }
  .st-hero-sub,.st-hero-body{ max-width:100%; }
}
@media(max-width:639px){
  .st-hero{ min-height:88vh; }
  .st-hero-content{ padding:7rem 1.15rem 4.6rem; }
  .st-eyebrow{ font-size:8.5px; letter-spacing:.24em; gap:10px; }
  .st-ey-rule{ width:22px; }
  .st-h1{ font-size:clamp(2.45rem,13vw,3.9rem); margin:0 0 1.35rem; }
  .st-hero-sub{ font-size:1rem; line-height:1.55; margin-bottom:.8rem; }
  .st-hero-body{ font-size:13.5px; line-height:1.72; }
  .st-hero-ctas{ gap:10px; margin-top:1.8rem; }
  .st-scroll-cue{ bottom:1.2rem; }
  .st-scroll-bar{ height:36px; }
  .st-scroll-cue span{ font-size:7.5px; }
}

.st-qa{
  background: var(--espresso-mid);
  border-top:  1px solid rgba(231,189,123,.18);
  border-bottom: 1px solid rgba(164,204,212,.14);
  position: relative;
  z-index: 10;
}
.st-qa::before{
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; height: 1px;
  background: linear-gradient(90deg,
    transparent 0%,
    rgba(231,189,123,.35) 30%,
    rgba(164,204,212,.25) 70%,
    transparent 100%
  );
  pointer-events: none;
}
.st-qa-grid{
  max-width: 1400px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2,1fr);
}
@media(min-width:900px){
  .st-qa-grid{ grid-template-columns: repeat(4,1fr); }
}
.st-qa-tile{
  position: relative;
  display: flex;
  align-items: center;
  gap: 16px;
  min-height: 108px;
  padding: 24px 22px 22px;
  color: var(--cream);
  border-right: 1px solid rgba(235,230,224,.08);
  background: transparent;
  transition: background .28s ease, transform .28s ease;
  overflow: hidden;
}
.st-qa-tile:last-child{ border-right: none; }
.st-qa-tile:hover{
  background: rgba(235,230,224,.05);
  transform: translateY(-2px);
}
.st-qa-n{
  position: absolute;
  top: 12px;
  right: 14px;
  font-family: var(--fb);
  font-size: 9.5px;
  font-weight: 700;
  letter-spacing: .24em;
  color: rgba(231,189,123,.55);
}
.st-qa-body{ flex: 1; min-width: 0; }
.st-qa-title{
  display: block;
  font-family: var(--fd);
  font-size: 1.12rem;
  line-height: 1.05;
  font-style: italic;
  font-weight: 600;
  color: var(--cream);
}
.st-qa-copy{
  display: block;
  margin-top: 6px;
  font-family: var(--fb);
  font-size: 12px;
  line-height: 1.5;
  color: rgba(235,230,224,.58);
}
.st-qa-arrow{
  flex-shrink: 0;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  border: 1px solid rgba(231,189,123,.28);
  border-radius: 999px;
  color: var(--gold);
  font-size: 15px;
  background: transparent;
  transition: transform .25s ease, border-color .25s ease, background .25s ease;
}
.st-qa-tile:hover .st-qa-arrow{
  transform: translateX(3px);
  border-color: rgba(231,189,123,.65);
  background: rgba(231,189,123,.08);
}
.st-qa-bar{
  position: absolute;
  left: 0; right: 0; bottom: 0;
  height: 2px;
  background: var(--gold);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform .35s ease;
}
.st-qa-tile:hover .st-qa-bar{ transform: scaleX(1); }
@media(max-width:899px){
  .st-qa-tile:nth-child(even){ border-right: none; }
  .st-qa-tile:nth-child(1),
  .st-qa-tile:nth-child(2){
    border-bottom: 1px solid rgba(235,230,224,.08);
  }
  .st-qa-tile{ min-height: 96px; padding: 20px 16px 18px; }
  .st-qa-title{ font-size:1rem; }
  .st-qa-copy{ font-size:11px; }
  .st-qa-arrow{ width:28px; height:28px; font-size:13px; }
}

.st-products{
  padding:6.5rem 2rem;
  background:var(--surface-light);
  position:relative; overflow:hidden;
}
.st-bg-word{
  position:absolute; right:-0.05em; top:50%;
  transform:translateY(-50%);
  font-family:var(--fd); font-size:clamp(6rem,14vw,13rem);
  font-style:italic; font-weight:700;
  color:transparent;
  -webkit-text-stroke:1px rgba(122,31,46,.06);
  pointer-events:none; user-select:none;
  letter-spacing:-.06em; line-height:1; display:none;
}
@media(min-width:1200px){ .st-bg-word{ display:block; } }
.st-products-inner{ max-width:1400px; margin:0 auto; position:relative; }
.st-products-header{
  display:flex; flex-direction:column; gap:1rem;
  margin-bottom:3rem;
}
@media(min-width:768px){
  .st-products-header{ flex-direction:row; align-items:flex-end; justify-content:space-between; }
}
.st-products-aside{
  max-width:260px; font-size:13.5px; line-height:1.75;
  color:var(--soft); text-align:left;
}
@media(min-width:768px){ .st-products-aside{ text-align:right; } }

.st-flip-grid{
  display:grid; gap:1.5rem;
  grid-template-columns:1fr;
}
@media(min-width:640px){ .st-flip-grid{ grid-template-columns:repeat(2,1fr); } }
@media(min-width:1024px){ .st-flip-grid{ grid-template-columns:repeat(3,1fr); } }

.st-flip-wrap{ perspective:1200px; height:520px; }
@media(min-width:768px){ .st-flip-wrap{ height:560px; } }

.st-flip-card{
  position:relative; width:100%; height:100%;
  transform-style:preserve-3d;
  transition:transform .7s cubic-bezier(.4,0,.2,1);
  cursor:pointer;
}
.st-flip-card:hover,
.st-flip-card:focus-within{ transform:rotateY(180deg); }

.st-flip-front,
.st-flip-back{
  position:absolute; inset:0;
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
  overflow:hidden;
}

.st-flip-front{
  background:#fff;
  border:1px solid var(--bd);
  box-shadow:0 12px 36px rgba(44,26,14,.07);
  display:flex; flex-direction:column;
}
.st-flip-img-wrap{ position:relative; overflow:hidden; flex-shrink:0; height:260px; }
.st-flip-img{ width:100%; height:100%; object-fit:cover; transition:transform .7s ease; }
.st-flip-card:hover .st-flip-img{ transform:scale(1.04); }
.st-flip-img-scrim{
  position:absolute; inset:0;
  background:linear-gradient(180deg,transparent 45%,rgba(28,14,6,.18) 100%);
}
.st-flip-badge{
  position:absolute; top:14px; right:14px;
  background:var(--burgundy); color:var(--cream);
  font-family:var(--fb); font-size:8.5px; font-weight:700;
  text-transform:uppercase; letter-spacing:.22em;
  padding:5px 11px;
  box-shadow:0 4px 14px rgba(122,31,46,.28);
}
.st-flip-num{
  position:absolute; left:12px; bottom:12px;
  font-family:var(--fd); font-size:2.8rem;
  font-style:italic; font-weight:700;
  color:rgba(255,255,255,.07); line-height:1; user-select:none;
}
.st-flip-body{ flex:1; display:flex; flex-direction:column; padding:1.3rem 1.4rem; }
.st-flip-title{
  font-family:var(--fd); font-size:2rem;
  font-style:italic; font-weight:600; line-height:.95;
  letter-spacing:-.03em; color:var(--ink); margin-bottom:.65rem;
}
.st-flip-copy{ font-size:13.5px; line-height:1.75; color:var(--soft); flex:1; }
.st-flip-foot{
  display:flex; align-items:center; justify-content:space-between;
  border-top:1px solid var(--bd); padding-top:.9rem; margin-top:1rem;
}
.st-price-lab{
  display:block; font-size:8.5px; font-weight:700;
  text-transform:uppercase; letter-spacing:.25em;
  color:var(--burgundy); margin-bottom:3px;
}
.st-price-val{ display:block; font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:.06em; color:var(--ink); }
.st-flip-hint{ font-size:10px; color:rgba(44,26,14,.3); text-transform:uppercase; letter-spacing:.15em; }
.st-flip-accent{ position:absolute; left:0; top:0; bottom:0; width:3px; opacity:0; transition:opacity .4s; }
.st-flip-card:hover .st-flip-accent{ opacity:1; }

.st-flip-back{
  background:var(--espresso-mid);
  transform:rotateY(180deg);
  display:flex; align-items:stretch;
}
.st-flip-back::before{
  content:''; position:absolute; inset:0;
  background:
    radial-gradient(ellipse 70% 60% at 80% 20%, rgba(231,189,123,.05), transparent 55%),
    radial-gradient(ellipse 60% 50% at 20% 80%, rgba(122,31,46,.14), transparent 55%);
  pointer-events:none;
}
.st-flip-back-inner{
  position:relative; z-index:1;
  display:flex; flex-direction:column; justify-content:center;
  padding:2.5rem 2rem; width:100%;
  border:1px solid rgba(235,230,224,.06);
}
.st-flip-back::after{
  content:''; position:absolute; left:0; top:0; bottom:0; width:3px;
  background:var(--accent, var(--gold));
  opacity:.7;
}
.st-flip-back-num{
  font-family:var(--fd); font-size:4.5rem; font-style:italic; font-weight:700;
  color:rgba(235,230,224,.04); line-height:1; user-select:none; margin-bottom:.5rem;
}
.st-flip-back-title{
  font-family:var(--fd); font-size:2.4rem; font-style:italic;
  font-weight:600; line-height:.92; letter-spacing:-.04em;
  color:var(--cream); margin-bottom:.4rem;
}
.st-flip-back-sub{
  font-family:var(--fb); font-size:9px; font-weight:700;
  text-transform:uppercase; letter-spacing:.28em;
  color:var(--gold); margin-bottom:1.2rem;
}
.st-flip-back-copy{ font-size:13.5px; line-height:1.8; color:rgba(235,230,224,.56); flex:1; margin-bottom:1.5rem; }
.st-flip-back-price{ font-family:var(--fd); font-size:1rem; font-style:italic; color:var(--gold-lt); margin-bottom:1.4rem; }
.st-flip-back-btn{
  display:inline-flex; align-items:center; gap:8px; align-self:flex-start;
  padding:10px 20px;
  background:rgba(231,189,123,.18);
  border:1px solid rgba(231,189,123,.44);
  color:#ffffff !important;
  font-family:var(--fb);
  font-size:10px; font-weight:700;
  text-transform:uppercase; letter-spacing:.18em;
  box-shadow:0 8px 18px rgba(0,0,0,.12);
  transition:background .25s, border-color .25s, color .25s, box-shadow .25s;
}
.st-flip-back-btn:hover,
.st-flip-back-btn:focus-visible{
  background:var(--burgundy);
  border-color:var(--gold);
  color:var(--cream);
  box-shadow:0 10px 24px rgba(122,31,46,.22);
}

.st-feature{
  padding:7rem 2rem;
  background:var(--espresso);
  position:relative; overflow:hidden;
}
.st-feature::before{
  content:''; position:absolute; inset:0;
  background:
    radial-gradient(ellipse 70% 60% at 100% 50%, rgba(122,31,46,.10), transparent 55%),
    radial-gradient(ellipse 50% 40% at 0% 80%, rgba(231,189,123,.04), transparent 50%);
  pointer-events:none;
}
.st-feature-inner{
  max-width:1400px; margin:0 auto;
  display:grid; gap:4.5rem; align-items:start;
}
@media(min-width:1024px){ .st-feature-inner{ grid-template-columns:1fr 1fr; align-items:center; } }

.st-feat-visual{ position:relative; }
.st-feat-img-main{
  position:relative; overflow:hidden;
  border:1px solid rgba(235,230,224,.07);
  box-shadow:0 36px 80px rgba(0,0,0,.4);
}
.st-feat-img-main img{ width:100%; height:460px; object-fit:cover; }
@media(min-width:768px){ .st-feat-img-main img{ height:520px; } }

.st-corner{ position:absolute; width:18px; height:18px; z-index:2; border-color:rgba(231,189,123,.3); }
.st-c-tl{ top:0; left:0; border-top:1.5px solid; border-left:1.5px solid; }
.st-c-br{ bottom:0; right:0; border-bottom:1.5px solid; border-right:1.5px solid; }

.st-feat-slice{
  position:absolute; right:-1px; bottom:3.5rem;
  width:175px; background:rgba(20,10,8,.92);
  border:1px solid rgba(231,189,123,.12);
  backdrop-filter:blur(12px);
  box-shadow:0 12px 36px rgba(0,0,0,.4);
  display:none;
}
@media(min-width:1024px){ .st-feat-slice{ display:block; } }
.st-feat-slice img{ width:100%; height:120px; object-fit:cover; }
.st-feat-slice span{
  display:block; padding:8px 12px;
  font-family:var(--fb); font-size:9px; font-weight:700;
  text-transform:uppercase; letter-spacing:.2em;
  color:rgba(235,230,224,.28);
}

.st-layers{
  margin-top:1.2rem;
  background:rgba(235,230,224,.08);
  border:1px solid rgba(231,189,123,.28);
  padding:1.2rem 1.4rem;
}
.st-layers-hdr{
  display:flex; align-items:center; gap:10px;
  font-family:var(--fb); font-size:9px; font-weight:700;
  text-transform:uppercase; letter-spacing:.28em;
  color:var(--gold); margin-bottom:1rem;
}
.st-layers-rule{ width:16px; height:1.5px; background:var(--gold); }
.st-layer{
  display:flex; align-items:center; gap:10px;
  padding:7px 0; border-bottom:1px solid rgba(231,189,123,.15);
  opacity:0; animation:layerIn .45s var(--ease-out) both;
  animation-delay:calc(var(--li)*.07s + .4s);
}
@keyframes layerIn{ from{opacity:0;transform:translateX(-6px)} to{opacity:1;transform:none} }
.st-layer:last-child{ border-bottom:none; }
.st-layer-n{
  width:22px; height:22px; flex-shrink:0;
  border:1px solid rgba(231,189,123,.55);
  display:flex; align-items:center; justify-content:center;
  font-family:var(--fb); font-size:10px; font-weight:700; color:var(--gold);
}
.st-layer-dash{ width:18px; height:1.5px; background:var(--gold); opacity:.55; flex-shrink:0; }
.st-layer-text{ font-size:12.5px; line-height:1.5; color:rgba(235,230,224,.88); }

.st-feat-copy .st-label{ color:var(--sky); }
.st-feat-copy .st-label::before{ background:var(--sky); }
.st-feat-h{
  font-family:var(--fd); font-size:clamp(2.8rem,5.5vw,4.5rem);
  font-weight:600; line-height:.88; letter-spacing:-.045em;
  color:var(--cream); margin:.5rem 0 .6rem;
}
.st-feat-h em{ color:var(--gold); font-style:italic; }
.st-feat-italic{
  font-family:var(--fd); font-size:1.25rem; font-style:italic;
  color:var(--sky); margin-bottom:1.4rem;
}
.st-feat-body{ font-size:14.5px; line-height:1.85; color:rgba(235,230,224,.52); margin-bottom:1rem; }

.st-feat-prices{
  display:grid; grid-template-columns:repeat(3,1fr);
  border:1px solid rgba(231,189,123,.10);
  margin:2rem 0 2.2rem;
}
.st-feat-price-blk{
  padding:1.2rem .8rem; text-align:center;
  border-right:1px solid rgba(231,189,123,.10);
}
.st-feat-price-blk:last-child{ border-right:none; }
.st-feat-price-lab{
  display:block; font-family:var(--fb); font-size:9px; font-weight:700;
  text-transform:uppercase; letter-spacing:.22em;
  color:var(--sky); margin-bottom:.5rem;
}
.st-feat-price-val{
  display:block; font-family:var(--fd); font-size:1.4rem;
  font-style:italic; color:var(--gold);
}

.st-oc{
  padding:6rem 2rem;
  background:var(--surface-page);
  border-top:1px solid var(--bd);
}
.st-oc-inner{
  max-width:1400px; margin:0 auto;
  display:grid; gap:1.5rem;
}
@media(min-width:960px){ .st-oc-inner{ grid-template-columns:1fr 1fr; } }

.st-oc-card{
  padding:3rem 2.5rem; position:relative; overflow:hidden;
  border:1px solid var(--bd);
}
@media(min-width:640px){ .st-oc-card{ padding:3.5rem 3rem; } }
.st-oc-light{ background:#fff; }
.st-oc-dark{
  background:var(--espresso-mid);
  border-color:rgba(231,189,123,.10);
}
.st-oc-num-bg{
  position:absolute; top:1.5rem; right:2rem;
  font-family:var(--fd); font-size:5rem; font-style:italic; font-weight:700;
  color:transparent; line-height:1; pointer-events:none; user-select:none;
  -webkit-text-stroke:1.5px;
}
.st-oc-light .st-oc-num-bg{ -webkit-text-stroke-color:rgba(44,26,14,.06); }
.st-oc-dark  .st-oc-num-bg{ -webkit-text-stroke-color:rgba(231,189,123,.07); }

.st-oc-h{
  font-family:var(--fd); font-size:clamp(2rem,3.8vw,3rem);
  font-weight:600; line-height:.95; letter-spacing:-.04em;
  margin:1rem 0 1.5rem;
}
.st-oc-light .st-oc-h{ color:var(--ink); }
.st-oc-light .st-oc-h em{ color:var(--burgundy); font-style:italic; }
.st-oc-dark  .st-oc-h{ color:var(--cream); }
.st-oc-dark  .st-oc-h em{ color:var(--gold); font-style:italic; }

.st-oc-body{ font-size:14px; line-height:1.85; margin-bottom:1.5rem; }
.st-oc-light .st-oc-body{ color:var(--soft); }
.st-oc-dark  .st-oc-body{ color:rgba(235,230,224,.48); }

.st-oc-list{
  list-style:none; padding:0; margin:0 0 2rem;
  display:flex; flex-direction:column; gap:2px;
}
.st-oc-list li{
  display:flex; align-items:center; gap:12px;
  padding:12px 16px; font-size:13px;
}
.st-oc-list li::before{
  content:''; display:block; width:16px; height:1.5px;
  background:var(--gold); flex-shrink:0;
}
.st-oc-light .st-oc-list li{ background:rgba(44,26,14,.03); color:var(--text); }
.st-oc-dark  .st-oc-list li{ background:rgba(235,230,224,.03); color:rgba(235,230,224,.56); }

.st-reviews{
  padding:6rem 2rem;
  background:var(--surface-light);
  border-top:1px solid var(--bd);
}
.st-reviews-inner{ max-width:1400px; margin:0 auto; }
.st-reviews-hdr{ margin-bottom:3rem; }

.st-car-viewport{
  overflow:hidden; cursor:grab; user-select:none;
}
.st-car-viewport.is-dragging{ cursor:grabbing; }
.st-car-track{
  display:flex; gap:1.5rem;
  transition:transform .55s cubic-bezier(.25,.8,.25,1);
  will-change:transform;
}
.st-car-track.no-transition{ transition:none; }
.st-car-slide{ flex-shrink:0; width:calc(100% - 0px); }
@media(min-width:640px){ .st-car-slide{ width:calc(50% - .75rem); } }
@media(min-width:1024px){ .st-car-slide{ width:calc(33.333% - 1rem); } }

.st-review-card{
  background:#fff;
  border:1px solid var(--bd);
  padding:2rem 1.8rem; height:100%;
  box-shadow:0 8px 28px rgba(44,26,14,.05);
  transition:transform .35s, box-shadow .35s, border-color .35s;
}
.st-review-card:hover{
  transform:translateY(-5px);
  box-shadow:0 20px 48px rgba(44,26,14,.12);
  border-color:rgba(122,31,46,.16);
}
.st-review-stars{ color:var(--gold); font-size:14px; letter-spacing:2px; margin-bottom:.9rem; }
.st-review-stars span{ display:inline-block; transition:transform .2s; }
.st-review-card:hover .st-review-stars span:nth-child(1){ animation:starPop .4s ease .0s both; }
.st-review-card:hover .st-review-stars span:nth-child(2){ animation:starPop .4s ease .05s both; }
.st-review-card:hover .st-review-stars span:nth-child(3){ animation:starPop .4s ease .10s both; }
.st-review-card:hover .st-review-stars span:nth-child(4){ animation:starPop .4s ease .15s both; }
.st-review-card:hover .st-review-stars span:nth-child(5){ animation:starPop .4s ease .20s both; }
@keyframes starPop{ 0%,100%{transform:scale(1)} 50%{transform:scale(1.35)} }
.st-review-text{
  font-family:var(--fd); font-size:1.05rem; font-style:italic;
  line-height:1.7; color:var(--ink); margin-bottom:1.2rem;
}
.st-review-author{
  font-family:var(--fb); font-size:10.5px; font-weight:700;
  text-transform:uppercase; letter-spacing:.18em;
  color:var(--soft); font-style:normal;
}

.st-car-controls{
  display:flex; align-items:center; gap:1rem;
  margin-top:2rem; flex-wrap:wrap;
}
.st-car-btn{
  width:42px; height:42px;
  border:1px solid var(--bd-md); background:#fff;
  display:flex; align-items:center; justify-content:center;
  font-size:16px; cursor:pointer; color:var(--text);
  transition:border-color .25s, color .25s, background .25s;
}
.st-car-btn:hover{ border-color:var(--burgundy); color:var(--burgundy); background:rgba(122,31,46,.03); }
.st-car-dots{ display:flex; gap:6px; flex-wrap:wrap; }
.st-car-dot{
  width:8px; height:8px; border-radius:50%;
  border:1.5px solid var(--bd-md); background:transparent;
  cursor:pointer; padding:0;
  transition:background .25s, border-color .25s, transform .25s;
}
.st-car-dot.is-on{ background:var(--burgundy); border-color:var(--burgundy); transform:scale(1.3); }

.st-visit{
  padding:6rem 2rem;
  background:var(--surface-page);
  border-top:1px solid var(--bd);
}
.st-visit-inner{
  max-width:1400px; margin:0 auto;
  display:grid; gap:4rem; align-items:center;
}
@media(min-width:1024px){ .st-visit-inner{ grid-template-columns:400px 1fr; } }

.st-visit-rows{ margin:1.8rem 0 2rem; display:flex; flex-direction:column; gap:0; }
.st-visit-row{
  display:flex; flex-direction:column; gap:3px;
  padding:12px 0; border-bottom:1px solid var(--bd);
}
.st-visit-row:last-child{ border-bottom:none; }
.st-visit-lab{
  font-family:var(--fb); font-size:8.5px; font-weight:700;
  text-transform:uppercase; letter-spacing:.28em; color:var(--burgundy);
}
.st-visit-val{ font-size:13.5px; line-height:1.6; color:var(--soft); }

.st-visit-imgs{ display:grid; grid-template-columns:1fr 1fr; gap:1rem; }
.st-visit-img-a, .st-visit-img-b{
  overflow:hidden; border:1px solid var(--bd);
  box-shadow:0 16px 40px rgba(44,26,14,.08);
}
.st-visit-img-a img, .st-visit-img-b img{
  width:100%; height:260px; object-fit:cover;
  transition:transform .6s ease;
}
@media(min-width:640px){
  .st-visit-img-a img, .st-visit-img-b img{ height:340px; }
}
.st-visit-img-a:hover img, .st-visit-img-b:hover img{ transform:scale(1.04); }

.st-quote{
  padding:7rem 2rem;
  background:var(--surface-quote);
  border-top:1px solid var(--bd);
  position:relative; overflow:hidden;
}
.st-quote::before{
  content:''; position:absolute; inset:0;
  background:radial-gradient(ellipse 70% 55% at 50% 0%, rgba(231,189,123,.07), transparent 55%);
  pointer-events:none;
}
.st-quote-inner{ max-width:840px; margin:0 auto; text-align:center; position:relative; }
.st-quote-ornament{
  font-size:11px; letter-spacing:.6em; color:var(--gold);
  margin-bottom:1.8rem; opacity:.7;
}
.st-open-mark{
  font-family:var(--fd); font-size:7.5rem; line-height:.5;
  color:rgba(122,31,46,.1); user-select:none; display:block;
  margin-bottom:.5rem;
}
.st-quote-text{
  font-family:var(--fd);
  font-size:clamp(1.15rem,2.4vw,1.65rem);
  font-style:italic; font-weight:500;
  line-height:1.65; letter-spacing:-.02em;
  color:var(--ink); margin:0;
}
.st-quote-attr{
  display:flex; align-items:center; justify-content:center;
  gap:1.5rem; margin-top:2.5rem; flex-wrap:wrap;
}
.st-quote-rule{ height:1px; width:44px; background:rgba(122,31,46,.2); }
.st-quote-attr span{
  font-family:var(--fb); font-size:8.5px; font-weight:700;
  text-transform:uppercase; letter-spacing:.3em; color:var(--soft);
}

.st-reveal-up,
.st-reveal-left,
.st-reveal-right,
.st-reveal-stagger{
  opacity:0;
  transition:opacity .9s var(--ease-out), transform .9s var(--ease-out);
  will-change:transform, opacity;
}
.st-reveal-up    { transform:translateY(40px); }
.st-reveal-left  { transform:translateX(-40px); }
.st-reveal-right { transform:translateX(40px); }
.st-reveal-stagger{ transform:translateY(28px); }
.st-home .is-visible{
  opacity:1 !important; transform:translate3d(0,0,0) !important;
}

@media(prefers-reduced-motion:reduce){
  .st-fade-up, .st-reveal-up, .st-reveal-left, .st-reveal-right, .st-reveal-stagger{
    opacity:1 !important; transform:none !important;
    animation:none !important; transition:none !important;
  }
  .st-flip-card{ transition:none; }
  .st-car-track{ transition:none; }
  .st-scroll-bar{ animation:none; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

  const revEls = document.querySelectorAll(
    '.st-reveal-up, .st-reveal-left, .st-reveal-right, .st-reveal-stagger'
  );
  if (revEls.length && window.IntersectionObserver) {
    const obs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const delay = entry.target.classList.contains('st-reveal-stagger')
          ? (parseInt(entry.target.style.getPropertyValue('--si') || '0')) * 110 : 0;
        setTimeout(() => entry.target.classList.add('is-visible'), delay);
        obs.unobserve(entry.target);
      });
    }, { threshold: 0.12 });
    revEls.forEach(el => obs.observe(el));
  } else {
    revEls.forEach(el => el.classList.add('is-visible'));
  }

  document.querySelectorAll('.st-flip-card').forEach(card => {
    card.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        card.classList.toggle('is-flipped');
      }
    });
    let flipped = false;
    card.addEventListener('click', () => {
      flipped = !flipped;
      card.style.transform = flipped ? 'rotateY(180deg)' : '';
    });
  });

  (function(){
    const viewport = document.getElementById('st-car-viewport');
    const track    = document.getElementById('st-car-track');
    const dotsEl   = document.getElementById('st-car-dots');
    const prevBtn  = document.getElementById('st-car-prev');
    const nextBtn  = document.getElementById('st-car-next');
    if (!viewport || !track) return;

    const slides = track.querySelectorAll('.st-car-slide');
    const total  = slides.length;
    let cur      = 0;
    let autoTimer;

    function perView() {
      const vw = viewport.offsetWidth;
      const sw = slides[0] ? slides[0].offsetWidth : vw;
      return Math.max(1, Math.round(vw / (sw + 24)));
    }

    function getOffset(idx) {
      if (!slides[idx]) return 0;
      const gap = 24;
      let off = 0;
      for (let i = 0; i < idx; i++) {
        off += (slides[i] ? slides[i].offsetWidth : 0) + gap;
      }
      return off;
    }

    function goTo(idx, animated = true) {
      const pv    = perView();
      const maxI  = Math.max(0, total - pv);
      cur = Math.max(0, Math.min(idx, maxI));
      if (!animated) track.classList.add('no-transition');
      track.style.transform = `translateX(-${getOffset(cur)}px)`;
      if (!animated) requestAnimationFrame(() => track.classList.remove('no-transition'));
      dotsEl && dotsEl.querySelectorAll('.st-car-dot').forEach((d, i) =>
        d.classList.toggle('is-on', i === cur)
      );
    }

    prevBtn && prevBtn.addEventListener('click', () => { goTo(cur - 1); restartAuto(); });
    nextBtn && nextBtn.addEventListener('click', () => { goTo(cur + 1); restartAuto(); });
    dotsEl && dotsEl.querySelectorAll('.st-car-dot').forEach(d =>
      d.addEventListener('click', () => { goTo(parseInt(d.dataset.idx)); restartAuto(); })
    );

    let startX = 0, isDragging = false;
    viewport.addEventListener('pointerdown', e => {
      startX = e.clientX; isDragging = true;
      viewport.classList.add('is-dragging');
      track.classList.add('no-transition');
    });
    window.addEventListener('pointermove', e => {
      if (!isDragging) return;
      const dx = e.clientX - startX;
      track.style.transform = `translateX(${-getOffset(cur) + dx}px)`;
    });
    window.addEventListener('pointerup', e => {
      if (!isDragging) return;
      isDragging = false;
      viewport.classList.remove('is-dragging');
      track.classList.remove('no-transition');
      const dx = e.clientX - startX;
      if (Math.abs(dx) > 60) { dx < 0 ? goTo(cur + 1) : goTo(cur - 1); }
      else { goTo(cur); }
      restartAuto();
    });

    function startAuto(){
      autoTimer = setInterval(() => {
        const pv = perView();
        goTo(cur + 1 > total - pv ? 0 : cur + 1);
      }, 6000);
    }
    function restartAuto(){ clearInterval(autoTimer); startAuto(); }
    startAuto();
    window.addEventListener('resize', () => goTo(cur, false));
  })();

  document.addEventListener('click', e => {
    const a = e.target.closest('a[href^="#"]');
    if (!a) return;
    const target = document.querySelector(a.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    const bar    = document.getElementById('wpadminbar');
    const offset = (bar ? bar.offsetHeight : 0) + (window.innerWidth >= 1024 ? 88 : 72);
    window.scrollTo({ top: target.getBoundingClientRect().top + pageYOffset - offset, behavior:'smooth' });
  });

});
</script>

<?php get_footer(); ?>