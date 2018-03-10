
<div class="col-lg-9 col-lg-offset-3">
    <h3>TRIUNE</h3>
    <h6>Please enter the required information below.</h6>     

<!--START ------------------------------ registration FORM  -------------------------------------------START -->
<form action="triuneMain/createToken" class="toggle-disabled" role="form">
  
    <!--START ------------------------------ userName TextBox  -------------------------------------------START -->
    <div class="input-group col-md-10 input-group-md">
          <div class="input-group-prepend">
                <div class="input-group-text bg-transparent">
                  <i class="fa fa-user" style="color: gold"></i>
                </div>
          </div>
          <input name="userName" data-validation="alphanumeric" id="userName" placeholder='User Name' class='form-control'  data-validation-error-msg="Please enter a valid username" data-validation-error-msg-container="#messageValidationLocationUserName" onBlur="checkUserAvailability()" onFocus="clearValidationMessages()" >
          <span class="input-group-append">
              <div class="input-group-text bg-transparent">
                <i class="fa fa-user-plus" id="iconAvailable" style="display:none; color:green"></i>
                <i class="fa fa-user-times" id="iconNotAvailable" style="display:none; color:red" ></i>
              </div>
          </span>
          <span class="input-group-append">
            <i class="textBoxMessageAvailableMd" id='messageAvailable' > Username <br> Available.</i>
            <i class="textBoxMessageNotAvailableMd" id='messageNotAvailable' > Username <br> Not Available.</i>
          </span>
    </div>
    <span>
      <i><img src="<?php echo base_url();?>assets/images/LoaderIcon.gif" class ="progressImageRight" id="iconLoader"  /></i>
      <b class="jQueryFormValidationMessage" id="messageValidationLocationUserName"></b>
    </span>
    <!--END ------------------------------ userName TextBox  -------------------------------------------END -->


    <!--START ------------------------------ emailAddress TextBox  -------------------------------------------START -->
    <div class="input-group col-md-10 input-group-md">
          <div class="input-group-prepend">
                <div class="input-group-text bg-transparent">
                  <i class="fa fa-envelope" style="color: gold"></i>
                </div>
          </div>
          <input name="emailAddress" data-validation="email" id="emailAddress" placeholder='Email Address' class='form-control'  data-validation-error-msg="Please enter a valid Email Address" data-validation-error-msg-container="#messageValidationLocationEmailAddress" onBlur="" onFocus="">
    </div>
    <span>
      <b class="jQueryFormValidationMessage" id="messageValidationLocationEmailAddress"></b>
    </span>
    <!--END ------------------------------ emailAddress TextBox  -------------------------------------------END -->



    <!--START ------------------------------ lastName TextBox  -------------------------------------------START -->
    <div class="input-group col-md-10 input-group-md">
          <input name="lastName" data-validation="alphanumeric" id="lastName" placeholder='Last Name' class='form-control'  data-validation-error-msg="Please enter Last Name" data-validation-error-msg-container="#messageValidationLocationLastName" onBlur="" onFocus="">
    </div>
    <span>
      <b class="jQueryFormValidationMessage" id="messageValidationLocationLastName"></b>
    </span>
    <!--END ------------------------------ lastName TextBox  -------------------------------------------END -->

    <!--START ------------------------------ firstName TextBox  -------------------------------------------START -->
    <div class="input-group col-md-10 input-group-md">
          <input name="firstName" data-validation="alphanumeric" id="firstName" placeholder='First Name' class='form-control'  data-validation-error-msg="Please enter First Name" data-validation-error-msg-container="#messageValidationLocationFirstName" onBlur="" onFocus="">
    </div>
    <span>
      <b class="jQueryFormValidationMessage" id="messageValidationLocationFirstName"></b>
    </span>
    <!--END ------------------------------ firstName TextBox  -------------------------------------------END -->

    <!--START ------------------------------ middleName TextBox  -------------------------------------------START -->
    <div class="input-group col-md-10 input-group-md">
          <input name="middleName" data-validation="alphanumeric" id="middleName" placeholder='Middle Name' class='form-control'  data-validation-error-msg="Please enter Middle Name" data-validation-error-msg-container="#messageValidationLocationMiddleName" onBlur="" onFocus="">
    </div>
    <span>
      <b class="jQueryFormValidationMessage" id="messageValidationLocationMiddleName"></b>
    </span>
    <!--END ------------------------------ firstName TextBox  -------------------------------------------END -->


    <div class="form-group row">
        <div class="col-sm-5">
          <input name="studentNumber" type="text" class="form-control" id="studentNumber" placeholder="Student Number" data-validation="number" data-validation-allowing="-" data-validation-error-msg="Please enter valid Student Number" data-validation-error-msg-container="#messageValidationLocationStudentNumber">
          <span>
            <b class="jQueryFormValidationMessage" id="messageValidationLocationStudentNumber"></b>
          </span>
        </div>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="birthDate" placeholder="Birth Date (yyyy-mm-dd)" data-validation="date" data-validation-error-msg="Please enter valid date (yyyy-mm-dd)" data-validation-error-msg-container="#messageValidationLocationBirthDate">
          <span>
            <b class="jQueryFormValidationMessage" id="messageValidationLocationBirthDate"></b>
          </span>
        </div>
    </div>




  <!--START ------------------------------ signUp Button  -------------------------------------------START -->
  <div class="form-group col-lg-6 input-group-sm">
    <input type="submit" value='Sign up'  id="formButton" class='btn btn-md btn-primary btn-block' >
  </div>
  <!--END ------------------------------ signUp Button  -------------------------------------------END -->


