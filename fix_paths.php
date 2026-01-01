<?php
require 'php/config.php';

echo "<h1>Updating Database Paths</h1>";

// Update clearance table
$query = "UPDATE clearance SET
    gov_id_path = REPLACE(gov_id_path, '../uploads/', 'uploads/'),
    photo_path = REPLACE(photo_path, '../uploads/', 'uploads/'),
    proof_residency_path = REPLACE(proof_residency_path, '../uploads/', 'uploads/'),
    request_form_path = REPLACE(request_form_path, '../uploads/', 'uploads/')
    WHERE gov_id_path LIKE '../uploads/%'";

if (mysqli_query($con, $query)) {
    echo "<p>Updated clearance table paths</p>";
}

// Update residency table
$query = "UPDATE residency SET
    gov_id_path = REPLACE(gov_id_path, '../uploads/', 'uploads/'),
    proof_residency_path = REPLACE(proof_residency_path, '../uploads/', 'uploads/'),
    endorsement_letter_path = REPLACE(endorsement_letter_path, '../uploads/', 'uploads/'),
    request_form_path = REPLACE(request_form_path, '../uploads/', 'uploads/')
    WHERE gov_id_path LIKE '../uploads/%'";

if (mysqli_query($con, $query)) {
    echo "<p>Updated residency table paths</p>";
}

// Update business table
$query = "UPDATE business SET
    dti_sec_cert_path = REPLACE(dti_sec_cert_path, '../uploads/', 'uploads/'),
    business_permit_app_path = REPLACE(business_permit_app_path, '../uploads/', 'uploads/'),
    owner_id_path = REPLACE(owner_id_path, '../uploads/', 'uploads/'),
    lease_contract_path = REPLACE(lease_contract_path, '../uploads/', 'uploads/'),
    location_sketch_path = REPLACE(location_sketch_path, '../uploads/', 'uploads/'),
    fire_safety_cert_path = REPLACE(fire_safety_cert_path, '../uploads/', 'uploads/'),
    sanitary_permit_path = REPLACE(sanitary_permit_path, '../uploads/', 'uploads/'),
    previous_clearance_path = REPLACE(previous_clearance_path, '../uploads/', 'uploads/')
    WHERE dti_sec_cert_path LIKE '../uploads/%'";

if (mysqli_query($con, $query)) {
    echo "<p>Updated business table paths</p>";
}

echo "<p>Database update complete!</p>";
echo "<p><a href='adminpage.php'>Go back to Admin Dashboard</a></p>";

mysqli_close($con);
?>