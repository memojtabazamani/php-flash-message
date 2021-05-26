<?php 
session_start();
class flash {
    // Type used { danger, success, warning, info, primary }
    
    // Use this function if you just want to show a blink!
    // By Default :
    // -type is 'success'
    public function onceFlash($message, $type = 'success') {
        // declare a session messsage array
        $_SESSION['message'][] = $message;
        $_SESSION['type']    = $type;
    }
    
    // Use this function if you want to show a few blinks!
    // By Default :
    // -type is 'success'
    public function multipleFlash($messages, $type = 'success') {
        
        // Must be check $messages accessing data or not?
        if(!empty($messages)) {
            // And here use foreach take all messages and set to session!
            foreach($messages as $value) {
                $_SESSION['message'][] = $value;
            }
            $_SESSION['type']    = $type;
        }
    }
    
    // This function print a flash messages
    public static function messageFlash() {
        // Must be check a set message and not empty message session!
        if(isset($_SESSION['message']) && !empty($_SESSION['message'])) {
            echo "<div class='alert alert-" . $_SESSION['type'] . "'>";
            foreach($_SESSION['message'] as $message) {
                echo "<p>";
                echo $message;
                echo "</p>";
            }
            echo "</div>";

            unset($_SESSION['message']);
            unset($_SESSION['type']);
        }
    }
    
    // These functions use for common messages!
    public function successFlash($message = "Your request is done!!") {
        $_SESSION['message'][] = $message;
        $_SESSION['type'] = "success";
    }
    public function dangerFlash($message = "Faile to doned your request!") {
        
        $_SESSION['message'][] = $message;
        $_SESSION['type'] = "danger";
    }
    public function infoFlash($message = "Wellcome to your account") {
        $_SESSION['message'][] = $message;
        $_SESSION['type'] = "info";
    }
    public function warningFlash($message = "Warning Area!") {
        $_SESSION['message'][] = $message;
        $_SESSION['type'] = "warning";
    }
    
}