<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عباقرة المتفوقين</title>
    <link rel="stylesheet"  href="styles/board.css">
</head>
<body>
    
    <h2>عباقرة المتفوقين </h2>
    
    <div class="form">
        <input type="text" class='name' placeholder='اسم الطالب'>
        <select name="" class='team' id="">
            <option value="">اختار الفريق</option>
            <option value="0"> الاول </option>
            <option value="1"> الثاني </option>
        </select>
        <button class='submit'>الدخول</button>
    </div>
</body>
</html>

<style>
    *{
        font-family:cairo;
    }
    .form{
        width:300px;
        display:grid;
        margin:auto;
    }
    input,select,button{
        padding:5px;
        margin:2px;
    }
    button{
        background:#6a6;
        color: #fff;
    }
</style>
<script>
    function $(e){
        return document.querySelector(e);
    }
    $('.submit').onclick = ()=>{
        // send the req here;
        if($('.name').value != '' && $('.team').value != ''){
            localStorage.username = $('.name').value
            localStorage.team = $('.team').value
            window.location.href = 'student.html';
        }
    }
</script>