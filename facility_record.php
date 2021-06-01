
<link rel="stylesheet" href="css/facility_record.css">
<body>
    <div class="container">
        <div class="outside">
        <div class="head">
            <div class="left">
                <a href="home.php?page=facility&method=records"><img src="img/left-arrow.svg"></a>
            </div>
            <div class="name">
                <p>查看住戶預約紀錄</p>
            </div>
        </div>
            <hr>
            <!--從資料庫匯出(顯示住戶預約資訊)該住戶預約該公設的名稱 日期 時段 人數 電話 email 原本點數 剩餘點數 若有借用設備顯示借用的設備名稱 -->
            <p class="dot"><img src="img/circle.svg">&nbsp公設名稱 : </img></p>
            <div class="information">
                <p class="content">預約時段 :  <span>8:00<span>~</span>9:00</span></p>
                <p class="content">預約日期 :<span>2021<span>/05<span><span>/21<span><span> </p>
                <p class="content">預約人數 : <span>2<span><span>人<span></p>
                <p class="content">您的點數 : <span class="yourpoint">500</span> 點</p>
                <p class="content">剩餘點數 : 500 - 30 = <span class="endpoint">470</span> 點</p>
                <p class="content">借用的設備 : <span class="borrowtool">冷氣遙控器</span></p>
            </div>
            <hr> 
        </div>
    </div>
</body>

</html>