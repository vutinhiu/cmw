<script>
    function buyNow(){
        document.getElementById('buyNow').submit()
    }
</script>

<?php 
    include "PHPMailer-master/src/PHPMailer.php";
    include "PHPMailer-master/src/Exception.php";
    include "PHPMailer-master/src/OAuth.php";
    include "PHPMailer-master/src/POP3.php";
    include "PHPMailer-master/src/SMTP.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;	
   
?>
<?php
    if(isset($_POST['name'])  && isset($_POST['mail'])){
        $name = $_POST['name'];
        $email = $_POST['mail']; 

        $str_body = '';
        $str_body .= '
            <p>
                <b>Khách hàng:</b> '.$name.'<br>
            </p>
            
        ';
        
        $str_body .= '
            <p>Cám ơn bạn đã đăng ký nhận thông báo </p>
        ';
        $mail = new PHPMailer(true);                              // Passing 'true' enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'vutienhieu91100@gmail.com';                 // SMTP username
            // $mail->Password = 'vietpr0sh0p';                           // SMTP password
                $mail->Password = ' zcxouponlvmtetnz';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, 'ssl' also accepted
            $mail->Port = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->CharSet = 'UTF-8';
            $mail->setFrom('vutienhieu91100@gmail.com', 'Blog nhà làm');				// Gửi mail tới Mail Server
            $mail->addAddress($email);               // Gửi mail tới mail người nhận
            //$mail->addReplyTo('ceo.vietpro@gmail.com', 'Information');
            $mail->addCC('vutienhieu91100@gmail.com');
            //$mail->addBCC('bcc@example.com');
        
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Xác nhận thông báo từ Blog nhà làm';
            $mail->Body    = $str_body;
            $mail->AltBody = '';
        
            $mail->send();
            echo 'Bạn đã đăng ký thành công';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
?>
<!--	Customer Info	-->

                        <p id="button-right" > Email subscription</p>
                        <form role="form" id="buyNow" method="post">
                        <p>Nhận bài viết mới qua email</p>
						<fieldset>
                        <div class="form-group">
                            <label for="">Name</label>
								<input class="form-control" placeholder="Name" name="name" type="name" value="">
							</div>
							<div class="form-group">
                            <label for="">Email</label>
								<input class="form-control" placeholder="E-mail" name="mail" type="email" autofocus>
							</div>
							
							<a onclick="buyNow();alert('Bạn đã đăng ký thành công')  " class="btn btn-light float-md-left"  > Submit</i>
						</fieldset>
					</form>

<!--	End Customer Info	-->


    
