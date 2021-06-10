<p>time : <span id="time"></span></p>
<input type="button" id="execute" value="execute" />
<script>
document.querySelector('input').addEventListener('click', function(event){
    // XMLHttpRequest 객체를 생성한다.
    var xhr = new XMLHttpRequest();
    // method = 'GET' action= './time.php'
    xhr.open('GET', './time.php');
    // onreadystatechange 이벤트는 서버와의 통신이 끝났을 때 호출되는 이벤트이다
    xhr.onreadystatechange = function(){
        // readyState는 통신의 현재 상태를 알려준다.
        // 4는 통신이 완료되었음을 의미
        // status는 HTTP 통신의 결과를 의미하는데 200은 통신이 성공했음을 의미
        if(xhr.readyState === 4 && xhr.status === 200){
            // esponseText 프로퍼티는 서버에서 전송한 데이터를 담고 있다
            document.querySelector('#time').innerHTML = xhr.responseText;
        }
    }
    xhr.send(); 
}); 
</script> 