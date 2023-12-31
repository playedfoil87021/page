<!--123トップ画面担当：小川・安江,確認者：（　）-->
<!DOCTYPE html> <!--ここは最初に表示されるページです-->

<head>
    <title>HobbyConnect</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./index.css">
    <link rel="shortcut icon" href="./img/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<header><iframe src="./header/header.html" frameborder="0" width="100%" scrolling="no"></iframe></header>

<body>
    <div class="title">
        <img src="./img/questwalker.png">
    </div>

    <nav class="titlepage">
        <ul>
            <button class="login">
                <li><a href=./account/login>ログイン</a></li>
            </button>
            <button class="sign">
                <li><a href=./account/join>新規登録</a></li>
            </button>
        </ul>
    </nav>

    <!--タブパネルの選択部分-->
    <input id="a-tab" type="radio" name="tab-radio" class="tab-input" value="usage" checked="">
    <h2 class="tab-label-heading selected"><label id="a-tab" class="tab-label" for="a-tab">HOBBYCONNECT</label></h2>
    <input id="b-tab" type="radio" name="tab-radio" class="tab-input" value="type">
    <h2 class="tab-label-heading"><label id="b-tab" class="tab-label" for="b-tab">クエストとは</label></h2>
    <input id="c-tab" type="radio" name="tab-radio" class="tab-input" value="maker">
    <h2 class="tab-label-heading"><label id="c-tab" class="tab-label" for="c-tab">ポイント交換</label></h2>
    <!--追加したいかも？キャラクターの歴史
<input id="d-tab" type="radio" name="tab-radio" class="tab-input" value="maker">
    <h2 class="tab-label-heading"><label class="tab-label" for="d-tab">キャラクターの歴史</label></h2>
