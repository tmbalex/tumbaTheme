<?php
/*
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

if(isset($_FILES) && (bool) $_FILES) {


	$allowedExtensions = array("pdf","doc","docx","gif","jpeg","jpg","png","rtf","txt");

  $total = count($_FILES['attachment']['name']);
	$files = array();
  $targetDir = __DIR__.'/uploads/';

  $files = array();
	for( $i=0 ; $i < $total ; $i++ ) {
		$file_name = basename($_FILES["attachment"]["name"][$i]);
		$temp_name = basename($_FILES["attachment"]["tmp_name"][$i]);
    $targetFilePath = $targetDir . $file_name;
		$file_type = pathinfo($targetFilePath,PATHINFO_EXTENSION);
		$path_parts = pathinfo($file_name);
		$ext = $path_parts['extension'];
		if(!in_array($ext,$allowedExtensions)) {
			die("File $file_name has the extensions $ext which is not allowed");
		}
    $file['tmp_name'] = $targetFilePath;
    $file['name'] = $file_name;
		array_push($files,$file);
	}

	$to = 'aleksandar.brestnichky@insitex.com';
	$from = "sender@example.com";
	$subject ="Tumba application for " . $_POST['position'] . " from " . $_POST['person_name'];
	$message = "Position: " . $_POST['position'] . "\n" .
             "Name: " . $_POST['person_name'] . "\n" .
             "E-mail: " . $_POST['person_email'];

  $from = 'sender@example.com';
  $fromName = 'Tumba website';
	$headers = "From: $fromName"." <".$from.">";

	// boundary
	$semi_rand = md5(time());
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

	// headers for attachment
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

	// multipart boundary
	$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
	$message .= "--{$mime_boundary}\n";

	// preparing attachments
	for($x=0;$x<count($files);$x++){
		$file = fopen($files[$x]['tmp_name'],"rb");
		$data = fread($file,filesize($files[$x]['tmp_name']));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $files[$x]['name'];
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";
	}
	// send

	$ok = mail($to, $subject, $message, $headers);
	if ($ok) {
		echo "<p>mail sent to $to!</p>";
	} else {
		echo "<p>mail could not be sent!</p>";
	}
}

*/















$postData = $_POST;
$email = $_POST['person_email'];
$name = $_POST['person_name'];

$postData = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['person_name'])){
    // Get the submitted form data

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name)){

        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        }
        else{
            $uploadStatus = 1;
            $uploadedFiles = array();

            // Upload attachment file
            if(!empty($_FILES["attachment"]["name"])){
                // File path config
                $targetDir = __DIR__.'/uploads/';

                //TODO CHECK FOR EMPTY FILE NAMES
                //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

                // Count # of uploaded files in array
                $total = count($_FILES['attachment']['name']);

                // Loop through each file
                for( $i=0 ; $i < $total ; $i++ ) {

                  $fileName = basename($_FILES["attachment"]["name"][$i]);
                  $targetFilePath = $targetDir . $fileName;
                  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

                  // Allow certain file formats
                  $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                  if(in_array($fileType, $allowTypes)){
                      // Upload file to the server
                      if(move_uploaded_file($_FILES["attachment"]["tmp_name"][$i], $targetFilePath)){
                          $uploadedFiles[$i] = $targetFilePath;
                      }else{
                          $uploadStatus = 0;
                          $statusMsg = "Sorry, there was an error uploading your file.";
                          exit();
                      }
                  }else{
                      $uploadStatus = 0;
                      $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                      exit();
                  }
                }
            }
            if($uploadStatus == 1){

              $to = 'aleksandar.brestnichky@insitex.com';
              $from = "sender@example.com";
              $subject ="Tumba application for " . $_POST['position'] . " from " . $_POST['person_name'];
              $message = "Position: " . $_POST['position'] . "\n" .
                         "Name: " . $_POST['person_name'] . "\n" .
                         "E-mail: " . $_POST['person_email'];

              $from = 'sender@example.com';
              $fromName = 'Tumba website';
              $headers = "From: $fromName"." <".$from.">";

              // boundary
              $semi_rand = md5(time());
              $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

              // headers for attachment
              $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

              // multipart boundary
              $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
              $message .= "--{$mime_boundary}\n";

              // preparing attachments
              for($i = 0; $i < count($uploadedFiles); $i++){
                $file = fopen($uploadedFiles[$i],"rb");
                $data = fread($file,filesize($uploadedFiles[$i]));
                fclose($file);
                $data = chunk_split(base64_encode($data));
                $name = basename($uploadedFiles[$i]);
                $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                $message .= "--{$mime_boundary}\n";
              }
              // send

              $ok = mail($to, $subject, $message, $headers);
              if ($ok) {
                echo "<p>mail sent to $to!</p>";
              } else {
                echo "<p>mail could not be sent!</p>";
              }
          }
    }
  }
}
else echo "no submit";
?>
