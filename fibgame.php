<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Golden Ratio</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/icon-type" href="img/icon.svg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php if(isset($_POST['numo'])||isset($_POST['test'])) { ?>
       <script>
	$(document).ready(function(){
		$("#loginModal").modal('show');
	});
    </script> <?php } ?>
    
    </head>
    <body>
       
       <?php include 'head.php'; 
       if(isset($_POST['numo'])){
              $a = $_POST['numo'];
              $b = $_POST['numt'];
       }
       ?>
        
        <div style="margin-top: 58px;">
            <img src="img/Ram.jpg_large" width="65%"/><img src="img/gratiog.gif" width="35%"/>
        </div>
        <br>
        <br>
        <div class="content"></div>
        <br>
        
        <div style="background-color: #17202A" class="container">
            <center>
                <h2 style="font-family: cursive; color: #D4AC0D"><b>HERE IS A SIMPLE MAGICAL ACTIVITY</b></h2>
            </center>
            <br>
            <center>
            <p style="font-family: 'Lobster', cursive; font-size: 23px; color: #ffffff">Everything in this world has a relation with the maths. We can take the example of Golden Ratio in maths which can be
                found in many different fields, which you can see in the examples tab.<br><br>
            Now we will see that how any two number of our choice of the maths can give the Golden Ratio. It seems magical, yes it is.
            Lets start this game of Golden Ratio and take any two random numbers...</p>
            </center>
            <center style="margin-top: 50px; margin-bottom: 30px;"><a href="#"data-toggle="modal" data-target="#loginModal" role="button" class="btn btn-primary">START</a></center>
        </div>
        <br>
        <br>
        <div class="content"></div><br>
        <div class="content"></div>
        <br>
        <div class="container"><center><a href="index.php" style="float: left; font-size: 16px;">Home</a><a href="examples.php" style="float: right; font-size: 16px">Application Golden Ratio</a></center></div>
        <br>
        
         <div class="modal fade" id="loginModal" data-keyboard="false" data-backdrop="static">
             
              <div class="modal-header other">
                  <center><h2 class="modal-title texter"><b>Golden Ratio</b></h2></center>
              </div>
             
             <div class="modal-body">
                     
                 <div style="color: #EFF5F5; background-color:rgba(0, 0, 0, 0.7);" class="col-sm-6 col-sm-offset-3 col-xs-12">   
                     
<!--if-->       <?php if(!isset($_POST['numo'])) { ?>
                    <br><h4 style="font-family: cursive"><b style="color:#B03A2E;">NOTE : </b>You can take the same numbers as well as you can also take the zero in one of the section below but you can not take zero in both the sections below (0/0 not exists)</h4>
                     <br><br>
                     <form method="POST" action="">
                         <label for="num">Enter First Number :</label>
                         <input type="number" class="form-control" name="numo" id="num" placeholder="enter any random first number" required="true"><br>
                         
                         <label for="snum">Enter Second Number :</label>
                         <input type="number" class="form-control" name="numt" id="snum" placeholder="enter any random second number" required="true"><br>
                     <button type="submit" class="btn btn-primary" value="submit">Go</button> <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                     </form>
<!--else-->         <?php } else {
                         if(($a==0)&&($b==0)) { ?>
                            <br><h4><b>Something that doesn't exist will never provide the Golden ratio. You can not take the zero in both the fields</b></h4><br><br>
                            <form method="POST" action="">
                               <button type="submit" class="btn btn-success" name="test" value="1"><span class="glyphicon glyphicon-arrow-left"></span> Go back</button>
                            </form>
                   <?php } else { ?>
                            <h3 style="font-family: cursive; color: #B03A2E"><center>This is up to 20 and the ratio of last two numbers will be GOLDEN RATIO</center></h3>
                            <?php for($i=0;$i<20;$i++) {
                                   $z = $a;
                                   $c = $b;
                                   $b = $a + $b;
                                   $a = $c;?>
                            <h4><b style="color: #B03A2E"><?php echo $i+1;?> - </b><center><?php echo $z;?><b style="color: #B03A2E"> + </b><?php echo $c; ?><b style="color: #B03A2E"> = </b><?php echo $b; ?>
                                </center></h4>
                            <div class="cont"></div>
                               <?php } $ratio = $b/$a;?>
                            <br><center><p style="font-size: 16px;">RATIO <span class="glyphicon glyphicon-arrow-right"></span> <?php echo $b;?><b style="color: #B03A2E"> / </b><?php echo $a;?>
                                    <b style="color: #B03A2E"> = </b><b style="color: #D4AC0D"><?php echo $ratio;?></b></p></center>
                            <br>
                            <center>
                                <h4>We are simply taking <b style="color: #B03A2E">number 1</b> and <b style="color: #B03A2E">number 2</b> and on add we got <b style="color: #B03A2E">number 3</b> then we add <b style="color: #B03A2E">number 2</b> and <b style="color: #B03A2E">number 3</b> and we got <b style="color: #B03A2E">number 4</b> and so on.
                                    After doing this <b style="color: #B03A2E">20 times</b> the ratio of the last two numbers will be the <b style="color:#D4AC0D">GOLDEN RATIO</b></h4>
                                <br>
                           <form method="POST" action="">
                               <button type="submit" class="btn btn-primary" name="test" value="1"><span class="glyphicon glyphicon-arrow-left"></span>Again Try</button> <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </form>
                            </center><br><br>
                        <?php }} ?>
                 </div>
             </div>
         </div>
    </body>
</html>
