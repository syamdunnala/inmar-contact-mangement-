<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/angular.js"></script>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
  <?php
      header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  ?>
  <script type="text/javascript"> 
     (function(){
              
          var email= getCookie("test2");
          alert("welcome to dashboard "+email);
          var c=document.cookie;
          var mytest1=c.split(';');
            //alert(mytest1[0]+"  "+mytest1[1]);
          console.log(document.cookie);
          //var check=document.cookie;
          var i=mytest1[0].search("=");
          i=i+1;
          //var l=mytest1[1].length;
          //alert(l);
          if(mytest1[0].charAt(i)=="x")
          {
                //alert("working good");
          }
          else
          {
            console.log(document.cookie);
           window.location.assign("login.html");

            }
     }());

     function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

      function delcookie()
     {
        var c=document.cookie;
        var mytest1=c.split(';');
          //alert("before closing:"+mytest1[0]+" "+mytest1[1]);
        var v1=mytest1[0].substr(0,mytest1[0].search("="));
        var v2=mytest1[1].substr(0,mytest1[1].search("="));
        //alert(v1+"  "+v2);
        document.cookie = mytest1[0]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = mytest1[1]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        alert("close");
        window.location.assign("logout.php?p1="+v1+"&p2="+v2);
          

     }
    
    
     
        var mail=getCookie("test2");
        //alert(mail);

       var app=angular.module("myapp",[]);
       app.service("send_group_details",function($http){
            this.send_details=function(v){
                
                var request = $http({ 
                     method: "post", 
                     url: "group_create.php", 
                     headers:{'content-type':'application/x-www-form-urlencoded'}, 
                     transformRequest: function(obj) {
                                                  var str = [];
                                                  for(var p in obj)
                                                  {
                                                        //console.log(p);
                                                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                                  }                                                      
                                                  //alert(str.join("&"));
                                                    return str.join("&");
                                            },
                     data: { 
                         
                         gid: v.g_id,
                         gname:v.g_name,
                         owner_email:mail
                     } 
                 }); 
  
                 // Store the data-dump of the FORM scope. 
                 request.success( 
                     function( data ) { 

                         //v.message = data; 
                         //alert(JSON.stringify(data));
                         v.collect=data;
                         alert("Group created successfully");
                         v.onpageload();
                     } 
                 ); 


            }
       });
       app.service("add_contact",function($http){
            this.store=function(v){
                
                var request = $http({ 
                     method: "post", 
                     url: "store_contact.php", 
                     headers:{'content-type':'application/x-www-form-urlencoded'}, 
                     transformRequest: function(obj) {
                                                  var str = [];
                                                  for(var p in obj)
                                                  {
                                                        //console.log(p);
                                                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                                  }                                                      
                                                  //alert(str.join("&"));
                                                    return str.join("&");
                                            },
                     data: { 
                         
                         gid: v.temp_group_id,
                         contactname:v.contact_name,
                         phonenumber:v.phone,
                         cmail:v.mail_id
                     } 
                 }); 
  
                 // Store the data-dump of the FORM scope. 
                 request.success( 
                     function( data ) { 

                         //v.message = data; 
                         //alert(JSON.stringify(data));
                         v.collect=data;
                         alert("contact added");
                         v.onpageload();
                     } 
                 ); 


            }
       });
       

      app.service("retrieve_contact",function($http){
            this.store=function(v,group_id){
                      //alert("group id:"+group_id);
                
                     var request = $http({ 
                     method: "post", 
                     url: "display_contact.php", 
                     headers:{'content-type':'application/x-www-form-urlencoded'}, 
                     transformRequest: function(obj) {
                                                  var str = [];
                                                  for(var p in obj)
                                                  {
                                                        //console.log(p);
                                                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                                  }                                                      
                                                  //alert(str.join("&"));
                                                    return str.join("&");
                                            },
                     data: { 
                         
                         gid:group_id
                         
                     } 
                 }); 
  
                 // Store the data-dump of the FORM scope. 
                 request.success( 
                     function( data ) { 

                         //v.message = data; 
                         //alert(JSON.stringify(data));
                         v.collect_contacts=data;
                         $("#contact_info_model").modal('show');
                         //v.collect=data;
                         //alert("Group created successfully");
                         //v.onpageload();
                     } 
                 ); 


            }
       });

       app.service("collect_group_info",function($http){
             this.get_group_info=function(v){
                  
                  $http.get("send_group_info.php")
                    .then(function(response) {
                        v.collect = response.data;
                        //alert(JSON.stringify(v.collect));
                    });
             }
       });
     
       /* all contacts*/
        app.service("retrieve_allcontacts",function($http){
            this.storeall=function(v){
                      alert("hai");
                
                     var request = $http({ 
                     method: "post", 
                     url: "display_allcontacts.php", 
                     headers:{'content-type':'application/x-www-form-urlencoded'}, 
                     transformRequest: function(obj) {
                                                  var str = [];
                                                  for(var p in obj)
                                                  {
                                                        //console.log(p);
                                                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                                  }                                                      
                                                  //alert(str.join("&"));
                                                    return str.join("&");
                                            },
                     data: { 
                         
                         //gid:group_id
                         
                     } 
                 }); 
  
                 // Store the data-dump of the FORM scope. 
                 request.success( 
                     function( data ) { 

                         //v.message = data; 
                         alert(JSON.stringify(data));
                         v.collect_all_contacts=data;
                         $("#all_contact_info_model").modal('show');
                         //v.collect=data;
                         //alert("Group created successfully");
                         //v.onpageload();
                     } 
                 ); 


            }
       });

       app.service("collect_group_info",function($http){
             this.get_group_info=function(v){
                  
                  $http.get("send_group_info.php")
                    .then(function(response) {
                        v.collect = response.data;
                        //alert(JSON.stringify(v.collect));
                    });
             }
       });
     

       app.controller("app_con",function($scope,send_group_details,collect_group_info,add_contact,retrieve_contact,retrieve_allcontacts){
            $scope.g_name="";
            $scope.contact_name="";
            $scope.phone="";
            $scope.mail_id="";
            $scope.g_id="";
            $scope.collect="";
            $scope.temp_group_id="";
            $scope.collect_contacts="";
            $scope.collect_all_contacts="";
            $scope.send=function(){
               //alert("hai");
               send_group_details.send_details($scope);
               console.log($scope.collect);
            }
            $scope.onpageload=function(){
              //alert("i am loaded");
              collect_group_info.get_group_info($scope);
            }
            $scope.getcontact=function(group_id){
                console.log(group_id);
                retrieve_contact.store($scope,group_id);
            }
             $scope.view_all_contacts=function(){
                //console.log(group_id);
                console.log("hai");
                retrieve_allcontacts.storeall($scope);
            }
            $scope.contact=function(){
                 //alert("hai");
                 add_contact.store($scope);
            }
            $scope.get_group_id=function(tempid){
                $scope.temp_group_id=tempid;
                //console.log($scope.temp_group_id);
            }
       });
    </script>
   <style>
      .create_group 
      {
        position: fixed;
        left:92%;
        top:80%;
        z-index: 20;
        //border-left-color:green;
      }
      .group_section .panel-default
      {
        float: left;
        margin-right: 2%;
        width: 25%;
        background-color: #f18973;
      }
      .group_section .panel-default a{
        float: right;
        //display: inline-block;
      }
      .navbar{
        background-color:green;
      }
      .navbar ul li{
        color: #fff;
      }
      .modal-header{
        background-color: #87bdd8;
      }
      .panel-body a{
        text-align:center;
        font-size: 20px;

      }
     
    </style>
