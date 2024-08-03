<style>
    .main-container {
    display: flex;
    margin-left: auto;
    margin-right: auto;
    max-width: 70%;
    padding: 30px 0;
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 35px 30px -30px rgb(85 83 83);
    background-image: url(images/bg-pattern-desktop.svg);
    background-size: 90%;
    background-repeat: no-repeat;
    background-position: -457px -250px;
}

.faq ,.woman-img{
    flex: 1;
}

.woman-img{
    display: flex;
    align-items: center;
    overflow: hidden;
    position: relative;
}

.box{
    display: block;
    position: absolute;
    transform: translateX(-50%) translateY(85%);
    z-index: 1;
}

.desk-img{
    transform: translateX(-17%);
}

.mob-img{
    display: none;
}

.faq{
    padding: 30px 30px;
}

.faq h1{
    text-transform: uppercase;
    font-size: 30px;
    padding-bottom: 35px;

}


.items{
    font-size: 15px;
    padding-right: 80px;

}


.item{
    border-bottom:var(--Light-grayish-blue) 1px solid;
    padding:10px 10px 10px 0;    
}

.item-link{
    text-decoration: none;
    color: black;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
    transition: 0.2s;
}

.item-link:hover{
    color: var(--Soft-red);
}

.answer{
    max-height: 0;
    overflow: hidden;
    position: relative;
    transition: max-height 1s;

    color: var(--Dark-grayish-blue);
    font-size: 12px;
    line-height: 20px;

}

.item:target .answer{
    max-height: 100px;
    padding: 5px 0;
}

.item:target .item-link{
    font-weight: 700;
} 

.item:target .arrow img{
    transform: rotate(180deg);
    transition: transform 0.6s ease-in-out;
}


@media (max-width: 1155px){
    .desk-img{
        display: none;
    }

    .box{
        display: none;
    }

    .mob-img{
        display: block;
        position: relative;
        left: -10px;
        top: -40px;
        margin: 0 auto;
    }

    .woman-img{
        overflow: visible;
        height: 0;

    }

    .main-container{
        background-image: none;
        display: block;
        
    }

    .items {
        padding-right: 0;
    }

    .answer p{
        padding-right: 50px;
    }

    .faq h1{
        text-align: center;
    }

    .faq {
        padding-top: 90px;
    }

}
</style>
<div id="FAQ" class="main-container">
   
    <div class="faq">
    <center>
        <div class="container" data-aos="fade-up">
            <h2 class="services-title"><?php echo $lang['faq_title']; ?></h2>
            <p class="services-subtitle"><?php echo $lang['faq_subtitle']; ?></p>
        </div>
    </center>
      <div class="items">
        <div class="item" id="q1">
          <a class="item-link" href="#q1"><?php echo $lang['faq_question_1']; ?>
            <i class="arrow"><img src="img/flecha-hacia-abajo.png" style="width: 10px; height: 10px;"  alt=""></i>
          </a>
          <div class="answer">
            <p><?php echo $lang['faq_answer_1']; ?></p>
          </div>
        </div>

        <div class="item" id="q2">
          <a class="item-link" href="#q2"><?php echo $lang['faq_question_2']; ?>
            <i class="arrow"><img src="img/flecha-hacia-abajo.png" style="width: 10px; height: 10px;" alt=""></i></a>
          <div class="answer">
            <p><?php echo $lang['faq_answer_2']; ?></p>
          </div>
        </div>

        <div class="item" id="q3">
          <a class="item-link" href="#q3"><?php echo $lang['faq_question_3']; ?>
            <i class="arrow"><img src="img/flecha-hacia-abajo.png" style="width: 10px; height: 10px;"  alt=""></i></a>
          <div class="answer">
            <p><?php echo $lang['faq_answer_3']; ?></p>
          </div>
        </div>

        <div class="item" id="q4">
          <a class="item-link" href="#q4"><?php echo $lang['faq_question_4']; ?>
            <i class="arrow"><img src="img/flecha-hacia-abajo.png"style="width: 10px; height: 10px;"  alt=""></i></a>
          <div class="answer">
            <p><?php echo $lang['faq_answer_4']; ?></p>
          </div>
        </div>

        <div class="item" id="q5">
          <a class="item-link" href="#q5"><?php echo $lang['faq_question_5']; ?>
            <i class="arrow"><img src="img/flecha-hacia-abajo.png"style="width: 10px; height: 10px;"  alt=""></i></a>
          <div class="answer">
            <p><?php echo $lang['faq_answer_5']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>