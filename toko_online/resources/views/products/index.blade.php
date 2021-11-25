<h1>list product</h1>

<table>
    <thead>
        <tr>
            <th>name</th>
            <th>description</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
        </tr>
        @endforeach
      
        
    </tbody>
</table>

            