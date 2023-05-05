<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}"/>
    <title>Tu carrito</title>
  </head>
  @include('includes.nav')
  <body>

    @if(count($cartItems)==0)
        <h1>NO tienes nada en tu carrito</h1>
    @endif

    @foreach ($cartItems as $item)
    <p>{{$item['name']}}</p>
    <p>{{$item['quantity']}}</p>
    <a href={{route('cart.delete',$item['menu_id'])}}>Borrar</a>
    <a href={{route('cart.add',$item['menu_id'])}}>+</a>
    <a href={{route('cart.remove',$item['menu_id'])}}>-</a>
    @endforeach
    @if(count($cartItems)!=0)
    <form action={{route('cart.store')}} method="POST">
        @csrf
        <input type="text" name="address" placeholder="Escribe tu dirección de envio">
        <select name="payment">
            <option value="tarjeta">VISA</option>
            <option value="paypal">PAYPAL</option>
        </select>
        <input type="submit" value="PEDIR">
    </form>
    <h1>{{$total}}</h1>
    @endif
    @include('includes.footer')
  </body>
</html>
