<?php
require __DIR__ . '/vendor/autoload.php';
function redirectToHome()
{
    header('Location: /');
    exit();
}
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];

$toSpreadsheet = [[$category, $email, $title, $desc]];

$googleAccountKeyFilePath = "inf.json";

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

$client = new Google_Client();

$client->useApplicationDefaultCredentials();
$client->addScope('https://www.googleapis.com/auth/spreadsheets');
$service = new Google_Service_Sheets($client);
$idSheet = "1pKPjQmN1Oj58rGlcJbdkSrGtDmBG_Ur5PCUL7YADzsI";
$spreadsheetName = "List1";

$body = new Google_Service_Sheets_ValueRange(['values' => $toSpreadsheet]);

$options = array('valueInputOption' => 'USER_ENTERED');

$service->spreadsheets_values->append($idSheet, $spreadsheetName, $body, $options);

redirectToHome();
