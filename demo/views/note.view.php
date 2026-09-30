<?php 
/** @var array $note */
require 'partials/head.php';
require 'partials/nav.php';
require 'partials/banner.php';
?>

  <!-- Main Content -->
  <main>
    <div>
      <a href="/notes" class="text-blue-500 underline">go back...</a>
      <p><?= $note['body'] ?>
      </p>
    </div>
  </main>
   <?php require'partials/footer.php';?>