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
        <?php
        include_view(
          DIR_APP . 'views/components/atoms/Button.php',
          [
            'attr' => [
              'class' => 'hero__action-button',
              'href' => $content->buttons->primary->url,
            ],
            'props' => [
              'size' => 'lg',
              'children' => $content->buttons->primary->text,
            ]
          ]
        );
        include_view(
          DIR_APP . 'views/components/atoms/Button.php',
          [
            'attr' => [
              'class' => 'hero__action-button',
              'href' => $content->buttons->secondary->url,
            ],
            'props' => [
              'appearance' => 'ghost',
              'size' => 'lg',
              'children' => $content->buttons->secondary->text,
            ]
          ]
        );
        ?>
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