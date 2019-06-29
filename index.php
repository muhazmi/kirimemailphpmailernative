<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kirim Email dengan PHPMailer dan PHP Native</title>
  </head>
  <body>
    <form action="kirim.php" method="post">
      <p>
        <label>No. Invoice</label>
        <input class="form-control" name="no_invoice" type="text" id="no_invoice" placeholder="Isikan angka saja" onkeypress='return isNumberKey(event)' required/>
      </p>
      <p>
        <label>Nama Pengirim</label>
        <input class="form-control" name="nama_pengirim" type="text" id="nama_pengirim" required/>
      </p>
      <p>
        <label>Email</label>
        <input class="form-control" name="email" type="text" id="email"/>
      </p>
      <p>
      <button type="submit" name="submit">Kirim</button>
    </p>
    </form>
  </body>
</html>
