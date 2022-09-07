<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</head>
{{-- register modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success fw-bold " id="exampleModalLabel">Register Here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="Full_name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            placeholder="Enter your email" aria-describedby="emailHelp" name="Email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">City</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="City"
                            placeholder="Enter your city name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Age</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="Age"
                            placeholder="Enter your age">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label form-primary">Upload Your Image</label>
                        <input class="form-control" type="file" id="formFile" name="Profile_Img">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">You agree our terms and conditions</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- register modal ends --}}


<body>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- card-header --}}
                    <div class="card-header">
                        <h1 align="center" class="mt-4 fw-bold text-danger">All Addmitted Students</h1>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add Students
                        </button>
                    </div>
                    {{-- card-body --}}
                    <div class="card-body">
                        {{-- table starts --}}
                        <table class="table table-primary table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">SL.No</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($register as $item)
                                    <tr>
                                        <th scope="row">
                                            <h6 class="my-4">{{ $loop->index + 1 }}</h6>
                                        </th>
                                        <td><img src="uploads/images/{{ $item->Profile_Img }}" alt=""
                                                style="height: 75px;width:75px;clip-path:polygon(50% 0%, 80% 10%, 100% 35%, 100% 70%, 80% 90%, 50% 100%, 20% 90%, 0% 70%, 0% 35%, 20% 10%);">
                                        </td>
                                        <td class="my-2">
                                            <h6 class="my-4">{{ $item->Full_name }}</h6>
                                        </td>
                                        <td class="my-2">
                                            <h6 class="my-4">{{ $item->Email }}</h6>
                                        </td>
                                        <td class="my-2">
                                            <h6 class="my-4">{{ $item->Age }}</h6>
                                        </td>
                                        <td class="my-2">
                                            <h6 class="my-4">{{ $item->City }}</h6>
                                        </td>
                                        <td class="my-2">
                                            <div class="action my-3">
                                                <button class="btn btn-info">View</button>
                                                <a type="submit" href="/edit/{{$item->id}}" class="btn btn-primary" >
                                                    Edit
                                                </a>
                                                <a href="/delete/{{$item->id}}/{{$item->Profile_Img}}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script></script>
</body>

</html>
