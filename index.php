<!DOCTYPE html>
<?php
get_header() ?>

<div class="container mt-auto" id="About_us">
  <div class="row justify-content-center">
    <h1 class="head mt-5">About us</h1>
  <h3 style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
</div>
</div>

<div class="container mt-5" id="menu">
  <div class="row justify-content-center">
<?php
while(have_posts()) {
  the_post();?>
  <h1 class="head mt-5"><?php the_title();?></h1>
  <?php the_content();?>
  
<?php }
?>
    <h1 class="head mt-5">Menu</h1>
  <img src="<?php bloginfo('template_directory');?>'/assets/img/May2022Menu-1.jpg'; " alt="" class="img-fluid radius-image" />
</div>
</div>

<?php
get_footer() ?>
<!-- Carousel BCK -->


<!-- JavaScript Bundle with Popper -->
?
// $(window).scroll(function () {
//     if ($(this).scrollTop() > 20) {
        //change yes to no
//         $(".navbar").hide(0).delay(1200).fadeIn(1500);
//         $("#serv2").hide(0).delay(1200).fadeIn(1500);
//         $(".btn").hide(0).delay(1200).fadeIn(1500);
// }
//
//   });


//   setTimeout(function(){
// $(".masthead").css(newCss).slideDown(2000);
// }, 800);

</script>

  </body>
</html>
