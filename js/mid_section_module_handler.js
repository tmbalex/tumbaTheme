function setState(targetState){
  positions = ["position_A", "position_B", "position_C", "position_D"];
  for(i = 0; i < positions.length; i++){
    $(".stone").removeClass(positions[i]);
    if(targetState == i)
      $(".stone").addClass(positions[i]);
  }
}

var tmpTargetState = 0;
document.addEventListener('DOMContentLoaded', function() {
  $('.cat_tab').on('shown.bs.tab', function (e) {
    var target = $(e.target).attr("href") // activated tab
    var detachedElement = $("#stones_holder").detach();
    $(target).children('ul').after(detachedElement);
    updateStonesDisplay();
  });

  $('.subcat_tab').on('shown.bs.tab', function (e) {
    var target = $(e.target).attr("href")
    updateStonesDisplay();
  });

  updateStonesDisplay();
});

function updateStonesDisplay(){
  try {
    stones_data = jQuery.parseJSON($(".subcat_content:visible").find(".stones_data").html());
  }
  catch(err) {
    //Default stones data
    stones_data = {
      "stone_a": {
        "transform": "rotate(-80deg) scale(1, 1)",
        "left": "260px",
        "top": "110px"
      },
      "stone_b": {
        "transform": "rotate(95deg) scale(1, 1)",
        "left": "280px",
        "top": "10px"
      },
      "stone_c": {
        "transform": "rotate(95deg) scale(1, 1)",
        "left": "240px",
        "top": "150px"
      },
      "stone_d": {
        "transform": "rotate(-90deg) scale(1, 1)",
        "left": "260px",
        "top": "-70px"
      },
      "stone_e": {
        "transform": "rotate(90deg) scale(1, 1)",
        "left": "240px",
        "top": "85px"
      },
      "stone_f": {
        "transform": "rotate(-100deg) scale(1, 1)",
        "left": "280px",
        "top": "50px"
      }
    }
  }

  $.each(stones_data, function (divId, property) {
    $.each(property, function (name, value) {
      $("#" + divId).css(name, value);
    });
  });
}


/*
Stones positions backup
<sub class="stones_arrangement_data">[ Stones arrangement data ]</sub>
<script class="stones_data" type="application/json">
{
  "stone_a": {
    "transform": "rotate(0) scale(1, 1)",
    "left": "50px",
    "top": "80px"
  },
  "stone_b": {
    "transform": "rotate(0) scale(1, 1)",
    "left": "140px",
    "top": "70px"
  },
  "stone_c": {
    "transform": "rotate(0) scale(1, 1)",
    "left": "200px",
    "top": "10px"
  },
  "stone_d": {
    "transform": "rotate(0) scale(1, 1)",
    "left": "330px",
    "top": "80px"
  },
  "stone_e": {
    "transform": "rotate(0) scale(1, 1)",
    "left": "420px",
    "top": "120px"
  },
  "stone_f": {
    "transform": "rotate(0) scale(1, 1)",
    "left": "480px",
    "top": "180px"
  }
}
</script>


<sub class="stones_arrangement_data">[ Stones arrangement data ]</sub>
<script class="stones_data" type="application/json">
{
  "stone_a": {
    "transform": "rotate(-90deg) scale(1, 1)",
    "left": "200px",
    "top": "130px"
  },
  "stone_b": {
    "transform": "rotate(-90deg) scale(1, 1)",
    "left": "320px",
    "top": "-20px"
  },
  "stone_c": {
    "transform": "rotate(-90deg) scale(1, 1)",
    "left": "110px",
    "top": "190px"
  },
  "stone_d": {
    "transform": "rotate(85deg) scale(1, 1)",
    "left": "260px",
    "top": "55px"
  },
  "stone_e": {
    "transform": "rotate(90deg) scale(1, 1)",
    "left": "400px",
    "top": "-30px"
  },
  "stone_f": {
    "transform": "rotate(-100deg) scale(1, 1)",
    "left": "480px",
    "top": "-20px"
  }
}
</script>



<sub class="stones_arrangement_data">[ Stones arrangement data ]</sub>
<script class="stones_data" type="application/json">
{
  "stone_a": {
    "transform": "rotate(-10deg) scale(0.7, 0.7)",
    "left": "280px",
    "top": "200px"
  },
  "stone_b": {
    "transform": "rotate(40deg) scale(0.7, 0.7)",
    "left": "160px",
    "top": "180px"
  },
  "stone_c": {
    "transform": "rotate(-90deg) scale(0.7, 0.7)",
    "left": "380px",
    "top": "60px"
  },
  "stone_d": {
    "transform": "rotate(150deg) scale(0.7, 0.7)",
    "left": "150px",
    "top": "-30px"
  },
  "stone_e": {
    "transform": "rotate(90deg) scale(0.7, 0.7)",
    "left": "90px",
    "top": "100px"
  },
  "stone_f": {
    "transform": "rotate(30deg) scale(0.7, 0.7)",
    "left": "310px",
    "top": "60px"
  }
}
</script>





<sub class="stones_arrangement_data">[ Stones arrangement data ]</sub>
<script class="stones_data" type="application/json">
{
  "stone_a": {
    "transform": "rotate(0deg) scale(1, 1)",
    "left": "230px",
    "top": "80px"
  },
  "stone_b": {
    "transform": "rotate(0deg) scale(1, 1)",
    "left": "20px",
    "top": "70px"
  },
  "stone_c": {
    "transform": "rotate(0deg) scale(1, 1)",
    "left": "420px",
    "top": "10px"
  },
  "stone_d": {
    "transform": "rotate(90deg) scale(1, 1)",
    "left": "120px",
    "top": "-70px"
  },
  "stone_e": {
    "transform": "rotate(70deg) scale(1, 1)",
    "left": "340px",
    "top": "-30px"
  },
  "stone_f": {
    "transform": "rotate(-90deg) scale(1, 1)",
    "left": "320px",
    "top": "-30px"
  }
}
</script>
*/
