
    $(function() {

      // レスポンシブ、開くボタンを押した時
      $("#open-button").on("click",function(){


        $("#res-nav").slideDown();

        $("#close-button").show();

        $("#open-button").hide();

      });

      // レスポンシブ、閉じるボタンを押した時
       $("#close-button").on("click",function(){


        $("#res-nav").slideUp();

        $("#close-button").hide();

        $("#open-button").show();

      });



    });
