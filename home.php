<?php
/**
 * Template Name: Home Template
 *
 * Homepage Stella Pastry & Cafe
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="st-home overflow-hidden bg-[var(--st-bg)] text-[var(--st-text)]">

  <?php
    $hero_images = [
      'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?q=80&w=1800&auto=format&fit=crop',
      'https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=1800&auto=format&fit=crop',
      'https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=1800&auto=format&fit=crop',
    ];

    $feature_whole_cake   = 'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?q=80&w=1600&auto=format&fit=crop';
    $feature_slice        = 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=1400&auto=format&fit=crop';
    $plate_espresso_image = 'https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=1200&auto=format&fit=crop';
    $storefront_image     = 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=1400&auto=format&fit=crop';
    $display_case_image   = 'https://images.unsplash.com/photo-1483695028939-5bb13f8648b0?q=80&w=1400&auto=format&fit=crop';

    $quick_actions = [
      [ 'title' => 'Order Now',         'copy' => 'DoorDash · Uber Eats or visit us',      'link' => '#order-delivery',   'num' => '01' ],
      [ 'title' => 'Catering',          'copy' => 'Weddings · Events Delivery available',   'link' => '#catering',         'num' => '02' ],
      [ 'title' => 'The Sacripantina',  'copy' => 'Only here. Since 1942',                  'link' => '#the-sacripantina', 'num' => '03' ],
      [ 'title' => 'Visit Us',          'copy' => 'Open daily 7:30am–8pm 446 Columbus Ave', 'link' => '#visit-us',         'num' => '04' ],
    ];

    $products = [
      [
        'title' => 'Sacripantina',
        'badge' => 'Only Here',
        'copy'  => 'Vanilla sponge, zabaione, rum. The cake that only exists here — made the same way since 1942.',
        'price' => 'Slice $8.75 · 8" $57.90',
        'link'  => '#the-sacripantina',
        'image' => $feature_whole_cake,
        'num'   => '001',
      ],
      [
        'title' => 'Tiramisu',
        'badge' => 'Best in SF',
        'copy'  => 'Vanilla sponge, espresso, rum, mascarpone. Called the best tiramisu in San Francisco by dozens of customers.',
        'price' => 'Slice $8.75 · 8" $57.90',
        'link'  => '#order-delivery',
        'image' => $plate_espresso_image,
        'num'   => '002',
      ],
      [
        'title' => 'Cannoli',
        'badge' => '',
        'copy'  => 'Crisp shell, sweetened ricotta, chocolate chips. Fried fresh. The way a cannoli should be.',
        'price' => '$7.75 each',
        'link'  => '#order-delivery',
        'image' => $display_case_image,
        'num'   => '003',
      ],
    ];

    $layer_labels = [
      'Fine cake crumb dusting',
      'Zabaione cream',
      'Vanilla sponge soaked in rum',
      'Zabaione cream',
      'Vanilla sponge',
    ];
  ?>

  <!-- ═══════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════ -->
  <section id="top" class="st-hero relative isolate overflow-hidden bg-[var(--st-dark)]">

    <!-- Slider background -->
    <div class="st-hero-slider absolute inset-0">
      <?php foreach ($hero_images as $i => $img) : ?>
        <div class="st-hero-slide <?php echo $i === 0 ? 'is-active' : ''; ?>"
             style="background-image:url('<?php echo esc_url($img); ?>')"></div>
      <?php endforeach; ?>
    </div>

    <!-- Grain overlay -->
    <div class="st-grain absolute inset-0 pointer-events-none z-[1]"></div>

    <!-- Gradient overlays -->
    <div class="absolute inset-0 z-[2]"
         style="background:linear-gradient(105deg,rgba(18,9,4,0.97) 0%,rgba(18,9,4,0.88) 38%,rgba(18,9,4,0.55) 65%,rgba(18,9,4,0.2) 100%)"></div>
    <div class="absolute inset-0 z-[2]"
         style="background:radial-gradient(ellipse 60% 70% at 0% 100%,rgba(198,156,60,0.13),transparent 55%)"></div>
    <div class="absolute inset-0 z-[2]"
         style="background:radial-gradient(ellipse 50% 60% at 100% 0%,rgba(122,31,46,0.15),transparent 50%)"></div>

    <!-- Vertical rule lines -->
    <div class="st-vline absolute inset-y-0 z-[3]" style="left:8%"></div>
    <div class="st-vline absolute inset-y-0 z-[3] hidden xl:block" style="right:11%"></div>

    <!-- Year stamp — rotated -->
    <div class="absolute bottom-12 right-6 z-[4] hidden lg:block"
         style="writing-mode:vertical-rl;transform:rotate(180deg)">
      <span class="text-[10px] font-semibold uppercase tracking-[0.4em] text-white/25">Est. 1942 · North Beach · San Francisco</span>
    </div>

    <!-- Floating counter -->
    <div class="st-hero-counter absolute top-1/2 right-[11%] z-[4] hidden xl:flex -translate-y-1/2 flex-col items-center gap-2">
      <div class="st-counter-dot is-active"></div>
      <div class="st-counter-dot"></div>
      <div class="st-counter-dot"></div>
    </div>

    <div class="relative z-[5] mx-auto max-w-[1440px] px-4 pb-20 pt-24 sm:px-6 md:pb-24 md:pt-28 lg:px-8 lg:pb-28 lg:pt-32">
      <div class="grid gap-12 lg:grid-cols-[1fr_420px] lg:items-end">

        <!-- Left: copy -->
        <div>
          <!-- Eyebrow pill -->
          <div class="st-reveal-up mb-8 inline-flex items-center gap-3">
            <span class="st-eyebrow-line"></span>
            <span class="text-[10px] font-semibold uppercase tracking-[0.35em] text-[var(--st-gold-soft)]">
              North Beach, San Francisco · Since 1942
            </span>
          </div>

          <!-- Headline -->
          <h1 class="st-reveal-up st-hero-headline font-[var(--st-font-display)] text-[var(--st-cream)]">
            <span class="block">The House</span>
            <span class="block st-headline-accent">of&nbsp;Sacripantina.</span>
          </h1>

          <!-- Body -->
          <div class="st-reveal-up mt-8 max-w-xl space-y-4">
            <p class="text-xl font-light leading-8 text-[var(--st-cream)]/90 sm:text-2xl sm:leading-9">
              Some things cannot be found anywhere else in the world. The Sacripantina is one of them.
            </p>
            <p class="text-[15px] leading-7 text-white/55">
              A vanilla sponge soaked in rum, layered with zabaione — that delicate custard of egg yolks, sweet butter, Marsala, and sherry — dusted with fine cake crumbs and shaped into its iconic dome. Light as a whisper. Unforgettable as a memory.
            </p>
            <p class="text-[15px] leading-7 text-white/55">
              It has been made this way, in this corner of North Beach, for over eighty years. Come find it.
            </p>
          </div>

          <!-- CTAs -->
          <div class="st-reveal-up mt-10 flex flex-wrap items-center gap-5">
            <a href="#order-delivery" class="st-btn-primary">
              <span>Order Now</span>
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 7h12M7 1l6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <a href="#brand-quote" class="st-btn-ghost">Our Story</a>
          </div>
        </div>

        <!-- Right: featured image card -->
        <div class="st-reveal-right">
          <div class="st-hero-card relative">
            <!-- Corner marks -->
            <div class="st-corner st-corner-tl"></div>
            <div class="st-corner st-corner-tr"></div>
            <div class="st-corner st-corner-bl"></div>
            <div class="st-corner st-corner-br"></div>

            <div class="overflow-hidden">
              <img src="<?php echo esc_url($feature_whole_cake); ?>"
                   alt="Sacripantina whole cake"
                   class="st-parallax-soft h-[460px] w-full object-cover sm:h-[540px]">
            </div>

            <!-- Caption bar -->
            <div class="mt-0 grid grid-cols-2 border-t border-white/10">
              <div class="border-r border-white/10 px-4 py-3">
                <p class="text-[9px] font-semibold uppercase tracking-[0.3em] text-white/40">Photo direction</p>
                <p class="mt-1 text-[11px] text-white/65">Warm · Analog · Real</p>
              </div>
              <div class="px-4 py-3 text-right">
                <p class="text-[9px] font-semibold uppercase tracking-[0.3em] text-white/40">Exclusive</p>
                <p class="mt-1 text-[11px] text-white/65">Only Here</p>
              </div>
            </div>

            <!-- Gold accent bar -->
            <div class="absolute left-0 top-0 h-full w-[3px]"
                 style="background:linear-gradient(180deg,var(--st-gold) 0%,transparent 100%)"></div>
          </div>
        </div>

      </div>
    </div>

    <!-- Bottom scrim into next section -->
    <div class="absolute inset-x-0 bottom-0 z-[4] h-16"
         style="background:linear-gradient(180deg,transparent,var(--st-cream))"></div>
  </section>


  <!-- ═══════════════════════════════════════════
       QUICK ACTIONS
  ═══════════════════════════════════════════ -->
  <section class="relative z-10 bg-[var(--st-cream)] border-b border-[var(--st-border-soft)]">
    <div class="mx-auto max-w-[1440px]">
      <div class="grid md:grid-cols-2 xl:grid-cols-4 divide-x divide-y divide-[var(--st-border)] border-x border-[var(--st-border)]">
        <?php foreach ($quick_actions as $item) : ?>
          <a href="<?php echo esc_url($item['link']); ?>"
             class="st-qa-tile group relative overflow-hidden bg-[var(--st-cream)] px-6 py-7 transition-colors duration-300 hover:bg-[var(--st-ivory)]">

            <!-- Hover fill -->
            <div class="st-qa-fill absolute inset-0 origin-left scale-x-0 bg-[var(--st-gold)]/6 transition-transform duration-500 ease-out group-hover:scale-x-100"></div>

            <!-- Number -->
            <span class="relative block text-[10px] font-semibold tracking-[0.3em] text-[var(--st-burgundy)]/40 mb-4">
              <?php echo esc_html($item['num']); ?>
            </span>

            <div class="relative flex items-start justify-between gap-4">
              <div>
                <p class="font-[var(--st-font-display)] text-[1.45rem] italic leading-tight tracking-[-0.02em] text-[var(--st-dark)]">
                  <?php echo esc_html($item['title']); ?>
                </p>
                <p class="mt-2 text-[13px] leading-6 text-[var(--st-text-soft)]">
                  <?php echo esc_html($item['copy']); ?>
                </p>
              </div>
              <span class="mt-1 shrink-0 text-[var(--st-burgundy)] transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-0.5">↗</span>
            </div>

            <!-- Bottom gold bar on hover -->
            <div class="absolute bottom-0 left-0 h-[2px] w-0 bg-[var(--st-gold)] transition-all duration-400 group-hover:w-full"></div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════
       PRODUCTS — "From Our Cases"
  ═══════════════════════════════════════════ -->
  <section id="from-our-cases" class="relative overflow-hidden bg-[var(--st-ivory)] py-24 lg:py-32">

    <!-- Section rule -->
    <div class="absolute left-0 top-0 h-px w-full"
         style="background:linear-gradient(90deg,transparent,rgba(122,31,46,0.2),transparent)"></div>

    <!-- Background number -->
    <div class="st-bg-number absolute right-[-0.05em] top-1/2 -translate-y-1/2 select-none pointer-events-none hidden xl:block">
      CASES
    </div>

    <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">

      <!-- Header row -->
      <div class="st-reveal-up mb-16 flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
        <div>
          <p class="st-section-label">From Our Cases</p>
          <h2 class="mt-3 font-[var(--st-font-display)] text-5xl font-semibold italic leading-[0.95] tracking-[-0.04em] text-[var(--st-dark)] sm:text-6xl">
            Made Fresh.<br>Every Morning.
          </h2>
        </div>
        <p class="max-w-xs text-[14px] leading-7 text-[var(--st-text-soft)] sm:text-right">
          Three signatures from the case, anchored by the one thing that only exists here.
        </p>
      </div>

      <!-- Cards -->
      <div class="relative">
        <!-- Carousel nav — solo en mobile/tablet donde los cards hacen scroll -->
        <div class="flex items-center justify-end gap-2 mb-5 xl:hidden">
          <button type="button" class="st-carousel-prev st-carousel-btn" aria-label="Previous product">←</button>
          <button type="button" class="st-carousel-next st-carousel-btn" aria-label="Next product">→</button>
        </div>

        <div class="st-product-track flex gap-5 overflow-x-auto pb-2 [scrollbar-width:none] xl:overflow-visible">
          <?php foreach ($products as $product) : ?>
            <article class="st-reveal-stagger st-product-card group relative min-w-[88%] sm:min-w-[400px] md:min-w-[440px] xl:min-w-0 xl:flex-1 flex flex-col bg-white border border-[var(--st-border)]
                            shadow-[0_20px_48px_rgba(44,26,14,0.07)]
                            transition-all duration-500 hover:-translate-y-2
                            hover:shadow-[0_32px_64px_rgba(44,26,14,0.14)]
                            hover:border-[var(--st-burgundy)]/20">

              <!-- Image -->
              <div class="relative overflow-hidden">
                <img src="<?php echo esc_url($product['image']); ?>"
                     alt="<?php echo esc_attr($product['title']); ?>"
                     class="st-parallax-soft h-[280px] w-full object-cover transition-transform duration-700 group-hover:scale-[1.04] sm:h-[340px]">

                <!-- Overlay on hover -->
                <div class="absolute inset-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100"
                     style="background:linear-gradient(180deg,transparent 50%,rgba(44,26,14,0.18) 100%)"></div>

                <!-- Item number -->
                <span class="absolute left-4 bottom-4 font-[var(--st-font-display)] text-[2.5rem] italic font-semibold leading-none text-white/10 select-none">
                  <?php echo esc_html($product['num']); ?>
                </span>

                <?php if (!empty($product['badge'])) : ?>
                  <span class="absolute right-4 top-4 bg-[var(--st-burgundy)] px-3 py-1.5 text-[9px] font-semibold uppercase tracking-[0.22em] text-white shadow-[0_8px_20px_rgba(122,31,46,0.3)]">
                    <?php echo esc_html($product['badge']); ?>
                  </span>
                <?php endif; ?>
              </div>

              <!-- Content -->
              <div class="flex flex-1 flex-col p-5">
                <h3 class="font-[var(--st-font-display)] text-[1.85rem] italic leading-none tracking-[-0.03em] text-[var(--st-dark)]">
                  <?php echo esc_html($product['title']); ?>
                </h3>

                <p class="mt-3 flex-1 text-[14px] leading-7 text-[var(--st-text-soft)]">
                  <?php echo esc_html($product['copy']); ?>
                </p>

                <!-- Price + CTA footer -->
                <div class="mt-5 flex items-center justify-between border-t border-[var(--st-border)] pt-4">
                  <div>
                    <p class="text-[9px] font-semibold uppercase tracking-[0.25em] text-[var(--st-burgundy)]">Price</p>
                    <p class="mt-1 text-[13px] font-semibold uppercase tracking-[0.06em] text-[var(--st-dark)]">
                      <?php echo esc_html($product['price']); ?>
                    </p>
                  </div>
                  <a href="<?php echo esc_url($product['link']); ?>"
                     class="inline-flex items-center gap-2 text-[11px] font-semibold uppercase tracking-[0.2em] text-[var(--st-burgundy)] transition-all duration-300 hover:gap-3">
                    Discover <span>→</span>
                  </a>
                </div>
              </div>

              <!-- Left accent on hover -->
              <div class="absolute left-0 top-0 w-[2px] h-0 bg-[var(--st-gold)] transition-all duration-500 group-hover:h-full"></div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════
       SACRIPANTINA FEATURE
  ═══════════════════════════════════════════ -->
  <section id="the-sacripantina" class="relative overflow-hidden py-24 lg:py-32"
           style="background:var(--st-bg)">

    <!-- Dark column behind image -->
    <div class="absolute inset-y-0 left-0 hidden w-[42%] lg:block"
         style="background:linear-gradient(90deg,var(--st-dark) 80%,transparent 100%)"></div>

    <!-- Grain on dark side -->
    <div class="st-grain absolute inset-y-0 left-0 hidden w-[42%] lg:block opacity-60 pointer-events-none"></div>

    <div class="relative mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
      <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

        <!-- Left: image + layer breakdown -->
        <div class="st-reveal-left relative">
          <!-- Main image -->
          <div class="relative overflow-hidden shadow-[0_40px_80px_rgba(18,9,4,0.35)]">
            <!-- Corner marks on image -->
            <div class="st-corner-dark st-corner-tl"></div>
            <div class="st-corner-dark st-corner-tr"></div>

            <img src="<?php echo esc_url($feature_whole_cake); ?>"
                 alt="The Sacripantina whole cake"
                 class="st-parallax-soft h-[380px] w-full object-cover sm:h-[480px] lg:h-[540px]">

            <!-- Photo direction overlay -->
            <div class="absolute bottom-0 left-0 right-0 grid grid-cols-2 border-t border-white/10">
              <div class="bg-[rgba(18,9,4,0.75)] px-4 py-3 backdrop-blur-sm border-r border-white/10">
                <p class="text-[9px] font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">Whole cake</p>
                <p class="mt-1 text-[11px] text-white/60">Full dome on marble, warm light, no filters.</p>
              </div>
              <div class="bg-[rgba(18,9,4,0.65)] px-4 py-3 backdrop-blur-sm">
                <p class="text-[9px] font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">Cross-section</p>
                <p class="mt-1 text-[11px] text-white/60">Slice showing the zabaione layers and soaked sponge.</p>
              </div>
            </div>
          </div>

          <!-- Layer breakdown card — overlapping -->
          <div class="st-reveal-up relative z-10 -mt-0 mt-4 lg:-mt-0 lg:mr-[-3rem] border border-[var(--st-border)] bg-[var(--st-ivory)] p-5 shadow-[0_20px_44px_rgba(44,26,14,0.12)]">
            <div class="flex items-center gap-3 border-b border-[var(--st-border)] pb-3 mb-4">
              <span class="block h-[10px] w-[2px] bg-[var(--st-gold)]"></span>
              <p class="text-[9px] font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">Layer breakdown</p>
            </div>
            <div class="space-y-2.5">
              <?php foreach ($layer_labels as $idx => $label) : ?>
                <div class="flex items-center gap-3">
                  <span class="st-layer-num"><?php echo $idx + 1; ?></span>
                  <p class="text-[13px] leading-6 text-[var(--st-text)]"><?php echo esc_html($label); ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Right: copy -->
        <div class="st-reveal-right lg:pl-8">
          <p class="st-section-label">Our Signature</p>

          <h2 class="mt-4 font-[var(--st-font-display)] text-5xl font-semibold italic leading-[0.94] tracking-[-0.04em] text-[var(--st-dark)] sm:text-6xl lg:text-[4rem]">
            The Sacripantina.
          </h2>

          <p class="mt-4 font-[var(--st-font-display)] text-2xl italic text-[var(--st-burgundy)]">
            Only here. Since 1942.
          </p>

          <p class="mt-6 text-[15px] leading-8 text-[var(--st-text-soft)]">
            There is no other cake like this. Vanilla sponge soaked in rum, layered with zabaione — egg yolks, sweet butter, Marsala, sherry — finished with a dusting of fine crumbs. Light as a whisper. It cannot be explained. It can only be tasted.
          </p>

          <!-- Prices -->
          <div class="mt-8 grid grid-cols-3 border border-[var(--st-border)] divide-x divide-[var(--st-border)]">
            <?php
              $prices = [['Slice','$8.75'],['6" Cake','$45.00'],['8" Cake','$57.90']];
              foreach ($prices as [$label, $val]) :
            ?>
              <div class="bg-white px-4 py-5 text-center">
                <p class="text-[9px] font-semibold uppercase tracking-[0.22em] text-[var(--st-burgundy)]"><?php echo $label; ?></p>
                <p class="mt-2 font-[var(--st-font-display)] text-xl italic text-[var(--st-dark)]"><?php echo $val; ?></p>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="mt-8">
            <a href="#order-delivery" class="st-btn-primary">
              <span>Order the Sacripantina</span>
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 7h12M7 1l6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════
       ORDER + CATERING
  ═══════════════════════════════════════════ -->
  <section class="relative overflow-hidden bg-[var(--st-cream)] py-24 lg:py-28">
    <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
      <div class="grid gap-5 xl:grid-cols-2">

        <!-- Order -->
        <article id="order-delivery"
                 class="st-reveal-left relative overflow-hidden border border-[var(--st-border)] bg-white p-8 lg:p-12
                        shadow-[0_24px_56px_rgba(44,26,14,0.07)]">

          <div class="absolute right-0 top-0 h-32 w-32 translate-x-1/3 -translate-y-1/3 rounded-full"
               style="background:radial-gradient(circle,rgba(198,156,60,0.18),transparent 70%)"></div>

          <!-- Corner accent -->
          <div class="absolute top-0 right-0 w-16 h-16 overflow-hidden">
            <div class="absolute top-0 right-0 border-t-[2px] border-r-[2px] border-[var(--st-gold)]/50 w-10 h-10"></div>
          </div>

          <p class="st-section-label">Available Now</p>

          <h3 class="mt-4 font-[var(--st-font-display)] text-4xl font-semibold italic leading-[0.97] tracking-[-0.04em] text-[var(--st-dark)] sm:text-5xl">
            Order for<br>Delivery
          </h3>

          <p class="mt-5 max-w-lg text-[15px] leading-8 text-[var(--st-text-soft)]">
            The Sacripantina — and everything else in our cases — is available for delivery via DoorDash and Uber Eats. Or come find us at 446 Columbus Ave, every day from 7:30am.
          </p>

          <div class="mt-7 space-y-px">
            <?php
              $order_items = [
                'DoorDash and Uber Eats delivery available',
                'In-store daily 7:30am–8:00pm (Fri & Sat until 11pm)',
                'Outdoor seating · ADA accessible · Dogs welcome',
              ];
              foreach ($order_items as $item) :
            ?>
              <div class="flex items-center gap-3 bg-[var(--st-ivory)] px-5 py-4">
                <span class="shrink-0 block h-1 w-4 bg-[var(--st-gold)]"></span>
                <p class="text-[13px] leading-6 text-[var(--st-text)]"><?php echo esc_html($item); ?></p>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="mt-8">
            <a href="#" class="st-btn-primary">
              <span>Order Now</span>
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 7h12M7 1l6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </article>

        <!-- Catering -->
        <article id="catering"
                 class="st-reveal-right relative overflow-hidden border border-[var(--st-dark)] bg-[var(--st-dark)] p-8 lg:p-12
                        shadow-[0_28px_64px_rgba(18,9,4,0.24)] text-[var(--st-cream)]">

          <!-- Grain on dark card -->
          <div class="st-grain absolute inset-0 opacity-50 pointer-events-none"></div>

          <div class="absolute bottom-0 left-0 h-40 w-40 -translate-x-1/3 translate-y-1/3 rounded-full"
               style="background:radial-gradient(circle,rgba(122,31,46,0.4),transparent 70%)"></div>

          <!-- Corner accent -->
          <div class="absolute top-0 right-0 w-16 h-16 overflow-hidden">
            <div class="absolute top-0 right-0 border-t-[2px] border-r-[2px] border-[var(--st-gold)]/30 w-10 h-10"></div>
          </div>

          <p class="relative text-[9px] font-semibold uppercase tracking-[0.32em] text-[var(--st-gold-soft)]">
            Weddings · Celebrations · Events
          </p>

          <h3 class="relative mt-4 font-[var(--st-font-display)] text-4xl font-semibold italic leading-[0.97] tracking-[-0.04em] text-[var(--st-cream)] sm:text-5xl">
            Catering &<br>Custom Orders
          </h3>

          <p class="relative mt-5 max-w-lg text-[15px] leading-8 text-white/60">
            From a birthday cake to a wedding — Stella has been part of the most important moments of San Francisco families for over eighty years. Let us be part of yours.
          </p>

          <div class="relative mt-7 space-y-px">
            <?php
              $catering_items = [
                'Custom cakes for weddings, birthdays, anniversaries, christenings',
                'Corporate gifting and event catering',
                'Orders: (415) 986-2914',
              ];
              foreach ($catering_items as $item) :
            ?>
              <div class="flex items-center gap-3 border border-white/8 bg-white/5 px-5 py-4">
                <span class="shrink-0 block h-1 w-4 bg-[var(--st-gold)]/60"></span>
                <p class="text-[13px] leading-6 text-white/75"><?php echo esc_html($item); ?></p>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="relative mt-8">
            <a href="#" class="st-btn-ghost-light">Inquire About Catering</a>
          </div>
        </article>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════
       VISIT / ATMOSPHERE
  ═══════════════════════════════════════════ -->
  <section id="visit-us" class="relative overflow-hidden bg-[var(--st-bg)] py-24 lg:py-28">
    <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
      <div class="grid gap-5 lg:grid-cols-[1fr_360px] lg:items-stretch">

        <!-- Images grid -->
        <div class="st-reveal-left grid grid-cols-2 gap-5">
          <div class="relative overflow-hidden border border-[var(--st-border)] shadow-[0_24px_52px_rgba(44,26,14,0.09)]">
            <img src="<?php echo esc_url($storefront_image); ?>"
                 alt="Stella Pastry & Cafe exterior"
                 class="st-parallax-soft h-[280px] w-full object-cover sm:h-[340px]">
            <div class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-400"
                 style="background:linear-gradient(180deg,transparent 40%,rgba(18,9,4,0.55) 100%)"></div>
          </div>
          <div class="relative overflow-hidden border border-[var(--st-border)] shadow-[0_24px_52px_rgba(44,26,14,0.09)]">
            <img src="<?php echo esc_url($display_case_image); ?>"
                 alt="Display cases full of pastries"
                 class="st-parallax-soft h-[280px] w-full object-cover sm:h-[340px]">
            <div class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-400"
                 style="background:linear-gradient(180deg,transparent 40%,rgba(18,9,4,0.55) 100%)"></div>
          </div>
        </div>

        <!-- Info card -->
        <div class="st-reveal-right relative overflow-hidden border border-[var(--st-border)] bg-[var(--st-ivory)] p-8 lg:p-10
                    shadow-[0_24px_52px_rgba(44,26,14,0.07)]">

          <!-- Gold left bar -->
          <div class="absolute left-0 top-0 h-full w-[3px]"
               style="background:linear-gradient(180deg,var(--st-gold),rgba(198,156,60,0.1))"></div>

          <p class="st-section-label">North Beach</p>

          <h3 class="mt-4 font-[var(--st-font-display)] text-3xl font-semibold italic leading-[1.05] tracking-[-0.03em] text-[var(--st-dark)] sm:text-4xl">
            446 Columbus Ave
          </h3>

          <div class="mt-6 space-y-3">
            <?php
              $visit_lines = [
                ['label' => 'Address', 'val' => 'North Beach, San Francisco, CA 94133'],
                ['label' => 'Hours',   'val' => 'Open Daily 7:30 AM – 8:00 PM · Fri & Sat until 11:00 PM'],
                ['label' => 'Phone',   'val' => '(415) 986-2914'],
                ['label' => 'Order',   'val' => 'DoorDash · Uber Eats · In-store pickup'],
              ];
              foreach ($visit_lines as $line) :
            ?>
              <div class="border-b border-[var(--st-border)] pb-3 last:border-0">
                <p class="text-[9px] font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)] mb-1">
                  <?php echo esc_html($line['label']); ?>
                </p>
                <p class="text-[13px] leading-6 text-[var(--st-text-soft)]"><?php echo esc_html($line['val']); ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════
       BRAND QUOTE
  ═══════════════════════════════════════════ -->
  <section id="brand-quote" class="st-quote-section relative overflow-hidden py-24 lg:py-32">

    <!-- Grain -->
    <div class="st-grain absolute inset-0 opacity-40 pointer-events-none"></div>

    <!-- Gold radial top -->
    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse 60% 50% at 50% 0%,rgba(198,156,60,0.07),transparent 55%)"></div>

    <!-- Top rule -->
    <div class="absolute left-0 right-0 top-0 h-px"
         style="background:linear-gradient(90deg,transparent,rgba(198,156,60,0.25),transparent)"></div>

    <!-- Fade to footer at bottom -->
    <div class="absolute inset-x-0 bottom-0 h-24 pointer-events-none"
         style="background:linear-gradient(180deg,transparent,rgba(30,15,7,0.18))"></div>

    <div class="relative mx-auto max-w-[900px] px-4 sm:px-6 lg:px-8">
      <div class="st-reveal-up text-center">

        <div class="inline-flex items-center gap-4 mb-8">
          <div class="h-px w-12 bg-[var(--st-gold)]/35"></div>
          <span class="text-[10px] font-semibold uppercase tracking-[0.35em] text-[var(--st-gold)]">Since 1942</span>
          <div class="h-px w-12 bg-[var(--st-gold)]/35"></div>
        </div>

        <!-- Opening quote mark -->
        <div class="font-[var(--st-font-display)] text-[7rem] leading-none select-none -mb-8"
             style="color:rgba(122,31,46,0.1)">"</div>

        <blockquote class="font-[var(--st-font-display)] text-2xl font-medium italic leading-[1.5] tracking-[-0.02em] text-[var(--st-dark)] sm:text-3xl lg:text-[2.1rem] lg:leading-[1.45]">
          Stella Pastry & Cafe opened its doors on Columbus Avenue in 1942. Since then, it has passed from one Italian family to the next — each one committed to protecting the recipes, preserving the flavors, and never compromising on the craft. Over eighty years later, nothing has changed.
        </blockquote>

        <div class="mt-10 flex items-center justify-center gap-4">
          <div class="h-px w-12 bg-[var(--st-burgundy)]/20"></div>
          <p class="text-[10px] font-semibold uppercase tracking-[0.3em] text-[var(--st-text-soft)]">
            Since 1942 · North Beach, San Francisco · The House of Sacripantina
          </p>
          <div class="h-px w-12 bg-[var(--st-burgundy)]/20"></div>
        </div>

      </div>
    </div>
  </section>

</main>


<!-- ═══════════════════════════════════════════
     STYLES
═══════════════════════════════════════════ -->
<style>
@import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Lato:wght@300;400;700&display=swap");

/* ── Variables ── */
:root {
  --st-dark:              #120904;
  --st-dark-mid:          #1e0f07;
  --st-bg:                #F7F0E0;
  --st-cream:             #F7F0E0;
  --st-ivory:             #F2E7D5;
  --st-burgundy:          #7A1F2E;
  --st-gold:              #C69C3C;
  --st-gold-soft:         #DFC07A;
  --st-text:              #2E1E14;
  --st-text-soft:         rgba(46,30,20,0.72);
  --st-text-on-dark:      rgba(247,240,224,0.80);
  --st-text-on-dark-soft: rgba(247,240,224,0.55);
  --st-border:            rgba(44,26,14,0.11);
  --st-border-soft:       rgba(44,26,14,0.07);
  --st-font-display:      "Playfair Display", "Cormorant Garamond", Georgia, serif;
  --st-font-body:         "Lato", system-ui, sans-serif;
}

