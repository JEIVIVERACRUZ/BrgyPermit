<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization - Brgy Permits</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        .auth-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }
        h2 {
            color: black !important;
        }
        .auth-message {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: black !important;
        }
        .auth-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .auth-buttons form {
            display: inline;
        }
        .btn-cancel {
            padding: 12px 24px;
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .btn-accept {
            padding: 12px 24px;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .btn-cancel:hover {
            background: linear-gradient(135deg, #c82333 0%, #dc3545 100%);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }
        .btn-accept:hover {
            background: linear-gradient(135deg, #20c997 0%, #28a745 100%);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <h2>Authorization Required</h2>
        <div class="auth-message">
            <p>I hereby authorize the Barangay Permit Application System and its designated personnel to access, verify, and process the confidential information and documents I have submitted. This authorization is granted solely for the purpose of evaluating my application for barangay clearance, certificate of residency, or business permit. I understand that my data will be handled securely and in accordance with applicable data privacy laws.</p>
        </div>
        <div class="auth-buttons">
            <form method="post">
                <input type="hidden" name="action" value="cancel">
                <button type="submit" class="btn-cancel">Cancel</button>
            </form>
            <form method="post">
                <input type="hidden" name="action" value="accept">
                <input type="hidden" name="type" value="<?php echo htmlspecialchars($_GET['type'] ?? ''); ?>">
                <button type="submit" class="btn-accept">Accept</button>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['action'])) {
            if ($_POST['action'] == 'cancel') {
                header("Location: index.php");
                exit();
            } elseif ($_POST['action'] == 'accept') {
                $type = $_POST['type'] ?? '';
                switch ($type) {
                    case 'clearance':
                        header("Location: Barangay_clearance.php");
                        break;
                    case 'business':
                        header("Location: Barangay_business_Clearance.php");
                        break;
                    case 'residency':
                        header("Location: certificate_of_residency.php");
                        break;
                    default:
                        header("Location: index.php");
                }
                exit();
            }
        }
    }
    ?>
</body>
</html>