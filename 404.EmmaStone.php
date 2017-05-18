<!DOCTYPE html>
<html>
    <head>
        <title>Whoops...</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
              <?php
                  $imgsrc = array("https://38.media.tumblr.com/8c3249afb41b36992742b878ec61db1c/tumblr_inline_nem76itX7K1s27rpx.gif",
                                  "https://table4oneblog.files.wordpress.com/2013/12/29683-emma-stone-no-no-no-gif-xks5.gif",
                                  "http://mrwgifs.com/wp-content/uploads/2013/11/Its-A-Trap-Emma-Stone-Gif.gif",
                                  "https://media.giphy.com/media/mfO6HGWW8KZEc/giphy.gif",
                                  "https://media.giphy.com/media/sVZwCKdihacRW/giphy.gif",
                                  "https://media.giphy.com/media/H1HD23YaZqLRK/giphy.gif",
                                  "http://ak-hdl.buzzfed.com/static/2014-08/20/13/enhanced/webdr06/anigif_enhanced-28363-1408555408-35.gif",
                                  "https://bookishandawesome.files.wordpress.com/2015/03/emma-stone-03.gif?w=400&h=225",
								  "https://i.giphy.com/dYM1bHuaLiquQ.gif",
								  "https://i.giphy.com/2DJs60IBNYZqM.gif",
								  "https://i.giphy.com/WQiutu8TgrdHq.gif",
								  "https://i.giphy.com/7FqjJlEcDbx1C.gif",
								  "https://i.giphy.com/gUYoxJBAEq4kE.gif",
								  "https://i.giphy.com/IQ7h5TiVXJWc8.gif",
								  "https://i.giphy.com/JHZnobRBLWIcE.gif",
								  "https://i.giphy.com/sY7e3IbqdADWE.gif",
								  "https://i.giphy.com/FkqkHAhFkH2Rq.gif",
								  "https://i.giphy.com/CSF4vlifBruwM.gif",
								  "https://i.giphy.com/N6RImS22bTwyc.gif",
								  "https://i.giphy.com/C6mpEBnVlzPIQ.gif");
                  $randIndex = rand(0,count($imgsrc)-1);
               ?>
                <img src="<?php echo $imgsrc[$randIndex]; ?>" style="box-shadow: 0px 0px 100px 0px;color: rgb(176, 190, 197);">
                <div class="title">Page not found :(</div>
            </div>
        </div>
    </body>
</html>
