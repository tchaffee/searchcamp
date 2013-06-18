<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"
     xmlns:fb="https://www.facebook.com/2008/fbml">
      
<head>
    <title>Searcamp Class Attendance</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />     
</head> 

<body>

    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '129847677222230', // App ID
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
        };
    
        // Load the Facebok SDK Asynchronously
        (function(d){
          var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
          js = d.createElement('script'); js.id = id; js.async = true;
          js.src = "//connect.facebook.net/en_US/all.js";
          d.getElementsByTagName('head')[0].appendChild(js);
        }(document));
    
    </script>
    
    <fb:login-button show-faces="true" width="200" max-rows="1" 
        scope="publish_actions"></fb:login-button>
    
    <div>
        <img width="150" height="150" src="searchcamp.png">
    </div>
    
    <h3>Searchcamp Classes</h3>
    <ul>
        <li><a href="lesson-01.html">Searchcamp Lesson 1</a></li>
        <li><a href="lesson-02.html">Searchcamp Lesson 2</a></li> 
        <li><a href="lesson-03.html">Searchcamp Lesson 3</a></li> 
        <li>etc.</li> 
    </ul>
</body>
</html>
