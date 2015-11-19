<!DOCTYPE html>
<?php include_once 'config.php' ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>VoiceStorm User Sample</title>
        <style>
            .container{
                width: 400px;
                margin: 80px auto;
            }
            .danger{
                color: red;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>VoiceStorm User Sample</h2>
            <?php
            if (isset($GLOBALS['voicestormAccessToken']) && !empty($GLOBALS['voicestormAccessToken']) && isset($GLOBALS['voicestormTokenSecret']) && !empty($GLOBALS['voicestormTokenSecret']) && isset($GLOBALS['voicestormBaseUrl']) && !empty($GLOBALS['voicestormBaseUrl']))
            {
                ?>
                <p>
                <form role = "form" method="post" action="formhandler.php" enctype= "multipart/form-data" >
                      <p>
                        <label for = "postId">PostId</label>
                        <input type = "text" name="postId" class = "form-control" id = "postId" >
                    </p>
                    <p>
                        <label for = "email">Image</label>
                        <input type = "file" name="image" class = "form-control" id = "image" >
                    </p>
                    <button type = "submit" class = "btn btn-primary">Submit</button>
                </form>
            </p>
            <?php
        }
        else
        {
            ?>
            <p class="danger">Please open config.php and set the required variables</p>
        <?php } ?>


    </div>
</body>
</html>
