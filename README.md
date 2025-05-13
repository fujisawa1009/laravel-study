[memo] udemy PHP基礎の学習後に見てほしいLaravel入門(Laravel12対応)
使用する開発環境・ツール
Laravel / Laravel Sail / PHP(8.2) / Docker / MySQL / phpMyAdmin / Mailtrap

2025/05/13：section6から

# section01 コース紹介 //done 

# section02 開発環境構築とプロジェクト作成(macOS) //done
■dockerのインストール等の設定
■プロジェクト作成コマンド
curl -s "https://laravel.build/laravel-study?with=mysql,mailpit" | bash

■phpMyAdminの追加
※最後のnetworks:の直前に下記を追記
    phpmyadmin:
        image: phpmyadmin/phpmyadmin
        depends_on:
            - mysql
        ports:
            - 8888:80
        environment:
            PMA_USER: '${DB_USERNAME}'
            PMA_PASSWORD: '${DB_PASSWORD}'
            PMA_HOST: mysql
        networks:
            - sail

開発環境構築と起動コマンド
./vendor/bin/sail up -d

開発環境の停止コマンド
./vendor/bin/sail down

⬜︎データベースの設定(マイグレーション)コマンド
Laravel11よりデフォルトDBがmysqlからsqliteとなったため以下対応が必要(sailが起動している状態で実行すること)
./vendor/bin/sail artisan migrate

ローカル接続
http://localhost/

■sailエイリアスの登録
使用しているシェルの確認
echo $SHELL
エイリアスの登録(/bin/zsh と表示された場合)
echo "alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'" >> ~/.zshrc
設定反映
exec $SHELL -l
確認
sail artisan -V

■タイムゾーン設定など日本用の設定
・タイムゾーン設定:  'timezone' => 'Asia/Tokyo',
・言語設定:  'locale' => env('APP_LOCALE', 'ja'),
環境変数設定.envにて行うこと

# section3 プロジェクト作成windows編 //done

# section04 ルーティング
Laravelではpublicディレクトリがドキュメントルートになる
ルーティングファイル
routes/web.php
構文：Route::get('パス', function () { 処理内容 });
Route::get('/hellow-world', function () { return 'hellow-world'; }); にアクセスすると文字表示など
アロー関数での記載構文  ※PHP7.4から対応
Route::get('/hellow-world', fn () => 'arrow hellow'); 

# section05 ビュー //done
■ビュファイル：resources/views/配下にblade.phpファイルを配置配置
使用方法：ルーティングでview関数を使用する
Route::get('/', fn () => view('welcome')); ///welcome.blade.php読み込み
※第一引数にビュファイル名、第二引数に連想配列(ビュー内で使用できる変数を定義する)

■bladeテンプレート: {{ $tilet }} この囲い機能でクロスサイトスクリプティング対策となる
ディレクティブ構文、、phpコード埋め込みには@php....@endphpの間に記載する
条件分岐：@if、@elseif、@else、@endif..etc
繰り返し:@while、@for、@foreach、@forelse
条件クラス：@classでCSSクラスを条件つきで出力する
■レイアウト：ヘッダーなどの共通部分をまとめる機能(@yiledディレクティブを使用)
以下commandファイルに記載例が複数あり

# section06 コントローラー
サンプルのルーティングファイルを貼り付け-->routes/web.php
サンプルのビューファイルを3つ配置
resources/views/monty-hall.blade.php --> /monty-hallにアクセス
resources/views/omikuji.blade.php -->  /omikujiにアクセス
resources/views/world-time.blade.php -->/world-timeにアクセス

コントローラ作成コマンド-->実行により/app/Http/Controllerにそれぞれのファイルが作成される
sail artisan make:controller UtilityController
sail artisan make:controller GameController

⬜︎ルーティング useするのを忘れず行う
use App\Http\Controllers\GameController;
Route::get('/monty-hall', [GameController::class, 'montyHall']);

# section07 リクエスト
# section08　セッション
# section09 ファイル操作
# section10
# section11
# section12
# section13
# section14
# section15
# section16
# section17
