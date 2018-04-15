var reg = function()
        {
            var name = document.getElementById("name");
            var idcard = document.getElementById("idcard");
            var p = document.getElementById("password");
            var p2 = document.getElementById("password2");
            var box = document.getElementById("checkbox");
            var realname = document.getElementById("realname");

            if( !realname || realname.value.length === 0 )
            {
                alert("请输入你的真实姓名");
                return;
            }

            if( !box || !box.checked )
            {
                alert("请先阅读并同意塔象互娱网络用户协议");
                return;
            }

            if( idcard.value.length !== 18 )
            {
                alert("身份证输入错误");
                return;
            }

            if( p.value.length === 0 || p2.value.length === 0 )
            {
                alert("密码不能为空");
                return;
            }
            if( p.value !== p2.value )
            {
                alert("两次输入的密码不一样");
                return;
            }

            alert("暂未开放");

            //window.location.href = "index.html";
        };