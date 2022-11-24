<html>

   <body>

<p><b>MEMBER INFORMATION FORM</b></p>
   <b>Member ID:</b> <input type="text" id="personID">
   <br>
   <b>Full Name : </b> <input type="text" id="name">
   <br>
   <br>
   <b>Select your policy:</b>
   <br>
   <b>Home Office:</b> <input type="checkbox" id="ho">
   <br>
   <b>Protected :</b> <input type="checkbox" id="pp">
   <br>
   <br>
   <button onclick="myFunction()"><b>SUBMIT</b></button>
   
   </body>
</html>

<script type="text/javascript">

function myFunction() {
   var homeP = document.getElementById("ho").checked;
   var protectedP = document.getElementById("pp").checked;
   var nameF = document.getElementById("name").value;
   var person = document.getElementById("personID").value;
   
         Genesys("command", "Database.set", { messaging: { customAttributes: { 
         Home_Office_Indicator: homeP,
         Protected_Policy: protectedP,
		 First_Name: nameF,
		 Person_ID: person
      }}});
	     Genesys("command", "Messenger.open", {},
         function(o){},  // if resolved
         function(o){    // if rejected
         Genesys("command", "Messenger.close");
      }
    );
}

  (function (g, e, n, es, ys) {
    g['_genesysJs'] = e;
    g[e] = g[e] || function () {
      (g[e].q = g[e].q || []).push(arguments)
    };
    g[e].t = 1 * new Date();
    g[e].c = es;
    ys = document.createElement('script'); ys.async = 1; ys.src = n; ys.charset = 'utf-8'; document.head.appendChild(ys);
  })(window, 'Genesys', 'https://apps.usw2.pure.cloud/genesys-bootstrap/genesys.min.js', {
    environment: 'usw2',
    deploymentId: '8a249d75-28a2-4c9b-b779-cd2943371db1'
  });
  
</script>
