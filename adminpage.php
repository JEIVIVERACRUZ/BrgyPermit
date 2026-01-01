<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard - Permit Applications</title>
    <link rel="stylesheet" href="css/styles.css" />
    <style>
      body {
        background-color: #f5f5f5;
        color: #333;
        padding: 20px;
        font-family: Arial, sans-serif;
        margin: 0;
      }

      .dashboard-header {
        text-align: center;
        margin-bottom: 40px;
      }

      .dashboard-header h1 {
        color: #333;
        font-size: 36px;
        margin-bottom: 10px;
      }

      .logout {
        position: absolute;
        top: 20px;
        right: 20px;
      }

      .logout input {
        padding: 10px 20px;
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 14px;
        font-weight: bold;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
      }

      .logout input:hover {
        background: linear-gradient(135deg, #20c997 0%, #28a745 100%);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
      }

      .category-section {
        margin-bottom: 40px;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      }

      .category-title {
        font-size: 28px;
        margin-bottom: 20px;
        color: #333;
        font-weight: bold;
        border-bottom: 3px solid #667eea;
        padding-bottom: 10px;
      }

      #students-table {
        border-collapse: collapse;
        width: 100%;
        background-color: white;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 20px;
      }

      #students-table td {
        text-align: left;
        border: 1px solid #e9ecef;
        padding: 15px;
        background-color: white;
        color: #333;
      }

      #students-table th {
        text-align: left;
        padding: 18px 15px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: 1px solid #e9ecef;
        font-weight: bold;
        font-size: 16px;
      }

      #students-table tr:nth-child(even) {
        background-color: #f8f9fa;
      }

      #students-table tr:hover {
        background-color: #e9ecef;
      }

      a {
        color: #667eea;
        text-decoration: none;
        font-weight: bold;
      }

      a:hover {
        text-decoration: underline;
      }
    </style>
  </head>

  <body>
    <form action="php/logout.php" method="POST">
      <div class="logout">
        <input type="submit" value="Log Out" name="logout" />
      </div>
    </form>

    <div class="dashboard-header">
      <h1>Barangay Permit Applications Dashboard</h1>
    </div>

    <?php 
      session_start();
      require 'php/config.php';

      if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];

        // Barangay Clearance Applications
        echo "<div class='category-section'>";
        echo "<h2 class='category-title'>Barangay Clearance Applications</h2>";
        $result = mysqli_query($con,"SELECT * FROM clearance ORDER BY date_submitted DESC");
        if (mysqli_num_rows($result) > 0) {
          echo "<table id='students-table'>
                  <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Date of Birth</th>
                      <th>Address</th>
                      <th>Purpose</th>
                      <th>Complaints</th>
                      <th>Disputes</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Gov ID</th>
                      <th>Photo</th>
                      <th>Proof of Residency</th>
                      <th>Request Form</th>
                      <th>Date Submitted</th>
                  </tr>";
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['date_of_birth'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['purpose'] . "</td>";
            echo "<td>" . $row['complaints'] . "</td>";
            echo "<td>" . $row['disputes'] . "</td>";
            echo "<td>" . $row['contact_number'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . ($row['gov_id_path'] ? "<a href='/BrgyPermit.local/" . $row['gov_id_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['photo_path'] ? "<a href='/BrgyPermit.local/" . $row['photo_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['proof_residency_path'] ? "<a href='/BrgyPermit.local/" . $row['proof_residency_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['request_form_path'] ? "<a href='/BrgyPermit.local/" . $row['request_form_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . $row['date_submitted'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "<p>No clearance applications yet.</p>";
        }
        echo "</div>";

        // Certificate of Residency Applications
        echo "<div class='category-section'>";
        echo "<h2 class='category-title'>Certificate of Residency Applications</h2>";
        $result = mysqli_query($con,"SELECT * FROM residency ORDER BY date_submitted DESC");
        if (mysqli_num_rows($result) > 0) {
          echo "<table id='students-table'>
                  <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Date of Birth</th>
                      <th>Address</th>
                      <th>Years Resided</th>
                      <th>Purpose</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Gov ID</th>
                      <th>Proof of Residency</th>
                      <th>Endorsement Letter</th>
                      <th>Request Form</th>
                      <th>Date Submitted</th>
                  </tr>";
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['date_of_birth'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['years_resided'] . "</td>";
            echo "<td>" . $row['purpose'] . "</td>";
            echo "<td>" . $row['contact_number'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . ($row['gov_id_path'] ? "<a href='/BrgyPermit.local/" . $row['gov_id_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['proof_residency_path'] ? "<a href='/BrgyPermit.local/" . $row['proof_residency_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['endorsement_letter_path'] ? "<a href='/BrgyPermit.local/" . $row['endorsement_letter_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['request_form_path'] ? "<a href='/BrgyPermit.local/" . $row['request_form_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . $row['date_submitted'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "<p>No residency applications yet.</p>";
        }
        echo "</div>";

        // Business Clearance Applications
        echo "<div class='category-section'>";
        echo "<h2 class='category-title'>Business Clearance Applications</h2>";
        $result = mysqli_query($con,"SELECT * FROM business ORDER BY date_submitted DESC");
        if (mysqli_num_rows($result) > 0) {
          echo "<table id='students-table'>
                  <tr>
                      <th>ID</th>
                      <th>Business Name</th>
                      <th>Owner Name</th>
                      <th>Business Type</th>
                      <th>Address</th>
                      <th>TIN</th>
                      <th>DTI/SEC</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Employees</th>
                      <th>Hours</th>
                      <th>Status</th>
                      <th>DTI Cert</th>
                      <th>App Form</th>
                      <th>Owner ID</th>
                      <th>Lease</th>
                      <th>Sketch</th>
                      <th>Fire Safety</th>
                      <th>Sanitary</th>
                      <th>Prev Clearance</th>
                      <th>Date Submitted</th>
                  </tr>";
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['business_name'] . "</td>";
            echo "<td>" . $row['owner_name'] . "</td>";
            echo "<td>" . $row['business_type'] . "</td>";
            echo "<td>" . $row['business_address'] . "</td>";
            echo "<td>" . $row['tin_number'] . "</td>";
            echo "<td>" . $row['dti_sec_number'] . "</td>";
            echo "<td>" . $row['contact_number'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['num_employees'] . "</td>";
            echo "<td>" . $row['operating_hours'] . "</td>";
            echo "<td>" . $row['business_status'] . "</td>";
            echo "<td>" . ($row['dti_sec_cert_path'] ? "<a href='/BrgyPermit.local/" . $row['dti_sec_cert_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['business_permit_app_path'] ? "<a href='/BrgyPermit.local/" . $row['business_permit_app_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['owner_id_path'] ? "<a href='/BrgyPermit.local/" . $row['owner_id_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['lease_contract_path'] ? "<a href='/BrgyPermit.local/" . $row['lease_contract_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['location_sketch_path'] ? "<a href='/BrgyPermit.local/" . $row['location_sketch_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['fire_safety_cert_path'] ? "<a href='/BrgyPermit.local/" . $row['fire_safety_cert_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['sanitary_permit_path'] ? "<a href='/BrgyPermit.local/" . $row['sanitary_permit_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . ($row['previous_clearance_path'] ? "<a href='/BrgyPermit.local/" . $row['previous_clearance_path'] . "' target='_blank'>View</a>" : "N/A") . "</td>";
            echo "<td>" . $row['date_submitted'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "<p>No business applications yet.</p>";
        }
        echo "</div>";
      } else {
        header("Location: index.php");
        exit();
      }
    ?>
  </body>
</html>
