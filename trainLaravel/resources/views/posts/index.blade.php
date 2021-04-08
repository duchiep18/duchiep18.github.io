<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widt
     initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
    .
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h1>Danh sách sản phẩm</h1>
                    <a href="{{route ('posts.create')}}" class="btn btn-primary">Create Product</a>
                <table class="table table-hover">
 
                    <form action="" method="GET" class="form-inline" role="form">
                    
                        <div class="form-group">
                            <label class="sr-only" for=""></label>
                            <input type="text" name="keywordsearch" value="{{ request()->input('keywordsearch') }}" class="form-control" id="" placeholder="Search something">
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                    


                    <thead>
                       <tr> 
                            <th>id </th>
                            <th>tensanpham </th>
                            <th>thongtinsanpham </th>
                            <th>giasanpham </th>
                            <th>image</th>
                            <th>trang_thai </th>
                            <th>created_at </th>
                            <th>updated_at </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $addproduct)              
                        <tr>
                            <td>{{ $addproduct->id }}</td>
                            <td>{{ $addproduct->tensanpham }}</td>
                            <td>{{ $addproduct->thongtinsanpham }}</td>
                            <td>{{ $addproduct->giasanpham }}</td>
                            <td>{{ $addproduct->image}}</td>
                            <td>{{ $addproduct->trang_thai }}</td>
                            <td>{{ $addproduct->created_at }}</td>
                            <td>{{ $addproduct->updated_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                    {{$product->appends($_GET)}}      
                          
            </div>
        </div>
    </div>
    
    <!-- Latest compiled and minified CSS & JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</body>
</html>