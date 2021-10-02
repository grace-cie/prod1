<body>
    
<head>
    <title>Student Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<center>
<div class="f_container">
<p class="headtitle">Student Form</p>

<form method="GET" action="submit.php">
    <input type="text" name="lname" value="" placeholder="Last Name">
    <input type="text" name="fname" value="" placeholder="First Name">
    <input type="text" name="middle" value="" placeholder="Middle Initial">
    <br>
    <label for="course">Course:</label>
    <select name="course[]" id="course">
      <option value="BSCS">BSCS</option>
      <option value="BSIT">BSIT</option>
      <option value="BSHM">BSHM</option>
      <option value="BSBA">BSBA</option>
    </select>
    <br>
    <label for="yrlvl">Year Level:</label>
    <select name="yrlvl[]" id="yrlvl">
      <option value="1st Year">1st Year</option>
      <option value="2nd Year">2nd Year</option>
      <option value="3rd Year">3rd Year</option>
      <option value="4th Year">4th Year</option>
    </select>
    <br>
    <label for="gender">Gender:</label>
    <select name="gender[]" id="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    <br>
    <label for="status">Status:</label>
    <select name="status[]" id="status">
      <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Broken">Broken</option>
    </select>
    <br>
    <input type="text" name="fathname" value="" placeholder="Father's Name">
    <input type="text" name="modname" value="" placeholder="Mother's Name">
    <input type="text" name="phonenum" value="" placeholder="Phone Number">
    <br>
    <input type="submit" name="submit" Value="Submit">
    
</form>

</div>
</center>

</body>