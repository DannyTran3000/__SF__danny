<?php
$state = [
  'title' => $props['title'] ?? '',
  'description' => $props['description'],
  'thumbnail' => $props['thumbnail'] ?? '',
  'thumbnail_name' => 'Danny Service - ' . $props['title'] ?? '',
  'class_name' => implode(
    ' ',
    [
      'service-card',
      $attr['class'] ?? ''
    ]
  ),
  'attributes' => encode_attribute($attr ?? [])
];
?>

<div class="<?php echo $state['class_name']; ?>" <?php echo $state['attributes']; ?>>
  <div class="service-card__banner">
    <img src="<?php echo $state['thumbnail']; ?>" alt="<?php echo $state['thumbnail_name']; ?>" loading="lazy">
  </div>
  <h5 class="service-card__title">
    <?php echo $state['title']; ?>
  </h5>
  <p class="service-card__description">
    <?php echo $state['description']; ?>
  </p>
</div>