</head>
<body ng-app="myapp" ng-controller="app_con" ng-init="onpageload()">
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Inmar Contacts</a>
    </div>
    <ul class="nav navbar-nav">

      <li class="active" onclick="delcookie()"><a href="#">Logout</a></li>
      <li><a href="#" ng-click="view_all_contacts()">view contacts</a></li>
      <li><a href="#">edit</a></li>
           </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>

        </div>
      </div>
    </form>
  </div>
</nav>

<div class="create_group">
   <a href="#"  data-toggle="modal" data-target="#myModal"><img src="img/addButton.png" width="80" height="80"></a>   
</div>

<div class="container-fluid">
       <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4  class="modal-title" align="center">Create Group</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label >Group Name:</label>
              <input type="text" class="form-control" id="g_name" ng-model="g_name" required>
            </div>
            <div class="form-group">
              <label >Group Id:</label>
              <input type="text" class="form-control" id="g_id" ng-model="g_id" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" ng-click="send()">Create</button>
        </div>
      </div>
      
    </div>
  </div>
</div>


<div class="container-fluid">
       <!-- contact Modal1 -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center" >Create contact</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label >contact Name:</label>
              <input type="text" class="form-control"  ng-model="contact_name">
            </div>
            <div class="form-group">
              <label >phone number:</label>
              <input type="text" class="form-control" ng-model="phone">
            </div>
            <div class="form-group">
              <label >email id:</label>
              <input type="text" class="form-control"  ng-model="mail_id">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" ng-click="contact()">Create</button>
        </div>
      </div> 
    </div>
  </div>
