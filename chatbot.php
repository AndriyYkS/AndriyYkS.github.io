<?php 
    
    $active='Contact';
    include("includes/header.php");

?>
  
   <head>
 <!--     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Shop</title>
    -->
    <link rel="stylesheet" href="style_b.css">
  <!--   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    -->
</head>
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Contact Us
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Feel free to Contact Us</h2>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                               
                               If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                       
                       <form action="" method="post"><!-- form Begin -->

                           
                      <div class="wrapper">
                      <div class="title">Store Shop</div>
                      <div class="form">
                          <div class="bot-inbox inbox">
                              <div class="icon">
                                  <i class="fas fa-user"></i>
                              </div>
                              <div class="msg-header">
                                  <p>Hello there, how can I help you?</p>
                              </div>
                          </div>
                      </div>
                      <div class="typing-field">
                          <div class="input-data">
                              <input id="data" type="text" placeholder="Type something here.." required>
                              <button id="send-btn">Send</button>
                          </div>
                      </div>
                  </div>
                            <script>
                                $(document).ready(function(){
                                    $("#send-btn").on("click", function(){
                                        $value = $("#data").val();
                                        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                                        $(".form").append($msg);
                                        $("#data").val('');
                                        
                                        // start ajax code
                                        $.ajax({
                                            url: 'message.php',
                                            type: 'POST',
                                            data: 'text='+$value,
                                            success: function(result){
                                                $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                                                $(".form").append($replay);
                                                // when chat goes down the scroll bar automatically comes to the bottom
                                                $(".form").scrollTop($(".form")[0].scrollHeight);
                                            }
                                        });
                                    });
                                });
                            </script>

                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>