<html>

   <body>

   Home Office: <input type="checkbox" id="ho">
   <br>
   Protected Policy: <input type="checkbox" id="pp">

    
   </body>
</html>

<script type="text/javascript" charset="utf-8">

   var ho = document.getElementById('ho');
   var pp = document.getElementById('pp');
   var hoValue = '';
   var ppValue = '';

      Genesys("command", "Database.set", { messaging: { customAttributes: { 
         Home_Office_Indicator: hoValue,
         Protected_Policy: ppValue  
      }}});

   ho.addEventListener('change', (event) => {
      hoValue = ho.checked;
      Genesys("command", "Database.set", { messaging: { customAttributes: { 
         Home_Office_Indicator: hoValue,
         Protected_Policy: ppValue  
      }}});
   });

   pp.addEventListener('change', (event) => {
      ppValue = pp.checked;
      Genesys("command", "Database.set", { messaging: { customAttributes: { 
         Home_Office_Indicator: hoValue,
         Protected_Policy: ppValue  
      }}});
   });

   (function (g, e, n, es, ys) {
      g['_genesysJs'] = e;
      g[e] = g[e] || function () {
      (g[e].q = g[e].q || []).push(arguments)
      };
      g[e].t = 1 * new Date();
      g[e].c = es;
      ys = document.createElement('script'); ys.async = 1; ys.src = n; ys.charset = 'utf-8'; document.head.appendChild(ys);
   })
   (window, 'Genesys', 'https://apps.usw2.pure.cloud/genesys-bootstrap/genesys.min.js', {
      environment: 'usw2',
      deploymentId: '8a249d75-28a2-4c9b-b779-cd2943371db1'
   });


   
</script>