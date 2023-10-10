<!-- Kylie Callison 4. Implement One Strategy to Prevent Brute Force Attacks  -->
<!-- only allow a single IP to attempt 8x every 5 mins to prevent brute force attack -->

<?php
session_start();

// max number of logins in time window
$maxAttempts = 8;

// time windown (seconds) in which maxAttempts can be reached before allowing another login attempt
$secondsPassed = 300; // 5 minutes
// get users IP 
$userIp = $_SERVER['REMOTE_ADDR'];

// check for previous login attempt 
if (isset($_SESSION['login_attempts'])) { 

    $loginAttempts = $_SESSION['login_attempts'];

    // check if secondsPassedhas passed
    if ($loginAttempts['timestamp'] + $secondsPassed < time()) { // more than secondsPassed has passed since last attempt
        // reset login attempts to 1 
        $_SESSION['login_attempts'] = ['count' => 1, 'timestamp' => time(), 'ip' => $userIp];
    } else { // less than secondsPassedsince last attempt
        // check if its the same IP
        if ($loginAttempts['ip'] === $userIp) { // same ip
            // check if maxAttempts
            if ($loginAttempts['count'] >= $maxAttempts) { //more than maxAttempts
                // Display an error message or take appropriate action.
                exit('BRUTE FORCE PREVENTION MECHANISM: Too many login attempts. Please try again later.');
            } else { //less than maxAttempts
                // print remaming attempts and add one to login attempts
                $remaining = $maxAttempts - $loginAttempts['count'];
                echo $remaining, ' attempts remaining. <br>';
                $_SESSION['login_attempts']['count']++;
            }
        } else { // diff ip
            // reset attempts for new login because its a new IP
            $_SESSION['login_attempts'] = ['count' => 1, 'timestamp' => time(), 'ip' => $userIp];
        }
    }
} else {
    // create login attempt if first one by that IP
    //initialize login attempts as 1, set current time as timestamp of login attempt and the user's IP
    $_SESSION['login_attempts'] = ['count' => 1, 'timestamp' => time(), 'ip' => $userIp];
}
?>