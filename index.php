<?php 
$title = "Index";
require_once "includes/header.php";
require_once "db/conn.php";
?>
    <h1 class= "text-center">Registeration for IT Conference</h1>
    
    <form method ="post" action="success.php ">
    <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" >
  </div>
  <div class="form-group">
    <label for="dob"> Date of Birth </label>
    <input type="text" class="form-control" id="dob" name="dob" >
  </div>
  <div class="form-group" >
    <label for="specialty">Area of Expertise</label>
    <select class="form-control" id="specialty" name ="specialty">
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>
    </select>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email"  name="email" aria-describedby="contactHelp" >
    <small id="contactHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="contact">Contact Number</label>
    <input type="text" class="form-control" id="contact" name="contact" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" name="submit" class="btn btn-primary btn-block" >Submit</button>
</form>
<br/><br/><br/><br/><br/><br/>
    <?php require_once "includes/footer.php";?>
    