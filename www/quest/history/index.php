<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザーガイド</title>
    <link rel="stylesheet" href="history.css">
    <script>
        function toggleAccordion(buttonId, contentId) {
            var button = document.getElementById(buttonId);
            var content = document.getElementById(contentId);
            
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                button.classList.remove("active");
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                button.classList.add("active");
            }
        }
    </script>
</head>
<body>
    <h1>ユーザーガイド</h1>
    <button id="button1" class="accordion-button" onclick="toggleAccordion('button1', 'content1')">
        基本操作
        <span class="arrow-icon">▼</span> <!-- 三角アイコンを追加 -->
    </button>
    <div id="content1" class="accordion-content">
        <p>受注</p>
        <p>↓</p>
        <p>クエスト達成報告</p>
        <p>↓</p>
        <p>ポイントをもらって豪華景品と交換しよう</p>
    </div>

    <button id="button2" class="accordion-button" onclick="toggleAccordion('button2', 'content2')">
        お使いになられる前に
        <span class="arrow-icon">▼</span>
    </button>
    <div id="content2" class="accordion-content">
        <p>このサイトは、「新たな自分を知る」というテーマとして作成されました。</p>
        <p>このサイトを通じて、あなたも是非体験したことのないことに挑戦し、</p>
        <p>自分の可能性を広げていってください</p>
    </div>

    <button id="button3" class="accordion-button" onclick="toggleAccordion('button3', 'content3')">
        クエストについて
        <span class="arrow-icon">▼</span>
    </button>
    <div id="content3" class="accordion-content">
        <p>ボタン 3 の内容をここに追加します。</p>
    </div>

    <button id="button4" class="accordion-button" onclick="toggleAccordion('button4', 'content4')">
        ポイントについて
        <span class="arrow-icon">▼</span>
    </button>
    <div id="content4" class="accordion-content">
        <p>ボタン 4 の内容をここに追加します。</p>
    </div>

    <button id="button5" class="accordion-button" onclick="toggleAccordion('button5', 'content5')">
        FAQ
        <span class="arrow-icon">▼</span>
    </button>
    <div id="content5" class="accordion-content">
        <p>ボタン 5 の内容をここに追加します。</p>
    </div>
</body>
</html>