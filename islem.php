<?php

if (isset($_POST['uyeol'])) {

$isim = $_POST['isim'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];

  include "mailler/PHPMailerAutoload.php";
  include "mailler/class.phpmailer.php";

  $mail = new PHPMailer();

            // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->SMTPDebug = 1;                                     // Send using SMTP
        $mail->Host       = 'mail.filizbaykalergen.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'admin@filizbaykalergen.com';                     // SMTP username
        $mail->Password   = 'acumk6001**';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                            // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->SetFrom("Web Sitesi", 'Sitenize Yeni Üye Kayıdı Var!');
        $mail->addAddress("umutkonurinso@gmail.com", "Değerli Filiz Hanım");     // Add a recipient
        $mail->CharSet = 'UTF-8';

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Sitenize Yeni Üye Kayıdı Var!';

        $mail->Body    = '
        <p>&nbsp;</p>
        <!-- [if gte mso 9]><xml>
         <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
         </o:OfficeDocumentSettings>
        </xml><![endif]-->
        <p></p>
        <!-- fix outlook zooming on 120 DPI windows devices -->
        <p></p>
        <!-- So that mobile will display zoomed in -->
        <p></p>
        <!-- enable media queries for windows phone 8 -->
        <p></p>
        <!-- disable auto date linking in iOS 7-9 -->
        <p></p>
        <!-- disable auto telephone linking in iOS 7-9 -->
        <p></p>
        <!-- 100% background wrapper (grey background) -->
        <table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#F0F0F0">
        <tbody>
        <tr>
        <td style="background-color: #f0f0f0;" align="center" valign="top" bgcolor="#F0F0F0"><br /> <!-- 600px container (white background) -->
        <table class="container" style="width: 600px; max-width: 600px;" border="0" width="600" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
        <td class="container-padding header" style="font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: bold; padding-bottom: 12px; color: #df4726; padding-left: 24px; padding-right: 24px;" align="left">Sitenize Yeni Üye Kayıdı Var!</td>
        </tr>
        <tr>
        <td class="container-padding content" style="background-color: #ffffff; padding: 12px 24px 12px 24px;" align="left"><br />
        <div class="title" style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 600; color: #374550;">Farmasi için üye isteği gönderen kişinin bilgileri aşağıdaki gibidir.</div>
        <br />
        <div class="body-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #333333;">Adı ve Soyadı: <?php if (isset($isim)) {
          echo $isim;
        }else {
          echo "Yazmamış";
        }; ?>.<br> <br> <center>	</center></div>
        <div class="body-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #333333;">Mail Adresi: <?php if (isset($mail)) {
          echo $mail;
        }else {
          echo "Yazmamış";
        } ?>.<br> <br> <center>	</center></div>
        <div class="body-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #333333;">Telefon Numarası: <?php if (isset($tel)) {
        echo $tel;
        }else {
          echo "Yazmamış";
        }; ?>.<br> <br> <center>	</center><br /><br /> <br /><br /></div>

        </td>
        </tr>
        <tr>
        <td class="container-padding footer-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16px; color: #aaaaaa; padding-left: 24px; padding-right: 24px;" align="left"><br /><br /> ÖğrenciYapar.Com <br /><br /><br /> <a style="color: #aaaaaa;" href="www.ogrenciyapar.com">www.ogrenciyapar.com</a><br /> <br /><br /></td>
        </tr>
        </tbody>
        </table>
        <!--/600px container --></td>
        </tr>
        </tbody>
        </table>
        <!--/100% background wrapper-->

          ';

        $mail->send();
        exit;
        if(!$mail->Send()){

  					header("Location: index?durum=no");
  			} else {

              header("Location: index?durum=ok");
  			}
}

 ?>
