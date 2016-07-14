/**
 * Created by Administrator on 2016/7/11 0011.
 */
$(document).ready(function () {
    "use strict";
    $("#submit").click(function () {

        var productid = $("#productid").val();

        $.ajax({
            type: "POST",
            url: "/index.php/user/addcart",
            data: "p=" + productid,
            dataType: 'text',
            success: function (json) {
                //console.log(html.response + ' ' + html.username);
                console.log(json);
                if (json == 'added') {
                    //location.assign("../index.php");
                    alert("加入购物车成功！");
                } else if(json == 'login first') {
                    $("#follow").html("</div><script>window.location.href='/index.php/login';</script><div>");
                }
            },
            error: function (textStatus, errorThrown) {
                alert("bbb");
                console.log(textStatus);
                console.log(errorThrown);
            }
        });

        return false;
    });
});