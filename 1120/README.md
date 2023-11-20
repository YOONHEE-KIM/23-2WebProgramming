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
<img width="1536" alt="loginerrorAnimation" src="https://github.com/YOONHEE-KIM/23-2WebProgramming/assets/124634807/c9eb08a1-25c0-47d9-8ee7-a2c590a40c34.png"/>
실패한다.
----------------------------------------------------------
## 수정하고 오류찾기
결론적으로 문제는 **php 파일의 경로 설정** 이었다. 다른 코드에 문제가 없는데 연동이 안될 때 제일 먼저 의심해봐야 하는 부분이지만 당연히 맞다고 생각하고 지나쳤다.
파일들을 같은 디렉토리에 넣어뒀기 때문에 코드를 짜는 과정에서 파일명을 정확히 입력하면 해당 파일이 자동으로 링크되었기 때문이다.
몇 시간 동안 애꿎은 부분들만 수정하고 복원하기를 반복했다. 
다음은 의미없이 수정헤봤던 내용들이다.
- php 오류 확인 코드 추가 : 당연히 html 파일에서 입력한 데이터가 넘어오지 않았기 때문에 로그인과 패스워드 값이 정의되지 않았다는 경고문이 떴다.
