  <?php 
  include 'connect.php';

  function get_course_title($course_id) {

  $query = "SELECT title FROM courses WHERE course_id = $course_id";
  $result = mysqli_query($conn, $query);

  $course_title = "";
  if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $course_title = $row['title'];
  }

  return $course_title;
  }

  function get_course_description($course_id) {


  $query = "SELECT description FROM courses WHERE course_id = $course_id";
  $result = mysqli_query($conn, $query);

  $course_description = "";
  if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $course_description = $row['description'];
  }

  return $course_description;
  }

  function get_course_link($course_id) {

  $query = "SELECT youtube_link FROM courses WHERE course_id = $course_id";
  $result = mysqli_query($conn, $query);

  $course_link = "";
  if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $course_link = $row['youtube_link'];
  }

  return $course_link;
  }