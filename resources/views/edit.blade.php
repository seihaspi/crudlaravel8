<!DOCTYPE html>
<html>
<head>
<title>List Members</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="mt-5" >Update Members</h1>
            <form action="/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$data['id']}}">
                <div class="mb-3">
                  <label  class="form-label">Name</label>
                  <input value="{{$data['name']}}" type="text" name="name" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input value="{{$data['email']}}" type="text" name="email" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Address</label>
                    <input value="{{$data['address']}}"  type="text"  name="address" class="form-control"  aria-describedby="emailHelp">
                </div>
              <button type="submit" class="btn btn-primary">Upda​​​​​​​​​​​​​​​​te Mmbers</button>
              </form>
        </div>
    </div>
</body>
</html>



