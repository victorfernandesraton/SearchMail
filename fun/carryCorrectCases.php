<?php
function LoadCorrectMails($mailcorrect_status,$mail_obj,$cx,$time) {
    if ($mailcorrect_status == true) {
        set_time_limit($time);
        foreach ($mail_obj as $mail) {
            $mail_correct = $mail->getUser()."@".$mail->getSimilarDomain();
            $mail_region = $mail->getRegion();
            $mail_user = $mail->getUser();
    
            $query = "INSERT INTO mailcorrect 
            (mailAdress,
            region,
            user) VALUES (:mailAdress,
            :region,
            :user);";
    
            $stmt = $cx->prepare($query);
            $stmt->bindValue(":mailAdress",$mail_correct);
            $stmt->bindValue(":region",$mail_region);
            $stmt->bindValue(":user",$mail_user);
            $stmt->execute();
        }
    }
}

?>
