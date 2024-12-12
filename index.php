    <?php
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="./css/index.css">
    </head>

    <body>
        <div class="container">
            <div class="contant-box">
                <span>エンゲージメントサーベイ</span>
            </div>
            <form action="create.php" method="post">
                <div>
                    <p>名前を記入してください</p>
                    <input type="text"
                        name="name"
                        placeholder="山田太郎"
                        required
                        minlength="2"
                        maxlength="50">
                </div>
                <div>
                    <p>社用のメールアドレスを入力してください</p>
                    <input type="email"
                        name="email"
                        placeholder="example@domain.com"
                        pattern="^[a-zA-Z0-9_\-\.]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,}$"
                        required>
                </div>
                <div>
                    <p>回答日付を選んでください</p>
                    <input type="date"
                        name="time"
                        id="dateInput"
                        required>
                </div>
                <div>
                    <p>社員番号を選んでください</p>
                    <select name="values" required id="number">
                        <option value="1">１</option>
                        <option value="2">２</option>
                        <option value="3">３</option>
                        <option value="4">４</option>
                        <option value="5">５</option>
                        <option value="6">６</option>
                        <option value="7">７</option>
                        <option value="8">８</option>
                        <option value="9">９</option>
                        <option value="10">１０</option>
                        <option value="11">１１</option>
                        <option value="12">１２</option>
                        <option value="13">１３</option>
                        <option value="14">１４</option>
                        <option value="15">１５</option>
                        <option value="16">１６</option>
                        <option value="17">１７</option>
                        <option value="18">１８</option>
                        <option value="19">１９</option>
                        <option value="20">２０</option>
                        <option value="21">２１</option>
                        <option value="22">２２</option>
                        <option value="23">２３</option>
                        <option value="24">２４</option>
                        <option value="25">２５</option>
                        <option value="26">２６</option>
                        <option value="27">２７</option>
                        <option value="28">２８</option>
                        <option value="29">２９</option>
                        <option value="30">３０</option>
                        <option value="31">３１</option>
                        <option value="32">３２</option>
                        <option value="33">３３</option>
                        <option value="34">３４</option>
                        <option value="35">３５</option>
                        <option value="36">３６</option>
                        <option value="37">３７</option>
                        <option value="38">３８</option>
                        <option value="39">３９</option>
                        <option value="40">４０</option>
                        <option value="41">４１</option>
                        <option value="42">４２</option>
                        <option value="43">４３</option>
                        <option value="44">４４</option>
                        <option value="45">４５</option>
                        <option value="46">４６</option>
                        <option value="47">４７</option>
                        <option value="48">４８</option>
                        <option value="49">４９</option>
                        <option value="50">５０</option>
                    </select>
                </div>
                <div>
                    <p>友人や知人にこの会社を勧めたいと思いますか</p>
                    <div class="radio-group">
                        <input type="radio" name="recommend" id="recommend-1" value="1" required>
                        <label for="recommend-1">全く勧めたくない</label>

                        <input type="radio" name="recommend" id="recommend-2" value="2">
                        <label for="recommend-2">あまり勧めたくない</label>

                        <input type="radio" name="recommend" id="recommend-3" value="3">
                        <label for="recommend-3">やや勧めたい</label>

                        <input type="radio" name="recommend" id="recommend-4" value="4">
                        <label for="recommend-4">強く勧めたい</label>
                    </div>
                </div>
                <div>
                    <p>仕事にやりがいを感じていますか</p>
                    <div class="radio-group">
                        <input type="radio" name="motivation" id="motivation-1" value="1" required>
                        <label for="motivation-1">全く感じない</label>

                        <input type="radio" name="motivation" id="motivation-2" value="2">
                        <label for="motivation-2">あまり感じない</label>

                        <input type="radio" name="motivation" id="motivation-3" value="3">
                        <label for="motivation-3">やや感じる</label>

                        <input type="radio" name="motivation" id="motivation-4" value="4">
                        <label for="motivation-4">強く感じる</label>
                    </div>
                </div>
                <div>
                    <p>会社の理念や目標を理解し、共感できていますか</p>
                    <div class="radio-group">
                        <input type="radio" name="vision" id="vision-1" value="1" required>
                        <label for="vision-1">全く共感できない</label>

                        <input type="radio" name="vision" id="vision-2" value="2">
                        <label for="vision-2">あまり共感できない</label>

                        <input type="radio" name="vision" id="vision-3" value="3">
                        <label for="vision-3">やや共感できる</label>

                        <input type="radio" name="vision" id="vision-4" value="4">
                        <label for="vision-4">強く共感できる</label>
                    </div>
                </div>

                <div class="button-container">
                    <input type="submit" value="送信" id="send-botton">
                </div>
            </form>

            <!-- 従業員データを閲覧 　パスの設定間違え-->
            <a href="/07_form/read.php">データを閲覧する</a>
        </div>

        <script>
            // 現在の日付オブジェクトを作成
            const today = new Date();

            // 年を取得（4桁の数値）
            const year = today.getFullYear(); // 例: 2024

            // 月を取得して2桁に整形 確認
            const month = String(today.getMonth() + 1).padStart(2, '0');
            console.log(month);
            // getMonth()は0-11を返すため、+1が必要
            // padStart(2, '0')で1桁の月を01のように2桁に整形

            // 日を取得して2桁に整形
            const day = String(today.getDate()).padStart(2, '0');
            // padStart(2, '0')で1桁の日を01のように2桁に整形

            // テンプレートリテラルで日付文字列を作成
            const formattedDate = `${year}-${month}-${day}`;
            // 例: "2024-12-09"形式の文字列になる

            // HTML要素に値を設定
            document.getElementById('dateInput').value = formattedDate;
        </script>
    </body>

    </html>