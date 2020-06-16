<html>

<head>
  <script type="text/javascript" src="netpay-bin-lookup.js"></script>
</head>

<body>
  <script>
    const Lookup = new NetPay();
    var data = Lookup.lookup('549949');
    var json = JSON.parse(data);

    console.log(data)
    if (json.result == 'success') {
      var success=true;
      console.log(json.data.type);
      console.log(json.data.scheme);
      console.log(json.data.bank_name);
    } else {
      console.log(json.message);
    }
  </script>
  <?php
  $success = "<script>document.writeln(json.success);</script>";
  if ($success) {
    $card_type = "<script>document.writeln(json.data.type);</script>";
    $card_scheme = "<script>document.writeln(json.data.scheme);</script>";
    $card_bank_name = "<script>document.writeln(json.data.bank_name);</script>";
    
    echo $card_type . "<br>";
    echo $card_scheme . "<br>";
    echo $card_bank_name . "<br>";
  }
  else {
    $error_message = "<script>document.writeln(json.message);</script>";
    echo $error_message;
  }
  ?>
</body>

</html>