</div>

<!--display contacts model-->
<div class="container-fluid">
       <!-- Modal1 -->
  <div class="modal fade" id="contact_info_model" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center" >Create contact</h4>
        </div>
        <div class="modal-body">
             <table class="table table-striped">
                 <tr>
                     <th>Name</th>
                     <th>PhoneNumber</th>
                     <th>EmailId</th>
                 </tr>
                 <tr ng-repeat="x in collect_contacts">
                     <td>{{x.contact_name}}</td>
                     <td>{{x.phone_number}}</td>
                     <td>{{x.contact_mail}}</td>
                 </tr>
             </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" ng-click="">close</button>
        </div>
      </div> 
    </div>
  </div>
</div>
  
  <!--display allcontacts model-->
<div class="container-fluid">
       <!-- Modal1 -->
  <div class="modal fade" id="all_contact_info_model" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center" >Create contact</h4>
        </div>
        <div class="modal-body">
             <table class="table table-striped">
                 <tr>
                     <th>Name</th>
                     <th>PhoneNumber</th>
                     <th>EmailId</th>
                 </tr>
                 <tr ng-repeat="x in collect_all_contacts">
                     <td>{{x.contact_name}}</td>
                     <td>{{x.phone_number}}</td>
                     <td>{{x.contact_mail}}</td>
                 </tr>
             </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" ng-click="">close</button>
        </div>
      </div> 
    </div>
  </div>
</div>



      <!--modal display -->
<div class="container-fluid group_section">
    <div class="row">
         <div class="col-sm-12 col-xs-12">
              <div ng-repeat="x in collect|orderBy:group_name">
                    <div class="panel panel-default" >
                      <div class="panel-heading">{{x.group_name}}<a ng-click="get_group_id(x.group_id)" class="btn"  data-toggle="modal" data-target="#myModal1" data-toggle="tooltip" data-placement="top" title="add contact!"  ><img src="img/addcontact.png" width="20" height="20"></a>

                        <a class="btn" data-toggle="tooltip" data-placement="top" title="delete group!"  data-toggle="modal" data-target=""><img src="img/Delete-group-icon.png" width="20" height="20"></a>

                        <a class="btn" data-toggle="tooltip" data-placement="top" title="edit !"  data-toggle="modal" data-target="#myModal2"><img src="img/edit.png" width="20" height="20"></a>
                      </div>
                      <div class="panel-body"><a href="#" ng-click="getcontact(x.group_id)">view contacts</a>
                      </div> 
                    </div>
              </div>
         </div>
    </div>
</div>
</body>
</html>