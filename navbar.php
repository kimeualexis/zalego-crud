<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <!-- Header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Students</a>
        </div>

        <!-- Items -->
        <div class="collapse navbar-collapse" id="topNavBar">
            <ul class="nav navbar-nav">
                <li <a href="index.php"><span class="glyphicon glyphicon-cd" aria-hidden="true"></span>&nbsp; Home</a></li>
               
            </ul>
            <form class="navbar-form navbar-left" role="search" method="get" action="">
                <div class="form-group">
                    <input type="text" class="form-control" name="q" value="">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="create_stu.php">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp; Add Student
                    </a>
                </li>
                
            </ul>
        </div>

    </div>
</nav>

</body>
</html>