<?php
// Decode JSON customization data into a PHP object
$content = json_decode($about['content']);
?>

<section id="about" class="service">
  <div class="service__odd">
    <div class="service__container">
      <h2 class="service__heading">
        <?php echo $content->heading; ?>
      </h2>
      <ul class="service__card-list">
        <?php
        // Loop through the $services array and include ServiceCard.php for each service
        foreach ($services as $service) {
          ?>
          <li class="service__card-item">
            <?php include_view(DIR_APP . 'views/components/molecules/ServiceCard.php', ['props' => $service]); ?>
          </li>
          <?php
        }
        ?>
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