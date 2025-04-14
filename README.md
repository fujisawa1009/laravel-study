[memo]
使用する開発環境・ツール
Laravel / Laravel Sail / PHP(8.2) / Docker / MySQL / phpMyAdmin / Mailtrap

# section02 開発環境構築とプロジェクト作成(macOS)

curl -s "https://laravel.build/laravel-study?with=mysql,mailpit" | bash

phpMyAdminの追加
docker-compose.ymlに差し替え

開発環境構築と起動コマンド
./vendor/bin/sail up -d

開発環境の停止コマンド
./vendor/bin/sail down

データベースの設定(マイグレーション)コマンド --Laravel11よりデフォルトDBがmysqlからsqliteとなったため以下対応が必要
./vendor/bin/sail artisan migrate



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
