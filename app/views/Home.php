<?php
// Include the 'index.php' file from the 'helpers' directory using ROOT_PATH
require_once(ROOT_PATH . "helpers/index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  // Include the 'Meta.php' template and set the 'title' variable
  include_with_variables(
    ROOT_PATH . 'components/templates/Meta.php',
    ['title' => 'Danny TRAN | Software Developer']
  );
  ?>

  <?php
  // Include the 'CSSLinks.php' template
  include(ROOT_PATH . 'components/templates/CSSLinks.php');
  ?>
</head>

<body>
  <div id="root">
    <?php
    // Include the 'Header.php' template
    include(ROOT_PATH . 'components/templates/Header.php');
    ?>
    <main>
      <?php
      // Include various components for the main content
      include_with_variables(
        ROOT_PATH . 'components/organisms/Hero.php',
        ['data' => $data['customization']['hero']]
      );
      include_with_variables(
        ROOT_PATH . 'components/organisms/About.php',
        ['data' => $data['customization']['about']]
      );
      include(ROOT_PATH . 'components/organisms/Connect.php');
      include(ROOT_PATH . 'components/organisms/Project.php');
      include(ROOT_PATH . 'components/organisms/Contact.php');
      ?>
    </main>
    <?php
    // Include the 'Footer.php' template
    include(ROOT_PATH . 'components/templates/Footer.php');
    ?>
  </div>
  <?php
  // Include the 'JSLinks.php' template
  include(ROOT_PATH . 'components/templates/JSLinks.php');
  ?>
</body>

</html>