</form>
<!--END ------------------------------ registration FORM  -------------------------------------------END -->




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>


<script>
  $.validate({
    language : 'es',
  });


  function checkUserAvailability() {
    $("#iconLoader").show();

    jQuery.ajax({
      url: "triuneMain/checkUserName",
      data:'userName='+$("#userName").val(),
      type: "POST",
      success:function(data){
      if(data == 0) {
        $("#messageNotAvailable").hide();
        $("#messageAvailable").show();
        $("#iconLoader").hide();
        $("#iconNotAvailable").hide();
        $("#iconAvailable").show();
        $("#formButton").removeAttr('disabled');

      } else {
        $("#messageAvailable").hide();
        $("#messageNotAvailable").show();
        $("#iconLoader").hide();
        $("#iconAvailable").hide();
        $("#iconNotAvailable").show();
        $("#formButton").attr('disabled', 'disabled');


      }

    },
        error:function (){}
    });
  }


  function clearValidationMessages() {
    $("#messageNotAvailable").hide();
    $("#messageAvailable").hide();
    $("#iconAvailable").hide();
    $("#iconNotAvailable").hide();

  }

  function createToken() {
  }


  $(document).ready(function() {
    $("#formButton").attr('disabled', 'disabled');
   /* $("form").keyup(function() {
      // To Disable Submit Button
      $("#formButton").attr('disabled', 'disabled');
      // Validating Fields
      var userName = $("#userName").attr('class');
      var emailAddress = $("#emailAddress").attr('class');
      var lastName = $("#lastName").attr('class');
      var firstName = $("#firstName").attr('class');
      var middleName = $("#middleName").attr('class');
      var studentNumber = $("#studentNumber").attr('class');
      var birthDate = $("#birthDate").attr('class');
      var messageNotAvailable = $("#messageNotAvailable").attr('style');

      if ((messageNotAvailable == "display: none;" && userName == "form-control valid" && emailAddress == "form-control valid" && lastName == "form-control valid" && firstName == "form-control valid" && middleName == "form-control valid" &&studentNumber == "form-control valid" && birthDate == "form-control valid")) {
          // To Enable Submit Button
          $("#formButton").removeAttr('disabled');
          $("#formButton").css({
            "cursor": "pointer",
          "box-shadow": "1px 0px 6px #333"
          });
      }
    });


    // On Click Of Submit Button
    $("#formButton").click(function() {
    $("#formButton").css({
      "cursor": "default",
      "box-shadow": "none"
    });
    alert("Form Submitted Successfully..!!");
  });*/
});


$('body').on('blur click keyup propertychange change paste input', function(e) {
    //var  eventType = e.type;
    // do stuff
    //$("#formButton").attr('disabled', 'disabled');
    $("form").keyup(function() {
      // To Disable Submit Button
      $("#formButton").attr('disabled', 'disabled');
      // Validating Fields
      var userName = $("#userName").attr('class');
      var emailAddress = $("#emailAddress").attr('class');
      var lastName = $("#lastName").attr('class');
      var firstName = $("#firstName").attr('class');
      var middleName = $("#middleName").attr('class');
      var studentNumber = $("#studentNumber").attr('class');
      var birthDate = $("#birthDate").attr('class');
      var messageNotAvailable = $("#messageNotAvailable").attr('style');

      if ((messageNotAvailable == "display: none;" && userName == "form-control valid" && emailAddress == "form-control valid" && lastName == "form-control valid" && firstName == "form-control valid" && middleName == "form-control valid" &&studentNumber == "form-control valid" && birthDate == "form-control valid")) {
          // To Enable Submit Button
          $("#formButton").removeAttr('disabled');
          $("#formButton").css({
            "cursor": "pointer",
          "box-shadow": "1px 0px 6px #333"
          });
      }
    });


    // On Click Of Submit Button
    $("#formButton").click(function() {
    $("#formButton").css({
      "cursor": "default",
      "box-shadow": "none"
    });
    alert("Form Submitted Successfully..!!");
  });
});

</script>