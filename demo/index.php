<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <?php
        $styles = array("light","dark");

        if (isset($_GET["style"])) {
            $style = $_GET["style"];
        }

        if (!in_array($style,$styles)) {
            $style = "light";
        }
    ?>

    <link rel="stylesheet" href="../stylesheet/jquery.knobby.<?=$style?>.css" >

    <style>
        <?php
            switch($style) {
                case "light": ?>
                        body {
                            background:#fff;
                            font-family:sans-serif;
                            text-align:center;

                            color:#444;
                        }
                        pre {
                            white-space: normal;
                            background:#f4f4f4;
                            margin:0 auto;
                            padding:5px;
                            border-radius:15px;
                        }
                        a:link {
                            color:#26a;
                        }
                        a:visited {
                            color:#26a;
                        }
                    <?php break;
                case "dark": ?>
                    body {
                        background:#333;
                        font-family:sans-serif;
                        text-align:center;
                        color:#eee;
                    }
                    pre{
                        white-space: normal;
                    }
                    a:link {
                        color:#26a;
                    }
                    a:visited {
                        color:#666;
                    }

                <?php
                    break;
             } ?>
    </style>
</head>
<body>
<h1><a href="https://github.com/grilly86/jquery.knobby.js">jquery.knobby.js</a></h1>

<h6><a href="index.html">light</a> | <a href="dark.html">dark</a></h6>
<hr/>
<h2>Simple use:</h2>
<pre>&lt;input type="number" name="test1" min="0" max="100" /&gt;</pre>
<input type="number" name="test1" min="0" max="100" />

<pre>&lt;input type="number" name="test2" min="100" max="200" /&gt;</pre>
<input type="number" name="test2" min="100" max="200" />

<hr/>
<h2><code>turn</code> and <code>step</code> options</h2>
<pre>&lt;input type="number" name="test3" value="0" min="0" max="1000" <strong>turn="3" step="10"</strong> /&gt;</pre>
<input type="number" name="test3" turn="3" value="0" min="0" max="1000" step="10" />

<pre>&lt;input type="number" name="test4"  value="0" min="0" max="1000" <strong>turn=".25" step="50"</strong> /&gt;</pre>
<input type="number" name="test4" value="0" min="0" max="1000" turn=".25" step="50"  />
<hr/>

<h2><code>size</code> and <code>handle</code> options</h2>
<pre>&lt;input type="number" name="test5" turn=".75"  value="0" min="-5" max="10" step=".25" <strong>size="2"</strong> /&gt;</pre>
<input type="number" name="test5" turn=".75"  value="5" min="-5" max="10" step=".25" size="2" />

<pre>&lt;input type="number" name="test6" turn=".75"  value="0" min="-5" max="10" step=".25" <strong>size="10" handle-size="9" handle-gap="0"</strong> /&gt;</pre>
<input type="number" name="test6" turn=".75"  value="5" min="-5" max="10" step=".25" size="10" handle-size="9" handle-gap="1" />

<pre>&lt;input type="number" name="test7" turn=".75"  value="0" min="-5" max="10" step=".25" <strong>size="1" handle-size="1" handle-gap="0"</strong> /&gt;</pre>
<input type="number" name="test7" turn=".75"  value="5" min="-5" max="10" step=".25" size="1" handle-size="1" handle-gap="0" />


<p style="text-align:center">A <a href="http://jquery.com/">jQuery</a> plugin by <a href="http://codeblock.at/">Christian Frauscher</a></p>

<script src="jquery.js"></script>
<script src="../jquery.knobby.js"></script>
<script>
    $("input[type=number]").knobby();
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60203563-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
