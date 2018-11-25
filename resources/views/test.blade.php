<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .hideDiv {
    display: none;
  }
</style>
</head>
<body>
  <div class="container">
    <br />
    <div class="col-md-6" style="margin:0 auto; float:none;">
      <form action="{{ route('formdata') }}"  method="post">
        @csrf
        <br>
        <h3 align="center"><b>Register</b></h3>
        @if (count($errors) > 0)
        <div class = "alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <br />
        <p align="right"><a href="{{ route('list')}}"  class="btn btn-primary"> List </a></p>
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" placeholder="Enter Name" class="form-control" id="name" onchange="return nameValidation(this.value)" />
          <span class="text-danger font-weight-bold" id="nameERR"></span>
        </div>
        <div class="form-group">
          <label>Contact :</label>&nbsp;&nbsp;
          <label class="radio-inline">
            <input type="radio" name="contact" value="email" id="radio_mail" onclick="return showHide()">Email
          </label>
          <label class="radio-inline">
            <input type="radio" name="contact" value="phone" id="radio_phone" onclick="return showHide()">Phone
          </label>
          <label class="radio-inline">
            <input type="radio" name="contact" checked value="none" id="radio_none" onclick="return showHide() ">None
          </label>
        </div>
        <div class="form-group hideDiv" id="emailsection">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter Email" id="email" onchange="return emailValidation(this.value)" />
          <span class="text-danger font-weight-bold" id="emailERR"></span>
        </div>
        <div class="form-group hideDiv" id="phonesection">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control" placeholder="Enter Phone" id="showPhone" onchange="return phoneValidation(this.value)" maxlength="10" />
          <span class="text-danger font-weight-bold" id="phoneERR"></span>
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" class="form-control" placeholder="Enter Address" onchange="return addressValidation(this.value)" />
          <span class="text-danger font-weight-bold" id="addressERR"></span>
        </div>
        <div class="form-group">
          <label>Nationality</label>
          <input type="text" name="nationality" class="form-control" placeholder="Enter Nationality" onchange="return nationalityValidation(this.value)" />
          <span class="text-danger font-weight-bold" id="nationalityERR"></span>
        </div>
        <div class="form-group">
          <label>Date Of Birth</label>
          <input type="date" name="dob" class="form-control" placeholder="Enter Date Of Birth" onchange="return dobValidation(this.value)" />
          <span class="text-danger font-weight-bold" id="dobERR"></span>
        </div>
        <div class="form-group">
          <label>Education</label>
          <input type="text" name="education" class="form-control" placeholder="Enter Education" onchange="return eduValidation(this.value)" />
          <span class="text-danger font-weight-bold" id="eduERR"></span>
        </div>
        <div class="form-group">
          <label>Gender :</label>&nbsp;&nbsp;
          <label class="radio-inline">
            <input type="radio" name="gender" value="male">male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="female">female
          </label>
        </div>
        <div class="form-group" id="showBtn" align="center">
          <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/validation.js"></script>
</body>
</html>