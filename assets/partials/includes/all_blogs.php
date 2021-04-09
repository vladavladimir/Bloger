<?php 

include_once 'classes/Blog.php';

$show = new Blog();
$blogs = $show->getAllBlogs();

if ($blogs == NULL || $blogs == 0 || empty($blogs)) {//if there is no blogs
	echo '<p>No blogs jet</p>';
}else{ ?>


 <div class="row" data-aos="fade-up" data-aos-delay="100">
  <?php
foreach ($blogs as $blog){//foreaching data to get all blogs
 ?>
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="assets/img/post/<?=$blog->id?>/<?=$blog->picture?>" alt="Hotel 1"  height="300" width="600">
              </div>
              <h3><a href="single_blog.php?id=<?=$blog->id?>"><?=$blog->title?></a></h3>
              <p><?=$blog->name?> <?=$blog->lastname?></p><br>
              <p><?=$blog->created_at?></p>
            </div>
          </div>
           <?php }}?>
        </div>
        
      </div>

 
