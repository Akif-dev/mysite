@php
// ACF fields fetch kar rahe hain
$hero_heading   = get_field('hero_section_heading');      // Text
$hero_paragraph = get_field('hero_section_paragraph');    // Textarea
$hero_image     = get_field('hero_section_image');        // Image Array
@endphp   
   
   <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 content-col" data-aos="fade-up">
            <div class="content">
              <div class="agency-name">
                <h5>OUR AGENCY</h5>
              </div>

              <div class="main-heading">
                <h1>CREATIVE <br>DESIGN</h1>

                @if($hero_heading)
            <h1 class="display-4">{{ $hero_heading }}</h1>
        @endif

              </div>

              <div class="divider"></div>

              <div class="description">
                <p>Discover innovative strategies for impactful visual communication. We transform ideas into compelling realities, ensuring your brand stands out in a crowded marketplace. Our dedicated team leverages cutting-edge techniques to deliver exceptional results that resonate with your audience.</p>
              @if($hero_paragraph)
            <p class="lead mt-3">{{ $hero_paragraph }}</p>
        @endif
            </div>

              <div class="cta-button">
                <a href="#services" class="btn">
                  <span>EXPLORE SERVICES</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-out">
            <div class="visual-content">
              <div class="fluid-shape">

                <img src="@asset('images/abstract/abstract-1.webp')" alt="Abstract Fluid Shape" class="fluid-img">

                 @if($hero_image) 
        style="background-image: url('{{ $hero_image['url'] }}'); background-size: cover; background-position: center;"
    @endif



              </div>

              <div class="stats-card">
                <div class="stats-number">
                  <h2>5K</h2>
                </div>
                <div class="stats-label">
                  <p>Successful Campaigns</p>
                </div>
                <div class="stats-arrow">
                  <a href="#portfolio"><i class="bi bi-arrow-up-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->





