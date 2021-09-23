<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    
                    <form action="{{route('calculator.calculate')}}" method="POST" role="form">
                         @csrf
                        <legend>Tính toán</legend>
                        <div class="form-group">
                            <label for="">Nhập vào số thứ nhất</label>
                            <input type="text" name="number_1" class="form-control" id="">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Nhập vào số thứ hai</label>
                            <input type="text" name="number_2" class="form-control" id="">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Options</label>
                            <select name="operator" id="">
                                <option value="+">Cộng</option>;
                                <option value="-">Trừ</option>;
                                <option value="*">Nhân</option>;
                                <option value="/">Chia</option>; 
                            </select>
                            
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Tính toán</button>
                    </form>
                    
                </div>
            </div>
        </div>

    <!-- Latest compiled and minified CSS & JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>