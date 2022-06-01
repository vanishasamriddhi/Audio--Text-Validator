<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Audio Validator</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
    <link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
    <nav class="nav navbar-fixed-top navbar-inverse">
        <div class="continer">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Audio Validator</a>
            </div>
            <?php 
                    if(isset($_SESSION['status']))
                    {
                      unset($_SESSION['status']);
                    }
                        ?>
            <!-- <div class="collapse navbar-collapse" id="mynavBar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                </ul>
            </div> -->
        </div>
       </nav>
      <div class="containr">
        <form action="connection.php" method="post">
            <h2>Audio-I</h2>
                <div id="audio">
                  <audio controls  >
                           <source src="Audio/Audio-1.wav" type="audio/wav">
                            Your browser does not support the audio element.
                  </audio>
                 </div>
                <p class="para" ><br><b>❛❛गेल्या ५ जुलैला स्वता सिद्धु यांनी आपल्या राजीनाम्याची घोषणा ट्विटरवर केली होती❞</b><br><br>
                <p class="hebro">
                    <input type="radio" id="first" name="audioI"  value="Audio and text pair match">
                    <label for="html">Audio and text pair match    </label><br>
                    <input type="radio" id="second" name="audioI"  value="Audio and text pair do not match"> 
                    <label for="css">Audio and text pair do not match</label><br></p>
                </p>
                 <!-- <h5 >Validate the above:</h5> -->
                
             
            <h2>Audio-II</h2>
              <audio controls  >
                <source src="Audio/Audio-2.wav" type="audio/wav">
                 Your browser does not support the audio element.
              </audio>
                <p class="para1" ><br><b>❛❛स्लॅमडान्स एकोणीशे सत्याऐंशी  ह्या आधुनिक न्वार चित्रपटाचा कला दिग्दर्शक युगेनियो झारेटी म्हणतो, "न्वारचे आकर्षण कालातीत आहे, कारण न्वारच्या नायकाला सुटकेचा मार्ग नसतो, पर्याय नसतात ❞</b><br><br>
                <p class="hebro"><br><br>
                 <!-- <h5 >Validate the above:</h5> -->
                 <input type="radio" id="first"  name="audioII" value="Audio and text pair match">
                 <label for="html">Audio and text pair match    </label><br>
                 <input type="radio" id="second" name="audioII"  value="Audio and text pair do not match"> 
                 <label for="css">Audio and text pair do not match</label><br></p>
                </p>

              <h2>Audio-III</h2>
                <audio controls  >
                  <source src="Audio/Audio-3.wav" type="audio/wav">
                   Your browser does not support the audio element.
                </audio>
                  <p class="para1" ><br><b>❛❛काही बाबतीत प्रसूतीपूर्व जीवनसत्त्वे घेणे अत्यंत अनिष्ट आहे म्हणतात,❞</b><br><br>
                  <p class="hebro"><br><br>
                   <!-- <h5 >Validate the above:</h5> -->
                   <input type="radio" id="first" name="audioIII" value="Audio and text pair match">
                   <label for="yes5">Audio and text pair match    </label><br>
                   <input type="radio" id="no3"  name="audioIII" value="Audio and text pair do not match"> 
                   <label for="no3">Audio and text pair do not match</label><br></p>
                  </p>

              <h2>Audio-IV</h2>
                <audio controls  >
                  <source src="Audio/Audio-4.wav" type="audio/wav">
                   Your browser does not support the audio element.
                </audio>
                  <p class="para1" ><br><b>❛❛मात्र पंधरा  नोक्हेंबर अठराशे सतरा  मध्ये मराठयांचे आणि इंग्रजांमध्ये खडकीचे अखेरचे युद्ध झाले❞</b><br><br>
                  <p class="hebro"><br><br>
                   <!-- <h5 >Validate the above:</h5> -->
                   <input type="radio" id="yes4"  name="audioIV" value="Audio and text pair match">
                   <label for="yes4">Audio and text pair match    </label><br>
                   <input type="radio" id="no4" name="audioIV"  value="Audio and text pair do not match"> 
                   <label for="no4">Audio and text pair do not match</label><br></p>
                  </p> 
              <h2>Audio-V</h2>
                 <audio controls  >
                     <source src="Audio/Audio-5.wav" type="audio/wav">
                      Your browser does not support the audio element.
                 </audio>
                  <p class="para1" ><br><b>❛❛आमदार कार्लूस आल्मेडा यांनी पणजीतील जाहीर सभेत वास्कोतून एक हजाराहून अधिक नागरिक उपस्थित राहणार असल्याचे सांगितले❞</b><br><br>
                  <p class="hebro"><br><br>
                   <!-- <h5 >Validate the above:</h5> -->
                   <input type="radio" id="yes5" name="audioV" value="Audio and text pair match">
                   <label for="yes5">Audio and text pair match    </label><br>
                   <input type="radio" id="no5" name="audioV"  value="Audio and text pair do not match"> 
                   <label for="no5">Audio and text pair do not match</label><br></p>
                  </p> 
                    
              <div class="btn-box">
                  <button type="submit" name="save_radio">Submit</button>
              </div>
        </form>
    </div>
    
</body>
</html>

