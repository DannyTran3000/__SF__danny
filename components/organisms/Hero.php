<?php
// Parse JSON data into a PHP object
$content = json_decode($data['content']);
?>

<section id="start" class="hero">
  <div class="hero__container">
    <div class="hero__content">
      <h4 class="hero__sub-heading">
        <?php echo $content->sub_heading; ?>
      </h4>
      <h1 class="hero__heading">
        <?php echo $content->heading; ?>
      </h1>
      <p class="hero__description">
        <?php echo $content->description; ?>
      </p>
      <div class="hero__action">
        <a href="<?php echo $content->buttons->primary->url; ?>" class="hero__action-button button button--size-lg">
          <?php echo $content->buttons->primary->text; ?>
        </a>
        <a href="<?php echo $content->buttons->secondary->url; ?>"
          class="hero__action-button button button--appearance-ghost button--size-lg">
          <?php echo $content->buttons->secondary->text; ?>
        </a>
      </div>
      <div class="hero__joke">
        <?php echo $content->joke; ?>
      </div>
    </div>
    <div class="hero__banner">
      <img src="/assets/images/hero.png" alt="Danny Hero Banner" loading="lazy">
    </div>
  </div>
</section>