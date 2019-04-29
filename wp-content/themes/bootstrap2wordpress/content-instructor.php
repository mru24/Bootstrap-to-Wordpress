<!-- INSTRUCTOR SECTION -->

<?php

$instructor_title = get_field('instructor_title');
$instructor_name = get_field('instructor_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');

// Social
$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$linkedin_username = get_field('linkedin_username');
// Numbers
$students_number = get_field('students_number');
$reviews_number = get_field('reviews_number');
$courses_number = get_field('courses_number');

?>

<section id="instructor">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-lg-8">
            <h3><?php echo $instructor_title; ?> <small><?php echo $instructor_name; ?></small></h3>
          </div>
          <div class="col-lg-4">
            <a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" rel="noreferrer nofollow noopener">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" rel="noreferrer nofollow noopener">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="https://linkedin.com/in/<?php echo $linkedin_username; ?>/" target="_blank" rel="noreferrer nofollow noopener">
              <i class="fa fa-linkedin"></i>
            </a>
          </div>
        </div>
        <p class="lead"><?php echo $bio_excerpt; ?></p>
        <p><?php echo $full_bio; ?></p>
        <hr>
        <h3>The Numbers <small> They don't lie</small></h3>
        <div class="row text-center">
          <div class="col-xs-4">
            <div class="cell">
              <div class="cellContent">
                <?php echo $students_number; ?><span>students</span>
              </div>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="cell">
              <div class="cellContent">
                <?php echo $reviews_number; ?><span>reviews</span>
              </div>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="cell">
              <div class="cellContent">
                <?php echo $courses_number; ?><span>courses</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