/* ── Base ── */
.st-home { font-family: var(--st-font-body); }

/* ── Grain texture ── */
.st-grain {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='1'/%3E%3C/svg%3E");
  background-size: 256px 256px;
  opacity: 0.04;
  mix-blend-mode: overlay;
}

/* ── Vertical lines ── */
.st-vline {
  width: 1px;
  background: linear-gradient(180deg, transparent, rgba(255,255,255,0.12) 20%, rgba(255,255,255,0.12) 80%, transparent);
}

/* ── Hero ── */
.st-hero { min-height: 92vh; display: flex; flex-direction: column; justify-content: flex-end; }

.st-hero-slider { position: absolute; inset: 0; overflow: hidden; }
.st-hero-slide {
  position: absolute; inset: 0;
  background-size: cover; background-position: center;
  opacity: 0; transform: scale(1.07);
  transition: opacity 1.4s ease, transform 8s ease;
}
.st-hero-slide.is-active { opacity: 1; transform: scale(1); }

.st-hero-headline {
  font-size: clamp(3rem, 7vw, 5.5rem);
  font-weight: 600;
  line-height: 0.9;
  letter-spacing: -0.045em;
  font-style: italic;
}
.st-headline-accent {
  color: transparent;
  -webkit-text-stroke: 1.5px rgba(247,240,224,0.6);
  padding-left: 0.08em;
}

