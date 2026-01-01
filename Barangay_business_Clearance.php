<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Business Clearance</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="container">
        <h3>Application for Barangay Business Clearance / Permit</h3>
        <form action="php/process_business.php" method="post" enctype="multipart/form-data" class="permit-form">
            <div class="applicant-details">
                <label for="business_name">Business Name</label>
                <input type="text" id="business_name" name="business_name" required />
                <br />

                <label for="owner_name">Business Owner’s Full Name</label>
                <input type="text" id="owner_name" name="owner_name" required />
                <br />

                <label for="business_type">Type of Business</label>
                <input type="text" id="business_type" name="business_type" required />
                <br />

                <label for="business_address">Business Address</label>
                <input type="text" id="business_address" name="business_address" required />
                <br />

                <label for="tin_number">TIN Number</label>
                <input type="text" id="tin_number" name="tin_number" required />
                <br />

                <label for="dti_sec_number">DTI/SEC Registration Number</label>
                <input type="text" id="dti_sec_number" name="dti_sec_number" required />
                <br />

                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" required />
                <br />

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" />
                <br />

                <label for="num_employees">Number of Employees</label>
                <input type="number" id="num_employees" name="num_employees" required />
                <br />

                <label for="operating_hours">Operating Hours</label>
                <input type="text" id="operating_hours" name="operating_hours" placeholder="e.g., 8 AM - 5 PM" required />
                <br />

                <label for="business_status">Is this a new business or renewal?</label>
                <select name="business_status" id="business_status" required>
                    <option value="">Select</option>
                    <option value="New">New</option>
                    <option value="Renewal">Renewal</option>
                </select>
                <br />

                <h4>📎 Required Files to Upload:</h4>
                <label for="dti_sec_cert">DTI/SEC Registration Certificate</label>
                <input type="file" id="dti_sec_cert" name="dti_sec_cert" accept=".jpg,.jpeg,.png,.pdf" required />
                <br />

                <label for="business_permit_app">Business Permit Application Form</label>
                <input type="file" id="business_permit_app" name="business_permit_app" accept=".pdf" required />
                <br />

                <label for="owner_id">Valid ID of Business Owner</label>
                <input type="file" id="owner_id" name="owner_id" accept=".jpg,.jpeg,.png,.pdf" required />
                <br />

                <label for="lease_contract">Lease Contract or Proof of Ownership</label>
                <input type="file" id="lease_contract" name="lease_contract" accept=".jpg,.jpeg,.png,.pdf" required />
                <br />

                <label for="location_sketch">Sketch of Business Location</label>
                <input type="file" id="location_sketch" name="location_sketch" accept=".jpg,.jpeg,.png,.pdf" required />
                <br />

                <label for="fire_safety_cert">Fire Safety Inspection Certificate</label>
                <input type="file" id="fire_safety_cert" name="fire_safety_cert" accept=".jpg,.jpeg,.png,.pdf" />
                <br />

                <label for="sanitary_permit">Sanitary Permit</label>
                <input type="file" id="sanitary_permit" name="sanitary_permit" accept=".jpg,.jpeg,.png,.pdf" />
                <br />

                <label for="previous_clearance">Previous Barangay Clearance (for renewals)</label>
                <input type="file" id="previous_clearance" name="previous_clearance" accept=".jpg,.jpeg,.png,.pdf" />
                <br />
            </div>

            <div class="submit-form">
                <input type="submit" name="submit" value="Submit Application" id="submit" />
            </div>
        </form>
        <br />
    </div>
    <div class="copyright-text">
        <p>© Copyright Brgy Permits 2025</p>
    </div>
</body>
</html>