-->
    <!--タブパネルの内容部分(pの後に内容を書いてね)-->
    <div class="tab-panel panel-a">
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>HOBBYCONNECT知ってるにゃ？</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                なにそれ、わかんない
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>にゃに！？HOBBYCONNECTを知らないにゃ？</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                知ってるわけないじゃんｗ<br>
                HOBBYCONNECTって名前的に怪しい組織でしょｗ</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>そんなわけないにゃに！！怪しくないにゃに！<br>
                        HOBBYCONNECTとは！！！</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->
        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                とは？？
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>趣味を繋げる<br>＝"みんなで楽しくをモットーに！"<br>という意味が込められているにゃ！</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->


        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                なるほどね、HOBBYCONNECTはそういう意味なんだね<br>
                いい名前だね
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>ありがとにゃに！！嬉しいにゃん！</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                ところでメンバーは、何人グループなの？</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>HOBBYCONNECTは、男女６人のグループにゃに！
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                男女６人グループ！？<br>
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>そうにゃ、そしてメンバーを発表するにゃ
                </div>
            </div>
        </div>
        <!--②/左コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>まず、リーダーは小川琉聖にゃ<br>
                        そしてサブリーダーは前田iraにゃ<br>
                        残りメンバーは4人<br>
                        見上明希音<br>
                        安江幸<br>
                        坂下歩夢<br>
                        蛭田優斗の計6人にゃ
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                そんだけ人数がいて、役割とか大変じゃなかった？
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>いい質問するにゃ<br>HOBBYCONNECTは全員にしっかりと<br>役割を与えているにゃ</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->
        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                なるほどなるほど<br>
                どんな役割を与えたの？
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>小川には、データベース代表・プログラム
                        <br>前田には、プログラム代表・データベース
                        <br>見上には、プログラム
                        <br>安江には、データベース・プログラム
                        <br>坂下には、データベース・プログラム
                        <br>蛭田には、プログラム
                        <br>という役割を与えたにゃ！
                    </p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->
        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                しっかりと全員に役割が割り当てられていていいね！<br>
                ところで、聞き忘れていたんだけど研究テーマって何？
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>良い質問だにゃ～！<br>
                        HOBBYCONNECTの研究テーマはなんと！！<br>
                        【人間の成長を数値で可視化し、変化を研究する】<br>
                        主に、成長・継続・挑戦を大事にしているにゃに！！</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                良い研究テーマだね！<br>
                でも、成長を数値で可視化するってどういうこと？</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>それはにゃ～、ゲーム性を追加し、<br>レベル制度・ステータス・ポイント制で数値を示すにゃ！</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                なるほどね、<br>
                じゃ、大事にしている３つの成長・継続・挑戦はどういうこと？
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>成長は、できないことをできるようにする<br>
                        継続は、つらいことでもめげないようにする<br>
                        挑戦は、どんなことでもあきらめずにする<br>
                        以上にゃに～！</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                なるほどね、教えてくれてありがとう！</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>にゃ～、HOBBYCONNECTについて知れてよかったにゃに～？</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                知れてよかったよ！</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>にゃ～！！その言葉聞けて嬉しいにゃ～！！</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                教えてくれてありがとう、ニャウォン！！</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/cat.png">
                <p>ニャウォン</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>んにゃ～！
                    </p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->


    </div>
    <div class="tab-panel panel-b">
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/usa.png">
                <p>筋肉ウサギ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>ぴょいぴょい～</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                どうしたの？
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/usa.png">
                <p>筋肉ウサギ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>クエストどんなことがあるぴょい？</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                んー、わかるわけないｗ</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/usa.png">
                <p>筋肉ウサギ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>ぴょいっ、わからないぴょいか…残念</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                教えて、筋肉ウサギ！！
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/usa.png">
                <p>筋肉ウサギ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>クエストの説明をおしえてあげるZE!<br>
                        ランダムで今日のクエストが出現するZE！<br>
                        あとは、必死に挑戦して達成報告するだけDA！<br>
                        君ならできる！！パワーッ！！
                    </p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                なるほど、教えてくれてありがとう！<br>
                僕も挑戦したくなったよ！</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/usa.png">
                <p>筋肉ウサギ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>おお！頑張れ、応援してるぴょいっ！！
                    </p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->
        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                ありがとう、頑張るよ！！</p>
        </div>
        <!--/③右コメント終-->
    </div>
    <div class="tab-panel panel-c">
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/kawa.png">
                <p>ユキウソ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>キューキュー</p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                どーしたんだい、ユキウソ？
            </p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/kawa.png">
                <p>ユキウソ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>ポイント交換について教えていたっけ？
                    </p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                え、聞いてないよ、教えて！ユキウソ！</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/kawa.png">
                <p>ユキウソ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>クエストをこなしてポイントを獲得するとキャラクターと交換できるキュイ！

                    </p>
                </div>
            </div>
        </div>

        <!--③右コメント始-->
        <div class="mycomment">
            <p>
                なるほど！ありがとう、ユキウソ！</p>
        </div>
        <!--/③右コメント終-->
        <!--③左コメント始-->
        <div class="balloon6">
            <div class="faceicon">
                <img src="./char_img/kawa.png">
                <p>ユキウソ</p>
            </div>
            <div class="chatting">
                <div class="says">
                    <p>
                        教えてよかったキュー！
                    </p>
                </div>
            </div>
        </div>
        <!--②/左コメント終-->
    </div>

    <!--追加したいかも？キャラクターの歴史
<div class="tab-panel panel-d">
    <div class="chara"><p>キャラクターの歴史🍖</p>
        <p>ニャウォン</p>
        <p>筋肉ウサギ</p>
        <p>鵜</p>

        
        <img class="usa" src="./img/usa.png">
        <img class="saru" src="./img/saru.png">
        <img class="kawa" src="./img/kawa.png">
        <img class="tori" src="./img/tori.png">
        <img class="dog" src="./img/dog.png">
        <img class="cat" src="./img/cat.png">
        -->
    </div>
    </div>

</body>