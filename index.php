<!DOCTYPE html>
<html>
  <head>
    <title>Brgy Permits</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
  </head>

  <body>
    <form action="admin.php" method="POST">
      <div class="admin-login">
        <input type="submit" name="admin" value="Admin" id="admin" />
      </div>
    </form>

    <h1 class="main-heading">Barangay Permits</h1>

    <div class="permit-options">
      <ul style="list-style-type: disc; padding-left: 20px;">
        <li><a href="authorize.php?type=clearance" class="permit-link">Barangay Clearance</a></li>
        <li><a href="authorize.php?type=business" class="permit-link">Business Clearance</a></li>
        <li><a href="authorize.php?type=residency" class="permit-link">Certificate of Residency</a></li>
      </ul>
    </div>

    
  </body>
</html>
