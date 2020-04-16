<?php include 'basliq.php' ?>

  <section id="mainContent">
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <div class="archive_style_1">
              <div style="margin-top:15px;">
                <h1>&nbsp;</h1>
              </div>
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">Ən son yazılar</span> </h2>
              
 <?php for($i=0;$i<8;$i++) { ?> 
               <div class="business_category_left wow fadeInDown">
                <ul class="fashion_catgnav">
                  <li>
                    <div class="catgimg2_container"> <a href="yazi.php.html"><img alt="" src="images/ubuntu.jpg"></a> </div>
                    <h2 class="catg_titile"><a href="yazi.php">Ubuntu versiya nömrəsinin anlamı</a></h2>
                    <div class="comments_box"> <span class="meta_date">24/03/2018</span> <span class="meta_comment"><a href="#">Rəy yoxdur</a></span> <span class="meta_more"><a  href="#">Davamını oxu...</a></span> </div>
                    <p>Hazırda Ubuntunun saytına nəzər yetirsək orda Ubuntu 17.10 və Ubuntu 16.04 versiyal...</p>
                  </li>
                </ul>
              </div>
   <?php };?>
            </div>
          </div>
        </div>
        <div class="pagination_area">
          <nav>
            <ul class="pagination">
              <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Əvvəlki</span></a></li>
              <?php for($i=0;$i<1;$i++) { ?> 
              <li><a href="#">  <?php echo $i+1;?></a></li>
              <?php };?>
              <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Sonrakı</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
      
<?php include 'yanliq.php' ?>

    </div>
  </section>
</div>

<?php include 'ayaqliq.php' ?>