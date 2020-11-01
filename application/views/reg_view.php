<!DOCTYPE html>
<head>
</head>
<body>
<form method="post" name="reg" enctype="multipart/form-data" action="<?php echo base_url().'index.php/Registration/insert';?>">

<pre>


<label> name </label>
<input type="text" name="name" value="<?php echo set_value('name')?>" id="name">
<?php echo form_error('name');?>
<label> address</label>
<textarea name="add" cols="30" rows="5"></textarea>
<label> email </label>
<input type="text" name="email" id="email">
<label> gender </label>
<input type="radio" name="gndr" value="male"/> male<input type="radio" name="gndr" value="female"/> female
<label> mob </label>
<input type="text" name="mob" id="mob"/>
<label> upload image </label>
<input type="file" name="img">
<input type="submit" name="insert">
</pre>
</form>




</body>
</html>