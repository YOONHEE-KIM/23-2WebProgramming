# Admin and user login in php and mysql database(1127)
## Index
  - [Overview](#overview) 
  - [따라가기](#따라가기)
  - [문제상황](#문제상황)
  - [결과물](#결과물)

## 이 디렉토리에 대하여 
php와 mysql로 관리자와 유저 로그인 페이지를 만들었다. php 파일로 전체적인 틀을 만들고 mysql db를 연결하여 로그인(회원가입) 데이터를 받아온다.


## 따라가기

1.  https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database 접속
2. 본문을 그대로 따라간다

- Lalagon으로 서버 실행

## 문제 상황
라라곤에서 데이터베이스가 안열리는 문제가 발생

4일동안 열심히 서치해서 여러 방법들을 적용해봤지만 계속 연결 실패

- 결국 해결은 Mysql이 실행되고 있는 포트를 전부 죽이고 다시 재실행하는 방식으로 했다. (이전에도 같은 방법을 사용했는데 과정에서 문제가 있었는지 해결이 안됐음.)

## 결과물
