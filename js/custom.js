$(document).ready(function(){
             //alert("hai");
            $("button").click(function(){
              
               fname=$("#fname").val();
               //alert(fname);
               phno=$("#phno").val();
               //alert(phno);
               email=$("#email").val();
               //alert(email);
               aadhar=$("#aadhar").val();
               //alert(aadhar);
               pwd1=$("#pwd1").val();
               //alert(pwd1);
               pwd2=$("#pwd2").val();
               //alert(pwd2);
               let expression=/^[\w\-\.\+]+\@inmar\.com$/;
               let expression2=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                let validate=true; 
               if(fname.length<8 || fname.length==0)
               {
                $("#infname").html("name must be  8 characters length");
                $("#fname").css({"border-color":"red"});
                  validate=false;
                }

               else{

                  $("#infname").html("");
                  $("#fname").css({"border-color":""});  

                }

                if(phno.length>10 || phno.length==0)
                {
                
                $("#inphno").html("enter correct ph.no");
                $("#phno").css({"border-color":"red"});
                validate=false;
                }

                else
                 {
                  $("#inphno").html("");
                  $("#phno").css({"border-color":""});
                 }

                if(aadhar.length>12 || phno.length==0)
                {
                  $("#inaadhar").html("enter correct aaadhar no");
                  $("#aadhar").css({"border-color":"red"});
                  validate=false;
  
                }
                else
                {
                  $("#inaadhar").html("");
                  $("#aadhar").css({"border-color":""});
                 
                }

               if(!expression.test(email))
                {
                  $("#inmail").html("check your mail");
                  $("#email").css({"border-color":"red"});
                   validate=false;
                }
                else
                {
                  $("#inmail").html("");
                  $("#mail").css({"border-color":""});
                 
                }

                if(!expression2.test(pwd1))
                {
                  $("#inpswd1").html("password contain atleast capital,small,number");
                  $("#pwd1").css({"border-color":"red"});
                  validate=false;
                }
                else
                {
                  $("#inpswd1").html("");
                  $("#pwd1").css({"border-color":""});
                 
                }
               
               if(pwd1!=pwd2)
                {
                   $("#inpswd2").html("password not matched");
                   $("#pwd2").css({"border-color":"red"});
                   validate=false;
                }

                else 
                 {
                  $("#inpswd2").html("");
                  $("#pwd2").css({"border-color":""});
                  
                }

                  //alert(validate);
                 
                  if(validate)
                  {
                    $("#form1").submit();
                  }
           
            });
           });


         