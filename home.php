<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  body{
    background-color: skyblue;
  }
</style>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header" >
                <a class="navbar-brand" href="index.html"><i class ="fa fa-globe"> </i><i>  </i>My Survey</a>
            </div>
            </nav>

<div class="col-sm-8" style="border: groove; background-color: grey; margin-top: 10px;margin-left: 10px">
<h4>List of Surveys</h4>
<table class="table table-striped">
    <thead>
    <tr>
    <th>Survey ID</th>
    <th>Survey name</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td></td>
        <td></td>
         <td>

           <a class="btn btn-info" role="button">Take</a>
           <a class="btn btn-danger" role="button">Delete</a>
         </td>
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-bottom: 10px; margin-right: ">Add</button>

                                <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Add Survey</h4>
                                </div>
<!--Modal contents-->
                                <div class="row">
                                <div class="col-md-12">
                                <div class="panel-body">
<?php

include('condb.php');

$query = "SELECT * FROM survey_table";

$result = $db->query($query);

?>

<form action="insert.php" method="post">
<fieldset>
   <div class="form-group">
        <input type="text" placeholder="Survey name" name="Sname" class="form-control" >
        </div>
<div class="form-group">
                  <input type="text" placeholder="Choice1" name="c1" class="form-control" >
                  </div>
<div class="form-group">
                  <input class="form-control" placeholder="Choice2" name="c2" type="password" value="">
                  </div>
<div class="form-group">
                  <input class="form-control" placeholder="Choice3" name="c3" type="password" value="">
                  </div>
<div class="form-group">
                  <input class="form-control" placeholder="Choice4" name="c4" type="password" value="">
                  </div>
        <div class="modal-footer">
          <center><button type="button" class="btn btn-success" data-dismiss="modal">Add</button></center>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</fieldset>
</form>
</fieldset>
 <script src="js/jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>