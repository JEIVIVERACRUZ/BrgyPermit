<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Clearance</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="container">
        <h3>Application for Barangay Clearance (Good Standing / No Issues)</h3>
        <form action="php/process_clearance.php" method="post" enctype="multipart/form-data" class="permit-form">
            <div class="applicant-details">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" required />
                <br />

                <label for="date_of_birth">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required />
                <br />

                <label for="address">Complete Address</label>
                <input type="text" id="address" name="address" required />
                <br />

                <label for="purpose">Purpose of Clearance</label>
                <input type="text" id="purpose" name="purpose" placeholder="e.g., employment, travel, legal" required />
                <br />

                <label for="complaints">Have you had any complaints or violations in the barangay?</label>
                <select name="complaints" id="complaints" required>
                    <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <br />

                <label for="disputes">Are you currently involved in any barangay dispute?</label>
                <select name="disputes" id="disputes" required>
                    <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <br />

                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" required />
                <br />

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" />
                <br />

                <h4>📎 Required Files to Upload:</h4>
                <label for="gov_id">Valid Government-issued ID</label>
                <input type="file" id="gov_id" name="gov_id" accept=".jpg,.jpeg,.png,.pdf" required />
                <br />

                <label for="photo">Recent 1x1 or 2x2 photo</label>
                <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png" required />
                <br />

                <label for="proof_residency">Proof of residency</label>
                <input type="file" id="proof_residency" name="proof_residency" accept=".jpg,.jpeg,.png,.pdf" required />
                <br />

                <label for="request_form">Filled-out Barangay Clearance Request Form</label>
                <input type="file" id="request_form" name="request_form" accept=".pdf" required />
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