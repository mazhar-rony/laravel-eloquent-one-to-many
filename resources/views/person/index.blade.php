<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Person List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
            <a href="{{ asset('/countries')}}" class="btn btn-primary"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Show Countries</a>
        </div>
    </div>
    
    <div class="container" style="padding-top: 10px;">
        
        <div class="row">
            <div class="col-md-6"><h3>Person List</h3></div>
            <div class="col-md-6">
                {{-- <a href="{{ asset('/countries')}}" class="btn btn-primary offset-md-4"><i class="fa fa-user-plus" aria-hidden="true"></i>Show Countries</a> --}}
                <a href="{{ asset('/person/create')}}" class="btn btn-success pull-right"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New Person</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Created On</th>
                        <th>Updated On</th>
                        <th colspan="2" style="text-align: center">Action</th>
                    </tr>
                     
                    @forelse ($persons as $person)
                        <tr>
                            <td>{{ $person->id }}</td>
                            <td>{{ $person->name }}</td>
                            <td>{{ $person->email }}</td>
                            <td>{{ $person->phone }}</td>
                            <td>{{ $person->country->name }}</td>
                            <td>{{ $person->created_at->format('d-m-Y') }}</td>
                            <td>{{ $person->updated_at->diffForHumans() }}</td>
                            
                            <td><a href="/person/{{$person->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a></td>
                            
                            <td>
                                <form action="/person/{{$person->id}}/delete" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button> 
                            </td>        
                                </form>        
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">Record not found.</td>
                        </tr
                    @endforelse
                                       
                </table>
            </div>
        </div>
        
    </div>

</body>
</html>