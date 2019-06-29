<?php

// panggil library phpmailer
include 'phpmailer/PHPMailerAutoload.php';

// Jika tombol submit ditekan maka akan mulai proses pengiriman konfirmasi pembayaran ke email ADMIN
if(isset($_POST['submit']))
{
  $no_invoice     = $_POST['no_invoice'];
  $nama_pengirim  = $_POST['nama_pengirim'];
  $email          = $_POST['email'];

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 2;                                     // Enable verbose debug output

  $mail->isSMTP();                                            // Set mailer to use SMTP
  $mail->Host     = 'smtp.gmail.com';                            // Mengatur SMTP yg akan digunakan (yg ini pake gmail)
  $mail->SMTPAuth = true;                                     // Enable SMTP authentication

  $mail->Username = 'namaemailgmailanda@gmail.com';                      // SMTP username email penerima
  $mail->Password = 'password';                           // SMTP password email penerima
  $mail->Port     = 587;                                      // TCP port to connect to

  $mail->setFrom(' '.$email.' ');                             // Asal email pengirim
  $mail->addAddress('emailpenerima', 'namaorangnya');  // Email dan Nama Penerima Email
  $mail->addReplyTo(' '.$email.' ');         

  $mail->isHTML(true);                                        // Mengeset format email sebagai HTML

  $mail->Subject = 'Konfirmasi Pembayaran dari: '.$nama_pengirim.' ';
  $mail->Body    = 'No. Invoice: '.$no_invoice.' <br/><br/>
                    Nama Pengirim: '.$nama_pengirim.' <br/><br/>
                    Email pengirim: '.$email.' <br/><br/>';

  // Jika pesan gagal dikirim, maka akan muncul alert: Pesan gagal terkirim, harap dicoba kembali
  if(!$mail->send())
  {
    echo "Pesan gagal terkirim, harap dicoba kembali";
  }
    // Jika berhasil maka akan muncul alert: Pesan Anda berhasil terkirim
    else
    {
      echo "<script>alert('Pesan Anda berhasil terkirim, terima kasih');history.go(-1)</script>";
    }
}
  // Peringatan apabila user tidak melalui proses yang seharusnya atau tembak langsung
  else
  {
    echo "<script>alert('Gak boleh tembak langsung ya, pencet dulu tombolnya!');history.go(-1)</script>";
  }
?>