@media (max-width: 768px) {
  .st-headline-accent { -webkit-text-stroke: 1px rgba(247,240,224,0.55); }
}

.st-eyebrow-line {
  display: block;
  width: 2.5rem;
  height: 1px;
  background: var(--st-gold);
  opacity: 0.7;
}

/* Hero card */
.st-hero-card {
  border: 1px solid rgba(255,255,255,0.1);
  background: rgba(255,255,255,0.04);
  backdrop-filter: blur(6px);
}

/* ── Counter dots ── */
.st-hero-counter { gap: 10px; }
.st-counter-dot {
  width: 6px; height: 6px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.25);
  background: transparent;
  transition: all 0.4s ease;
}
.st-counter-dot.is-active {
  background: var(--st-gold);
  border-color: var(--st-gold);
  transform: scale(1.3);
}

/* ── Corner marks ── */
.st-corner, .st-corner-dark {
  position: absolute;
  width: 18px; height: 18px;
  z-index: 5;
  pointer-events: none;
}
.st-corner-tl { top: 0; left: 0;    border-top: 1.5px solid rgba(255,255,255,0.2); border-left: 1.5px solid rgba(255,255,255,0.2); }
.st-corner-tr { top: 0; right: 0;   border-top: 1.5px solid rgba(255,255,255,0.2); border-right: 1.5px solid rgba(255,255,255,0.2); }
.st-corner-bl { bottom: 0; left: 0; border-bottom: 1.5px solid rgba(255,255,255,0.2); border-left: 1.5px solid rgba(255,255,255,0.2); }
.st-corner-br { bottom: 0; right: 0;border-bottom: 1.5px solid rgba(255,255,255,0.2); border-right: 1.5px solid rgba(255,255,255,0.2); }
.st-corner-dark.st-corner-tl { border-color: var(--st-gold); opacity: 0.35; }
.st-corner-dark.st-corner-tr { border-top: 1.5px solid var(--st-gold); border-right: 1.5px solid var(--st-gold); opacity: 0.35; top:0; right:0; position:absolute; }

