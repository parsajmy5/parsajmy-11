<?php
include("header-01.html")
?>
    <section>
        <div>
    <pre>
                       <span id="matn2" style="margin-left: 335px;font-family:Myriad Pro;color: rgb(93, 58, 125);">Email or contact number</span>

    <input type="text" id="Email">

           <span id="matn3"style="margin-left: 510px;font-family:Myriad Pro;">Password</span>

    <input type="text" id="password">



    <button onclick="login" id="buten">confirm</button>

<a id="logup" href=""><span id="matn4">Log up</span></a>      <a id="logup" href=""><span id="matn6">Forgot password?</span></a>
                       
    </pre ><pre id="matn5">                 This store was proudly built by a student,with the hope that one day it will become a reputable and large store.</pre>
</div>
    </section>
    <script>
        function login()
        {
        inputemail=document.getElementById("Email").value
        inputpass=document.getElementById("password").value
        }
    </script>
    </div>
</body>
</html>