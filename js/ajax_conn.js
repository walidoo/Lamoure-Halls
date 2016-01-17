/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {

    $.ajax({
        url: "./lib/view_data.php",
        success: function(dataArray) {
            var dataList = $.parseJSON(dataArray);
            var maindata = "";
            var img = "";
            var link = "";
            for (var i = 0; i < dataList.dataArray.length; i++) {
                if (dataList.dataArray[i].reserved == "no") {
                    img = "images/wrong.png";
                    link = '<a href="reserve.php?pid=' + dataList.dataArray[i].id + '&pname=' + dataList.dataArray[i].hall_name + '" class="sel" >دخول</a></div></div>';
                }
                else {
                    img = "images/right.png";
                    link = '<a href="canntreserved.php" class="sel" >دخول</a></div></div>';
                }
                maindata +=
                        '<div class="hall_r"><span>' + dataList.dataArray[i].hall_name + '</span><div class="clear"></div>' +
                        '<img class="reserve" src="' + img + '" width="45px" height="45px" style="margin-top: 20px;float:left;margin-left:160px" />' +
                        '<div class="enter">' + link;
                        
            }
            $(".all_halls").html(maindata);
        }
    });
    $.ajax({
        url: "./lib/view_reserved_halls.php",
        success: function(dataArray) {
            var dataList = $.parseJSON(dataArray);
            var maindata = "";
            var img = "";
            for (var i = 0; i < dataList.dataArray.length; i++) {
                if (dataList.dataArray[i].reserved == "yes") {
                    img = "images/right.png";
                }
                else {
                    img = "images/wrong.png";
                }
                maindata +=
                        '<div class="hall_r"><span>' + dataList.dataArray[i].hall_name + '</span><div class="clear"></div>' +
                        '<img class="reserve" src="' + img + '" width="45px" height="45px" style="margin-top: 20px;float:left;margin-left:160px" />' +
                        '<div class="enter">' +
                        '<a href="./lib/remove_data.php?pid=' + dataList.dataArray[i].id + '&pname=' + dataList.dataArray[i].hall_name + '" >إلغاء الحجز</a></div></div>';
            }
            $(".halls_reserved").html(maindata);
        }
    });
    $("search_btn").click(function() {

        $.ajax({
            url: "./lib/view_data.php",
            data: {
                searchkey: $("#searchKey").val()
            },
            success: function(dataArray) {
                var dataList = $.parseJSON(dataArray);
                var maindata = "";
                for (var i = 0; i < dataList.dataArray.length; i++) {
                    maindata +=
                            '<tr><td name="id">' + dataList.dataArray[i].id + '</td>' +
                            '<td>' + dataList.dataArray[i].first_name + '</td>' +
                            '<td>' + dataList.dataArray[i].last_name + '</td>' +
                            '<td>' + dataList.dataArray[i].age + '</td>' +
                            '<td>' + dataList.dataArray[i].department + '</td>' +
                            '<td><a href="./lib/edit_form.php?pid=' + dataList.dataArray[i].id + '">Edit</a></td>' +
                            '<td><a href="./lib/remove_data.php?pid=' + dataList.dataArray[i].id + '">Remove</a></td></tr>';
                }
                $(".data").html(maindata);
            }
        });
    });
//   $(".remove").click(function(){
//       
//       
//   }); 

});