/* ── Section label ── */
.st-section-label {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size: 9px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.3em;
  color: var(--st-burgundy);
}
.st-section-label::before {
  content: '';
  display: block;
  width: 20px;
  height: 1.5px;
  background: var(--st-gold);
}

/* ── Background number ── */
.st-bg-number {
  font-family: var(--st-font-display);
  font-size: clamp(8rem, 14vw, 14rem);
  font-weight: 700;
  font-style: italic;
  color: transparent;
  -webkit-text-stroke: 1px rgba(122,31,46,0.06);
  line-height: 1;
  letter-spacing: -0.06em;
  user-select: none;
}

/* ── Buttons ── */
.st-btn-primary {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 14px 28px;
  background: var(--st-gold);
  color: var(--st-dark);
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.18em;
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 16px 40px rgba(198,156,60,0.25);
  text-decoration: none;
}
.st-btn-primary::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg, transparent 20%, rgba(255,255,255,0.25) 50%, transparent 80%);
  transform: translateX(-130%);
  transition: transform 0.7s ease;
}
.st-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 22px 50px rgba(198,156,60,0.32); }
.st-btn-primary:hover::after { transform: translateX(130%); }

.st-btn-ghost {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 24px;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.05);
  color: var(--st-cream);
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.18em;
  backdrop-filter: blur(8px);
  transition: background 0.3s ease, border-color 0.3s ease;
  text-decoration: none;
}
.st-btn-ghost:hover { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.25); }

