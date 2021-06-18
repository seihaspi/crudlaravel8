
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
            <h1 class="mt-5" >List Members</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($members as $member)
                  <tr>
                    <th>{{$member['id']}}</th>
                    <td>{{$member['name']}}</td>
                    <td>{{$member['email']}}</td>
                    <td>{{$member['address']}}</td>
                    <td>
                        <a href={{"edit/".$member['id']}}><button type="submit" class="btn btn-primary">Update</button></a>
                        <a href={{"delete/".$member['id']}}><button type="submit" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <a href="add"><button type="submit" class="btn btn-primary">Go to Add Mmbers</button></a>
    </div>
</body>
</html>


