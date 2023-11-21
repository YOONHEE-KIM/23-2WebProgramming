# html 파일로 로그인 페이지 생성 후 php로 출력하기

## html 파일
Bootstrap-css의 템플릿 이용(html 파일과 css 파일을 따로 두고 link로 연결했다.)
<img src="https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/fafa6c86-a3df-4c60-8272-0589c31025bd.png"  width="300" height="250"/>

위 템플릿을 가져와 다음과 같은 화면을 출력했다.
<img width="1536" alt="loginAnimation" src="https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/4a0c681a-eb41-4e43-a4d1-8b3fcfc72d63.png"/>

## php 파일
위의 로그인 페이지에서 얻을 수 있는 정보는 아이디와 비밀번호 밖에 없기 때문에 php에 출력되는 정보는 간단하게 작성했다.
<img width="1536" src="https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/3e438363-c6d1-4b40-9293-4456d128b42b.png"/>

## 출력 결과는?
제일 먼저 작성한 html파일에 정보를 입력한다.
<img width="1536" src="https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/027e4cc9-1038-4c37-8139-4b836b3b0a42.png"/>

LOG IN 버튼을 눌러주면 아래와 같이

![loginerrorAnimation](https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/14e14290-6eb6-4332-9bbe-6456ac2f02f4)

실패한다.

----------------------------------------------------------
## 수정하고 오류찾기
결론적으로 문제는 **php 파일의 경로 설정** 이었다.  

수정 전
```
<form action="login.php" method="post">
```
수정 후
```
<form action="http://localhost/1120/login.php" method="post">
```
다른 코드에 문제가 없는데 연동이 안될 때 제일 먼저 의심해봐야 하는 부분이지만 당연히 맞다고 생각하고 지나쳤다.  
파일들을 같은 디렉토리에 넣어뒀기 때문에 코드를 짜는 과정에서 파일명을 정확히 입력하면 해당 파일이 자동으로 링크되었기 때문이다.  
몇 시간 동안 애꿎은 부분들만 수정하고 복원하기를 반복했다.  

다음은 의미없이 수정헤봤던 내용들이다.  
- php 오류 확인 코드 추가 : 당연히 html 파일에서 입력한 데이터가 넘어오지 않았기 때문에 로그인과 패스워드 값이 정의되지 않았다는 경고문이 떴다.  
```
error_reporting(E_ALL);  
ini_set('display_errors', 1);  
<!-- 현재는 다시 경고문을 출력하지 않는 코드로 바꿔둔 상태다 -->
```
- Laragon 설정 변경 : 포트 번호 및 설정 사항 변경
- Form 메서드 확인 및 변경 : 처음엔 post로 전부 통일 했었고, get으로 전체 변경, 의미 없다는 것을 깨닫고 다시 post로 복원
- 브라우저 캐시 비우기 & 재실행
- 포트 충돌 확인

**PHP 파일과 같이 서버에서 동작하는 파일은 절대 경로나 명시적인 상대 경로를 사용하여 정확한 주소를 제공하는 것이 안전하다**
<img width="1536" src="https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/2a67e8be-2b82-4438-8ab9-c917bc7ca98d.png"/>
