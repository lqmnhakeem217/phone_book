<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yellow Pages</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="antialiased">
        <div class="container p-4">
            <div class="container-fluid my-3">
                <!-- Navbar/Title -->
                <nav class="navbar navbar-light" style="background-color: #faf870;">
                    <a class="navbar-brand ps-3 h1" href="#">Yellow Pages <i class="fa fa-address-book-o"></i></a>
                </nav>
            </div>
            <!-- Add Form-->
            <div class="d-flex justify-content-center m-2" style="padding:10px">
                <div class="container p-4 border rounded bg-info" style=" width:80%;">
                    <h2 class="text-white">Update Contact</h2>
                    <form method='POST' action="{{ route('update.phonebook',$item) }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control m-1" placeholder="Name" name="name" value="{{$item->name}}">

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <p><strong>Opps Something went wrong</strong></p>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="col">
                                <input type="text" class="form-control m-1"  placeholder="Phone Number" name="phone" value="{{$item->phone}}">
                                <button title="Update Contact" class="fcbtn btn btn-outline btn-success btn-1e btn-xs text-light" type="submit" style="margin-top: 20px; float:right;">
                                <b>UPDATE</b><i class="ps-1 fa fa-edit"></i>
                            </button>
                            <a title="Back to Home" class="fcbtn btn btn-outline btn-danger btn-1e btn-xs text-light me-2" style="margin-top: 20px; float:right;" href="{{route('show.phonebook')}}">
                                <b>BACK</b><i class="ps-1 fa fa-edit"></i>
                            </a>
                            </div>    
                        </div>
                    </form>
                </div>
            </div>   
        </div>
    </body>
</html>