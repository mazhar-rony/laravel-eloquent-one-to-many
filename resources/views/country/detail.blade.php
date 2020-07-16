<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Country Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    
    <div class="container" style="padding-top: 10px;">
        
        <div class="row">
            <div class="col-md-6"><h3>Country Detail</h3></div>
            <div class="col-md-6">
                <a href="{{ asset('/countries')}}" class="btn btn-success pull-right"><i class="fa fa-globe" aria-hidden="true"></i> Show All Countries</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
               <div class="col-md-6 offset-md-3 text-center">
                    <h1 style="color: #ff11ff;">Welcome to {{ $country->name }}</h1>
                    <h2 style="color: #ff11ff;">The capital of {{ $country->name }} is {{ $country->capital }}</h2>
                    <h2 style="color: #ff11ff;">The Population of {{ $country->name }} is {{ $country->population }}</h2>
                </div>
                <p style="margin-top: 30px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                     in culpa qui officia deserunt mollit anim id est laborum."
                </p>
                <hr>
                <h5 style="color: #900C3F;"><strong>List of people who live in this country</strong></h5>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>                                
                            </tr>
                            {{-- Normal Approach --}}
                            {{-- @forelse ($country_person as $person)
                                <tr>
                                    <td>{{ $person->id }}</td>
                                    <td>{{ $person->name }}</td>
                                    <td>{{ $person->email }}</td>
                                    <td>{{ $person->phone }}</td>                                     
                                </tr>    
                            @empty
                                <tr>
                                    <td colspan="4">Record not found.</td>
                                </tr
                            @endforelse  
                                                                                   --}}
                            @forelse ($country->persons as $person)
                            <tr>
                                <td>{{ $person->id }}</td>
                                <td>{{ $person->name }}</td>
                                <td>{{ $person->email }}</td>
                                <td>{{ $person->phone }}</td>                                     
                            </tr>    
                            @empty
                                <tr>
                                    <td colspan="4">Record not found.</td>
                                </tr
                            @endforelse  
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
    
</body>
</html>