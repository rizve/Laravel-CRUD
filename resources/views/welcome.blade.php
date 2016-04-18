<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
          


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
          <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Well Come To Laravel 5.2</div>
            </div>
        </div>
        <div class="container">
            
            {!! Form::open(array('route' => 'register.store')) !!}
                    <div class="form-group">
                        <input type="text" name="name" value="" class="form-control input-sm" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" value="" class="form-control input-sm" placeholder="Email Address" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control input-sm" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Register" class="btn btn-info btn-block">
                    </div> 
                
          
            {!!Form::close()!!}
               
        </div>
    </body>
</html>
