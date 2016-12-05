<?php

define('INCLUDE_CHECK',true);

require 'connect.php';

class Messages {
 
    public $messagesArr = null;
        
                
    function setMessages($id) {
        $sql = "SELECT * FROM messages WHERE receiver_id='".$id."'";
        $retval = mysql_query($sql);
        while($row = mysql_fetch_array($retval)) {
              $sql2 = "SELECT username FROM users WHERE id='".$row['sender_id']."'";
              $retval2 = mysql_query($sql2);
              $row2 = mysql_fetch_array($retval2);
              $parts = preg_split('/\s+/', $row['sendtime']);
              $this->messagesArr[] = array(
                'id' => $row['id'],
                'message' => $row['message'],
                'sender_id' => $row['sender_id'],
                'sender_name' => $row2['username'],
                'receiver_id' => $row['receiver_id'],
                'sendtime' => $parts[1]
              );
        }
    }
    
    function __construct($id) {
        $this->setMessages($id);
    }
    
    function getMessages() {
        return $this->messagesArr;
    }
}

