<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Create Country</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="/countries" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    
    <div class="container" style="padding-top: 10px;">
        <h3>Create Country</h3>
        <hr>
        <form action="/countries/create" method="POST">

        @csrf

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="name">Country Name</label>
                    <input type="text" id="name" name="name" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Capital Name</label>
                    <input type="text" id="capital" name="capital" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Currency Name</label>
                    <input type="text" id="currency" name="currency" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Country Population</label>
                    <input type="text" id="population" name="population" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Country</button>
                    <a href="{{ asset('/countries')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>