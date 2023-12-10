document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('click', function (event) {
        showMemo(event.clientX, event.clientY);
    });
});

function showMemo(x, y) {
    var memoContainer = document.getElementById('memoContainer');
    memoContainer.style.left = x + 'px';
    memoContainer.style.top = y + 'px';
    memoContainer.classList.remove('hidden');
}

function hideMemo() {
//    memoContainer.classList.add('hidden');
    var memoContainer = document.getElementById('memoContainer');
    var paperAirplane = document.getElementById('paperAirplane');

    //비행기 돌아감
    paperAirplane.style.transition = 'transform 1s ease-in-out';
    paperAirplane.style.transform = 'translate(-50%, -50%) rotate(720deg)';
    setTimeout(() => {
        paperAirplane.classList.add('hidden');
    }, 1000);

    // 메모장 숨김
    setTimeout(() => {
        memoContainer.classList.add('hidden');
        memoContainer.style.transition = 'none'; // Remove transition for hiding animation
    }, 1000);

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