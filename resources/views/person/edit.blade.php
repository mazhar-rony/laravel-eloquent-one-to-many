<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Update Person</title>
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
        <h3>Update Person</h3>
        <hr>
        <form action="/person/{{ $person->id }}/edit" method="POST">

        @csrf
        @method('patch')

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ $person->name }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $person->email }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" id="phone" name="phone" value="{{ $person->phone }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Country</label>
                    <select name="country_id" id="country_id" class="form-control">
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}" @if($country->id==$person->country->id) selected @endif>{{ $country->name }}</option>
                        @endforeach               
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Person</button>
                    <a href="{{ asset('/person')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>