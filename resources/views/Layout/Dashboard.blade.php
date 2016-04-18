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
                    <table class="table table-striped custab"> 
                        <thead>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center"colspan="2">Action</th>
                        </thead>
                        <tbody>
                            @foreach($userinfo as $data)
                            <tr>
                                <td class="text-center">{{$data->id}}</td>
                                <td class="text-center">{{$data->name}}</td>
                                <td class="text-center">{{$data->email}}</td>
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="{{route('Dashboard.edit',$data->id)}}"><span class="glyphicon glyphicon-edit"></span>Edit</a>                                    
                                </td>
                                <td class="text-center"> 
                                {!! Form::open(['route'=>['Dashboard.destroy', $data->id], 'method'=>'DELETE', 'class' =>'form-inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove">Delete</span></button> 
                                {!!form::close() !!}                         
                                </td>
                            </tr>
                            @endforeach                               
                        </tbody>
                    </table>    


                
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->    

</body>

</html>
