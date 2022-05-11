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
                <div class="container p-4 border rounded" style="background-color: #547c85; width:80%;">
                    <h2 class="text-white">New Contact</h2>
                    <form method='POST' action="{{ route('store.phonebook') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control m-1" placeholder="Name" name="name">

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
                                <input type="text" class="form-control m-1"  placeholder="Phone Number" name="phone">
                                <button title="Add Contact" class="fcbtn btn btn-outline btn-info btn-1e btn-xs text-light" type="submit" style="margin-top: 20px; float:right;">
                                <b>ADD</b><i class="fa fa-user-plus ms-1"></i>
                            </button>
                            </div>    
                        </div>
                    </form>
                </div>
            </div>   

            <!-- Table -->
            <div class="container-fluid table-responsive-sm" style="padding: 20px;">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th class="sorting" width="5%">No. #</th>
                            <th class="sorting" width="50%">Name</th>
                            <th class="sorting" width="35%">Phone Number</th>
                            <th class="sorting" width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count=1 @endphp
                        @forelse ($data as $item)
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <a href="{{ route('edit.phonebook',$item)}}" style="font-size: 18px; padding:3px 8px" class="btn btn-warning" title="Edit Contact"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Are you sure?')" href="{{route('delete.phonebook',$item)}}" style="font-size: 18px; padding: 3px 8px" class="btn btn-danger btn-xs btn-outline btn-1d btnDel" title="Delete Contact"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                            @php $count++ @endphp
                        @empty
                        <tr>
                            <td colspan="4" class="text-center"> You dont have any phone number in this app. Please make some.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div style="margin-top: 2px;">{!! $data->links() !!} </div>
            </div>
            <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
                <div class="container text-center">
                    <small>Copyright &copy; Luqmanul Hakeem Bin Khairul Anuar</small>
                </div>
            </footer>    
        </div>
    </body>
</html>