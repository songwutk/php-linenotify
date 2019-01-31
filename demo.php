					// curl -i -X POST -H "Authorization: Bearer VVvZyh_Token_uLgRTYTF" -d "message=ขออภัยที่ต้องรบกวน"  https://notify-api.line.me/api/notify 
          
          function send_line_notify($message,$image, $token)
					{
					 // $message = "ข้อความตัวอย่าง";
					 // $image= "https://mywebn.com/app/slip/notx.gif";
						
					  $data = array(
										'message' =>$message,
										'imageThumbnail'=>$image,
										'imageFullsize'=>$image,
										);
								
					  $ch = curl_init();
					  curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
					  curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
					  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
					  curl_setopt( $ch, CURLOPT_POST, 1);
					  curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
					  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
					  $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token", );
					  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
					  $result = curl_exec( $ch );
					  curl_close( $ch );
					}
					
					send_line_notify($line_text,$line_image,$line_token);
