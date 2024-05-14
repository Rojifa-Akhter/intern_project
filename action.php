<?php

if ($_FILES['banner']["size"]<512) {
move_uploaded_file($_FILES['banner']["tmp_name"],"file/"."banner.jpg");
}else{
  echo "Upload Successfull";
}

 ?>
