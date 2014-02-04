<?php
require_once("Emailer.class.php");

                //while(list($user_id, $ar_id, $word_path)=mysql_fetch_array($R_resume))
		//for($i=0;$i<=2000;$i++) {
			$msg="";
                        $email = "senthil090680@gmail.com";
			$Emailer = new Emailer;
			$Emailer->set_to($email);
			$Emailer->set_from("Jobtardis");
			$Emailer->set_sender("<noreply@jobtardis.co.uk>");
			$subject_content = "Resume from jobtardis";
			$Emailer->set_subject($subject_content);
			$msg .= "Dear $display_name,<br/><br/>".
			"Greetings from Jobtardis! We are very happy to be associated with you and lend support to you in your head hunt for a promising candidate. Kindly find the resume attached for your placement requirement. Hope you are satisfied with the profile we sent you. We are looking forward to being associated with you in future.<br/><br/>Wishing you all the best to find the tailor made candidates for your vacancies. For any queries and further assistance, get it touch with us. We will do the needful. (Kindly find the resume attachment of a candidate who fit your recruitment expectations.)".
			"<br/> <br/> Thanks & Regards,<br/>Jobtardis Team<br/>".
			"<a href='www.jobtardis.in'>jobtardis.in</a><br/>".				
			"<img src='http://www.jobtardis.in/images/logo.gif'/><br/>";
			//$msg .= mail_append();
			
			//$pri_subject = "Dear $display_name,<br/><br/>"."Greetings from Jobtardis! We are very happy to be associated with you and lend support to you in your head hunt for a promising candidate. Kindly find the resume attached for your placement requirement. Hope you are satisfied with the profile we sent you. We are looking forward to being associated with you in future.<br/><br/>Wishing you all the best to find the tailor made candidates for your vacancies. For any queries and further assistance, get it touch with us. We will do the needful. (Kindly find the resume attachment of a candidate who fit your recruitment expectations in your drop box 'Applied resumes' folder.)";
						
			$Emailer->set_html($msg);
			//$Emailer->add_attachments($word_path);
			
			$result = $Emailer->send();
                        
                        echo $i."<br>";
            //}
?>