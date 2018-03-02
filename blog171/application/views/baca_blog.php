<div class="single-page-artical">
  <div class="artical-content">
    <h3><?= $blog['judul'] ?></h3>
    
    <p>
      <?php
          $cara = str_replace("\n","<br>",$blog['isi']);
          echo $cara;
       ?>
    </p>
    <div class="artical-links">
			<ul>
				<li><small> </small><span><?= $blog['tanggal'] ?></span></li>
				<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
			</ul>
		</div>
    <?php
      if(($this->session->uid)==$blog['user_ID']){
        echo "
              <h3>
                <a class='delete'  href='/blog/delete/".$blog['blog_ID'] ."'>Delete</a> | <a class='delete'  href='/blog/edit/".$blog['blog_ID']."'>Edit</a>
              </h3>
              <h3>

              </h3>
             ";
      }
    ?>

  </div>
</div>
