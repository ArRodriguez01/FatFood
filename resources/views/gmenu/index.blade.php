<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/gmenu.css') }}"/>
    <title>Gestionar Menus</title>
  </head>
  @include('includes.nav')
  <body>
        <form action="{{ route('menu.store') }}" method="POST">
        @csrf
            <label class='text-center'>Image</label>
            <label class='text-center'>Name</label>
            <label class='text-center'>Ingredients</label>
            <label class='text-center'>Price</label>
            <label class='text-center'>Seccion</label>
            <label class='text-center'>Allergens</label><br>
            <input  class='form-control text-center' type="text" name="url" id="url">
            <input  class='form-control text-center' type="text" name="name" id="name">
            <input  class='form-control text-center' type="text" name="ingredientes" id="ingredientes">
            <input  class='form-control text-center' type="text" name="price" id="price">
            <input  class='form-control text-center' type="text" name="section" id="section">
            <input class='form-control text-center' type="checkbox" name="allergens" id="allergens" value="0">
            <button type='submit' class='btn btn-info btn-just-icon btn-sm'><i>+</i></button>
        </form>
        <div class="table-responsive">
    <table class="table" id="tanuncios">
    <thead>
        <tr>
            <th class="text-center">Image</th>
            <th class="text-center">ID</th>
            <th class="text-center w-25">Name</th>
            <th class="text-center w-25">Ingredients</th>
            <th class="text-center">Price</th>
            <th class="text-center w-25">Seccion</th>
            <th class="text-center w-25">Allergens</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menus as $item)
        <form action="{{  route('menu.update', $item)  }}" method="POST">
        @csrf
        <tr>
            <td class='text-center'><img src="{{$item->url}}"><br><input type="text" value='{{$item->url}}' name="url" id="url"></td>
            <td><input type='text' class='form-control' type="text"  maxlength="100" value='{{$item->id}}' disabled name="id" id="id"></td>
            <td class='text-center'><input class='form-control text-center' type="text" maxlength="25" value='{{$item->name}}' name="name" id="name"></td>
            <td class='text-center'><input class='form-control text-center' type="text" value='{{$item->ingredientes}}' name="ingredientes" id="ingredientes"></td>
            <td class='text-center'><input class='form-control text-center' type="text" value='{{$item->price}}' name="price" id="price"></td>
            <td class='text-center'><input class='form-control text-center' type="text" value='{{$item->section}}' name="section" id="section"></td>
            @if($item->allergens == 1)
            <td class='text-center'><input class='form-control text-center' type="checkbox" checked name="allergens" id="allergens"></td>
            @else
            <td class='text-center'><input class='form-control text-center' type="checkbox" name="allergens" id="allergens"></td>
            @endif
            <td class='td-actions text-right'>
                    <button type="submit">UPDATE</button>
                </form>
                <form action="{{  route('menu.destroy', $item)  }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                </div>

    @include('includes.footer')
  </body>
</html>
