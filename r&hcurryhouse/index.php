<?php
    
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

                //submit the form
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $dateofjourney = $_POST['dateofjourney'];
                $adult = $_POST['adult'];
                $child = $_POST['child'];
                $noofnights = $_POST['noofnights'];
                $nationality = $_POST['nationality'];
                $message = $_POST['message'];



                $to = "info@skysphere.co.in";
                $subject = "Mail From Website Home Page";
                $body = "";

                $body .="From: ".$name. "\r\n";
                $body .="Email: ".$email. "\r\n";
                $body .="Phone: ".$phone. "\r\n";
                $body .="Date of Journey: ".$dateofjourney. "\r\n";
                $body .="No of Adult: ".$adult. "\r\n";
                $body .="No of Child: ".$child. "\r\n";
                $body .="No of Night: ".$noofnights. "\r\n";
                $body .="Nationality: ".$nationality. "\r\n";
                $body .="Message: ".$message. "\r\n";
                
                
                $success = mail($to, $subject, $body);
                if (!$success) {
                    $errorMessage = error_get_last()['message'];
                    header("Location:index.php?err");
                    //print_r($errorMessage);
                }
                $message_sent = true;
                header("Location:index.php?msg");
        }  
    }
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>R & H Curry House</title>


      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200,300,400,400i,500,600,700,800,900%7CSatisfy&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

      <!-- plugin scripts -->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/swiper.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="assets/css/tripo-icons.css">
      <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
      <link rel="stylesheet" href="assets/css/vegas.min.css">
      <link rel="stylesheet" href="assets/css/nouislider.min.css">
      <link rel="stylesheet" href="assets/css/nouislider.pips.css">
      <link rel="stylesheet" href="assets/css/skysphere-style.css">

      <!-- phone number flage styles -->
        <link rel="stylesheet" href="assets/build/css/intlTelInput.css" />


      <!-- template styles -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/responsive.css">




   </head>
   <body class="t-body" style="margin:0;">

      

      <div class="page-wrapper">

       





         

         <section class="requestpackages pt-50 pb-50">
            <div class="container">

               <div class="block-title text-center">
                  <!-- <p>Get</p> -->
                  <h2>Time Sheet</h2>
                  <!-- <p class="tit-desc w-50">Dubai's diverse sections include iconic landmarks like Burj Khalifa and Burj Al Arab, enticing global vacationers. Tour packages available.</p> -->
               </div>
               <!-- /.block-title -->
               <?php
                if(isset($_GET['msg'])){
                    echo "<div>success message</div>";
                }
                if(isset($_GET['err'])){
                    echo "<div>error message</div>";
                }
                ?>


               <div class="row justify-content-center">
                  <div class="col-lg-12">

                    <form action="index.php" method="POST" class="contact-one__form" autocomplete="off">

                     <div class="tour-details__review-form border-r-25 mb-25">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row mb-0">
                                            <div class="input-group">
                                                <label class="col-sm-12 col-form-label">Employer's Name</label>
                                                <div class="col-md-12">
                                                      <input type="text" name="employersname" placeholder="Enter Employer's Name" required>
                                                </div><!-- /.input-group -->
                                          </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row mb-0">
                                            <div class="input-group">
                                                <label class="col-sm-12 col-form-label">Employee's Name</label>
                                                <div class="col-md-12">
                                                      <input type="text" name="employersname" placeholder="Enter Employee's Name" required>
                                                </div><!-- /.input-group -->
                                          </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row mb-0">
                                            <div class="input-group">
                                                <label class="col-sm-12 col-form-label">Pay Period From</label>
                                                <div class="col-md-12">
                                                      <input type="text" name="payperiodfrom" data-provide="datepicker" placeholder="Ex: 13/11/2023" required>
                                                </div><!-- /.input-group -->
                                          </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row mb-0">
                                            <div class="input-group">
                                                <label class="col-sm-12 col-form-label">Pay Period To</label>
                                                <div class="col-md-12">
                                                      <input type="text" name="payperiodto" data-provide="datepicker" placeholder="Ex: 19/11/2023" required>
                                                </div><!-- /.input-group -->
                                          </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row mb-0">
                                            <div class="input-group">
                                                <label class="col-sm-12 col-form-label">Pay date</label>
                                                <div class="col-md-12">
                                                      <input type="text" name="paydate" data-provide="datepicker" placeholder="Pay date" required>
                                                </div><!-- /.input-group -->
                                          </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                </div>
                              </div><!-- /.row low-gutters -->
                          
                     


                     <div class="tour-details__review-form border-r-25 mb-25">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-header">
                                        <h4>Employee's ordinary Hours and Minuts per week/ fortnight/ other</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Day</label>
                                            <div class="col-md-12">
                                                  <select id="inputState" name="day" class="form-control">
                                                    <option selected>Choose Day</option>
                                                    <option>Monday</option>
                                                    <option>Thesday</option>
                                                    <option>Wednesday</option>
                                                    <option>Thrusday</option>
                                                    <option>Friday</option>
                                                    <option>Saturday</option>
                                                    <option>Sunday</option>
                                                  </select>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Date</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="date" data-provide="datepicker" placeholder="Ex: 19/11/2023" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Start Time</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="starttime" placeholder="Ex: 8:30am" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Start Time of unpaid break</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="starttimeofunpaidbreak" placeholder="Ex: 12:30pm" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Restart time</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="restarttime" placeholder="Ex: 1:30pm" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Finish Time</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="finishtime" placeholder="Ex: 5:00pm" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Other times of unpaid break</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="starttimeofunpaidbreak" placeholder="Ex: 12:30pm" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Total break time</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="totalbreaktime" placeholder="Ex: 2:30" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-header mt-50">
                                        <h4>Overtime</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Start Time</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="starttime" placeholder="Ex: 8:30am" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Start Time of unpaid break</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="starttimeofunpaidbreak" placeholder="Ex: 12:30pm" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Restart time</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="restarttime" placeholder="Ex: 1:30pm" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Finish Time</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="finishtime" placeholder="Ex: 5:00pm" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Total break time</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="totalbreaktime" placeholder="Ex: 2:30" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-header mt-50">
                                        <h4>Leave</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Type</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="starttime" placeholder="Ex: Personal Leave, Etc" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row mb-0">
                                        <div class="input-group">
                                            <label class="col-sm-12 col-form-label">Hours Minuts unpaid break</label>
                                            <div class="col-md-12">
                                                  <input type="text" name="Hours minuts unpaid break" placeholder="Hours minuts unpaid break" required>
                                            </div><!-- /.input-group -->
                                      </div><!-- /.col-md-6 -->
                                    </div>
                                </div>
                            </div>


                     </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group justify-content-center">
                                        <button type="submit" class="thm-btn fill-btn black">Add One more Day</button>
                                    </div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="input-group justify-content-center">
                                        <button type="submit" class="thm-btn fill-btn black">Submit Your Timesheet</button>
                                </div><!-- /.col-md-6 -->
                            </div>  

                     </form>



                  </div>
               </div>
            </div>
         </section>


        

      </div>
      <!-- /.page-wrapper -->




      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/waypoints.min.js"></script>
      <script src="assets/js/jquery.counterup.min.js"></script>
      <script src="assets/js/TweenMax.min.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/jquery.ajaxchimp.min.js"></script>
      <script src="assets/js/swiper.min.js"></script>
      <script src="assets/js/typed-2.0.11.js"></script>
      <script src="assets/js/vegas.min.js"></script>
      <script src="assets/js/jquery.validate.min.js"></script>
      <script src="assets/js/bootstrap-select.min.js"></script>
      <script src="assets/js/countdown.min.js"></script>
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="assets/js/bootstrap-datepicker.min.js"></script>
      <script src="assets/js/nouislider.min.js"></script>
      <script src="assets/js/isotope.js"></script>
      <!-- template scripts -->
      <script src="assets/js/theme.js"></script>
      


   </body>
</html>