.st-btn-ghost-light {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 24px;
  border: 1px solid rgba(198,156,60,0.3);
  background: rgba(198,156,60,0.08);
  color: var(--st-cream);
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.18em;
  transition: background 0.3s ease, border-color 0.3s ease;
  text-decoration: none;
}
.st-btn-ghost-light:hover { background: rgba(198,156,60,0.14); border-color: rgba(198,156,60,0.45); }

/* ── Carousel button ── */
.st-carousel-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 42px; height: 42px;
  border: 1px solid var(--st-border);
  background: white;
  color: var(--st-dark);
  font-size: 18px;
  transition: border-color 0.3s, color 0.3s;
  cursor: pointer;
}
.st-carousel-btn:hover { border-color: var(--st-burgundy); color: var(--st-burgundy); }

/* ── Product card scroll ── */
.st-product-track::-webkit-scrollbar { display: none; }

/* ── Layer number ── */
.st-layer-num {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 26px; height: 26px;
  border: 1px solid var(--st-border);
  background: white;
  font-size: 10px;
  font-weight: 700;
  color: var(--st-dark);
  flex-shrink: 0;
}

/* ── Brand quote section ── */
.st-quote-section {
  /* Tono crema cálido — distinto del footer oscuro pero sin el negro puro */
  background: #EDE3CE;
}

