
<?php
 
 session_start();
  

 if(isset($_SESSION["username"]))
 {
     if(time()-$_SESSION["login_time_stamp"] >600) 
     {
         session_unset();
         session_destroy();
         header("location:/IGlogin/Mycontroller/viewlogin");
     }
 }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <style>
        .header {
            display: flex;

        }

        .btn {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">H</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Setting
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Change your password
                                </button></li>
                            <li>

                            </li>
                        </ul>
                    </div>
                  
                </form>
                <form action="logout" method="POST">
                <input class="btn btn-outline-danger" type="submit" value="logout">
            </form>
           
            </div>
        </div>
    </nav>
    <div class="header">

    
        <form action="changepass" method="post">

            <div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Change your password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="password" id="form12" class="form-control" name="old_password" placeholder="Nhập mật khẩu cũ" />
                            <br>
                            <input type="password" id="form12" class="form-control" name="new_password" placeholder="Nhập mật khẩu mới" />
                            <br>
                            <input type="password" id="form12" class="form-control" name="new_password_again" placeholder="Nhập lại mật khẩu mới" />
                        </div>
                        <div class="modal-footer">
                            
                          
                            <button type="submit" class="btn btn-primary" >Save</button>
                        
                            
                        </div>
                       
                    </div>
                </div>
                
            </div>
            </form>
            
      


    </div>
    <div>
    <?php 
    $this ->load-> view('menu.php')
    ?>
    </div>
</body>

</html>