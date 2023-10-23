<?php
$state = [
  'title' => $props['title'] ?? '',
  'description' => $props['description'],
  'thumbnail' => $props['status'] != 2 ? $props['thumbnail'] ?? '' : '/assets/upload/coming-soon.jpg',
  'thumbnail_name' => 'Danny Skill - ' . $props['title'] ?? '',
  'status' => $props['status'],
  'class_name' => implode(
    ' ',
    [
      'work-card',
      $attr['class'] ?? ''
    ]
  ),
  'attributes' => encode_attribute($attr ?? [])
];
?>

<div class="<?php echo $state['class_name']; ?>" <?php echo $state['attributes']; ?>>
  <div class="work-card__thumbnail">
    <img src="<?php echo $state['thumbnail']; ?>" alt="<?php echo $state['thumbnail_name']; ?>" loading="lazy">
  </div>
  <h5 class="work-card__title">
    <?php echo $state['title']; ?>
  </h5>
  <p class="work-card__description" title="<?php echo $state['description']; ?>">
    <?php echo $state['description']; ?>
  </p>
  <?php
  if ($state['status'] == 1) {
    ?>
    <a href="<?php echo $data['url']; ?>" class="work-card__link" target="_blank">Check it out</a>
    <?php
  } else {
    ?>
    <span class="work-card__link work-card__link--disabled" target="_blank">Not available</span>
    <?php
  }
  ?>
</div>