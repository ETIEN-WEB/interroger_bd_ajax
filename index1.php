<?php 
    require_once ("conec_bd_exo.php");
    $db = Database::connect();
    $statement = $db->query("SELECT * FROM liste_id");  
    ?>



<!DOCTYPE HTML>
<html>
    
    <head>
        
        <title>  </title>
        
         <meta charset="utf-8"> 
          <meta name="viewport" content="width=device-width, initial=scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styleform.css">
        <script src="js/script.js"></script>
        
       
<!--
        <style >
            
            
        </style>
-->
    
    <!--  <link rel="stylesheet" href= "styles.css">  -->
    </head>
    
    
    <body>
        
         <form action="">
             
             <div class="row">
                 <div class="col-sm-4"> 
                     <div class="form-group">
                         <select id="liste_id" class="form-control"> 
                            <option value="0"> Sélectionner votre region</option>

   <?php  while ($liste_id = $statement->fetch()){ ?>
       <option value="<?php echo($liste_id['liste_num']);?>"> 
       <?php echo $liste_id['liste_nom']; ?> 

       </option>

        <?php } ?> 

                         </select>
                     
                     </div>
                 
                 </div>


                 
             </div>
        
        
        </form>
        
--------------------------------------------------


        <form action="">
             
             <div class="row">
                 <div class="col-sm-4"> 
                     <div class="form-group">
                         <select id="liste_id" class="form-control"> 
                            <option value="0"> Sélectionner votre region</option>

   <?php  while ($liste_id = $statement->fetch()){ ?>
       <option value="<?php echo($liste_id['liste_num']);?>"> 
       <?php echo $liste_id['liste_nom']; ?> 

       </option>

        <?php } ?> 

                         </select>
                     
                     </div>
                 
                 </div>


                 
             </div>
        
        
        </form>
        
        
        
        
    </body>
</html>

