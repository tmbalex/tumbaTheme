<?php
/*
  if($_POST['position'] != ""){
    echo $_POST['position'] . "<br/>";
    $to = "alex.brestt@gmail.com";
    $subject ="Tumba application for " . $_POST['position'];
    $message = "Position: " . $_POST['position'] . "\n" .
               "Name: " . $_POST['person_name'] . "\n" .
               "E-mail: " . $_POST['person_email'];


    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: name <test@test.com>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    $attachments = $_POST['files'];

    //SEND Mail
    if (mail($to, $subject, $message, $headers, $attachments)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }
  }
*/
?>

<?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['person_name'])){
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['person_email'];
    $name = $_POST['person_name'];
    $subject ="Tumba application for " . $_POST['position'];
    $message = "Position: " . $_POST['position'] . "\n" .
               "Name: " . $_POST['person_name'] . "\n" .
               "E-mail: " . $_POST['person_email'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        }else{
            $uploadStatus = 1;


            // Upload attachment file
            if(!empty($_FILES["attachment"]["name"])){
                // File path config
                $targetDir = __DIR__.'/uploads/';
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }

                exit();
            }
            if($uploadStatus == 1){

                // Recipient
                $toEmail = 'aleksandar.brestnichky@insitex.com';

                // Sender
                $from = 'sender@example.com';
                $fromName = 'Tumba website';

                // Subject
                $emailSubject = "Tumba application for " . $_POST['position'] . " from " . $_POST['person_name'];

                // Message
                $htmlContent = '<h2>Tumba application for ' . $_POST['position'] . " from " . $_POST['person_name'] . '</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Subject:</b> '.$emailSubject.'</p>';

                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";
                if(!empty($uploadedFile) && file_exists($uploadedFile)){

                    // Boundary
                    $semi_rand = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

                    // Headers for attachment
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

                    // Multipart boundary
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" .
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }

                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;

                    //SEND Mail
                    if ($mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath)) {
                        echo "mail send ... OK"; // or use booleans here
                    } else {
                        echo "mail send ... ERROR!";
                        //print_r( error_get_last() );
                    }

                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";

                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
                }

                // If mail sent
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';

                    $postData = '';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
}
else echo "no submit";
?>
