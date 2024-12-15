<?php
    if(isset($_COOKIE['admin'])){

        if( $_COOKIE['admin']== 'domy'){
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div style="display: flex;justify-content: space-between;width: 95%;margin:auto;">

        <div class="form">
            <select name="" class="qc" id="">
                <option value="">اختار المجال</option>
                <option value="0">ادب</option>
                <option value="1">علوم</option>
                <option value="2">تاريخ</option>
                <option value="3">جغرافيا</option>
                <option value="4">رياضة</option>
                <option value="5">فنون</option>
                <option value="6">معلومات عامة</option>
                <option value="7">قدرات ذهنية</option>
                <option value="8">تكنولوجيا</option>
            </select>
            <button type="button" class="send">سيند السؤال </button>
            <button class='rechance' >فرصة تانية</button>
        </div>
    
        <div class="form">
            الاجابه مع : <span class="with"> لم يحدد يعد ... </span>
        </div>
    </div>
    <!-- <h2>المعلم دومي</h2> -->
    <h2 style="margin-top:-20px;text-align: center;">
        ادمن عباقرة المتفوقين
    </h2>

    <b>
        <div class="question">
            |
        </div>
        <div class="answer" style="margin:60px auto -50px auto;;font-size: 13px; background: white; width:fit-content; padding:5px;border-radius: 5px;transform: rotate(10deg);">

        </div>
    </b>
       
    

    <div style="display: flex; justify-content: space-between;width:700px;margin:50px auto;" >
        <h2 style="font-size: 13px; background: white; width:fit-content; padding:5px;border-radius: 5px;transform: rotate(-20deg);" >كتاب حياااتي يااعين</h2>
        <h2 style="font-size: 13px; background: white; width:fit-content; padding:5px;border-radius: 5px;transform: rotate(5deg);" >هنا يرقد الحزلقوم</h2>
        <h2 style="font-size: 13px; background: white; width:fit-content; padding:5px;border-radius: 5px;transform: rotate(-10deg) translate(0px , 40PX);" >خف انت وهو</h2>
        <h2 style="font-size: 13px; background: white; width:fit-content; padding:5px;border-radius: 5px;transform: rotate(-10deg) translate(0px , 40PX);" >الادمن الفرفوش رزق</h2>
        <h2 style="position:absolute;font-size: 13px; background: white; width:fit-content; padding:5px;border-radius: 5px;transform: rotate(-10deg) translate(-120px , 60PX);" >خووف يا خاالد</h2>
        <h2 style="position:absolute;font-size: 13px; background: white; width:fit-content; padding:5px;border-radius: 5px;transform: rotate(-10deg) translate(-120px , 60PX);" ></h2>
        <h2 style="font-size: 13px; background: white; width:fit-content; padding:5px;border-radius: 5px;transform: rotate(10deg);" >المعلم دومي واولاده</h2>
    </div>
    
    
    <img src="imgs/ماشا.png" style="width:200px;position:relative;top:-80px;left:-30px;" alt="">
    <img src="imgs/spongebob.png" style="width:250px;position:absolute;left:110px;top:310px" alt="">

    <div class="st" hidden></div>
    <div class="modal">
       <div class="form" style="display: grid;">
            <div style="font-size: 24px;">
                هل <span class="user"></span> جاوبها <span class="ans"></span> ?
            </div>
            <div>
                <button class="true" style="color:whitnonee;background: #0a4;border:none;font-size:17px;width:100px;padding:4px 0px;color:white ">نعم</button>
                <button class='close'  style="color:white;background: #a00;border:none;font-size:17px;width:100px;padding:4px 0px " >لا</button>
                <button class='minus'  style="color:white;background: #444;border:none;font-size:17px;width:100px;padding:4px 0px " >مينصه</button>
            </div>
       </div>
    </div>
<div style='display:flex;justify-content:space-between;padding:20px' >

    <div class="form" team='0'>
        <button class='minus0'>-</button>
        <input class='team0'  type="text" placeholder='الفصل الاول' >
        <button class='pls0' >+</button>
    </div>
    <span>
    <input id='auto' type="checkbox"> تبديل تلقائي
    </span>
    <div class="form" team='1'>
        <button class='minus1'>-</button>
        <input class='team1' type="text"  placeholder='الفصل الثاني' >
        <button class='pls1' >+</button>

    </div>
</div>
    <style>
        *{
            font-family: cairo;

        }
        .question{
            background:white;
            width:80%;
            padding:20px 10px;
            margin:auto;
            text-align: center;
            border-radius: 6px;
        }
        body{
            background: #Eee;
            direction: rtl;
        }
        form{
            background: white;
            padding:15px;
            border-radius: 5px;
            width: fit-content;
        }
        .form{
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: white;
            border-radius: 5px;
            padding:15px ;


        }
        .modal{
            background: rgba(1,1,1,0.5);
            height:100%;
            width: 100%;
            position: fixed;
            top:0;
            left:0;
            display: none;
        }
    </style>

</body>
</html>



<script>
    function $(e){return document.querySelector(e)}

    let teams = {
        current : 0,
        switch : ()=>{
            if(!(teams.current)) { teams.current = 1 }else{ teams.current = 0}
        }
    }

   
    var IsPlaying = false;
    var chances = [true , true]

    function checkAns(user,ans){
        //open modal

        $('.modal').style = 'display: block;'
        $('.modal .user').innerHTML = user;
        $('.modal .ans').innerHTML = ans;

        

    }

    function handleData(e){
        var data = JSON.parse(e.data)
        if(data.teet && chances[data.team] && !IsPlaying ){
                $('.with').innerHTML = `  <b>${data.user}</b>`;
                $('.st').innerHTML = `${data.team}`;
                chances[data.team] = false;
                checkAns(data.user , $('.answer').innerHTML);
                IsPlaying = true;
        }

    }

    document.body.onload = ()=>{
        var websocket = new WebSocket("ws://10.10.10.2:8090/demo/php-socket.php"); 
		websocket.onmessage = function(event) {
            var Data = JSON.parse(event.data);
            
            handleData(Data)
		};
        
        $(".rechance").onclick = ()=>{
            var messageJSON = {
            chat_user: 'student',
            chat_message: JSON.stringify({"rechance" : "true"})};
            websocket.send(JSON.stringify(messageJSON))
            chances = [true , true ]
        }
        
        $(".send").onclick = ()=>{
            var qc = $(".qc").value;
            if($('#auto').checked){
                fetch(`getquestion.php?qc=${qc}`).then((e)=>{return e.json() }).then((e)=>{
                    $(".question").innerHTML = e.q
                    $(".answer").innerHTML = e.a
                    
                    chances = [true,true]
                    var messageJSON = {
                        chat_user: 'student',
                        chat_message: JSON.stringify({"destination" : "board" , "question" : `${e.q}` , "answer" : `${e.a}`   })
                    };
                    websocket.send(JSON.stringify(messageJSON))
                })
                
                var messageJSON = {
                    chat_user: 'student',
                    chat_message: JSON.stringify({"destination" : "board" , "teet" : "true" , "user" : `${$('.team'+teams.current).value}` , "team" : `${teams.current}` })
                };
                websocket.send(JSON.stringify(messageJSON))
                console.log({"destination" : "board" , "teet" : "true" , "user" : `${$('.team'+teams.current).value}` , "team" : `${teams.current}` })
                
                teams.switch()

                
            }else{

                fetch(`getquestion.php?qc=${qc}`).then((e)=>{return e.json() }).then((e)=>{
                    $(".question").innerHTML = e.q
                    $(".answer").innerHTML = e.a
                    
                    chances = [true,true]
                    var messageJSON = {
                        chat_user: 'student',
                        chat_message: JSON.stringify({"destination" : "board" , "question" : `${e.q}` , "answer" : `${e.a}`   })
                    };
                    websocket.send(JSON.stringify(messageJSON))
                })
            }
        
        }

        $('.modal .true').onclick = ()=>{
            var messageJSON = {
				chat_user: 'student',
				chat_message: JSON.stringify({"username" : `${$(".with").innerText}` , "destination" : "student" , "team" :  `${$('.st').innerHTML}`})
			};
            websocket.send(JSON.stringify(messageJSON))
            $('.modal').style='display:none;'
            IsPlaying = false;

            
        }
    
        function minus(team){
            var messageJSON = {
                    chat_user: 'student',
                    chat_message: JSON.stringify({"minus" :`عبده` , "team" :  `${team}` })
                };
                websocket.send(JSON.stringify(messageJSON))
        }

        function pls(team){
            var messageJSON = {
				chat_user: 'student',
				chat_message: JSON.stringify({"username" : `الاسطي عبده البلف` , "destination" : "student" , "team" :  `${team}` })
			};
            websocket.send(JSON.stringify(messageJSON))
        }

        $(' .pls0 ').onclick  = ()=>pls(0)
        $(' .pls1 ').onclick  = ()=>pls(1)
    
        
        $(' .minus0 ').onclick  = ()=>minus(0)
        $(' .minus1 ').onclick  = ()=>minus(1)


        $('.close').onclick =  ()=>{
            $('.modal').style = 'display:none' ; 
            IsPlaying = false;
    
    
            var messageJSON = {
                    chat_user: 'student',
                    chat_message: JSON.stringify({"destination" : "board","false":"true"})
                };
                websocket.send(JSON.stringify(messageJSON))
               
    
        }
        
        $('.minus').onclick = ()=>{
            $('.modal').style = 'display:none' ; 
            IsPlaying = false;
    
    
            var messageJSON = {
                    chat_user: 'student',
                    chat_message: JSON.stringify({"minus" :`${$(".with").innerText}` , "team" :  `${$('.st').innerHTML}` })
                };
                websocket.send(JSON.stringify(messageJSON))
               
        }

    }

</script>
<?php }}else{echo 'ممنوع تخش هنا يحيوان' ;} ?>