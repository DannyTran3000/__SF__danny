<?php
$is_textarea = isset($attr['type']) && $attr['type'] == 'textarea';

$state = [
  'is_required' => $attr['required'] ?? false,
  'is_textarea' => $is_textarea,
  'name' => $attr['name'] ?? '',
  // input
  'class_name' => implode(
    ' ',
    [
      $is_textarea ? 'input__textarea' : 'input__field',
      $attr['class'] ?? ''
    ]
  ),
  'attributes' => encode_attribute($attr ?? []),
  // container
  'container_attributes' => encode_attribute($container_attr ?? []),
  // label
  'label_class_name' => implode(
    ' ',
    [
      'input__label',
      $label_attr['class'] ?? ''
    ]
  ),
  'label_attributes' => encode_attribute($label_attr ?? [])
];
?>

<div <?php echo $state['container_attributes']; ?>>
  <?php
  if (isset($label_props['children'])) {
    ?>
    <label for="<?php echo $state['name']; ?>" class="<?php echo $state['label_class_name']; ?>" <?php echo $state['label_attributes']; ?>>
      <?php
      echo $label_props['children'];

      if ($state['is_required']) {
        ?>
        <span class="input__label-required">*</span>
        <?php
      }
      ?>
    </label>
    <?php
  }

  if (!$state['is_textarea']) {
    ?>
    <input class="<?php echo $state['class_name']; ?>" name="<?php echo $state['name']; ?>" <?php echo $state['attributes']; ?>>
    <?php
  } else {
    ?>
    <textarea name="<?php echo $state['name']; ?>" class="<?php echo $state['class_name']; ?>" <?php echo $state['attributes']; ?>></textarea>
    <?php
  }
  ?>
</div>