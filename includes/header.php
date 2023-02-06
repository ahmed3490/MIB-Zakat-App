<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
      

      <link rel="icon" sizes="76x76"  type="image/png" href="./assets/img/apple-icon.png">
      <link rel="icon" sizes="16x16"  type="image/png" href="./assets/img/favicon-16x16">
      <link rel="icon" sizes="32x32"  type="image/png" href="./assets/img/favicon-32x32">


      



      <title>
         Maldives Islamic Bank Zakat Payment
      </title>
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <!-- Nucleo Icons -->
      <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- CSS Files -->
      <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



      <script type="text/javascript">
    $(document).ready(function(){

        $("#select_atoll").change(function(){
            var atollid = $(this).val();

            $.ajax({
                url: 'getIslands.php',
                type: 'post',
                data: {atoll:atollid},
                dataType: 'json',
                success:function(response){

                    var len = response.length;

                    $("#select_island").empty();
                    for( var i = 0; i<len; i++){
                        var id = response[i]['id'];
                        var name = response[i]['name'];

                        $("#select_island").append("<option value='"+id+"'>"+name+"</option>");

                    }
                }
            });
        });

    });
</script>












   </head>