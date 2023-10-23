<?php
$state = [
  'is_link' => isset($attr['href']),
  'class_name' => implode(
    ' ',
    [
      'button',
      isset($props['appearance']) && $props['appearance'] == 'ghost' ? 'button--appearance-ghost' : '',
      isset($props['size']) && $props['size'] == 'lg' ? 'button--size-lg' : '',
      $attr['class'] ?? ''
    ]
  ),
  'attributes' => encode_attribute($attr ?? []),
  'children' => $props['children'] ?? 'Button',
];

if ($state['is_link']) {
  ?>
  <a class="<?php echo $state['class_name']; ?> <?php echo $state['attributes']; ?>">
    <?php echo $state['children']; ?>
  </a>
  <?php
} else {
  ?>
  <button <?php echo $state['attributes']; ?> class="<?php echo $state['class_name']; ?>">
    <?php echo $state['children']; ?>
  </button>
  <?php
}
?>