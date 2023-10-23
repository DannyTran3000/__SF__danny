<?php
$connect_content = json_decode($connect['content']);

$github_content = json_decode($github['content']);
$github_heading = isset($github_content->heading)
  ? str_replace(
    ['###', '***'],
    ['<span class="social-media__heading-highlight">', '</span>'],
    $github_content->heading
  )
  : '';

$linkedin_content = json_decode($linkedin['content']);
?>

<section id="connect" class="social-media">
  <div class="social-media__odd">
    <div class="social-media__banner">
      <img src="/assets/images/connect.png" alt="Danny Social Media Connect" loading="lazy">
    </div>
    <h2 class="social-media__heading">
      <?php echo $github_heading; ?>
    </h2>
    <p class="social-media__description">
      <?php echo $github_content->description; ?>
    </p>
    <?php
    include_view(
      ROOT_PATH . 'views/components/atoms/Button.php',
      [
        'attr' => [
          'class' => 'social-media__button',
          'href' => $github_content->button->url,
        ],
        'props' => [
          'appearance' => 'ghost',
          'children' => '<img src="/assets/images/github.png" alt="Danny Github Link Icon" class="social-media__button-icon" loading="lazy"><span>' . $github_content->button->text . '</span>',
        ]
      ]
    );
    ?>
  </div>
  <div class="social-media__even">
    <div class="social-media__upper">
      <div class="social-media__upper-banner">
        <img src="/assets/images/connect-1.png" alt="Danny Social Media Connect" loading="lazy">
      </div>
      <div class="social-media__upper-info">
        <h2 class="social-media__heading">
          <?php echo $linkedin_content->heading; ?>
        </h2>
        <p class="social-media__description" style="text-align: left;">
          <?php echo $linkedin_content->description; ?>
        </p>
        <?php
        include_view(
          ROOT_PATH . 'views/components/atoms/Button.php',
          [
            'attr' => [
              'class' => 'social-media__button',
              'href' => $linkedin_content->button->url,
            ],
            'props' => [
              'appearance' => 'ghost',
              'children' => '<img src="/assets/images/linkedin.png" alt="Danny LinkedIn Link Icon" class="social-media__button-icon" loading="lazy"><span>' . $linkedin_content->button->text . '</span>',
            ]
          ]
        );
        ?>
      </div>
    </div>
    <div class="social-media__under">
      <ul class="social-media__stack-list">
        <?php
        // Loop through the $services array and include ServiceCard.php for each service
        foreach ($tech_stacks as $stack) {
          ?>
          <li class="social-media__stack-item">
            <?php include_view(ROOT_PATH . 'views/components/molecules/Stack.php', ['props' => $stack]); ?>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
  <div class="social-media__odd">
    <h2 class="social-media__heading">
      <?php echo $connect_content->heading; ?>
    </h2>
    <?php
    include_view(
      ROOT_PATH . 'views/components/atoms/Button.php',
      [
        'attr' => ['href' => $connect_content->button->url],
        'props' => [
          'size' => 'lg',
          'children' => $connect_content->button->text,
        ]
      ]
    );
    ?>
    <p class="social-media__joke">
      <?php echo $connect_content->joke; ?>
    </p>
  </div>
</section>