<?php
// Parse JSON data into a PHP object
$content = json_decode($data['content']);
?>

<section id="about" class="service">
  <div class="service__odd">
    <div class="service__container">
      <h2 class="service__heading">
        <?php echo $content->heading; ?>
      </h2>
      <ul class="service__card-list">
        <li class="service__card-item">
          <div class="service-card">
            <div class="service-card__banner">
              <img src="/assets/images/service-software.png" alt="Danny Service - Custom Software Development"
                loading="lazy">
            </div>
            <h5 class="service-card__title">Custom Software Development</h5>
            <p class="service-card__description">
              Tailoring software to your unique needs, ensuring optimal functionality and efficiency.
            </p>
          </div>
        </li>
        <li class="service__card-item">
          <div class="service-card">
            <div class="service-card__banner">
              <img src="/assets/images/service-web-app.png" alt="Danny Service - Web Application Development"
                loading="lazy">
            </div>
            <h5 class="service-card__title">Web Application Development</h5>
            <p class="service-card__description">
              Creating responsive web apps for seamless user experiences across devices.
            </p>
          </div>
        </li>
        <li class="service__card-item">
          <div class="service-card">
            <div class="service-card__banner">
              <img src="/assets/images/service-database.png" alt="Danny Service - Database Management" loading="lazy">
            </div>
            <h5 class="service-card__title">Database Management</h5>
            <p class="service-card__description">
              Efficiently organizing and optimizing databases for data-driven applications.
            </p>
          </div>
        </li>
        <li class="service__card-item">
          <div class="service-card">
            <div class="service-card__banner">
              <img src="/assets/images/service-security.png" alt="Danny Service - Security Enhancement" loading="lazy">
            </div>
            <h5 class="service-card__title">Security Enhancement</h5>
            <p class="service-card__description">
              Strengthening software defenses with robust security measures and continuous monitoring.
            </p>
          </div>
        </li>
        <li class="service__card-item">
          <div class="service-card">
            <div class="service-card__banner">
              <img src="/assets/images/service-api.png" alt="Danny Service - API Integration" loading="lazy">
            </div>
            <h5 class="service-card__title">API Integration</h5>
            <p class="service-card__description">
              Seamlessly integrating third-party APIs to extend software functionality.
            </p>
          </div>
        </li>
        <li class="service__card-item">
          <div class="service-card">
            <div class="service-card__banner">
              <img src="/assets/images/service-code.png" alt="Danny Service - Code Refactoring and Optimization"
                loading="lazy">
            </div>
            <h5 class="service-card__title">Code Refactoring & Optimization</h5>
            <p class="service-card__description">
              Enhancing software performance and maintainability through code refactoring and optimization.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="service__even">
    <div class="service__container">
      <div class="service__banner">
        <img src="/assets/images/service.png" alt="Danny Service Banner" loading="lazy">
      </div>
      <h2 class="service__heading">
        <?php echo $content->sub_heading; ?>
      </h2>
      <p class="service__description">
        <?php echo $content->description; ?>
      </p>
    </div>
  </div>
</section>