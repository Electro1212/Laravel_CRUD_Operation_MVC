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

<body>

    <div class="container my-4">
        <div class="card">
            <div class="card-header d-flex justify-content-center fw-bold text-danger">
               <h1 class="fw-bold ">Edit your Form</h1> 
            </div>
            <div class="card-body">
                <form action="/update/{{$register->id
                }}" method="post" >
                  @csrf
                   @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="Full_name" placeholder="Enter your name"
                            value="{{$register->Full_name}}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            placeholder="Enter your email" aria-describedby="emailHelp" name="Email"  value="{{$register->Email}}" >
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">City</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="City"
                            placeholder="Enter your city name" value="{{$register->City}}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Age</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="Age"
                            placeholder="Enter your age"  value="{{$register->Age}}">
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">You agree our terms and conditions</label>
                    </div>
                    <button type="Submit" class="btn btn-success">update</button>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>

</body>

</html>

{{-- update modal --}}
