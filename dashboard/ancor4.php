<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Slider Toggle Button | CodingNepal</title>
    <link rel="stylesheet" href="assets/css/stylee.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	
  </head>
  <body>
    <div class="contenttt">
      <div class="images">
        
        <img src="assets/img/e_1.png">
        <img src="assets/img/e_2.png" >
        <img src="assets/img/e_3.png">
        <img src="assets/img/e_4.png">
        <img src="assets/img/e_5.png">
        <img src="assets/img/e_6.png">
        <img src="assets/img/e_7.png">
		<img src="assets/img/e_8.png">
        <img src="assets/img/e_9.png">
        <img src="assets/img/e_10.png">
		<img src="assets/img/e_11.png">
        <img src="assets/img/e_12.png">
        
      </div>
     
      <div class="sliders left" onclick="side_slide(-1)">
        <span class="fas fa-angle-left"></span>
      </div>
      <div class="sliders right" onclick="side_slide(1)">
        <span class="fas fa-angle-right"></span>
      </div>
    </div>

    <script>
      var indexValue = 1;
      showImg(indexValue);
      function btm_slide(e){showImg(indexValue = e);}
      function side_slide(e){showImg(indexValue += e);}
      function showImg(e){
        var i;
        const img = document.querySelectorAll('img');
        const slider = document.querySelectorAll('.btm-slides span');
        if(e > img.length){indexValue = 1}
        if(e < 1){indexValue = img.length}
        for(i = 0; i < img.length; i++){
          img[i].style.display = "none";
        }
        for(i = 0; i < slider.length; i++){
          slider[i].style.background = "rgba(255,255,255,0.1)";
        }
        img[indexValue-1].style.display = "block";
        slider[indexValue-1].style.background = "white";
      }
    </script>


  </body>
</html>
