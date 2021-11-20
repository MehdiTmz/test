<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Form exercice</h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Tabi Mehdi</a>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Cours</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">HTML et CSS</a>
                <a class="dropdown-item" href="#">JavaScript</a>
                <a class="dropdown-item" href="#">PHP et MySQL</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link " href="#">Articles</a></li>
            <li class="nav-item"><a class="nav-link " href="#">Contact</a></li>
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
          <form>
            <div class="form-group">
                <label for="Surname">Surname</label>
                <input type="Surname" class="form-control" id="Surname" aria-describedby="Surname" placeholder="Enter your surname">
              </div>
              <div class="form-group">
                <label for="Firstname">Firstname</label>
                <input type="Firstname" class="form-control" id="Firstname" aria-describedby="Firstname" placeholder="Enter your Firstname">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Did you verify all the information ?</label>
            </div>
            <?php echo "Hi</p" ?>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>



    
</body>
</html>