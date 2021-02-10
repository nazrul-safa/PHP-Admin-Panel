<?php
require_once 'includes/header.php';
require_once 'includes/nav.php';
require_once 'includes/db.php';
$id=$_GET['id'];
$select_user = "SELECT id, full_name, email_address, gender FROM users WHERE id=$id ";
$qi = mysqli_query($db_connect, $select_user);
$assoc = mysqli_fetch_assoc($qi);


?>  
        <div class="row-mt-3">
        <div class="card text-white bg-dark mb-3" >
        <div class="card-header">Edit user
         
        </div>
        <div class="card-body">
            
             <form action="edit_user_post.php" method="post">
                    <div class="form-group">
                        <input type="hidden" value="<?=$assoc['id']?>" name="id">
                        <input type="hidden" value="<?=$assoc['full_name']?>" name="old_full_name">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter full name" value="<?php echo $assoc['full_name'] ?>" name="full_name">
                        
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Enter Email" value="<?php echo $assoc['email_address'] ?>" name="email_address">
                        
                    </div>
                    
                    <div class="form-group">
                    <label>Gender</label>
                    <br>
                    <input type="radio" id="male" name="gender" value="male" 
                    <?php
                    if($assoc['gender']=='male')
                    {
                      echo "checked";
                    }
                    ?>
                    >
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female" 
                    <?php
                    if($assoc['gender']=='female')
                    {
                      echo "checked";
                    }
                    ?>
                    >
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other" 
                     <?php
                    if($assoc['gender']=='other')
                    {
                      echo "checked";
                    }
                    ?>
                    >
                    <label for="other">Other</label>

                        
                        
                    </div>

                    
                    <div class=text-center>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
              </form>
            
             </div> 
           </div>
         </div> 
       

    
    
<?php
include_once 'includes/footer.php';
?>     