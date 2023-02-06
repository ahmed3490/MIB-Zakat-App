
<?php  include 'connection.php';
       include 'validations.php'; 
       include 'success.php'; 
   
?>

<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
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
 </head>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





<body class="">
      <div class="container position-sticky z-index-sticky top-0">
         <div class="row">
            <div class="col-12">
          <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
              <img src="assets/img/apple-icon2.png" alt="" width="200px" height ="50px">
            </a>
           <!--  <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button> -->
            
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/product/argon-dashboard" class="btn btn-sm mb-0 me-1 btn-primary">Switch to Dhivehi version?</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>












                  
               <!-- End Navbar -->
            </div>
         </div>
      </div>

      <main class="main-content  mt-0">
         <section>
            <div class="page-header min-vh-100">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                     <div class="card card-plain">
                        <div class="card-header pb-0 text-start"><br><br><br><br><br><br>
                           <h4 class="font-weight-bolder">Fitr Zakat Payment</h4>
                           <p class="mb-0">Enter required details to proceed with payment</p>
                        </div>

                        <div class="card-body">

                            
               <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?> "  id ="zakatfrm" method="post">
              <!-- User Name  -->
               <div class="form-group mb-3">
                   	<div class="main-content-container container-fluid px-1">

                    <input type="text"  id="Name" name="Name"  class="form-control  
                         <?php echo (!empty($name_error)) ? 'is-invalid' : ''; ?>
                         "placeholder=" Full name">
                    <span class="invalid-feedback"><?php echo $name_error;?></span>   
                     </div>
                  </div>


                  <!-- User ID Card -->
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group mb-3">
                   	<div class="main-content-container container-fluid px-1">
                    <input type="text"  id="ID" name="ID"  class="form-control  
                         <?php echo (!empty($ID_error)) ? 'is-invalid' : ''; ?>
                         "placeholder=" ID Card No:">
                    <span class="invalid-feedback"><?php echo $ID_error;?></span>   
                    </div>
                  </div>
             </div>

                       
                            
                 <!-- User Address  -->
                     <div class="col-lg-6">
                        <div class="form-group mb-3">
                      	<div class="main-content-container container-fluid px-1">
                            <input type="text"  id="Address" name="Address"  class="form-control  
                         <?php echo (!empty($address_error)) ? 'is-invalid' : ''; ?>
                         "placeholder=" Address">
                              <span class="invalid-feedback"><?php echo $address_error;?></span>   
                           </div>
                        </div>
                     </div>
                  </div>



                  
                  <!-- User Email -->
                  <div class="form-group mb-3">
                     	<div class="main-content-container container-fluid px-1">
                       <input type="text"  id="Email" name="Email"  class="form-control  
                         <?php echo (!empty($email_error)) ? 'is-invalid' : ''; ?>
                         "placeholder=" Email Address:">
                          <span class="invalid-feedback"><?php echo $email_error;?></span>
                     </div>
                  </div>

                           
                <!-- User Island --> 
                <div class="form-group mb-3">
                        <select class="form-control custom-select" id="select_island" name="select_island" required>
                         <option value="" selected="true" disabled="disabled" >Atoll and Island</option>
                  
                  <?php
                      while ($island = mysqli_fetch_array($all_islands,MYSQLI_ASSOC)):;
                   ?>

                  
                   <option value="<?php echo $island["id"];?>">
                   
                    <?php echo $island["name"];?>
                </option>
            <?php endwhile;?>
                        </select>
                </div>

                          
                            
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <select class="form-control custom-select" name="dependents" required>
                            <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Dependents</button>
                                    <option value="" selected="true" disabled="disabled" >Dependents</option>
                                    <option value="1" >1 person</option>
                                    <option value="2" >2 persons</option>
                                    <option value="3" >3 persons</option>
                                    <option value="4" >4 persons</option>
                                    <option value="5" >5 persons</option>
                                    <option value="6" >6 persons</option>
                                    <option value="7" >7 persons</option>
                                    <option value="8" >8 persons</option>
                                    <option value="9" >9 persons</option>
                            </select>
                        </div>
                    </div>


                       <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <select class="form-control custom-select" name="zakat_rates" required>
                                    <option value="" selected="true" disabled="disabled">Zakat Rates</option>
                                    <option value="12" >Normal Rice - MVR 12.00</option>
                                    <option value="77" >Thailand White Rice - MVR 77.00</option>
                                    <option value="72" >Red Rice - MVR 72.00</option>
                                    <option value="77" >Normal Baasmati Rice - MVR 77.00</option>
                                    <option value="90" >Medium Grain Basmati Rice - MVR 90.00</option>
                                    <option value="132" >Best Baasmati Rice - MVR 132.00</option>
                                    <option value="12" >Flour - MVR 12.00</option>
                                    <option value="75" >Premium Flour - MVR 75.00</option>
                            </select>
                        </div>
                    </div>
                </div>
                    </div>
                         
                    
                   
                            <!--  <div class="form-group mb-3">
                                 <div class="input-group input-group-alternative">
                                    <input class="form-control" placeholder="Sadat amount" type="number" name="nama_penuh" value="" >
                                 </div>
                              </div> -->

                           
                              <label for="payment_summary" class="form-control-label">Payment Summary</label>
                                   <input type="text" id="zakat"  name="zakat" class="form-control" readonly>
                           <br>

                           <div class="caption caption-md">
                              <blockquote>
                                 I hereby issue the obligatory Zakat Fitrah on myself / dependents in lieu of rice as much as <strong>MVR <span id="zakatW">0.00</span></strong>
                              </blockquote>
                           </div>

                           <div class="text-center">
                                <button id ="save" name="submit" class="btn btn-sm btn-primary btn-sm w-100 mt-4 mb-0">Pay Zakat</button>
                           </div>

               </form>
                           </div>
                         
                        </div>
                     </div>
                     <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" 
                           background-size: cover;">
                           <span class="mask bg-gradient-primary opacity-6"></span>
                           <h4 class="mt-5 text-white font-weight-bolder position-relative">" Abu Hurairah narrated that the Prophet said:"</h4><br>
                           <p class="text-white position-relative">“When you pay the Zakat you have fulfilled what is required of you.” (Al-Tirmidhi, Chapter 7, No. 618"</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <!--   Core JS Files   -->

     <?php include 'scripts.php'?>
   </body>
</html>