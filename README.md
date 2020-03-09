# NetPay Bin Lookup

Es una librería que permite identificar si la tarjeta es de crédito o debito, si es Visa, MasterCard o American Express, el banco emisor, etc con sólo el bin o prefijo de la tarjeta.

## Minimum Requirements

JavaScript.

## Manual Installation en JavaScript

Colocal el archivo de JavaScript en el header.

```php
<head>
    <script type = "text/javascript" src = "netpay-bin-lookup.js" ></script>
</head>
```

Ejemplo:

```php
<script>
const Lookup = new NetPay();
  var data = Lookup.lookup('474174');
  var json = JSON.parse(data);

  console.log(data)
  if(json.result == 'success') {
    console.log(json.data.type);
    console.log(json.data.scheme);
    console.log(json.data.bank_name);
  }
  else {
    console.log(json.message);
  }
</script>
```

## Pasar los valores de JavaScript a PHP

```php
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
```


## Manual Installation en PHP

Importar el archivo de la clase.

```php
require_once("netpay-pbin-lookup-class.php");
```

Ejemplo:

```php
<?php
$netpay = new NetPay();
$result = json_decode($netpay->lookup('491573'), true);
if($result['result'] == 'success') {
  echo $result['data']['type']."<br>";
  echo $result['data']['scheme']."<br>";
  echo $result['data']['bank_name']."<br>";
}
else {
  echo $result['message'];
}
?>
```