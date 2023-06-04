<?php
require_once 'lib/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
$page = 'Home';
include_once 'assets/includes/header.php';
?>

<body>
   <?php
   include_once 'assets/includes/navbar.php';
   include_once 'assets/includes/side_nav.php';
   ?>
   <main id="main" class="main">
      <div class="pagetitle">
         <h1>Dashboard</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
         </nav>
      </div>
      <section class="section dashboard">

      </section>
   </main>

   <?php
   include_once 'assets/includes/footer.php';
   require_once 'assets/includes/scripts.php';

   ?>

</body>

</html>