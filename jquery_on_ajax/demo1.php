<p>time : <span id="time"></span></p>
<input type="button" id="execute" value="execute" />
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $('#execute').click(function(){
        // ajax 시작
        $.ajax({
            url:'./time.php',
            // succes : 성공했을 때 호출할 콜백을 지정한다.
            success:function(data){
                $('#time').append(data);
            }
        })
    })
</script>