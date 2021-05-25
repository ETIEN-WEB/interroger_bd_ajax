<!DOCTYPE HTML>
<html lang="en">
    
    <head>
        
        <title>  </title>
        
         <meta charset="utf-8"> 
         <meta http-equiv="X-UA-Compatible" content ="IE-edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styleform.css">
        <!-- <script src="jquery.min.js"></script> -->

        <script>

                $(document).ready(function(){

                    $('#country').on('change',function(){
                        var countryID = $(this).val();
                        if(countryID){
                            $.get(
                                "inAjax.php",
                                {country: countryID},
                                function(data){
                                    $('#city').html(data);
                                }

                                );
                        }else {
                            $('#city').html('<option> Select country first </option>') 

                        }
                    });


                });



        </script>
        
       
<!--
        <style >
            
            
        </style>
-->
    
    <!--  <link rel="stylesheet" href= "styles.css">  -->
    </head>

    <body>
        
        <div class="container"> 
            <div class="row">
                
                <div class="col-md-4" style="float: none;
                    margin: 0 auto">
                    <h1 class="text-center"> dependant select box </h1>

                    <form class="text-center"> 
                        <div class="form-group">
                            <label> select country </label>
                            <select class="form-control" id="country"> 
                                <option> select country </option>
                                <?php  

                                    include ('connect.php');
                                    $query = "SELECT * FROM country";
                                    $do = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($do)){
                                    echo '<option value="'.$row['id'].'">'.$row['name'].' </option>';
                                }
                                ?>
                            </select>
                            <br>
                            <label> select city</label>
                            <select class="form-control" id="city">
                                <option> select country first </option>
                            </select>
                        </div>
                        

                    </form>

                </div>
            </div>

        </div>
    </body>