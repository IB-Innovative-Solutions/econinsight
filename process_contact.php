<?php
// Start session for storing messages
session_start();

// Set content type to JSON for AJAX requests
header('Content-Type: application/json');

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate phone number (basic validation)
function validate_phone($phone) {
    // Remove all non-digit characters
    $phone = preg_replace('/[^0-9+]/', '', $phone);
    // Check if it's at least 10 digits
    return strlen($phone) >= 10;
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Initialize response array
    $response = array();
    $errors = array();
    
    // Get and sanitize form data
    $firstName = isset($_POST['firstName']) ? sanitize_input($_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? sanitize_input($_POST['lastName']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
    $company = isset($_POST['company']) ? sanitize_input($_POST['company']) : '';
    $service = isset($_POST['service']) ? sanitize_input($_POST['service']) : '';
    $message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';
    
    // Validation
    if (empty($firstName)) {
        $errors['firstName'] = 'First name is required';
    } elseif (strlen($firstName) < 2) {
        $errors['firstName'] = 'First name must be at least 2 characters';
    }
    
    if (empty($lastName)) {
        $errors['lastName'] = 'Last name is required';
    } elseif (strlen($lastName) < 2) {
        $errors['lastName'] = 'Last name must be at least 2 characters';
    }
    
    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!validate_email($email)) {
        $errors['email'] = 'Please enter a valid email address';
    }
    
    if (!empty($phone) && !validate_phone($phone)) {
        $errors['phone'] = 'Please enter a valid phone number';
    }
    
    if (empty($message)) {
        $errors['message'] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $errors['message'] = 'Message must be at least 10 characters';
    }
    
    // If no validation errors, process the form
    if (empty($errors)) {
        
        // Prepare email content
        $to = "info@econinsight.co.za"; // Replace with your actual email
        $subject = "New Contact Form Submission - " . $company;
        
        $emailBody = "New contact form submission from EconInsight website:\n\n";
        $emailBody .= "Name: " . $firstName . " " . $lastName . "\n";
        $emailBody .= "Email: " . $email . "\n";
        if (!empty($phone)) {
            $emailBody .= "Phone: " . $phone . "\n";
        }
        if (!empty($company)) {
            $emailBody .= "Company: " . $company . "\n";
        }
        if (!empty($service)) {
            $emailBody .= "Service of Interest: " . $service . "\n";
        }
        $emailBody .= "Message:\n" . $message . "\n\n";
        $emailBody .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
        $emailBody .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
        
        // Email headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Try to send email
        if (mail($to, $subject, $emailBody, $headers)) {
            
            // Store success message in session
            $_SESSION['contact_success'] = "Thank you for your message! We'll get back to you within 24 hours.";
            
            // Log the submission (optional)
            $logEntry = date('Y-m-d H:i:s') . " - Contact form submitted by " . $email . " - " . $firstName . " " . $lastName . "\n";
            file_put_contents('contact_log.txt', $logEntry, FILE_APPEND | LOCK_EX);
            
            $response['success'] = true;
            $response['message'] = "Thank you for your message! We'll get back to you within 24 hours.";
            
        } else {
            $response['success'] = false;
            $response['message'] = "Sorry, there was an error sending your message. Please try again or contact us directly.";
        }
        
    } else {
        // Validation errors occurred
        $response['success'] = false;
        $response['message'] = "Please correct the errors below:";
        $response['errors'] = $errors;
    }
    
} else {
    // Not a POST request
    $response['success'] = false;
    $response['message'] = "Invalid request method";
}

// Return JSON response
echo json_encode($response);
exit;
?>