/* ── Quick action tile ── */
.st-qa-tile { display: block; text-decoration: none; }

/* ── Parallax ── */
.st-parallax-soft {
  transition: transform 0.15s linear;
  will-change: transform;
}

/* ── Scroll reveals ── */
.st-reveal-up,
.st-reveal-left,
.st-reveal-right,
.st-reveal-stagger {
  opacity: 0;
  transition: opacity 0.9s cubic-bezier(0.16,1,0.3,1), transform 0.9s cubic-bezier(0.16,1,0.3,1);
  will-change: transform, opacity;
}
.st-reveal-up     { transform: translateY(40px); }
.st-reveal-left   { transform: translateX(-40px); }
.st-reveal-right  { transform: translateX(40px); }
.st-reveal-stagger{ transform: translateY(28px); }
.st-home .is-visible { opacity: 1 !important; transform: translate3d(0,0,0) !important; }

/* ── Responsive ── */
@media (max-width: 1279px) {
  .st-home .xl\:sticky { position: static !important; }
}
@media (max-width: 768px) {
  .st-hero { min-height: 85vh; }
  .st-bg-number { display: none; }
}
@media (prefers-reduced-motion: reduce) {
  .st-reveal-up,.st-reveal-left,.st-reveal-right,.st-reveal-stagger,
  .st-parallax-soft,.st-btn-primary,.st-hero-slide {
    opacity: 1 !important; transform: none !important;
    transition: none !important; animation: none !important;
  }
}
</style>


