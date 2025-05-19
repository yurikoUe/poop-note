# poop-note

# 💩 排便管理アプリ（うんちログ）　開発中

3歳の子どもでも使える、直感的で簡単な**排便記録アプリ**です。  
子どもの排便状況をアプリで管理し、月ごとに印刷して病院に提出する用途を想定しています。

---

## 📦 技術構成

| 技術         | バージョン      |
|--------------|-----------------|
| Laravel      | 11.44.7         |
| PHP          | 8.2.28          |
| MySQL        | 8.0.26          |
| Nginx        | 1.21.1          |
| Docker       | 最新            |
| Docker Compose | 最新          |
| phpMyAdmin   | 利用中（ポート: `8080`） |
| フロントエンド | Blade / JavaScript (Vanilla) |

---

## 🚀 開発の目的

- 毎月の紙印刷＆転記の手間を削減
- 子ども自身が記録できるUI
- 病院提出用にPDF出力ができる
- ポートフォリオとして外部公開するが、**個人データは見られない設計**にする

---

## 📁 機能概要（予定）

| 機能 | 内容 |
|------|------|
| 本番モード | `/child/{child_id}/record`：自宅用の本番データを記録 |
| 体験モード | `/demo`：セッションで仮ユーザーを作成して自由に操作 |
| 記録内容 | 日付、時間、便の硬さ（1〜7）、薬、症状、メモなど |
| 出力 | 月ごとの一覧をPDFで出力（病院提出用） |
| 子ども対応UI | 文字が読めない子でも操作できるように視覚的な工夫を予定 |

---

## 🐳 開発環境構築（Docker）

```bash
# クローン後、srcディレクトリ内に.envを用意
cp .env.example .env
# Docker起動
docker-compose up -d --build
# Laravelのセットアップ
docker compose exec app composer install
docker compose exec app php artisan migrate
