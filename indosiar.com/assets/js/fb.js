function getFBFriends(a, b) {
    FB.api({
        method: "fql.query",
        query: "SELECT uid,name,pic_square FROM user WHERE uid IN (SELECT uid1 FROM friend WHERE uid2 = me()) AND is_app_user=1 LIMIT 50"
    }, function (c) {
        var e = 0;
        var f = '<div style="float:left;width:250px;color:#fff;font-weight:bold;">Friends Activity</div>';
        f += '<div class="paging-fb-news"><span onclick="showFBFriendsPaging(\'next\');" class="next-news-fb"></span><span class="prev-news-fb" onclick="showFBFriendsPaging(\'prev\');"></span></div>';
        f += '<div id="fbFriends" style="clear:both;border:1px solid #333"></div>';
        jQuery("#fbFriendsBar").html(f);
        var g = 0;
        d = '<ul class="tampil">';
        jQuery.each(c, function (b, c) {
            if (g === 12) {
                d += "</ul><ul>";
                g = 0
            }
            g++;
            e++;
            d += '<li class="fbFriend ' + c.uid + '" rel="' + c.uid + '" onmouseout="checkPerform(' + c.uid + ",this,'" + c.name + '\',event)"><img src="' + c.pic_square + '" onmouseover="performActivity(' + c.uid + ",this,'" + c.name + "','" + a + '\')" title="' + c.name + '"/></li>'
        });
        d += "</ul>";
        jQuery("#fbFriends").append(d);
        var h = jQuery(".fbFriend");
        for (i = 0; i < h.length; i++) {
            var j = jQuery(h[i]);
            var k = jQuery(h[i]).attr("rel");
            getFBFriendsNewsRecent(k, j, a)
        }
        if (e == 0) jQuery("#fbFriendsBar").html('<div style="font-size:14px;font-weight:bold;color:#fff;text-align:center;margin-top:30px;">You not have any friends. <a href="javascript:;" onclick="FBInviteFriends(' + b + ')">Invite Friends</a> to get INDOSIAR experience</div>')
    })
}
function getFBFriendsNewsRecent(a, b, c) {
    var d = [];
    FB.api("/" + a + "/news.reads?app_id_filter=" + fbAppID + "&access_token=" + c, function (a) {
        if (a.data) {
            for (i = 0; i < a.data.length; i++) {
                if (diff_time(a.data[i].start_time)) d[i] = a;
                if (i === a.data.length - 1) {
                    if (d.length > 0) b.append('<span class="recent">' + d.length + "</span>");
                    d = []
                }
            }
        }
    })
}
function showFBFriendsPaging(a) {
    var b = 0;
    var c = jQuery("#fbFriends").children();
    for (i = 0; i < c.length; i++) {
        if (jQuery(c[i]).hasClass("tampil")) b = i
    }
    c.removeClass("tampil");
    if (a === "next") {
        if (c.length - 1 === b) {
            jQuery(c[b]).addClass("tampil");
            return false
        }
        jQuery(c[b + 1]).addClass("tampil")
    }
    if (a === "prev") {
        if (b === 0) {
            jQuery(c[b]).addClass("tampil");
            return false
        }
        jQuery(c[b - 1]).addClass("tampil")
    }
}
function performActivity(a, b, c, d) {
    var e = d;
    jQuery(b).parents("li").children(".recent").hide();
    if (jQuery(b).parents("li").hasClass("selected")) {
        jQuery(".newLoadbox").removeClass("show");
        jQuery(b).parents("li").removeClass("selected");
        return false
    }
    jQuery(".fbFriend").removeClass("selected");
    jQuery(".newLoadbox").removeClass("show");
    jQuery(b).parents("li").addClass("selected");
    if (jQuery(b).parents("li").children(".newLoadbox").length <= 0) {
        jQuery(b).parents("li").append('<div class="newLoadbox show" ></div>');
        getFBFriendActivity(a, e, jQuery(b).parents("li"), c)
    } else {
        jQuery(b).parents("li").children(".newLoadbox").addClass("show");
        if (jQuery(b).parents("li").children(".newLoadbox").html() == '<img src="/assets/images/loading.gif" style="margin: 7% 43%; border:none;">') getFBFriendActivity(a, e, jQuery(b).parents("li"), c)
    }
}
function getFBFriendActivity(a, b, c, d) {
    var e = jQuery(c).children(".newLoadbox");
    var f = 0;
    if (jQuery(c).children(".recent").length > 0) f = jQuery(c).children(".recent").html();
    e.html('<img src="/assets/images/loading.gif" style="margin: 7% 43%; border:none;" />');
    r = "/" + a + "/news.reads?app_id_filter=" + fbAppID + "&access_token=" + b + "&limit=50";
    FB.api(r, function (b) {
    //$.get("https://graph.facebook.com/"+a+"/news.reads&limit=100?access_token="+b, function(b){
        var c = b.data.length;
        var g = "https://graph.facebook.com/" + a + "/picture?type=square";
        var h = '<div class="prof-box"><img src="' + g + '"/><h3>' + d + " read :</h3><br/><h3>Latest activity (" + f + ")</h3></div>";
        h += '<div id="box_slide"><ul class="their_news_list tampil">';
        var i = 1;
        if (c > 0) {
            //console.log(b);
            jQuery.each(b.data, function (a, b) {
                if (b.application.id == fbAppID) {
                    h += '<li><span class="txt"><a href="' + b.data.article.url + '">' + b.data.article.title + '</a></span><span class="time">' + getTimestamp(b.start_time) + '</span></li>';
                    if (i == 10) return false;
                    i++;
                }
                //if (b.data.length !== 0) h += '<li><span class="txt"><a href="' + b.data.article.url + '">' + b.data.article.title + '</a></span><span class="time">' + c + "</span></li>"
            })
        }
        
        if (i == 1) h += "<li>No Article</li>";

        h += "</ul></div>";
        /*if (c > 0) {
            h += '<div class="paging-fb-news">';
            h += "<span onclick=\"getFBFriendActivityMore('" + b.paging.next + "',this,'" + d + "'," + a + '); return false;" class="next-news-fb" ></span>';
            h += "<span onclick=\"getFBFriendActivityMore('" + b.paging.previous + "',this,'" + d + "'," + a + '); return false;" class="prev-news-fb" ></span>';
            h += "</div>"
        }*/
        e.html(h);
    })
}
function checkPerform(a, b, c, d) {
    var e = jQuery(b);
    if (jQuery(d.target).hasClass("newLoadbox")) {
        if (!jQuery(d.target).hasClass("udah")) {
            jQuery(d.target).addClass("udah")
        } else {
            jQuery(".newLoadbox").removeClass("show");
            e.removeClass("selected");
            jQuery(d.target).removeClass("udah");
            return false
        }
    }
}
function getFBFriendActivityMore(a, b, c, d) {
    var e = jQuery(b).parents(".newLoadbox");
    jQuery.ajax({
        type: "GET",
        url: a,
        dataType: "jsonp",
        success: function (a) {
            if (a.data.length <= 0) return false;
            var b = "https://graph.facebook.com/" + d + "/picture?type=square";
            var f = '<div class="prof-box"><img src="' + b + '"/><h3>' + c + " read :</h3></div>";
            f += '<div id="box_slide"><ul class="their_news_list tampil">';
            jQuery.each(a.data, function (a, b) {
                var c = getTimestamp(b.start_time);
                if (b.data.length !== 0) f += '<li><span class="txt"><a href="' + b.data.article.url + '">' + b.data.article.title + '</a></span><span class="time">' + c + "</span></li>"
            });
            f += "</ul></div>";
            f += '<div class="paging-fb-news">';
            f += "<span onclick=\"getFBFriendActivityMore('" + a.paging.next + "',this,'" + c + "'," + d + '); return false;" class="next-news-fb" ></span>';
            f += "<span onclick=\"getFBFriendActivityMore('" + a.paging.previous + "',this,'" + c + "'," + d + '); return false;" class="prev-news-fb" ></span>';
            f += "</div>";
            e.html(f);
            return false
        }
    });
    return false
}
function showFBAccount(a, b, c, d) {
    var e = "<h3>Welcome to INDOSIAR</h3>";
    e += '<div class="img-box"><img src="' + a + '" /></div>';
    e += '<div class="account-detail"><span class="pre-txt" style="color:#9f9f9f;font-size:11px">You are logged in to Facebook as</span><span class="pre-txt" style="font-weight:bold;color:#fff;"> ' + b + "</span>";
    e += '<ul id="list_ctrl"><li class="list_btn_ctrl myFBActivity" onclick="showFBActivity(this);" title="See your activities on INDOSIAR">Activity</li>';
    if (d == "1") e += '<li class="list_btn_ctrl" onclick="showFBSocial(this);" rel="2" id="social_rel" title="Set your Facebook timeline">Social:ON</li>';
    else e += '<li class="list_btn_ctrl" onclick="showFBSocial(this);" rel="2" id="social_rel" title="Set your Facebook timeline">Social:OFF</li>';
    e += '<li class="list_btn_ctrl" onclick="FBInviteFriends(' + c + ')" title="Invite your friends to join INDOSIAR">Invite</li>';
    e += '<li class="list_btn_ctrl facebook_logout_button" style="border-right:none;" title="Sign out from INDOSIAR and Facebook">Logout</li>';
    e += "</ul></div>";
    e += '<div id="load_fb_stuff"></div>';
    jQuery("#fbAccountBox").html(e)
}
function showFBSocial(a) {
    var b = jQuery(a);
    var c = jQuery("#load_fb_stuff");
    var d = b.hasClass("selected");
    jQuery(".list_btn_ctrl").removeClass("selected");
    b.addClass("selected");
    FB.getLoginStatus(function (a) {
        var f = a.authResponse.userID;
        $.post("/openid/facebook/socialcheck", {
            uid: f
        }, function (a) {
            var g = '<ul id="options" >';
            if (a == "1") g += '<li onclick="FBSetSocial(0,' + f + '); return false;">Turn Social OFF</li>';
            else g += '<li onclick="FBSetSocial(1,' + f + '); return false;">Turn Social ON</li>';
            g += "</ul>";
            c.addClass("show");
            c.html(g);
            if (d === true) {
                b.removeClass("selected");
                c.removeClass("show");
                return false
            }
        })
    });
    if (d === true) {
        b.removeClass("selected");
        c.removeClass("show");
        return false
    }
}
function FBSetSocial(a, b) {
    $.post("/openid/facebook/socialset", {
        uid: b,
        act: a
    }, function (b) {
        a = a == "1" ? "ON" : "OFF";
        jQuery("#social_rel").html("Social:" + a);
        jQuery("#social_rel").removeClass("selected");
        jQuery("#load_fb_stuff").removeClass("show")
    })
}
function showFBActivity(a) {
    var b = jQuery(a);
    var c = jQuery("#load_fb_stuff");
    var d = b.hasClass("selected");
    jQuery(".list_btn_ctrl").removeClass("selected");
    b.addClass("selected");
    c.addClass("show");
    c.html('<img src="/assets/images/loading.gif" style="margin: 0 25%; padding: 50px;"/>');
    getFBActivity();
    if (d === true) {
        b.removeClass("selected");
        c.removeClass("show");
        return false
    }
}
function getFBActivity(a) {
    var b = jQuery("#load_fb_stuff");
    FB.api("/me/news.reads?app_id_filter=" + fbAppID + "&access_token=" + a + "&limit=50", function (a) {
        var c = "<h3>Your Last Activity</h3>";
        var d = 0;
        c += '<div id="box_slide">';
        c += '<ul class="news_list">';
        jQuery.each(a.data, function (a, b) {
            if (b.application.id == fbAppID) {
                c += '<li><span class="txt">' + b.data.article.title + '</span><span class="time">' + getTimestamp(b.start_time) + '</span><span onclick="deleteFBActivity(this);" rel="' + b.id + '" class="del_butt" title="delete activity"></span></li>';
                if (d == 5) return false;
                d++;
            }
            /*if (d == 5) {
                c += '</ul><ul class="news_list">';
                d = 0
            }
            var e = getTimestamp(b.start_time);
            c += '<li><span class="txt">' + b.data.article.title + '</span><span class="time">' + e + '</span><span onclick="deleteFBActivity(this);" rel="' + b.id + '" class="del_butt"></span></li>';
            d++*/
        });
        c += "</ul>";
        c += "</div>";
        b.html(c);
        var e = jQuery(".news_list")[0];
        e.setAttribute("class", "news_list tampil");
        //showFBActivityPaging(0)
    })
}
function showFBActivityPaging(a) {
    if (jQuery("#pp")) jQuery("#pp").remove();
    var b = jQuery(".news_list");
    b.removeClass("tampil");
    b[a].setAttribute("class", "news_list tampil");
    for (i = 0; i <= b.length; i++) {
        if (jQuery(b[i]).hasClass("tampil") === true) position = i
    }
    var c = "";
    if (b.length > 0) {
        if (position > 0) c += '<a href="#" onclick="showFBActivityPaging(' + parseInt(a - 1) + '); return false;">prev</a>';
        if (position < b.length - 1) c += '<a href="#" onclick="showFBActivityPaging(' + parseInt(a + 1) + '); return false;">next</a>'
    }
    jQuery("#load_fb_stuff").append('<span id="pp">' + c + "</span>")
}
function deleteFBActivity(a) {
    a = jQuery(a);
    var b = a.attr("rel");
    var c = a.parent();
    FB.getLoginStatus(function (a) {
        var c = a.authResponse.accessToken;
        FB.api("/" + b + "?access_token=" + c, "DELETE", function (a) {
            if (a) getFBActivity(c);
        })
    })
}
function diff_time(a) {
    var b = new Date(a);
    var c = new Date;
    var d = Math.floor((c - b) / 1e3);
    if (d < 5400) return 1;
    else return 0
}
function getTimestamp(a) {
    var b = new Date(a);
    var c = new Date;
    if (a.length !== 24) b = new Date(a * 1e3);
    var d = Math.floor((c - b) / 1e3);
    if (d <= 1) return "just now";
    if (d < 20) return d + " seconds ago";
    if (d < 40) return "half minute ago";
    if (d < 60) return "less than half minute ago";
    if (d <= 90) return "about a minute ago";
    if (d <= 3540) return Math.round(d / 60) + " minutes ago";
    if (d <= 5400) return "about an hour ago ";
    if (d <= 86400) return Math.round(d / 3600) + " hours ago";
    if (d <= 129600) return "about one day ago";
    if (d < 604800) return Math.round(d / 86400) + " days ago";
    if (d <= 777600) return "about one week ago";
    return "at " + parseDate(a)
}
function parseDate(a) {
    var b = (new Date(Date.parse(a))).toLocaleString().substr(0, 16);
    var c = b.substr(-5, 2);
    var d = c < 12 ? " AM" : " PM";
    if (c > 12) c -= 12;
    if (c == 0) c = 12;
    return b.substr(0, 11) + "" + c + b.substr(13) + d
}
function FBInviteFriends(a) {
    FB.ui({
        method: "apprequests",
        message: "Come discover INDOSIAR with me",
        title: "Select Friends for INDOSIAR Requests"
    }, function (b) {
        if (b.request && b.to) {
            var c = [];
            for (i = 0; i < b.to.length; i++) {
                var d = b.request + "_" + b.to[i];
                c.push(d)
            }
            var e = c.join(",");
            $.post("/openid/facebook/invite", {
                uid: a,
                request_ids: e,
                url: cur_url,
                title: page_title,
                desc: page_desc,
                image: page_image
            }, function (a) {})
        }
    });
    return false
}
function FBVideoWatches() {
    FB.api("/me/video.watches", function (a) {
        var b = false;
        $.each(a.data, function (a, c) {
            if (c.data.video.url == cur_url) b = true
        });
        if (!b) {
            FB.api("/me/video.watches", "post", {
                video: cur_url
            }, function () {})
        }
    })
}
function FBNewsReads() {
    FB.api("/me/news.reads", "post", {
        article: cur_url
    }, function (a) {
        if (!a || a.error) {
            console.log(a);
        } else {
            $('.myFBActivity').css("color","#FFCC00");
            setInterval(
                function() {
                    jQuery('.myFBActivity').fadeOut('slow', function(){
                    jQuery(this).fadeIn('slow');
                })
            }, 1000);
        }
    })
}
function FBLoginCheck(a) {
    if (a.authResponse) {
        var b = a.authResponse.userID;
        var c = a.authResponse.accessToken;
        $.post("/openid/facebook/check", {uid: b,token: c}, 
        function (a) {
            var d = a.social;
            var e = a.name;
            var f = "https://graph.facebook.com/" + b + "/picture";
            $("#fbContentBox").html('<div id="fbAccountBox"></div>');
            $("#fbContentBox").html('<div id="fbFriendsBox"></div><div id="fbAccountBox"></div><div style="clear:both"></div>');
            $("#fbFriendsBox").html('<div id="fbFriendsBar"><img src="/assets/images/loading.gif" style="margin: 3% 43%;"/></div>');
            $("#fbContainer").css("margin-bottom", "10px");
            $("#fbContainer").css("background", "#333");
            getFBFriends(c, b);
            showFBAccount(f, e, b, d);
            $(".facebook_logout_button").click(function (a) {
                window.location = "/openid/facebook/logout"
            });
            if (d == "1" && isVideoWatches) setTimeout("FBVideoWatches()", 10000);
            if (d == "1" && isNewsReads) {
                setTimeout("FBNewsReads()", 10000);
                $.post("/comment/formbox/" + page_id, function(a){$("#theArtikelCommentForm").html(a)});
            }
        }, "json")
    } else {
        $.post("/openid/facebook/check", {uid:'',token:''}, function(a){if (isNewsReads) $.post("/comment/formbox/" + page_id, function(a){$("#theArtikelCommentForm").html(a)});});
        $("#fbContentBox").html('<table cellpadding="8" align="center"><tr><td style="color:#fff;font:bold 16px Arial, sans-serif;">Activate Facebook Timeline App and Get Experience with Your Friends.<td></td><td><img src="/assets/images/facebook-connect.png" class="facebook_login_button"/></td></tr></table>');
        $("#fbContainer").css("margin-bottom", "10px");
        $("#fbContainer").css("background", "#333");
    }
}
window.fbAsyncInit = function () {
    FB.init({
        appId: fbAppID,
        channelUrl: "/fbchannel.php",
        status: true,
        cookie: true,
        xfbml: true,
        oauth: true
    });
    FB.getLoginStatus(function (a) {
        FBLoginCheck(a)
    });
    FB.Canvas.setAutoGrow()
};
(function (a, b, c) {
    var d, e = a.getElementsByTagName(b)[0];
    if (a.getElementById(c)) return;
    d = a.createElement(b);
    d.id = c;
    d.async = true;
    d.src = "https://connect.facebook.net/en_US/all.js";
    e.parentNode.insertBefore(d, e)
})(document, "script", "facebook-jssdk");