<!-- //header -->
<!-- header-bottom -->
<div class="header-bottom">
<div class="header-bottom-top">
<ul>
  <li><a href="#" class="g"> </a></li>
  <li><a href="#" class="p"> </a></li>
  <li><a href="#" class="facebook"> </a></li>
  <li><a href="#" class="twitter"> </a></li>
</ul>
</div>
<br>
<br>
<?php
 foreach( $blogs as $blog ){
   echo "<div class='blog-left-grid-left'>
          <h3><a class='img-responsive' alt='' href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."</a></h3>
          <p>". $blog['tanggal']."</p>
          
          <div class='rd-mre'>
            <a href='/blog/" . $blog['blog_ID'] ."' class='hvr-bounce-to-bottom quod'>Read More</a>

          </div>

         </div>
          <br>
        ";
 }
?>
</div>
<!-- //header-bottom -->
</div>
</div>
