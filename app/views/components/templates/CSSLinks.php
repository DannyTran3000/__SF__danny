<?php
$original_links = [
  // Primary
  'fonts' => '/assets/styles/templates/fonts.css',
  'animation' => '/assets/styles/templates/animation.css',
  // Atoms
  'button' => '/assets/styles/atoms/button/index.css',
  // Molecules
  'loader' => '/assets/styles/molecules/loader/index.css',
  'serviceCard' => '/assets/styles/molecules/serviceCard/index.css',
  'stack' => '/assets/styles/molecules/stack/index.css',
  'workCard' => '/assets/styles/molecules/workCard/index.css',
  'input' => '/assets/styles/molecules/input/index.css',
  // organisms
  'header' => '/assets/styles/organisms/header/index.css',
  'hero' => '/assets/styles/organisms/hero/index.css',
  'service' => '/assets/styles/organisms/service/index.css',
  'socialMedia' => '/assets/styles/organisms/socialMedia/index.css',
  'project' => '/assets/styles/organisms/project/index.css',
  'contact' => '/assets/styles/organisms/contact/index.css',
  'footer' => '/assets/styles/organisms/footer/index.css',
  // templates
  'global' => '/assets/styles/templates/index.css',
];

$links = $original_links;

if (isset($props['include']) && is_array($props['include'])) {
  $links = [];
  foreach ($original_links as $key => $value) {
    if (in_array($key, $props['include'])) {
      $links[$key] = $value;
    }
  }
}

if (isset($props['exclude']) && is_array($props['exclude'])) {
  $tmp_links = [];
  foreach ($links as $key => $value) {
    if (!in_array($key, $props['exclude'])) {
      $tmp_links[$key] = $value;
    }
  }
  $links = $tmp_links;
}

foreach ($links as $link) {
  ?>
  <link rel="stylesheet" href="<?php echo $link; ?>">
  <?php
}