<!-- ═══════════════════════════════════════════
     SCRIPTS
═══════════════════════════════════════════ -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  /* ── Scroll reveals ── */
  const revealEls = document.querySelectorAll(
    ".st-reveal-up, .st-reveal-left, .st-reveal-right, .st-reveal-stagger"
  );
  if (revealEls.length) {
    const revealObs = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          const delay = entry.target.classList.contains("st-reveal-stagger") ? (i % 5) * 100 : 0;
          setTimeout(() => entry.target.classList.add("is-visible"), delay);
          revealObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.14 });
    revealEls.forEach(el => revealObs.observe(el));
  }

  /* ── Hero slider + counter dots ── */
  const slides = document.querySelectorAll(".st-hero-slide");
  const dots   = document.querySelectorAll(".st-counter-dot");
  if (slides.length > 1) {
    let cur = 0;
    setInterval(() => {
      slides[cur].classList.remove("is-active");
      dots[cur] && dots[cur].classList.remove("is-active");
      cur = (cur + 1) % slides.length;
      slides[cur].classList.add("is-active");
      dots[cur] && dots[cur].classList.add("is-active");
    }, 5500);
  }

  /* ── Product carousel ── */
  const track   = document.querySelector(".st-product-track");
  const prevBtn = document.querySelector(".st-carousel-prev");
  const nextBtn = document.querySelector(".st-carousel-next");
  if (track && prevBtn && nextBtn) {
    const step = () => {
      const card = track.querySelector(".st-product-card");
      return card ? card.getBoundingClientRect().width + 20 : 460;
    };
    prevBtn.addEventListener("click", () => track.scrollBy({ left: -step(), behavior: "smooth" }));
    nextBtn.addEventListener("click", () => track.scrollBy({ left:  step(), behavior: "smooth" }));
  }

  /* ── Parallax ── */
  const pxItems = document.querySelectorAll(".st-parallax-soft");
  let ticking = false;
  const doParallax = () => {
    pxItems.forEach(el => {
      const r = el.getBoundingClientRect();
      if (r.top < window.innerHeight && r.bottom > 0) {
        const move = (window.innerHeight - r.top) * 0.016;
        el.style.transform = `translateY(${Math.max(-10,Math.min(14,move-10))}px) scale(1.012)`;
      }
    });
  };
  window.addEventListener("scroll", () => {
    if (!ticking) {
      requestAnimationFrame(() => { doParallax(); ticking = false; });
      ticking = true;
    }
  }, { passive: true });
  doParallax();

  /* ── Smooth scroll (anchor links) ── */
  document.addEventListener("click", e => {
    const a = e.target.closest('a[href^="#"]');
    if (!a) return;
    const target = document.querySelector(a.getAttribute("href"));
    if (!target) return;
    e.preventDefault();
    const bar = document.getElementById("wpadminbar");
    const offset = (bar ? bar.offsetHeight : 0) + (window.innerWidth >= 1024 ? 100 : 80) + 12;
    window.scrollTo({ top: target.getBoundingClientRect().top + window.pageYOffset - offset, behavior: "smooth" });
  });
});
</script>

<?php get_footer(); ?>