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
    /*
    |--------------------------------------------------------------------------
    | IMAGE PLACEHOLDERS
    |--------------------------------------------------------------------------
    | Reemplazá estas URLs por fotos reales del cliente cuando las tengas.
    | El brief pide fotografía real, cálida, analógica y sin stock.
    */
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
      [
        'title' => 'Order Now',
        'copy'  => 'DoorDash · Uber Eats or visit us',
        'link'  => '#order-delivery',
      ],
      [
        'title' => 'Catering',
        'copy'  => 'Weddings · Events Delivery available',
        'link'  => '#catering',
      ],
      [
        'title' => 'The Sacripantina',
        'copy'  => 'Only here. Since 1942',
        'link'  => '#the-sacripantina',
      ],
      [
        'title' => 'Visit Us',
        'copy'  => 'Open daily 7:30am–8pm 446 Columbus Ave',
        'link'  => '#visit-us',
      ],
    ];

    $products = [
      [
        'title' => 'Sacripantina',
        'badge' => 'Only Here',
        'copy'  => 'Vanilla sponge, zabaione, rum. The cake that only exists here — made the same way since 1942.',
        'price' => 'Slice $8.75 · 8" $57.90',
        'link'  => '#the-sacripantina',
        'image' => $feature_whole_cake,
      ],
      [
        'title' => 'Tiramisu',
        'badge' => 'Best in SF',
        'copy'  => 'Vanilla sponge, espresso, rum, mascarpone. Called the best tiramisu in San Francisco by dozens of customers.',
        'price' => 'Slice $8.75 · 8" $57.90',
        'link'  => '#order-delivery',
        'image' => $plate_espresso_image,
      ],
      [
        'title' => 'Cannoli',
        'badge' => '',
        'copy'  => 'Crisp shell, sweetened ricotta, chocolate chips. Fried fresh. The way a cannoli should be.',
        'price' => '$7.75 each',
        'link'  => '#order-delivery',
        'image' => $display_case_image,
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

  <!-- HERO -->
  <section id="top" class="relative isolate overflow-hidden bg-[var(--st-dark)] text-[var(--st-cream)]">
    <div class="absolute inset-0">
      <div class="st-hero-slider absolute inset-0">
        <?php foreach ($hero_images as $index => $img) : ?>
          <div
            class="st-hero-slide <?php echo $index === 0 ? 'is-active' : ''; ?>"
            style="background-image: url('<?php echo esc_url($img); ?>');"
          ></div>
        <?php endforeach; ?>
      </div>

      <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(25,13,7,0.92)_0%,rgba(25,13,7,0.84)_36%,rgba(25,13,7,0.52)_68%,rgba(25,13,7,0.34)_100%)]"></div>
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(198,156,60,0.16),transparent_38%)]"></div>
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(122,31,46,0.18),transparent_34%)]"></div>
      <div class="absolute inset-y-0 left-[8%] hidden w-px bg-white/15 lg:block"></div>
      <div class="absolute inset-y-0 right-[12%] hidden w-px bg-white/10 xl:block"></div>
    </div>

    <div class="relative mx-auto max-w-[1440px] px-4 pb-16 pt-20 sm:px-6 md:pb-20 md:pt-24 lg:px-8 lg:pb-24 lg:pt-28">
      <div class="grid gap-10 lg:grid-cols-[minmax(0,0.92fr)_minmax(340px,0.68fr)] lg:items-end">
        <div class="max-w-3xl">
          <div class="st-reveal-up inline-flex items-center gap-3 border border-white/15 bg-white/5 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.28em] text-[var(--st-gold-soft)] backdrop-blur-sm">
            <span class="inline-block h-1.5 w-1.5 rounded-full bg-[var(--st-gold)]"></span>
            North Beach, San Francisco · Since 1942
          </div>

          <h1 class="st-reveal-up mt-6 max-w-[11ch] font-[var(--st-font-display)] text-5xl font-semibold italic leading-[0.92] tracking-[-0.04em] text-[var(--st-cream)] sm:text-6xl lg:text-7xl xl:text-[5.7rem]">
            The House of Sacripantina.
          </h1>

          <div class="st-reveal-up mt-7 max-w-2xl space-y-5 text-[15px] leading-7 text-[var(--st-text-on-dark)] sm:text-base sm:leading-8">
            <p class="max-w-[40rem] text-xl font-light leading-8 text-[var(--st-cream)] sm:text-2xl sm:leading-9">
              Some things cannot be found anywhere else in the world. The Sacripantina is one of them.
            </p>

            <p>
              A vanilla sponge soaked in rum, layered with zabaione — that delicate custard of egg yolks, sweet butter, Marsala, and sherry — dusted with fine cake crumbs and shaped into its iconic dome. Light as a whisper. Unforgettable as a memory.
            </p>

            <p>
              It has been made this way, in this corner of North Beach, for over eighty years. Come find it.
            </p>
          </div>

          <div class="st-reveal-up mt-8 flex flex-col gap-4 sm:flex-row">
            <a
              href="#order-delivery"
              class="st-btn st-btn-gold inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold uppercase tracking-[0.16em] text-[var(--st-dark)] transition duration-300 hover:-translate-y-0.5"
            >
              Order Now
            </a>

            <a
              href="#brand-quote"
              class="st-btn st-btn-outline inline-flex items-center justify-center border border-white/18 bg-white/5 px-7 py-3.5 text-sm font-semibold uppercase tracking-[0.16em] text-[var(--st-cream)] backdrop-blur-sm transition duration-300 hover:bg-white/10"
            >
              Our Story
            </a>
          </div>
        </div>

        <div class="st-reveal-right lg:justify-self-end">
          <div class="relative ml-auto max-w-[430px] overflow-hidden border border-white/12 bg-white/6 p-4 backdrop-blur-md sm:p-5">
            <div class="absolute right-0 top-0 h-24 w-24 translate-x-1/3 -translate-y-1/3 rounded-full border border-[var(--st-gold)]/35"></div>
            <div class="absolute bottom-0 left-0 h-28 w-28 -translate-x-1/3 translate-y-1/3 rounded-full bg-[var(--st-burgundy)]/18 blur-2xl"></div>

            <div class="relative overflow-hidden">
              <img
                src="<?php echo esc_url($feature_whole_cake); ?>"
                alt="Sacripantina whole cake"
                class="st-parallax-soft h-[420px] w-full object-cover sm:h-[500px]"
              >
            </div>

            <div class="relative mt-4 grid grid-cols-2 gap-3 text-[11px] uppercase tracking-[0.16em] text-[var(--st-text-on-dark-soft)]">
              <div class="border border-white/10 bg-black/15 px-3 py-3">Warm, analog, real</div>
              <div class="border border-white/10 bg-black/15 px-3 py-3 text-right">Only here</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- QUICK ACTIONS -->
  <section class="relative z-10 -mt-px border-b border-[var(--st-border-soft)] bg-[var(--st-cream)]">
    <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
      <div class="grid gap-px overflow-hidden border-x border-[var(--st-border)] bg-[var(--st-border)] md:grid-cols-2 xl:grid-cols-4">
        <?php foreach ($quick_actions as $item) : ?>
          <a
            href="<?php echo esc_url($item['link']); ?>"
            class="st-reveal-stagger group relative bg-[var(--st-cream)] px-5 py-6 transition duration-300 hover:bg-[var(--st-ivory)]"
          >
            <span class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[var(--st-gold)] transition duration-300 group-hover:scale-y-100"></span>
            <div class="flex items-start justify-between gap-4">
              <div>
                <p class="font-[var(--st-font-display)] text-2xl italic leading-none tracking-[-0.03em] text-[var(--st-dark)]">
                  <?php echo esc_html($item['title']); ?>
                </p>
                <p class="mt-3 max-w-[19rem] text-sm leading-6 text-[var(--st-text-soft)]">
                  <?php echo esc_html($item['copy']); ?>
                </p>
              </div>
              <span class="mt-1 text-lg text-[var(--st-burgundy)] transition duration-300 group-hover:translate-x-1">↗</span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section id="from-our-cases" class="relative overflow-hidden bg-[var(--st-ivory)] py-20 lg:py-24">
    <div class="absolute left-0 top-0 h-px w-full bg-[linear-gradient(90deg,transparent,rgba(122,31,46,0.18),transparent)]"></div>

    <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
      <div class="grid gap-10 xl:grid-cols-[320px_minmax(0,1fr)] xl:items-start">
        <div class="st-reveal-left xl:sticky xl:top-24">
          <p class="text-xs font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">
            From Our Cases
          </p>

          <h2 class="mt-4 max-w-[10ch] font-[var(--st-font-display)] text-4xl font-semibold italic leading-[0.98] tracking-[-0.04em] text-[var(--st-dark)] sm:text-5xl">
            Made Fresh. Every Morning.
          </h2>

          <p class="mt-5 max-w-sm text-[15px] leading-7 text-[var(--st-text-soft)]">
            Three signatures from the case, anchored by the one thing that only exists here.
          </p>

          <div class="mt-8 hidden items-center gap-3 xl:flex">
            <button
              type="button"
              class="st-carousel-prev inline-flex h-11 w-11 items-center justify-center border border-[var(--st-border)] bg-white text-xl text-[var(--st-dark)] transition duration-300 hover:border-[var(--st-burgundy)] hover:text-[var(--st-burgundy)]"
              aria-label="Previous product"
            >
              ←
            </button>
            <button
              type="button"
              class="st-carousel-next inline-flex h-11 w-11 items-center justify-center border border-[var(--st-border)] bg-white text-xl text-[var(--st-dark)] transition duration-300 hover:border-[var(--st-burgundy)] hover:text-[var(--st-burgundy)]"
              aria-label="Next product"
            >
              →
            </button>
          </div>
        </div>

        <div class="relative">
          <div class="st-product-track flex gap-5 overflow-x-auto pb-2 [scrollbar-width:none] xl:overflow-hidden">
            <?php foreach ($products as $product) : ?>
              <article class="st-reveal-stagger st-product-card group min-w-[86%] border border-[var(--st-border)] bg-white p-4 shadow-[0_22px_50px_rgba(44,26,14,0.08)] sm:min-w-[420px] md:min-w-[470px]">
                <div class="relative overflow-hidden">
                  <img
                    src="<?php echo esc_url($product['image']); ?>"
                    alt="<?php echo esc_attr($product['title']); ?>"
                    class="st-parallax-soft h-[300px] w-full object-cover transition duration-700 group-hover:scale-[1.03] sm:h-[360px]"
                  >

                  <div class="absolute inset-0 bg-[linear-gradient(180deg,transparent_42%,rgba(44,26,14,0.10)_100%)] opacity-0 transition duration-500 group-hover:opacity-100"></div>

                  <?php if (!empty($product['badge'])) : ?>
                    <span class="absolute left-4 top-4 inline-flex items-center bg-[var(--st-burgundy)] px-3 py-1.5 text-[10px] font-semibold uppercase tracking-[0.18em] text-white shadow-[0_12px_24px_rgba(122,31,46,0.24)]">
                      <?php echo esc_html($product['badge']); ?>
                    </span>
                  <?php endif; ?>

                  <div class="absolute right-4 top-4 h-12 w-12 rounded-full border border-white/20 bg-white/10 opacity-0 backdrop-blur-md transition duration-500 group-hover:opacity-100"></div>
                </div>

                <div class="mt-5">
                  <h3 class="font-[var(--st-font-display)] text-3xl italic tracking-[-0.03em] text-[var(--st-dark)]">
                    <?php echo esc_html($product['title']); ?>
                  </h3>

                  <p class="mt-4 min-h-[96px] text-[15px] leading-7 text-[var(--st-text-soft)]">
                    <?php echo esc_html($product['copy']); ?>
                  </p>

                  <div class="mt-5 relative overflow-hidden border border-[rgba(122,31,46,0.14)] bg-[linear-gradient(135deg,rgba(247,240,224,0.95)_0%,rgba(255,255,255,1)_100%)] px-4 py-4 shadow-[0_16px_36px_rgba(44,26,14,0.06)] transition duration-300 group-hover:-translate-y-1 group-hover:shadow-[0_22px_44px_rgba(44,26,14,0.10)]">
                    <div class="absolute left-0 top-0 h-full w-1 bg-[linear-gradient(180deg,var(--st-gold),rgba(198,156,60,0.14))]"></div>
                    <div class="absolute right-0 top-0 h-px w-28 bg-[linear-gradient(90deg,transparent,rgba(122,31,46,0.25))]"></div>

                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                      <div>
                        <p class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[var(--st-burgundy)]">
                          Price
                        </p>
                        <p class="mt-2 text-sm font-semibold uppercase tracking-[0.08em] text-[var(--st-dark)]">
                          <?php echo esc_html($product['price']); ?>
                        </p>
                      </div>

                      <a
                        href="<?php echo esc_url($product['link']); ?>"
                        class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.16em] text-[var(--st-burgundy)] transition duration-300 hover:gap-3"
                      >
                        Discover
                        <span aria-hidden="true">→</span>
                      </a>
                    </div>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SACRIPANTINA FEATURE -->
  <section id="the-sacripantina" class="relative overflow-hidden bg-[var(--st-bg)] py-20 lg:py-28">
    <div class="absolute inset-y-0 left-0 hidden w-[28%] bg-[var(--st-dark)] lg:block"></div>

    <div class="relative mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
      <div class="grid gap-8 lg:grid-cols-[minmax(0,0.95fr)_minmax(0,1.05fr)] lg:items-center">
        <div class="st-reveal-left relative lg:pr-10">
          <div class="relative overflow-hidden border border-white/10 bg-[var(--st-dark)] p-4 shadow-[0_32px_60px_rgba(44,26,14,0.18)] sm:p-5">
            <img
              src="<?php echo esc_url($feature_whole_cake); ?>"
              alt="The Sacripantina whole cake"
              class="st-parallax-soft h-[350px] w-full object-cover sm:h-[440px] lg:h-[500px]"
            >

            <div class="absolute bottom-4 left-4 right-4 grid gap-px overflow-hidden border border-white/10 bg-white/10 sm:grid-cols-2">
              <div class="bg-[rgba(247,240,224,0.92)] px-4 py-4">
                <p class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[var(--st-burgundy)]">
                  Whole cake
                </p>
                <p class="mt-1 text-sm leading-6 text-[var(--st-dark)]">
                  Full dome on marble, warm light, no filters.
                </p>
              </div>
              <div class="bg-[rgba(247,240,224,0.82)] px-4 py-4">
                <p class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[var(--st-burgundy)]">
                  Cross-section
                </p>
                <p class="mt-1 text-sm leading-6 text-[var(--st-dark)]">
                  Slice showing the zabaione layers and soaked sponge.
                </p>
              </div>
            </div>
          </div>

          <div class="st-reveal-up relative z-10 mx-auto -mt-10 w-[86%] border border-[var(--st-border)] bg-[var(--st-ivory)] p-4 shadow-[0_18px_40px_rgba(44,26,14,0.1)] sm:p-5">
            <div class="flex items-center justify-between gap-4 border-b border-[var(--st-border)] pb-3">
              <p class="text-[10px] font-semibold uppercase tracking-[0.24em] text-[var(--st-burgundy)]">
                Layer breakdown
              </p>
              <span class="h-px flex-1 bg-[var(--st-border)]"></span>
            </div>

            <div class="mt-4 space-y-3">
              <?php foreach ($layer_labels as $index => $label) : ?>
                <div class="flex items-center gap-3">
                  <span class="inline-flex h-7 w-7 items-center justify-center border border-[var(--st-border)] bg-white text-[11px] font-semibold text-[var(--st-dark)]">
                    <?php echo esc_html($index + 1); ?>
                  </span>
                  <p class="text-sm leading-6 text-[var(--st-text)]">
                    <?php echo esc_html($label); ?>
                  </p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="st-reveal-right">
          <div class="max-w-2xl">
            <p class="text-xs font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">
              Our Signature
            </p>

            <h2 class="mt-4 font-[var(--st-font-display)] text-4xl font-semibold italic leading-[0.96] tracking-[-0.04em] text-[var(--st-dark)] sm:text-5xl lg:text-6xl">
              The Sacripantina.
            </h2>

            <p class="mt-4 font-[var(--st-font-display)] text-2xl italic text-[var(--st-burgundy)]">
              Only here. Since 1942.
            </p>

            <div class="mt-6 space-y-5 text-[15px] leading-8 text-[var(--st-text-soft)] sm:text-base">
              <p>
                There is no other cake like this. Vanilla sponge soaked in rum, layered with zabaione — egg yolks, sweet butter, Marsala, sherry — finished with a dusting of fine crumbs. Light as a whisper. It cannot be explained. It can only be tasted.
              </p>
            </div>

            <div class="mt-8 grid gap-px overflow-hidden border border-[var(--st-border)] bg-[var(--st-border)] sm:grid-cols-3">
              <div class="bg-white px-5 py-5">
                <p class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[var(--st-burgundy)]">Slice</p>
                <p class="mt-2 text-lg text-[var(--st-dark)]">$8.75</p>
              </div>
              <div class="bg-white px-5 py-5">
                <p class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[var(--st-burgundy)]">6" Cake</p>
                <p class="mt-2 text-lg text-[var(--st-dark)]">$45.00</p>
              </div>
              <div class="bg-white px-5 py-5">
                <p class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[var(--st-burgundy)]">8" Cake</p>
                <p class="mt-2 text-lg text-[var(--st-dark)]">$57.90</p>
              </div>
            </div>

            <div class="mt-8">
              <a
                href="#order-delivery"
                class="st-btn st-btn-gold inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold uppercase tracking-[0.16em] text-[var(--st-dark)] transition duration-300 hover:-translate-y-0.5"
              >
                Order the Sacripantina
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ORDER + CATERING -->
  <section class="relative overflow-hidden bg-[var(--st-cream)] py-20 lg:py-24">
    <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
      <div class="grid gap-6 xl:grid-cols-2">
        <article id="order-delivery" class="st-reveal-left relative overflow-hidden border border-[var(--st-border)] bg-white p-6 shadow-[0_24px_50px_rgba(44,26,14,0.07)] sm:p-8 lg:p-10">
          <div class="absolute right-0 top-0 h-28 w-28 translate-x-1/3 -translate-y-1/3 rounded-full bg-[var(--st-gold)]/14 blur-2xl"></div>

          <p class="text-xs font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">
            Available Now
          </p>

          <h3 class="mt-4 max-w-[10ch] font-[var(--st-font-display)] text-4xl font-semibold italic leading-[0.98] tracking-[-0.04em] text-[var(--st-dark)] sm:text-5xl">
            Order for Delivery
          </h3>

          <p class="mt-5 max-w-2xl text-[15px] leading-8 text-[var(--st-text-soft)] sm:text-base">
            The Sacripantina — and everything else in our cases — is available for delivery via DoorDash and Uber Eats. Or come find us at 446 Columbus Ave, every day from 7:30am.
          </p>

          <div class="mt-7 grid gap-px overflow-hidden border border-[var(--st-border)] bg-[var(--st-border)]">
            <div class="bg-[var(--st-ivory)] px-5 py-4 text-sm leading-7 text-[var(--st-text)]">
              DoorDash and Uber Eats delivery available
            </div>
            <div class="bg-[var(--st-ivory)] px-5 py-4 text-sm leading-7 text-[var(--st-text)]">
              In-store daily 7:30am–8:00pm (Fri & Sat until 11pm)
            </div>
            <div class="bg-[var(--st-ivory)] px-5 py-4 text-sm leading-7 text-[var(--st-text)]">
              Outdoor seating · ADA accessible · Dogs welcome
            </div>
          </div>

          <div class="mt-8 flex flex-wrap gap-4">
            <a
              href="#"
              class="st-btn st-btn-gold inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold uppercase tracking-[0.16em] text-[var(--st-dark)] transition duration-300 hover:-translate-y-0.5"
            >
              Order Now
            </a>
          </div>
        </article>

        <article id="catering" class="st-reveal-right relative overflow-hidden border border-[var(--st-border)] bg-[var(--st-dark)] p-6 text-[var(--st-cream)] shadow-[0_26px_60px_rgba(44,26,14,0.16)] sm:p-8 lg:p-10">
          <div class="absolute bottom-0 left-0 h-36 w-36 -translate-x-1/3 translate-y-1/3 rounded-full bg-[var(--st-burgundy)]/25 blur-3xl"></div>

          <p class="text-xs font-semibold uppercase tracking-[0.28em] text-[var(--st-gold-soft)]">
            Weddings · Celebrations · Events
          </p>

          <h3 class="mt-4 max-w-[12ch] font-[var(--st-font-display)] text-4xl font-semibold italic leading-[0.98] tracking-[-0.04em] text-[var(--st-cream)] sm:text-5xl">
            Catering & Custom Orders
          </h3>

          <p class="mt-5 max-w-2xl text-[15px] leading-8 text-[var(--st-text-on-dark)] sm:text-base">
            From a birthday cake to a wedding — Stella has been part of the most important moments of San Francisco families for over eighty years. Let us be part of yours.
          </p>

          <div class="mt-7 grid gap-3">
            <div class="border border-white/10 bg-white/5 px-5 py-4 text-sm leading-7 text-[var(--st-cream)]/90">
              Custom cakes for weddings, birthdays, anniversaries, christenings
            </div>
            <div class="border border-white/10 bg-white/5 px-5 py-4 text-sm leading-7 text-[var(--st-cream)]/90">
              Corporate gifting and event catering
            </div>
            <div class="border border-white/10 bg-white/5 px-5 py-4 text-sm leading-7 text-[var(--st-cream)]/90">
              Orders: (415) 986-2914
            </div>
          </div>

          <div class="mt-8">
            <a
              href="#"
              class="inline-flex items-center justify-center border border-[var(--st-gold)]/40 bg-[var(--st-gold)]/12 px-7 py-3.5 text-sm font-semibold uppercase tracking-[0.16em] text-[var(--st-cream)] transition duration-300 hover:bg-[var(--st-gold)]/18"
            >
              Inquire About Catering
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- VISIT / ATMOSPHERE -->
  <section id="visit-us" class="relative overflow-hidden bg-[var(--st-bg)] py-20 lg:py-24">
    <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
      <div class="grid gap-6 lg:grid-cols-[minmax(0,1.05fr)_minmax(320px,0.78fr)] lg:items-stretch">
        <div class="st-reveal-left grid gap-6 md:grid-cols-2">
          <div class="overflow-hidden border border-[var(--st-border)] bg-white shadow-[0_22px_48px_rgba(44,26,14,0.08)]">
            <img
              src="<?php echo esc_url($storefront_image); ?>"
              alt="Stella Pastry & Cafe exterior"
              class="st-parallax-soft h-[320px] w-full object-cover"
            >
          </div>

          <div class="overflow-hidden border border-[var(--st-border)] bg-white shadow-[0_22px_48px_rgba(44,26,14,0.08)]">
            <img
              src="<?php echo esc_url($display_case_image); ?>"
              alt="Display cases full of pastries"
              class="st-parallax-soft h-[320px] w-full object-cover"
            >
          </div>
        </div>

        <div class="st-reveal-right border border-[var(--st-border)] bg-[var(--st-ivory)] p-6 sm:p-8 lg:p-10">
          <p class="text-xs font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">
            North Beach
          </p>

          <h3 class="mt-4 font-[var(--st-font-display)] text-4xl font-semibold italic leading-[0.98] tracking-[-0.04em] text-[var(--st-dark)] sm:text-5xl">
            446 Columbus Ave
          </h3>

          <div class="mt-6 space-y-4 text-[15px] leading-8 text-[var(--st-text-soft)] sm:text-base">
            <p>North Beach, San Francisco, CA 94133</p>
            <p>Open Daily 7:30 AM – 8:00 PM · Fri & Sat until 11:00 PM</p>
            <p>(415) 986-2914</p>
            <p>DoorDash · Uber Eats · In-store pickup</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BRAND QUOTE / CLOSING PANEL -->
  <section id="brand-quote" class="relative overflow-hidden bg-[var(--st-ivory)] py-20 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(198,156,60,0.10),transparent_38%)]"></div>
    <div class="absolute inset-x-0 bottom-0 h-24 bg-[linear-gradient(180deg,transparent,rgba(44,26,14,0.05))]"></div>

    <div class="relative mx-auto max-w-[1100px] px-4 sm:px-6 lg:px-8">
      <div class="st-reveal-up relative overflow-hidden border border-[rgba(122,31,46,0.18)] bg-[rgba(247,240,224,0.88)] px-6 py-12 shadow-[0_24px_60px_rgba(44,26,14,0.08)] sm:px-10 lg:px-14 lg:py-16">
        <div class="absolute left-0 top-0 h-full w-1 bg-[linear-gradient(180deg,var(--st-gold),rgba(198,156,60,0.2))]"></div>
        <div class="absolute right-0 top-0 h-px w-40 bg-[linear-gradient(90deg,transparent,rgba(122,31,46,0.35))]"></div>
        <div class="absolute bottom-0 left-0 h-px w-40 bg-[linear-gradient(90deg,rgba(122,31,46,0.35),transparent)]"></div>

        <div class="mx-auto max-w-[860px] text-center">
          <p class="mb-5 text-[11px] font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">
            Since 1942
          </p>

          <div class="mx-auto mb-6 h-px w-24 bg-[var(--st-gold)]/55"></div>

          <blockquote class="font-[var(--st-font-display)] text-3xl font-medium italic leading-[1.38] tracking-[-0.03em] text-[var(--st-dark)] sm:text-4xl lg:text-[2.75rem]">
            “Stella Pastry & Cafe opened its doors on Columbus Avenue in 1942. Since then, it has passed from one Italian family to the next — each one committed to protecting the recipes, preserving the flavors, and never compromising on the craft. Over eighty years later, nothing has changed.”
          </blockquote>

          <p class="mt-8 text-xs font-semibold uppercase tracking-[0.28em] text-[var(--st-burgundy)]">
            North Beach, San Francisco · The House of Sacripantina
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Lato:wght@300;400;700&display=swap");

  :root {
    --st-dark:                #2C1A0E;
    --st-bg:                  #F7F0E0;
    --st-cream:               #F7F0E0;
    --st-ivory:               #F4EADB;
    --st-burgundy:            #7A1F2E;
    --st-gold:                #C69C3C;
    --st-gold-soft:           #E2C985;

    --st-text:                #2E1E14;
    --st-text-soft:           rgba(46, 30, 20, 0.78);
    --st-text-on-dark:        rgba(247, 240, 224, 0.82);
    --st-text-on-dark-soft:   rgba(247, 240, 224, 0.62);

    --st-border:              rgba(44, 26, 14, 0.12);
    --st-border-soft:         rgba(44, 26, 14, 0.08);

    --st-font-display:        "Playfair Display", serif;
    --st-font-body:           "Lato", sans-serif;
  }

  .st-home {
    font-family: var(--st-font-body);
  }

  .st-hero-slider {
    position: absolute;
    inset: 0;
    overflow: hidden;
  }

  .st-hero-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transform: scale(1.06);
    transition: opacity 1.2s ease, transform 7s ease;
  }

  .st-hero-slide.is-active {
    opacity: 1;
    transform: scale(1);
  }

  .st-home .st-btn {
    position: relative;
    overflow: hidden;
  }

  .st-home .st-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, transparent 15%, rgba(255,255,255,0.22) 50%, transparent 85%);
    transform: translateX(-120%);
    transition: transform 0.75s ease;
    pointer-events: none;
  }

  .st-home .st-btn:hover::after {
    transform: translateX(120%);
  }

  .st-home .st-btn-gold {
    background: var(--st-gold);
    box-shadow: 0 18px 36px rgba(198, 156, 60, 0.22);
  }

  .st-home .st-btn-outline {
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
  }

  .st-home .st-product-track::-webkit-scrollbar {
    display: none;
  }

  .st-home .st-product-card {
    transition: transform 0.45s ease, box-shadow 0.45s ease, border-color 0.45s ease;
    will-change: transform;
  }

  .st-home .st-product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 28px 60px rgba(44, 26, 14, 0.12);
    border-color: rgba(122, 31, 46, 0.2);
  }

  .st-home .st-parallax-soft {
    transition: transform 0.2s linear;
    will-change: transform;
  }

  .st-home .st-reveal-up,
  .st-home .st-reveal-left,
  .st-home .st-reveal-right,
  .st-home .st-reveal-stagger {
    opacity: 0;
    transition: opacity 0.8s ease, transform 0.8s ease;
    will-change: transform, opacity;
  }

  .st-home .st-reveal-up {
    transform: translateY(34px);
  }

  .st-home .st-reveal-left {
    transform: translateX(-34px);
  }

  .st-home .st-reveal-right {
    transform: translateX(34px);
  }

  .st-home .st-reveal-stagger {
    transform: translateY(24px);
  }

  .st-home .is-visible {
    opacity: 1 !important;
    transform: translate3d(0,0,0) !important;
  }

  @media (max-width: 1279px) {
    .st-home .xl\:sticky {
      position: static !important;
      top: auto !important;
    }
  }

  @media (max-width: 768px) {
    .st-home br {
      display: none;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .st-home .st-reveal-up,
    .st-home .st-reveal-left,
    .st-home .st-reveal-right,
    .st-home .st-reveal-stagger,
    .st-home .st-parallax-soft,
    .st-home .st-product-card,
    .st-home .st-btn,
    .st-home .st-hero-slide {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const revealItems = document.querySelectorAll(
      ".st-reveal-up, .st-reveal-left, .st-reveal-right, .st-reveal-stagger"
    )

    if (revealItems.length) {
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            const delay = entry.target.classList.contains("st-reveal-stagger") ? (index % 6) * 90 : 0
            setTimeout(() => entry.target.classList.add("is-visible"), delay)
            revealObserver.unobserve(entry.target)
          }
        })
      }, { threshold: 0.16 })

      revealItems.forEach((item) => revealObserver.observe(item))
    }

    const heroSlides = document.querySelectorAll(".st-hero-slide")

    if (heroSlides.length > 1) {
      let currentSlide = 0

      setInterval(() => {
        heroSlides[currentSlide].classList.remove("is-active")
        currentSlide = (currentSlide + 1) % heroSlides.length
        heroSlides[currentSlide].classList.add("is-active")
      }, 5000)
    }

    const track = document.querySelector(".st-product-track")
    const prevBtn = document.querySelector(".st-carousel-prev")
    const nextBtn = document.querySelector(".st-carousel-next")

    if (track && prevBtn && nextBtn) {
      const getStep = () => {
        const firstCard = track.querySelector(".st-product-card")
        return firstCard ? firstCard.getBoundingClientRect().width + 20 : 420
      }

      prevBtn.addEventListener("click", () => {
        track.scrollBy({ left: -getStep(), behavior: "smooth" })
      })

      nextBtn.addEventListener("click", () => {
        track.scrollBy({ left: getStep(), behavior: "smooth" })
      })
    }

    const parallaxItems = document.querySelectorAll(".st-parallax-soft")

    const handleParallax = () => {
      parallaxItems.forEach((item) => {
        const rect = item.getBoundingClientRect()

        if (rect.top < window.innerHeight && rect.bottom > 0) {
          const move = (window.innerHeight - rect.top) * 0.018
          item.style.transform = `translateY(${Math.max(-8, Math.min(14, move - 10))}px) scale(1.015)`
        }
      })
    }

    let ticking = false
    window.addEventListener("scroll", () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          handleParallax()
          ticking = false
        })
        ticking = true
      }
    }, { passive: true })

    handleParallax()
  })
</script>

<?php get_footer(); ?>