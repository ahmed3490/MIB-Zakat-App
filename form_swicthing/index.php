<?php 
include('header.php');
?>
<body>
<div class="container">
<script type="text/javascript">
jQuery(document).ready( function () {
$(".form2").hide();

$("#click").click( function() {

$(".form1").hide();
$(".form2").fadeIn("slow");

	});
	
	$("#click1").click( function() {

$(".form2").hide();
$(".form1").fadeIn("slow");

	});
	


	});
</script>
<br><br>

<form class="form-horizontal">
   <div class="form1">
      <div class="control-group">
         <label class="control-label" for="inputEmail">FirstName</label>
         <div class="controls">
            <input type="text" id="inputEmail" placeholder="FirstName" required>
         </div>
      </div>
      <div class="control-group">
         <label class="control-label" for="inputPassword">LastName</label>
         <div class="controls">
            <input type="text" id="inputPassword" placeholder="LastName" required>
         </div>
      </div>
      <div class="control-group">
         <label class="control-label" for="inputPassword">MiddleName</label>
         <div class="controls">
            <input type="text" id="inputPassword" placeholder="MiddleName" required>
         </div>
      </div>
      <div class="control-group">
         <label class="control-label" for="inputPassword">Address</label>
         <div class="controls">
            <input type="text" id="inputPassword" placeholder="Address" required>
         </div>
      </div>
      <div class="control-group">
         <label class="control-label" for="inputEmail">Username</label>
         <div class="controls">
            <input type="text" id="inputEmail" placeholder="Username" required>
         </div>
      </div>
      <div class="control-group">
         <label class="control-label" for="inputPassword">Password</label>
         <div class="controls">
            <input type="password" id="inputPassword" placeholder="Password" required>
         </div>
      </div>

      <div class="control-group">
         <label class="control-label" for="inputPassword">Number of dependents</label>
         <div class="controls">
            <select class="form-select" aria-label="Default select example" name = "bilangan">
                <option selected>Please select</option>
                <option value="1" >1 orang</option>
                <option value="2" >2 orang</option>
                <option value="3" >3 orang</option>
                <option value="4" >4 orang</option>
                <option value="5" >5 orang</option>
                <option value="6" >6 orang</option>
                <option value="7" >7 orang</option>
                <option value="8" >8 orang</option>
                <option value="9" >9 orang</option>
                <option value="10" >10 orang</option>
                <option value="11" >11 orang</option>
                <option value="12" >12 orang</option>
                <option value="13" >13 orang</option>
                <option value="14" >14 orang</option>
                <option value="15" >15 orang</option>
                <option value="16" >16 orang</option>
                <option value="17" >17 orang</option>
                <option value="18" >18 orang</option>
                <option value="19" >19 orang</option>
                <option value="20" >20 orang</option>
                <option value="21" >21 orang</option>
                <option value="22" >22 orang</option>
                <option value="23" >23 orang</option>
                <option value="24" >24 orang</option>
                <option value="25" >25 orang</option>
                <option value="26" >26 orang</option>
                <option value="27" >27 orang</option>
                <option value="28" >28 orang</option>
                <option value="29" >29 orang</option>
                <option value="30" >30 orang</option>
          </select>
    </div>
</div>

<div class="control-group">
         <label class="control-label" for="inputPassword">Zakat rates</label>
         <div class="controls">
            <select class="form-select" aria-label="Default select example" name="kadar_zakat">
                <option selected>Select zakat rates</option>
                <option value="34" data-amount="7" >RM7.00</option>
                <option value="35" data-amount="14" >RM14.00</option>
                <option value="36" data-amount="21" >RM21.00</option>
          </select>
    </div>
</div>

<div class="control-group">
         <label class="control-label" for="inputPassword">Zakat amount to be paid</label>
         <div class="controls">
         <label> RM  <input type="text" id="amaun" name="amaun[]"  readonly></label>
         </div>
      </div>



      <blockquote>
        I hereby issue the obligatory Zakat Fitrah on myself / dependents in lieu of rice as much as <strong>RM<span id="amaunW">0.00</span></strong> qada' untuk tahun ini kerana Allah Ta’ala.
     </blockquote>



      <div class="control-group">
         <div class="controls">
            <button type="submit" class="btn btn-info">Sign Up</button>
         </div>
      </div>









      <a href="#" id="click">Click Here to login</a>
   </div>
   <div class="form2">
      <div class="control-group">
         <label class="control-label" for="inputEmail">Username</label>
         <div class="controls">
            <input type="text" id="inputEmail" placeholder="Username" required>
         </div>
      </div>
      <div class="control-group">
         <label class="control-label" for="inputPassword">Password</label>
         <div class="controls">
            <input type="password" id="inputPassword" placeholder="Password" required>
         </div>
      </div>
      <div class="control-group">
         <div class="controls">
            <label class="checkbox">
            <input type="checkbox" required> Remember me
            </label>
            <button type="submit" class="btn btn-success">Login</button>
         </div>
      </div>
      <a href="#" id="click1"> Click Here to Sign Up</a>
   </div>
</form>






</div>
</body>
</html>


<script>
         $(document).ready(function()
         {
             $.kiraAmaunZakat = function()
             {
                 rate = $('select[name=kadar_zakat] option:selected').data('amount');
                 dependents = $('select[name=bilangan]').val();
                 
                 $('input[id=amaun]').val(parseFloat(rate * dependents).toFixed(2));
                 $('#amaunW').html(parseFloat(rate * dependents).toFixed(2));
             };
         
             $.kiraAmaunZakat();
         
             $('select[name=kadar_zakat]').on('change', function()
             {
                 $.kiraAmaunZakat();
             });
         
             $('select[name=bilangan]').on('change', function()
             {
                 $.kiraAmaunZakat();
             });
         });
      </script>