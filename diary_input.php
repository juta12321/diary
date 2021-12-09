<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>夢日記</title>

  <style>





    body{
      width:480px;
      margin-right: auto;
      margin-left : auto;
      background-color:#ffffff;
    }


    header{
      background-image: url(img/img_diary.jpg);
      height:100px;
    }

    .explain{
      margin-top:10px;
      text-align:center;
    }

    .acd-check{
      display: none;
    }

    .acd-label{
      background: #333;
      color: #fff;
      display: block;
      margin-bottom: 1px;
      padding: 10px;
    }

    .acd-content{
      border: 1px solid #333;
      height: 0;
      opacity: 0;
      padding: 0 10px;
      transition: .5s;
      visibility: hidden;
    }

    .acd-check:checked + .acd-label + .acd-content{
      height: 80px;
      opacity: 1;
      padding: 10px;
      visibility: visible;
    }

    header h1{
     text-align:center;
     padding-top:28px;
     color:#FFFFFF
    }

    form{
      margin-top:30px;  
    }


    input {
      margin-bottom:30px;
      border:none;
      background-color:#EEEEEE;
      border-radius: 5px;

    }

    textarea{
      width:100%;
      height:100px;
      border:none;
      background-color:#EEEEEE;
      border-radius: 5px;
    }
    
    .input_title {
      width:100%;
      height:22px;
    }

    /* ↓なぜか反映しないな・・・ */
    .past{
      text-align:center;
      margin-top:50px;
    }

    .btn{
      text-align:right;
    }

  </style>
</head>

<body>

  <header>
   <h1>夢日記</h1> 
  </header>

    <div class="explain">
      <input id="acd-check1" class="acd-check" type="checkbox">
      <label class="acd-label" for="acd-check1">夢日記を始めると<br>V</label>
      <div class="acd-content">
      <p>「夢日記をつけると発狂する」という説(都市伝説)がある。</p>
      <a href="https://dic.nicovideo.jp/a/%E5%A4%A2%E6%97%A5%E8%A8%98">夢日記とは(ニコニコ大百科(仮)</a>
      </div>
    </div>

  <form action="diary_create.php" method="POST">
    
      
      
      <!-- タイトル -->
      
    <div>
      
    
      <div class="title">

        <div>
          タイトル
        </div>

        <div>
          <input class="input_title" type="text" name="title">
        </div>

      </div>


      <!-- 記入日 -->
      <div>

        <div>
          記入日
        </div>

        <div>
        <input class="input_contents" type="date" name="date" value="<?php echo date('Y-m-d'); ?>">
        </div>

      </div>


       <!-- 内容 -->
       <div>
         <div>
          内容
         </div>

        <div>
          <textarea type="text" name="contents"> </textarea> 
        </div>

      </div>






      <div class="btn">
        <button>今日の夢日記を記録する</button>
      </div>


    

    <div class="past">
     <a href="diary_read.php" >昔の記録を見る</a>
    </div>
     </div> 

     
  </form>

</body>

</html>