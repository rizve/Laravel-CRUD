<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Dash Board
                    </a>
                </li>
                <li>
                    <a href="#">Data</a>
                </li>
                <li>
                    <a href="#">Update</a>
                </li>
                <li>
                    <a href="#">Edit</a>
                </li>
                <li>
                    <a href="#">Delete</a>
                </li>
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                     {!! Form::open(array('route' => ['Dashboard.update', $asd->id], 'method'=>'PUT')) !!}
                     
                    <div class="form-group">
                        <input type="text" name="name" value="{{ $asd->name }}" class="form-control input-sm" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" value="{{ $asd->email }}" class="form-control input-sm" placeholder="Email Address" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control input-sm" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-info btn-block">
                    </div> 
                
          
            {!!Form::close()!!}
                
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->    

</body>

</html>
