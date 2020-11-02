<!-- http://localhost/WTFinalProject/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home tutors</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <form action="RegistrationInfo.php" method="post" name="reg1">
    <div class="container">
        <div class="row">
            <div class="col">
            I am a &nbsp;
                <label class="rad studentStyle">
                    <input type="radio" id="radioLanding" name="UserTypeLanding" class="radioRegHeader" value="student" checked="">
                    <i></i>
                    Student/Parent &nbsp;
                </label>
                <label class="rad tutorStyle">
                    <input type="radio" id="radioLanding" name="UserTypeLanding" class="radioRegHeader" value="tutor">
                    <i></i>
                    Tutor
                </label>
                <div class="form-group">
                   
                    <input type="text" 
                    class="form-control" 
                    id="inputName" 
                    name="uname"
                    placeholder="Name" 
                    required />
                  </div>
                  <div class="form-group">
                    
                    <input
                      type="tel"
                      class="form-control"
                      pattern="[0-9]{10}"
                      id="inputPhone"
                      name="uphone"
                      placeholder="Mobile number"
                      required
                    />
                    <small id="phoneHelp" class="form-text text-muted"
                      >We don't misuse your phone</small
                    >
                  </div>
                  <div class="form-group">
                  
                    <input
                      type="email"
                      class="form-control"
                      id="inputEmail"
                      name="uemail"
                      aria-describedby="emailHelp"
                      placeholder="enter Email"
                      required
                    />
                    <small id="emailHelp" class="form-text text-muted"
                      >We don't misuse your email.</small>
                  </div>
                  <div class="form-group">
                  
                    <input
                      type="course"
                      class="form-control"
                      id="inputcourse"
                      name="ucourse"
                      aria-describedby="emailHelp"
                      placeholder="Course You Need Help With"
                      required
                    />
                    <small id="courseHelp" class="form-text text-muted"
                      >eg. Class I CBSE or Class X or B.Tech etc..</small
                    >
                  </div>
                  <div class="form-group">
                  
                    <input
                      type="subjects"
                      class="form-control"
                      id="inputsubject"
                      name="usubject"
                      aria-describedby="emailHelp"
                      placeholder="Subject You Need Help With"
                      required
                    />
                    <small id="subjectHelp" class="form-text text-muted"
                      >eg. maths, physics or all subjects etc.</small
                    >
                  </div>
                  <div class="form-group">
                    <div class="">
                        <div id="submitButtonContainer" class="text-center">
                            <button id="btn-signup-lp" type="submit" class="btn btn-info btn-orange btn-lg">Get Free Demo Class</button>
                             </div>
                    </div>
                </div>
                <p class="text-center small">By signing up you agree to our <a href="/home/termsandconditions">Terms and Conditions</a></p><br>
                <p class="text-center medium">Already a member? <a href="/account/login">Login</a></p>
            </div>
            </div>
        </div>
    
      </form>      
<!-- <script src="js/RegInfo.js"></script>               -->
</body>
</html>