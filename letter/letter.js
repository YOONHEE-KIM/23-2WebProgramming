document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('click', function (event) {
        showMemo(event.clientX, event.clientY);
    });
    
    var memoInput = document.getElementById('memo');
    memoInput.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            hideMemo();
        }
    });
});

function showMemo(x, y) {
    var memoContainer = document.getElementById('memoContainer');
    memoContainer.style.left = x + 'px';
    memoContainer.style.top = y + 'px';
    memoContainer.style.opacity = '1';
    memoContainer.classList.remove('hidden');
}

function hideMemo() {
    var memoContainer = document.getElementById('memoContainer');
    var paperAirplane = document.getElementById('paperAirplane');
    var memoInput = document.getElementById('memo');

    var memoText = memoInput.value;
    if (memoText.includes('구구씨') || memoText.includes('구구씨')) {
        alert("사랑하는 내 친구, 오늘도 화이팅!");
    }

    if (memoText.trim() !== '') {
        launchPaperAirplane();
    }

    // 메모장 투명도 변경 (페이드 아웃 효과)
    memoContainer.style.transition = 'opacity 0.5s ease-out';
    memoContainer.style.opacity = '0';

    // 메모장 숨김
    setTimeout(() => {
        memoContainer.classList.add('hidden');
        paperAirplane.classList.add('hidden');
        memoInput.value = '';
    }, 500); // 페이드 아웃 시간과 일치해야 함
}

function launchPaperAirplane() {
    var paperAirplane = document.getElementById('paperAirplane');

    //비행기 이미지 보여주기
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
