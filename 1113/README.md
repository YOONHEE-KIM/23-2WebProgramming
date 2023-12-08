# PHP코드로 아래의 5문제를 풀어보자
## Index
  - [1. for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오.](#1-for문을-이용하여-다음과-같은-출력을-하는-프로그램을-작성하시오)
    - [코드 실행 결과](#코드-실행-결과)
  - [2. 배열을 내림차순으로 정렬하고 싶다. sort() 함수를 이용하여 revsort() 함수를 설계하고 테스트하시오.](#2-배열을-내림차순으로-정렬하고-싶다-sort-함수를-이용하여-revsort-함수를-설계하고-테스트하시오)
    - [코드 실행 결과](#코드-실행-결과-1)
  - [3. 'exam.txt' 라는 파일을 열어 그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.](#3-examtxt-라는-파일을-열어-그-파일의-줄-수-단어-수-글자-수를-계산하는-프로그램을-작성하시오)
    - [코드 실행 결과](#코드-실행-결과-2)
  - [4. 다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다.](#4-다음은-각각의-사람들이-현재까지-생활하였던-도시의-이름을-나타내었다)
    - [코드 실행 결과](#코드-실행-결과-3)
  - [5. 고객 정보가 들어있는 파일 client.txt가 있다. 이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고 가정하자.](#5-고객-정보가-들어있는-파일-clienttxt가-있다-이-파일에-저장된-자료의-구조는-다음과-같이-ascii-형식으로-저장되어-있다고-가정하자)
    - [코드 실행 결과](#코드-실행-결과-4)
## 1. for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오.
A   
A B   
A B C   
A B C D   
A B C D E    
A B C D   
A B C   
A B  
A
### 코드 실행 결과
   1. 우선 위의 출력을 그대로 가지는 코드를 작성했다.
  ![image](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/e45f23d8-8ee7-401e-8234-194972c54d62)

  
   2. 그 후 원하는 수를 입력하여 결과를 확인해볼 수 있도록 form 태그를 사용하여 입력창을 만들었다.
      
![1 for문](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/edd9e43e-0a67-4707-8eba-11f63fed6bef)

----
## 2. 배열을 내림차순으로 정렬하고 싶다. sort() 함수를 이용하여 revsort() 함수를 설계하고 테스트하시오.
  > (hint : sort와 array_reverse함수 사용)

### 코드 실행 결과
   1. revsort라는 함수가 sort로 정렬 후, array_reverse를 이용해 역정렬할 수 있는 기능을 하도록 코드를 짰다.
![image](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/dbb76c38-4e49-480d-ab7c-2ecbddfc2ec8)

   2. 원하는 배열을 직접 입력하여 결과를 확인할 수 있다.
![2 revsort](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/b0315bdd-6417-49cc-a904-5f8f0b4bbc9a)

---

## 3. 'exam.txt' 라는 파일을 열어 그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.
### 코드 실행 결과
   1. 'exam.txt' 파일을 만든다.
      
![image](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/c200e5cd-a623-4123-ac7f-04ab10a2130c)


   2. while문을 이용해 각 줄을 세고, 단어와 글자를 세는 코드를 작성한다.
![image](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/c95735b9-fc42-4d4a-a2b9-3a2543885f10)

---
## 4. 다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다.

Kim   Seoul   
Lee    Pusan, Daegu  
Choi   Inchon  
Park   Suwon, Daejon  
Jung   Kwangju, Chunchon, Wonju

위의 값들을 연상 배열로 선언한 후 Choi 항목을 삭제한 뒤 연상 배열의 내용을 출력하는 PHP 프로그램을 작성하시오 (단, vardump() 함수는 사용하지 않음).

----
### 코드 실행 결과
   1. 연상배열을 선언한다.


   2. choi의 데이터를 삭제한다.


   3. 연상배열을 다시 출력한다.
![image](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/cf169658-138b-4520-9d52-1a4f882c99e2)


---

## 5. 고객 정보가 들어있는 파일 client.txt가 있다. 이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고 가정하자.

이름 [TAB] 나이 [TAB] 성별 [TAB] 이메일

이 파일을 읽어 나이가 30세 이상의 고객을 출력하는 프로그램을 작성하시오.


---------
### 코드 실행 결과
   1. 'client.txt' 파일을 만든다.

![image](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/42b44d8e-cbc7-4baa-961d-a45e398c8c06)

   2. 파일을 열고, 파일 내용을 줄 단위로 읽어, 탭 문자로 분리하는 코드를 작성했다.
   
   3. 실행이 잘 안되는 것 같다.. 코드를 여러번 수정했는데 30세 이상인 고객의 출력을 확인하지 못했다.

![image](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/04159ebb-c334-437e-a721-1bc541230420)
