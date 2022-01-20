# README

## 概要
Twitterライクな簡易SNS

## 利用技術
- PHP8.1
    - Laravel8
- JavaScript
    - Vue.js2
    - Nuxt2

## 画面機能
- 登録画面
- ログイン画面
- 自分のプロフィール画面
    - 自分の投稿表示
    - 退会
    - ログアウト
    - プロフィール編集
- ユーザー詳細画面
- タイムライン画面
    - コメント投稿
    - 削除

## モデル
- User
    - id(bigint)(pk)
    - user_code(varchar(100))
    - user_name(varchar(100))
    - password(varchar(255))
    - profile_image(varchar(50))
    - deleted_at(timestamp)
    - created_at(timestamp)
    - updated_at(timestamp)
- Comment
    - id(bigint)(pk)
    - user_id(fk)
    - content(140)
    - image(varchar(50))
    - deleted_at(timestamp)
    - created_at(timestamp)
    - updated_at(timestamp)
