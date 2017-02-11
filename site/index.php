<!DOCTYPE html>
<html>
<head>
	<title>Email->Amish</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center class = "top">
	<h1>Email-to-Amish</h1>
</center>


<form class="form-horizontal"  method="post">
	<center><h3>Please put in the Amish's information.</h3></center>
	<br/>
  <div class="form-group">
    <label id="name_first" class="col-sm-4 control-label">First Name</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputEmail3" placeholder="Johnny">
    </div>
  </div>

  <div class="form-group">
    <label id="name_last" class="col-sm-4 control-label">Last Name</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputEmail3" placeholder="Appleseed">
    </div>
  </div>


  <div class="form-group">
    <label  class="col-sm-4 control-label">Address</label>
    <div class="col-sm-4">
      <input class="form-control" id="address" placeholder="1234 Appleseed Lane">
    </div>
  </div>


  <div class="form-group">
    <label id="city" class="col-sm-4 control-label">City</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputEmail3" placeholder="Appleton">
    </div>
  </div>

  <div class="form-group">
    <label id="state" class="col-sm-4 control-label">State</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputPassword3" placeholder="state">
    </div>
  </div>

<div class="form-group">
    <label id="country" class="col-sm-4 control-label">Country</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputPassword3" placeholder="'Merica">
    </div>
  </div>

<div class="form-group">
    <label id="zip" class="col-sm-4 control-label">Zip</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputPassword3" placeholder="12345">
    </div>
  </div>

<br/><br/>
<br/><br/>
<br/><br/>

<center><h3>Please put in you (the sender's) information</h3></center>

<div class="form-group">
    <label id="name_first" class="col-sm-4 control-label">First Name</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputEmail3" placeholder="Johnny">
    </div>
  </div>


  <div class="form-group">
    <label id="name_last" class="col-sm-4 control-label">Last Name</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputEmail3" placeholder="Appleseed">
    </div>
  </div>



  <div class="form-group">
    <label id="email" class="col-sm-4 control-label">Email</label>
    <div class="col-sm-4">
      <input class="form-control" id="inputEmail3" placeholder="Appleseed">
    </div>
  </div>

<div class="form-group">

  <label for="comment" class="col-sm-4 control-label">Message</label>
  <div class="col-sm-4">
  <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>
</div>


  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-4">
      <button type="submit" class="btn btn-default">Send Message</button>
    </div>
  </div>
</form>


<br/>
<br/>
</body>
</html>