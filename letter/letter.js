document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('click', function (event) {
        var memoContainer = document.getElementById('memoContainer');
        if (memoContainer.classList.contains('hidden')) {
            showMemo(event.clientX, event.clientY);
        }
        else{hideMemo();}
    });
    
    var memoInput = document.getElementById('memo');
    memoInput.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            // 엔터키가 눌렸을 때 hideMemo 함수 호출
            hideMemo();
        }
    });
});

function showMemo(x, y) {
    var memoContainer = document.getElementById('memoContainer');
    if (memoContainer.classList.contains('hidden')) {
        // 메모장이 숨겨져 있으면 열기
        memoContainer.style.left = x + 'px';
        memoContainer.style.top = y + 'px';
        memoContainer.style.opacity = '1';
        memoContainer.classList.remove('hidden');
    } else {
        // 메모장이 열려 있으면 닫기
        hideMemo();
    }
}

function showMemo(x, y) {
    var memoContainer = document.getElementById('memoContainer');
    var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
    var viewportHeight = window.innerHeight || document.documentElement.clientHeight;

    // 메모장의 크기를 고려하여 left와 top을 설정
    var memoWidth = memoContainer.offsetWidth;
    var memoHeight = memoContainer.offsetHeight;

    // 현재 클릭된 위치와 메모장의 크기를 고려하여 left와 top을 설정
    var left = x + memoWidth > viewportWidth ? viewportWidth - memoWidth : x;
    var top = y + memoHeight > viewportHeight ? viewportHeight - memoHeight : y;

    memoContainer.style.left = x + 'px';
    memoContainer.style.top = y + 'px';
    memoContainer.style.opacity = '1';
    memoContainer.classList.remove('hidden');
}

function hideMemo() {
//    memoContainer.classList.add('hidden');
    var memoContainer = document.getElementById('memoContainer');
    var paperAirplane = document.getElementById('paperAirplane');
    var memoInput = document.getElementById('memo');

    // 메모장 투명도 변경 (페이드 아웃 효과)
    memoContainer.style.transition = 'opacity 0.5s ease-out';
    memoContainer.style.opacity = '0';

    // 메모장 숨김
//    setTimeout(() => {
//        memoContainer.style.transition = 'opacity 0.5s ease-out'; // 서서히 사라지기
//        memoContainer.style.opacity = '0';
//    }, 1000);

    setTimeout(() => {
        paperAirplane.classList.add('hidden');
        memoContainer.classList.add('hidden');
        memoInput.value = '';
        document.body.click();
    }, 1500);


    var memoText = document.getElementById('memo').value;
    if (memoText.includes('구구씨') || memoText.includes('구구씨')) {
        alert("사랑하는 내 친구, 오늘도 화이팅!");
    }

    if (memoText.trim() !== '') {
        launchPaperAirplane();
    }
}

function launchPaperAirplane() {
    var paperAirplane = document.getElementById('paperAirplane');

    //비행기 이미지 보여주기ㅣ
    paperAirplane.style.transition = 'none';
    paperAirplane.style.transform = 'translate(-50%, -50%) rotate(0deg)';
    paperAirplane.classList.remove('hidden');

    //날리기
    var angle = 0;
    var intervalId = setInterval(() => {
        angle += 10;
        paperAirplane.style.transform = `translate(-50%, -50%) rotate(${angle}deg)`;
        if (angle >= 720) {
            paperAirplane.classList.add('hidden');
            clearInterval(intervalId);
        }
    }, 50);
}