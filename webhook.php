<html>
<body>

1

Does anyone know how to send Embeds from php to a discord hook?
CLOSE

1

Posted byu/wallythemad
1 year ago
Does anyone know how to send Embeds from php to a discord hook?
I already have a function to post messages to my webhook from a php site, but I'd like to spice things up with embeds.

Are there any code snippets / tutorials that would help?

2 Comments

Share

Save

Hide

Report
60% Upvoted

This thread is archived
New comments cannot be posted and votes cannot be cast
SORT BY

BEST


level 1
TheElm
1 point
·
1 year ago
It depends highly on your skill with PHP, whether you want to use a custom implementation. There are a few pre-existing PHP libraries for implementing Discord webhooks IIRC.

I've always wrote my own implementations to have the most control over it. Here's a quick example that I wrote up for you though, it's functonal, all you have to do is replace the $url variable.

Keep in mind though that this should not be used in your final product. This does not take rate limitations into account. It simply blindly executes the webhook and hopes that it works.

<?php

// Replace the URL with your own webhook url
$url = "https://discordapp.com/api/webhooks/0000000/ABCDEFGH....";

$hookObject = json_encode([
    /*
     * The general "message" shown above your embeds
     */
    "content" => "A message will go here",
    /*
     * The username shown in the message
     */
    "username" => "MyUsername",
    /*
     * The image location for the senders image
     */
    "avatar_url" => "https://pbs.twimg.com/profile_images/972154872261853184/RnOg6UyU_400x400.jpg",
    /*
     * Whether or not to read the message in Text-to-speech
     */
    "tts" => false,
    /*
     * File contents to send to upload a file
     */
    // "file" => "",
    /*
     * An array of Embeds
     */
    "embeds" => [
        /*
         * Our first embed
         */
        [
            // Set the title for your embed
            "title" => "Google.com",
            
            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",
            
            // A description for your embed
            "description" => "",
            
            // The URL of where your title will be a link to
            "url" => "https://www.google.com/",
            
            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => "2018-03-10T19:15:45-05:00",
            
            // The integer color to be used on the left side of the embed
            "color" => hexdec( "FFFFFF" ),
            
            // Footer object
            "footer" => [
                "text" => "Google TM",
                "icon_url" => "https://pbs.twimg.com/profile_images/972154872261853184/RnOg6UyU_400x400.jpg"
            ],
            
            // Image object
            "image" => [
                "url" => "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
            ],
            
            // Thumbnail object
            "thumbnail" => [
                "url" => "https://pbs.twimg.com/profile_images/972154872261853184/RnOg6UyU_400x400.jpg"
            ],
            
            // Author object
            "author" => [
                "name" => "Alphabet",
                "url" => "https://www.abc.xyz"
            ],
            
            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "Data A",
                    "value" => "Value A",
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "Data B",
                    "value" => "Value B",
                    "inline" => true
                ],
                // Field 3
                [
                    "name" => "Data C",
                    "value" => "Value C",
                    "inline" => true
                ]
            ]
        ]
    ]
    
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Length" => strlen( $hookObject ),
        "Content-Type" => "application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

?>
</body>]
</html>
