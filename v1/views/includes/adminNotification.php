<?PHP
	function sendMessage($message,$headings,$page,$who,$webp){
    $content      = array(
        "en" => $message
    );
    $heading      = array(
        "en" => $headings
    );

		$fields = array(
			  'app_id' => "cc25a795-5346-475b-a113-1caf2b06e3cd",
			'include_player_ids' => array($who),
        'url' => "https://attendout.com/".$page,
			'contents' => $content,
			'web_push_topic'=> $webp,
      'headings' => $heading
		);

		$fields = json_encode($fields);
    	print("\nJSON sent:\n");
    	print($fields);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic NzgzYzZlMTYtZDNmZS00NTA5LWJiMzItYThiODNiOTlmYjcz'
    ));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);

		return $response;
	}

	$response = sendMessage($message,$headings,$page,$who,$webp);
	$return["allresponses"] = $response;
	$return = json_encode( $return);

	// print("\n\nJSON received:\n");
	// print($return);
	// print("\n");

?>
