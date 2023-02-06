<?php  include 'connection.php';
       include 'validations.php'; 
       include 'success.php'; 
       include 'includes/header.php';
       include 'includes/navbar.php';
       include 'includes/main-content.php';
?>

           
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