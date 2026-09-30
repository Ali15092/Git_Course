<?php 
/** @var array $notes */
require 'partials/head.php';
require 'partials/nav.php';
require 'partials/banner.php';
?>

  <!-- Main Content -->
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
                  <?php foreach($notes as $note):?>
         <li> <a href ="/note?id=<?=$note['id']?>" class ="text-blue-500 underline"> <?=$note['body']?></a></li>
        <?php endforeach;?>
                  </ul>

        <p class ="mt-6">

        <a href ='/notes/creat' class ="text-blue-500 underline">creat Note</a>
        </p>
        
    </div>
  </main>
   <?php require'partials/footer.php';?>