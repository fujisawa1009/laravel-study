[memo] udemy PHP基礎の学習後に見てほしいLaravel入門(Laravel12対応)
使用する開発環境・ツール
Laravel / Laravel Sail / PHP(8.2) / Docker / MySQL / phpMyAdmin / Mailtrap

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

■

# section03
# section04
# section05
# section06
# section07
# section08
# section09
# section10
# section11
# section12
# section13
# section14
# section15
# section16
# section17
