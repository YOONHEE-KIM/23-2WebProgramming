# 1106
## Index
- [PHP알아보기](#php알아보기)
  - [1. 동적 웹페이지와 정적 웹페이지의 차이를 설명하시오.](#1-동적-웹페이지와-정적-웹페이지의-차이를-설명하시오)
  - [2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지 조사하시오.](#2-php에-설치된-모듈20개은-어떤-것이-있는지-조사하시오)
  - [3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오.](#3-php에서-사용되는-스크립트-엔진에-대해-기술하시오)
  - [4. 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 서버는 어떠한 일을 수행하는가?](#4-웹-브라우저에서-httpwwwabccomabcphp-페이지를-접속했을-때-서버는-어떠한-일을-수행하는가)
  - [5. call by value와 call by reference의 차이점에 대해 기술하시오.](#5-call-by-value와-call-by-reference의-차이점에-대해-기술하시오)
- [php 문제풀이](#php-문제풀이)
  - [변수의 홀/짝 여부 판별하는 함수](#변수의-홀짝-여부-판별하는-함수)
    - [코드실행결과](#코드실행결과)
  - [while문으로 factorial값 구하기](#while문으로-factorial값-구하기)
    - [코드실행결과](#코드실행결과-1)
  - [삼항연산자](#삼항연산자)
    - [코드실행결과](#코드실행결과-2)

# PHP알아보기
## 1. 동적 웹페이지와 정적 웹페이지의 차이를 설명하시오.
   
   > 정적웹페이지(Static Web Page) : 저장된 페이지를 보여준다.
   > 
   > 동적웹페이지(Dynamic Web Page) : 변수에 의해 변경되어 보인다.
   

## 2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지 조사하시오.

## 3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오.

## 4. 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 서버는 어떠한 일을 수행하는가?

## 5. call by value와 call by reference의 차이점에 대해 기술하시오.

# php 문제풀이
## 변수의 홀/짝 여부 판별하는 함수
1. $a라는 변수의 값이 홀수이면 그 숫자 다음 숫자인 짝수를 출력하고, $a의 값이 짝수이면 그 수를 출력하는 함수를 작성하고 테스트하시오.
### 코드실행결과
  > 홀수
![1 variable(odd)](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/c5555c9e-b841-4104-a1d9-2ef2ea6c8387)


  > 짝수
![1 variable(even)](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/7b6dd12e-4248-4028-9302-9543cd8ac9e1)

---
## while문으로 factorial값 구하기
2. while문을 이용하여 factorial 값을 구하는 함수를 작성하고 테스트하시오.
### 코드실행결과
![2 while](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/18c70d5e-cf78-46cb-9ddc-29b3122dadb0)


---   
## 삼항연산자
3. 다음 프로그램과 동일한 기능을 하는 프로그램을 삼항연산자( ? : )를 이용하여 작성하고 테스트하시오.
<pre>
<code>
&lt;?PHP
   $value = 12;
   if (($value % 2) == 1) print "odd";
   else print "even";
?>
</code>
</pre>


### 코드실행결과
![image](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/84811502-6eaa-4a75-888f-436312b44f19)




