# NetPay Bin Lookup

Es una librería que permite identificar si la tarjeta es de crédito o debito, si es Visa, MasterCard o American Express, el banco emisor, etc con sólo el bin o prefijo de la tarjeta.

## Minimum Requirements

JavaScript.

## Manual Installation

Colocal el archivo de JavaScript en el header.

```php
<head>
    <script type = "text/javascript" src = "netpay-bin-lookup.js" ></script>
</head>
```

## Getting Started

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