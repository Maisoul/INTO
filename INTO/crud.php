<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
  <?php require_once 'process.php'; ?> 
	<div class="header">
		<h2>CRUD</h2>		
	</div>
	<form method="POST" action="process.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Username</label>	
			<input type="text" name="username" value="<?php echo$username; ?>" placeholder="Enter your name">	
		</div>
		<div class="input-group">
			<label>Email</label>	
			<input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter your email">	
		</div>
		<div class="input-group">
			<label>Level</label>	
			<input type="text" name="level" value="<?php echo $level; ?>" placeholder="Educational level">	
		</div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Enter password">      
    </div>
		<div class="input-group">
      <?php 
      if ($update == true):
       ?>
       <button type="submit" name="update" class="btn">UPDATE</button>
       <?php else: ?>
			<button type="submit" name="SAVE" class="btn">ADD</button>
    <?php endif; ?>
  </div>
	</form>
</body>
</html>