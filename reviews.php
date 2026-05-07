<?php include "include/header.php" ?>

<!-- ====== PAGE HERO ====== -->
<section class="page-hero"
  style="background-image: url('https://images.unsplash.com/photo-1506863530036-1efeddceb993?q=80&w=2044&auto=format&fit=crop'); background-position: center 50%;">
  <div class="page-hero-overlay"></div>
  <div class="container text-center position-relative z-index-1">
    <h1 class="page-title text-white">Traveler Reviews</h1>
    <p class="page-breadcrumb">
      <a href="index.php" class="text-white">Home</a>
      <i class="fas fa-chevron-right mx-2 text-white" style="font-size: 10px;"></i>
      <span class="text-white opacity-75">What They Say</span>
    </p>
  </div>
</section>

<!-- ====== REVIEWS SUMMARY SECTION ====== -->
<section class="py-5 my-lg-4">
  <div class="container">
    <div class="review-stats">
      <div class="row align-items-center">
        <div class="col-md-4 rating-summary">
          <span class="rating-avg">4.9</span>
          <div class="rating-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="text-muted mb-0">Based on 1,250+ reviews</p>
        </div>
        <div class="col-md-8 pl-md-5">
          <h2 class="block-header mb-3">Trusted by Adventurers Worldwide</h2>
          <p class="story-text mb-0">Our travelers are at the heart of everything we do. Read their stories and discover
            why 98% of our guests recommend Diverse Adventure for their global expeditions.</p>
        </div>
      </div>
    </div>

    <!-- Review Grid -->
    <div class="row">
      <!-- Review 1 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="review-card">
          <div class="reviewer-info">
            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=150&h=150&fit=crop"
              class="reviewer-img" alt="John Smith">
            <div>
              <h4 class="reviewer-name">John Smith</h4>
              <p class="review-location">From London, UK</p>
            </div>
          </div>
          <div class="rating-stars mb-3" style="font-size: 14px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
              class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="review-text">"The Everest Base Camp trek was beyond my wildest dreams. The guides were professional,
            patient, and truly made us feel like family. A life-changing experience!"</p>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="review-card">
          <div class="reviewer-info">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&h=150&fit=crop"
              class="reviewer-img" alt="Sarah Jenkins">
            <div>
              <h4 class="reviewer-name">Sarah Jenkins</h4>
              <p class="review-location">From Sydney, Australia</p>
            </div>
          </div>
          <div class="rating-stars mb-3" style="font-size: 14px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
              class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="review-text">"Bhutan is a magical place, and Diverse Adventure handled every detail perfectly. From
            the dzongs to the Tiger's Nest, it was seamless and breathtaking."</p>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="review-card">
          <div class="reviewer-info">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&h=150&fit=crop"
              class="reviewer-img" alt="David Chen">
            <div>
              <h4 class="reviewer-name">David Chen</h4>
              <p class="review-location">From Toronto, Canada</p>
            </div>
          </div>
          <div class="rating-stars mb-3" style="font-size: 14px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
              class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
          </div>
          <p class="review-text">"Incredible value and even better service. The Tibet tour was deeply spiritual and the
            logistical handling was top-notch. Highly recommended for solo travelers."</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====== REVIEW FORM SECTION ====== -->


<?php include "include/footer.php" ?>