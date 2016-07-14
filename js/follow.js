/**
 * Created by Administrator on 2016/7/11 0011.
 */

$(document).ready(function () {
    "use strict";
    $("#submit").click(function () {

        var userid = $("#userid").val();

            $.ajax({
                type: "POST",
                url: "/index.php/user/follow",
                data: "f=" + userid,
                dataType: 'text',
                success: function (json) {
                    //console.log(html.response + ' ' + html.username);
                    console.log(json);
                    if (json == 'followed') {
                        //location.assign("../index.php");
                        alert("关注成功！");
                        $("#follow").html("<a id='a' name='submit'>已关注</a>");
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