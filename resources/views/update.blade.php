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
            <div class="d-flex justify-content-center">
                <div class="container p-4 border rounded" style="background-color: #547c85; width:80%;">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputName" placeholder="Name" value="{{$item->name}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputPhone" placeholder="Phone Number" value="{{ $item->phone }}">
                        </div>
                        <button title="Edit Contact" class="fcbtn btn btn-outline btn-info btn-1e btn-xs text-light" type="submit">
                            <b>UPDATE</b><i class="fa fa-user-plus"></i>
                        </button>
                    </form>
                </div>
            </div>   
        </div>
    </body>
</html>