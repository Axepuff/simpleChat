<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Чат</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css"/>
    <link rel="stylesheet" href="/skin/css/plugin/jscrollpane.css"/>
    <link rel="stylesheet" href="/skin/css/styles.css" type="text/css" media="screen">
</head>
<body>
<div class="main-container">
    <header class="top-panel">
        <a href="#" class="back-btn"><span class="icon-back">back</span></a>
        <a href="#" class="top-panel__name">%username%</a>
        <a href="#" class="more-btn"><span class="icon-more">more</span></a>
    </header>

    <div class="message-list" id="messages">

    </div>
    <footer class="send-panel">
        <a href="#" class="more-btn"><span class="icon-more-black"></span></a>
        <form class="send-panel__form">
            <textarea class="send-panel__textarea" id="message" placeholder="Type message. . ." autofocus
                      rows="1"></textarea>
            <button class="send-panel__send-btn" onclick="send();">Send</button>
        </form>
    </footer>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/skin/js/mousewheel.js"></script>
<script src="/skin/js/jscrollpane.js"></script>
<script src="/skin/js/js.js"></script>
</html>