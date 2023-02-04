<script src="https://pay2.izakat.com/argon/vendor/jquery/dist/jquery.min.js"></script>
      <script>
         $(document).ready(function()
         {
            
             $.ZakatAmount = function()
             {
                 /* rate = $('select[name=zakat_rates] option:selected').data('amount'); */
                 rate = $('select[name=zakat_rates]').val();
                 dependents = $('select[name=dependents]').val();
                 
                  $('input[id=zakat]').val(parseFloat(rate * dependents).toFixed(2));
                 $('#zakatW').html(parseFloat(rate * dependents).toFixed(2));

            
             };
             

          
      
             $.ZakatAmount();

             $('select[name=zakat_rates]').on('change', function()
             {
                 $.ZakatAmount();
             });
         
             $('select[name=dependents]').on('change', function()
             {
                 $.ZakatAmount();
             });
         });

      </script>


      <script>
         $('#zakatfrm').keyup(function () {
            $('#get_name').text($(this).val());
            });
      </script>




<style>
     .creditcard{
        background: #4D3F98;
        color: #000000;
        border-radius: 15px;
        max-width: 100%;
        height: auto;
        margin: 25px auto;
        padding: 20px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }


      input.mycreditcard {
        background: none;
        text-transform: uppercase;
        color: #000000 !important;
        width: 100%;
        margin-bottom: 6px;
        border-bottom: none;
        font-size: 15px;
        letter-spacing: 0.16em;
        padding: 0px;
        font-family: 'Assistant', sans-serif;
      }


      .creditcard h1{
        font-size: 11px;
        color: #000000;
        font-family: 'Roboto', sans-serif;
        text-align: right;
        padding: 2px;
        letter-spacing: 0.5em;
        text-transform: uppercase;
        font-weight: 300;
        margin-bottom: 10px;
      }


      input{
        -webkit-appearance: none;
        appearance: none;
        background: rgba(255,255,255,0.75);
        padding: 10px;
        font-size: 14px;
        font-family: 'Roboto', sans-serif;
        border: none;
        border-bottom: 1px solid #5C97B8;
        border-radius: 30px;
        width: 90%;
        margin-bottom: 10px;
        outline: none;
      }



      input:focus{
      border-bottom: 1px solid #391262;
      }


      .creditcard h1{
        font-size: 11px;
        color: #000000;
        font-family: 'Roboto', sans-serif;
        text-align: right;
        padding: 2px;
        letter-spacing: 0.5em;
        text-transform: uppercase;
        font-weight: 300;
        margin-bottom: 10px;
      }




</style>








<script>

      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
      <script>
         var win = navigator.platform.indexOf('Win') > -1;
         if (win && document.querySelector('#sidenav-scrollbar')) {
           var options = {
             damping: '0.5'
           }
           Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
         }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/argon-dashboard.min.js?v=2.0.2"></script>



      <script>

        $("#save").click( function() {
      $.post( $("#zakatfrm").attr("action"), 
              $("#zakatfrm :input").serializeArray(), 
              function(info){ $("#result").html(info); 
      });
    });
      
      
      
      </script>
    