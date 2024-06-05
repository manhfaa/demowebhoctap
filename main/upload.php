<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"])) {
      if ($_FILES["file"]["type"] == "text/plain") {
        $upload_dir = "uploads/";
        $file_name = $_FILES["file"]["name"];
        $file_path = $upload_dir. $file_name;
        move_uploaded_file($_FILES["file"]["tmp_name"], $file_path);
        echo "File uploaded successfully!";
      } else {
        echo "Invalid file type. Only text files are allowed.";
      }
    } else {
      echo "No file uploaded.";
    }
  }
?>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"])) {
      if ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $_FILES["file"]["type"] == "application/vnd.ms-excel") {
        $upload_dir = "uploads/";
        $file_name = $_FILES["file"]["name"];
        $file_path = $upload_dir. $file_name;
        move_uploaded_file($_FILES["file"]["tmp_name"], $file_path);
        echo "File uploaded successfully!";
      } else {
        echo "Invalid file type. Only Excel files are allowed.";
      }
    } else {
      echo "No file uploaded.";
    }
  }
?>