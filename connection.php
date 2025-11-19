mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = "YOUR_HOSTNAME";     // Example: sql306.infinityfree.com
$username   = "YOUR_USERNAME";     // Example: epiz_123456789
$password   = "YOUR_PASSWORD";     // Same as control panel password
$dbname     = "YOUR_DATABASE_NAME"; 

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    echo "Database connection failed!";
}
