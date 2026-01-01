<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Residency</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="container">
        <h3>Application for Certificate of Residency (Proof of Address)</h3>
        <form action="php/process_residency.php" method="post" enctype="multipart/form-data" class="permit-form">
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

                <label for="years_resided">How long have you lived in this barangay?</label>
                <input type="text" id="years_resided" name="years_resided" placeholder="e.g., 5 years" required />
                <br />

                <label for="purpose">Purpose of Certificate</label>
                <input type="text" id="purpose" name="purpose" placeholder="e.g., school, employment, legal" required />
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

                <label for="proof_residency">Proof of residency</label>
                <input type="file" id="proof_residency" name="proof_residency" accept=".jpg,.jpeg,.png,.pdf" required />
                <br />

                <label for="endorsement_letter">Endorsement letter</label>
                <input type="file" id="endorsement_letter" name="endorsement_letter" accept=".jpg,.jpeg,.png,.pdf" />
                <br />

                <label for="request_form">Filled-out Certificate of Residency Request Form</label>
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
