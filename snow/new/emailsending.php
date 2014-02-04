<?php

$moremsg ="Dear $name ,<br><br>\n" .
															"welcome to jobtardis.in - 1stop shop for 7 billion people <br/><br/>".
															"welcome to jobtardis.in - world first knowledge auction portal <br/><br/>".

															"The Knowledge Auction is a new innovative service using latest technology advances to allow both Recruiters/Employers and Jobseekers the possibility to post resume and job bids to find the right employee or employer respectively. We at jobtardis believe that the growth and survival of any business or organization, and on a bigger scale also the growth of an economy, is ultimately dependent on the effective acquisition and utilization of knowledge. Using  knowledge auction , we intend to unite recruiters ,companies ,employers with job seekers  blessed with unique talents and remarkable knowledge who will contribute effectively to the growth and development of the hiring organization <br/><br/>".

															"<a href='http://www.jobtardis.in/knowledge-auction-ticker.php'>what is knowlede auction ?</a> &nbsp;&nbsp;&nbsp;<a href='http://www.youtube.com/watch?v=GGZAt0-Iudg'>Click Here</a><br/><br/>".


															"Jobtardis.in is one of the most recent worldwide online jobportal with the objective of providing high level technology features to Jobseekers/Recruiters/Employers<br/><br/>".

															"Jobtardis.in provides jobs, resume bids, job bids, professional networking, discussions, groups, information, communication, audio video chat rooms, virtual job fairs, advertising, application tracking systems, personalised branding and other numerous services. Jobtardis.in is proud to declare itself as the world�s first knowledge auction portal, built with the objective of breaking all traditional rules of job posting <br/><br/>".

															"Jobtardis.in provides a one-stop-shop platform for worldwide citizens to connect online with each other, purposefully be it for an Employment/job. Jobtardis.in is committed to offering a personalized and a secure surfing with latest technology features</br>".

															"Enjoy you time with us <br/><br/>".

															"Your profile is created by your friend $rname .  You can delete you profile from Jobtardis.in  with in 7 days..  If you need any help , please contact Toll Free 1800 103 4598<br/><br/>".

															".once again welcome to jobtardis.in - stay ahead of you competition !! <br/><br/>".

															"Team Jobtardis <br/><br/>".

															"Jobtardis(India) <br/><br/>".
															"Toll Free No : 1800 103 4598".
							"Delhi | Chennai | Hyderabad | London | New York | Mountain view,California <br/><br/>".

														"Below provided are your account details:<br/><br/>\n".
															"Your Username : <b>$username</b><br>\n".
															"Your Password : <b>$password</b><br><br>\n";
															"<a href='jobtardis.in/login1.php'>Click here to login</a><br><br>\n";

															$moremsg .="Once again welcome to www.jobtardis.in <br><br>\n".
															"Many Thanks ,<br/>\n".

																	"Admin Team � <a href='www.jobtardis.in'>jobtardis.in</a><br/>\n".
																		"<img src='http://www.jobtardis.in/images/logo.gif'/><br/>\n";
																		$subject="Join in Jobtardis";
																		$cc = "";
																		$bcc="";
																		$msg = $moremsg;
																		$from="admin@jobtardis.in";
																		//$to=$email;
                                                                                                                                                $to="senthil090680@gmail.com";
						//$rval = smtp_mail_send($from, $to, $subject, $moremsg,$cc,$bcc);
                                                $rval = mail($from, $to, $subject, $moremsg);                                                                                                                                                
?>
                                                