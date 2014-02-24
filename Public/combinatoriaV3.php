<!DOCTYPE HTML>
<html>
<head>
    <title>Combinatoria</title>
    <!-- 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">  
    
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>C&aacutelculo de Cm,n</h1>
        </div>
<?php
        // check for a successful form post
        if (isset($_GET['s'])) echo '<div class=\"alert alert-success\">'.$_GET['s'].'</div>';
        // check for a form error
        elseif (isset($_GET['e'])) echo '<div class=\"alert alert-error\">'.$_GET['e'].'</div>';
?>
   
        <form method="POST" action='calculoCombinatoriaV3.php' class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input1">M</label>
                <div class="controls">
                    <input type="text" name="m" id="input1" placeholder="Escribe un valor para M">
                </div>
            </div>
            <div class="control-group">
				<label class="control-label" for="input2">N</label>
                <div class="controls">
                    <input type="text" name="n" id="imput2" placeholder="Escribe un valor para N">
                </div>
            </div>
             
            <div class="control-group">
            <label class="control-label" for="input3"></label>
            </div>
             
            <div class="form-actions">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </form>
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
</body>
</html>