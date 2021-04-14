<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--<div class="jumbotron text-center">
	<h2>MASTER KARYAWAN</h2>
</div>

<section class="container">
	<div class="row">
		Ini Halaman Register
	</div>
</section>-->



<div class="header">
  <h1>Aplikasi</h1>
  <p>Dibuat Oleh Alief Fikrul Hakam</p>
</div>

<div class="row">
  <div class="column">
  	<p></p>
  </div>
  
  <div class="column" style="align-content: center; text-align: center;">
    <h2 style="text-align:center;">Registration</h2>
    <form action="#">
    <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" placeholder="+6282229323836">
      <br>
    <label for="pass">Password:</label>
      <input type="password" id="pass" name="pass" placeholder='Password'>
      <br>
      <label for="country">Country:</label>
      <input type="text" id="country" name="country" placeholder="Indonesia">
      <br>
      <br>
    <input type="submit" value="Register">
	</form>
  </div>
  
  <div class="column">
  	<p></p>
  </div>
</div>

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>

