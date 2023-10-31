<?php
// Include the 'index.php' file from the 'helpers' directory using DIR
require_once(DIR_APP . "helper.php");

$customization = $data['customization'];
$featured_works = $data['featured_works'];
$services = $data['services'];
$tech_stacks = $data['tech_stacks'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  // Include the 'Meta.php' template and set the 'title' variable
  include_view(
    DIR_APP . 'views/components/templates/Meta.php',
    ['title' => 'Danny TRAN | Software Developer']
  );
  ?>

  <?php
  // Include the 'CSSLinks.php' template
  include(DIR_APP . 'views/components/templates/CSSLinks.php');
  ?>
</head>

<body>
  <div id="root">
    <?php
    // Include the 'Header.php' template
    include(DIR_APP . 'views/components/templates/Header.php');
    ?>
    <main>
      <?php
      // Include various components for the main content
      include_view(
        DIR_APP . 'views/components/organisms/Hero.php',
        ['data' => $customization['hero']]
      );
      include_view(
        DIR_APP . 'views/components/organisms/About.php',
        [
          'about' => $customization['about'],
          'services' => $services
        ]
      );
      include_view(
        DIR_APP . 'views/components/organisms/Connect.php',
        [
          'connect' => $customization['connect'],
          'github' => $customization['github'],
          'linkedin' => $customization['linkedin'],
          'tech_stacks' => $tech_stacks
        ]
      );
      include_view(
        DIR_APP . 'views/components/organisms/Project.php',
        [
          'project' => $customization['project'],
          'featured_works' => $featured_works
        ]
      );
      include_view(
        DIR_APP . 'views/components/organisms/Contact.php',
        ['contact' => $customization['contact']]
      );
      ?>
    </main>
    <?php
    // Include the 'Footer.php' template
    include(DIR_APP . 'views/components/templates/Footer.php');
    ?>
    <div id="loader"></div>
  </div>
  <?php
  // Include the 'JSLinks.php' template
  include(DIR_APP . 'views/components/templates/JSLinks.php');
  ?>
</body>

</html>