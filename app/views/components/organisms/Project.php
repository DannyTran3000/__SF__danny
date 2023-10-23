<?php
// Decode JSON customization data into a PHP object
$content = json_decode($project['content']);
?>

<section id="project" class="project">
  <div class="project__upper">
    <div class="project__upper-info">
      <h2 class="project__heading">
        <?php echo $content->heading; ?>
      </h2>
      <p class="project__description" style="text-align: left;">
        <?php echo $content->description; ?>
      </p>
      <?php
      include_view(
        ROOT_PATH . 'views/components/atoms/Button.php',
        [
          'attr' => [
            'class' => 'project__button',
            'href' => $content->button->url
          ],
          'props' => [
            'appearance' => 'ghost',
            'children' => $content->button->text,
          ]
        ]
      );
      ?>
    </div>
    <div class="project__upper-banner">
      <img src="/assets/images/project.png" alt="Danny Projects" loading="lazy">
    </div>
  </div>
  <div class="project__under">
    <ul class="project__work-list">
      <?php
      // Loop through the $services array and include ServiceCard.php for each service
      foreach ($featured_works as $work) {
        ?>
        <li class="project__work-item">
          <?php include_view(ROOT_PATH . 'views/components/molecules/WorkCard.php', ['props' => $work]); ?>
        </li>
        <?php
      }
      ?>
    </ul>
  </div>
</section>