<html>
<body>
<?php
$client = new Client('https://discordapp.com/api/webhooks/654827471304392709/kOcBVRyt5G1rLUAryxl61vhXycichdf_6lbuCGcriV2ezYG6rg31pYogOYV1vzF1ysB2');
try{
    $embedData = array(
        "author" => array(
            "name" =>"NAME",
            "url" => "WEB_URL",
            "icon_url" => "ICON_URL"
        ),
        "title" => "Title",
        "url" => "WEB_URL",
        "description" => "Text message. You can use Markdown here. *Italic* **bold** __underline__ ~~strikeout~~ [hyperlink](https://google.com) `code`",
        "color" => 15258703,
        "fields" => array(
            array(
                "name" => "Text",
                "value" => "More text",
                "inline" => true
            ),
            array(
                "name" => "Text",
                "value" => "More text",
                "inline" => true
            ),
            array(
                "name" => "Even more text",
                "value" => "Yup",
                "inline" => true
            ),
            array(
                "name" => "Use `\"inline\" => true` parameter, if you want to display fields in the same line.",
                "value" => "okay..."
            ),
            array(
                "name" => "Thanks!",
                "value" => "You're welcome :wink:"
            )
        ),
        "thumbnail" => array(
            "url" => "THUMBNAIL_URL"
        ),
        "image" => array(
            "url" => "IMAGE_URL"
        ),
          "footer" => array(
            "text" => "Woah! So cool! :smirk:",
            "icon_url" => "ICON_URL"
        )
    );


    $client->setAvatar('AVATAR_URL'); // Optional
    $client->setUsername('BOT_NAME'); // Optional
    $client->setMessage('MESSAGE');
    $client->setEmbedData($embedData); //Optional
    $client->send();
}catch(\DiscordWebhooksPHP\DiscordException $e) {
    echo 'Error:'.$e->getMessage().'--'.$e->getCode();
    exit;
}
?>
  
</body>
</html>
