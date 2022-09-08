<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-fg-offset col-lg-4">
            <form action="{{ route('form-store') }}" method="POST">
                <br>
                @if(count($errors) > 0)

                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach

                @endif
                @csrf
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="name">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="email">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" >
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>
