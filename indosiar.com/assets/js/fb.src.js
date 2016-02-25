function getFBFriends(t,u) {
   	FB.api({
        method: "fql.query",
        query: "SELECT uid,name,pic_square FROM user WHERE uid IN (SELECT uid1 FROM friend WHERE uid2 = me()) AND is_app_user=1 LIMIT 50"
    }, function (a) {
        var c = 0;
        var g = '<div style="float:left;width:250px;color:#fff;font-weight:bold;">Friends Activity</div>';
        g += '<div class="paging-fb-news">';
        g += '<span onclick="showFBFriendsPaging(\'next\');" class="next-news-fb" ></span>';
        g += '<span class="prev-news-fb" onclick="showFBFriendsPaging(\'prev\');" ></span>';
        g += "</div>";
        g += '<div id="fbFriends" style="clear:both">';
        g += "</div>";
        jQuery("#fbFriendsBar").html(g);
        var j = 0;
        d = '<ul class="tampil">';
		jQuery.each(a, function (r, b) {
            if (j === 12) {
                d += "</ul><ul>";
                j = 0;
            }
            j++;
            c++;
            d += '<li class="fbFriend ' + b.uid + '" rel="' + b.uid + '" onmouseout="checkPerform(' + b.uid + ",this,'" + b.name + '\',event)"><img src="' + b.pic_square + '" onmouseover="performActivity(' + b.uid + ",this,'" + b.name + '\',\''+t+'\')" title="' + b.name + '"/></li>';
		});
		d += "</ul>";
        jQuery("#fbFriends").append(d);
        var k = jQuery(".fbFriend");
        for (i = 0; i < k.length; i++) {
            var n = jQuery(k[i]);
            var o = jQuery(k[i]).attr("rel");
            getFBFriendsNewsRecent(o, n, t)
        }
    	if (c == 0) jQuery("#fbFriendsBar").html('<div style="font-size:14px;font-weight:bold;color:#fff;text-align:center;margin-top:30px;">You not have any friends. <a href="javascript:;" onclick="FBInviteFriends('+u+')">Invite Friends</a> to get INDOSIAR experience</div>');
    })
}
function getFBFriendsNewsRecent(a, b, c) {
    var d = [];
    FB.api("/" + a + "/news.reads&access_token=" + c, function (a) {
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
        if (jQuery(c[i]).hasClass("tampil")) b = i;
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
function performActivity(a, b, c, t) {
    var d = t;
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
        getFBFriendActivity(a, d, jQuery(b).parents("li"), c)
    } else {
        jQuery(b).parents("li").children(".newLoadbox").addClass("show");
        if (jQuery(b).parents("li").children(".newLoadbox").html() == '<img src="/assets/images/loading.gif" style="margin: 7% 43%; border:none;">') getFBFriendActivity(a, d, jQuery(b).parents("li"), c);
    }
}
function getFBFriendActivity(a, b, c, d) {
    var e = jQuery(c).children(".newLoadbox");
    var f = 0;
    if (jQuery(c).children(".recent").length > 0) f = jQuery(c).children(".recent").html();
    e.html('<img src="/assets/images/loading.gif" style="margin: 7% 43%; border:none;" />');
    r = "/" + a + "/news.reads?article=http%3A%2F%2Fwww.indosiar.com%2F&access_token=" + b + "&limit=5";
    FB.api(r, function (b) {
        var c = b.data.length;
        var g = "https://graph.facebook.com/" + a + "/picture?type=square";
        var h = '<div class="prof-box"><img src="' + g + '"/><h3>' + d + " read :</h3><br/><h3>Latest activity (" + f + ")</h3></div>";
        h += '<div id="box_slide"><ul class="their_news_list tampil">';
        if (c > 0) {
            jQuery.each(b.data, function (a, b) {
                var c = getTimestamp(b.start_time);
                if (b.data.length !== 0) h += '<li><span class="txt"><a href="' + b.data.article.url + '">' + b.data.article.title + '</a></span><span class="time">' + c + "</span></li>";
            })
        } else {
            h += "<li>No Article</li>"
        }
        h += "</ul></div>";
        if (c > 0) {
	        h += '<div class="paging-fb-news">';
	        h += "<span onclick=\"getFBFriendActivityMore('" + b.paging.next + "',this,'" + d + "'," + a + '); return false;" class="next-news-fb" ></span>';
	        h += "<span onclick=\"getFBFriendActivityMore('" + b.paging.previous + "',this,'" + d + "'," + a + '); return false;" class="prev-news-fb" ></span>';
	        h += "</div>";
        }
        e.html(h)
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
            if (a.data.length <= 0) return false
            var b = "https://graph.facebook.com/" + d + "/picture?type=square";
            var f = '<div class="prof-box"><img src="' + b + '"/><h3>' + c + " read :</h3></div>";
            f += '<div id="box_slide"><ul class="their_news_list tampil">';
            jQuery.each(a.data, function (a, b) {
                var c = getTimestamp(b.start_time);
                if (b.data.length !== 0) f += '<li><span class="txt"><a href="' + b.data.article.url + '">' + b.data.article.title + '</a></span><span class="time">' + c + "</span></li>";
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
function showFBAccount(img,uname,uid,social) {
    var d = "<h3>Welcome to INDOSIAR</h3>";
    d += '<div class="img-box"><img src="' + img + '" /></div>';
    d += '<div class="account-detail"><span class="pre-txt" style="color:#9f9f9f;font-size:11px">You are logged in to Facebook as</span><span class="pre-txt" style="font-weight:bold;color:#fff;"> ' + uname + "</span>";
    d += '<ul id="list_ctrl"><li class="list_btn_ctrl" onclick="showFBActivity(this);" title="See your activities on INDOSIAR">Activity</li>';
    if (social == '1')
        d += '<li class="list_btn_ctrl" onclick="showFBSocial(this);" rel="2" id="social_rel" title="Set your Facebook timeline">Social:ON</li>';
    else
        d += '<li class="list_btn_ctrl" onclick="showFBSocial(this);" rel="2" id="social_rel" title="Set your Facebook timeline">Social:OFF</li>';
    d += '<li class="list_btn_ctrl" onclick="FBInviteFriends('+uid+')" title="Invite your friends to join INDOSIAR">Invite</li>';
    d += '<li class="list_btn_ctrl facebook_logout_button" style="border-right:none;" title="Sign out from INDOSIAR and Facebook">Logout</li>';
    d += "</ul></div>";
    d += '<div id="load_fb_stuff"></div>';
    jQuery("#fbAccountBox").html(d)
}
function showFBSocial(a) {
	var c = jQuery(a);
	var d = jQuery("#load_fb_stuff");
	var e = c.hasClass("selected");
	jQuery(".list_btn_ctrl").removeClass("selected");
	c.addClass("selected");
	FB.getLoginStatus(function(response){
		var uid = response.authResponse.userID;
		$.post('/openid/facebook/socialcheck',{
            uid:uid
		},function(res){
    		var b = '<ul id="options" >';
    		if (res == '1')
                b += '<li onclick="FBSetSocial(0,'+uid+'); return false;">Turn Social OFF</li>';
    		else
    			b += '<li onclick="FBSetSocial(1,'+uid+'); return false;">Turn Social ON</li>';
    		b += "</ul>";
    		d.addClass("show");
    		d.html(b);
    		if (e === true) {
    			c.removeClass("selected");
    			d.removeClass("show");
    			return false;
    		}
		});
	})
	if (e === true) {
		c.removeClass("selected");
		d.removeClass("show");
		return false;
	}
}
function FBSetSocial(m,u) {
	$.post('/openid/facebook/socialset',{
		uid:u,
		act:m
	},function(res){
		m = (m=='1')?'ON':'OFF';
		jQuery("#social_rel").html('Social:'+m);
		jQuery("#social_rel").removeClass("selected");
		jQuery("#load_fb_stuff").removeClass("show");
	});
}
function showFBActivity(a) {
    var c = jQuery(a);
    var d = jQuery("#load_fb_stuff");
    var e = c.hasClass("selected");
    jQuery(".list_btn_ctrl").removeClass("selected");
    c.addClass("selected");
    
    d.addClass("show");
    d.html('<img src="/assets/images/loading.gif" style="margin: 0 25%; padding: 50px;"/>');
    getFBActivity();

    if (e === true) {
        c.removeClass("selected");
        d.removeClass("show");
        return false;
    }
}
function getFBActivity(a) {
    var b = jQuery("#load_fb_stuff");
    FB.api("/me/news.reads&access_token=" + a + "&limit=50", function (a) {
        var c = "<h3>You read " + a.data.length + " news</h3>";
        var d = 0;
        c += '<div id="box_slide">';
        c += '<ul class="news_list">';
        jQuery.each(a.data, function (a, b) {
            if (d == 5) {
                c += '</ul><ul class="news_list">';
                d = 0
            }
            var e = getTimestamp(b.start_time);
            c += '<li><span class="txt">' + b.data.article.title + '</span><span class="time">' + e + '</span><span onclick="deleteFBActivity(this);" rel="' + b.id + '" class="del_butt"></span></li>';
            d++
        });
        c += "</ul>";
        c += "</div>";
        b.html(c);
        var e = jQuery(".news_list")[0];
        e.setAttribute("class", "news_list tampil");
        showFBActivityPaging(0);
    })
}
function showFBActivityPaging(a) {
    if (jQuery("#pp")) jQuery("#pp").remove();
    var b = jQuery(".news_list");
    b.removeClass("tampil");
    b[a].setAttribute("class", "news_list tampil");
    for (i = 0; i <= b.length; i++) {
        if (jQuery(b[i]).hasClass("tampil") === true) position = i;
    }
    var c = "";
    if (b.length > 0) {
        if (position > 0) c += '<a href="#" onclick="showFBActivityPaging(' + parseInt(a - 1) + '); return false;">prev</a>';
        if (position < b.length - 1) c += '<a href="#" onclick="showFBActivityPaging(' + parseInt(a + 1) + '); return false;">next</a>';
    }
    jQuery("#load_fb_stuff").append('<span id="pp">' + c + "</span>")
}
function deleteFBActivity(a) {
    a = jQuery(a);
    var b = a.attr("rel");
    var c = a.parent();
	FB.getLoginStatus(function(response){
		var token = response.authResponse.accessToken;
		FB.api("/" + b + "?access_token=" +token, "DELETE", function (a) {
            if (a) getFBActivity(token);
		})
	})
}
function diff_time(a) {
    var b = new Date(a);
    var c = new Date;
    var d = Math.floor((c - b) / 1e3);
    if (d < 5400)
        return 1
    else
        return 0
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
function FBInviteFriends(uid) {
	FB.ui({
        method: 'apprequests',
        message: 'Come discover INDOSIAR with me',
        title: 'Select Friends for INDOSIAR Requests',
	},
	function (response) {
        if (response.request && response.to) {
            var request_ids = [];
            for(i=0; i<response.to.length; i++) {
                var temp = response.request + '_' + response.to[i];
                request_ids.push(temp);
            }
            var requests = request_ids.join(',');
            $.post('/openid/facebook/invite',{uid:uid,request_ids:requests,url:cur_url,title:page_title,desc:page_desc,image:page_image},function(resp){});
        }
	});
	return false;
}
function FBVideoWatches() {
    FB.api("/me/video.watches", function (response) {
        var published = false;
        $.each(response.data, function (i, v) {
            if (v.data.video.url == cur_url) published = true;
        });
        if (!published) {
            FB.api('/me/video.watches', 'post', {
                video: cur_url
            }, function () {});
        }
    });
}
function FBNewsReads() {
    FB.api("/me/news.reads", function (response) {
        var published = false;
        $.each(response.data, function (i, v) {
            if (v.data.article.url == cur_url) published = true;
        });
        if (!published) {
            FB.api('/me/news.reads', 'post', {
                article: cur_url
            }, function (response) {
                if (!response || response.error) {
                    //alert('Error occured');
                    console.log(response);
                }
            });
        }
    });
}
function FBLoginCheck(response) {
    if (response.authResponse) {
		var fbUserID = response.authResponse.userID;
		var fbUserToken = response.authResponse.accessToken;
        $.post("/openid/facebook/check",{uid:fbUserID,token:fbUserToken},function(res){
    		var fbSocial	= res.social;
    		var fbUserName 	= res.name;
    		var fbUserImg 	= 'https://graph.facebook.com/'+fbUserID+'/picture';	        
            
            $('#fbContentBox').html('<div id="fbAccountBox"></div>');
            $('#fbContentBox').html('<div id="fbFriendsBox"></div><div id="fbAccountBox"></div><div style="clear:both"></div>');
    		$("#fbFriendsBox").html('<div id="fbFriendsBar"><img src="/assets/images/loading.gif" style="margin: 3% 43%;"/></div>');
    		$("#fbContainer").css("margin-bottom", "10px");
    		$("#fbContainer").css("background", "#333");
            getFBFriends(fbUserToken,fbUserID);
    		showFBAccount(fbUserImg,fbUserName,fbUserID,fbSocial);
    		$(".facebook_logout_button").click(function(event){window.location="/openid/facebook/logout";});
    		if (fbSocial == '1' && isVideoWatches) setTimeout("FBVideoWatches()",10000);
    		if (fbSocial == '1' && isNewsReads) {
    		    setTimeout("FBNewsReads()",10000);
    		    $.post("/comment/formbox/"+page_id,function(data){$("#theArtikelCommentForm").html(data)});
    		}
        },"json");
    } else {
        $.post("/openid/facebook/check",{uid:fbUserID,token:fbUserToken},function(response){});
        $('#fbContentBox').html('<table cellpadding="8" align="center"><tr><td style="color:#fff;font:bold 16px Arial, sans-serif;">Activate Facebook Timeline App and Get Experience with Your Friends.<td></td><td><img src="/assets/images/facebook-connect.png" class="facebook_login_button"/></td></tr></table>');
        $("#fbContainer").css("margin-bottom", "10px");
        $("#fbContainer").css("background", "#333");
	    $(".facebook_login_button").click(function (event) {
	        FB.login(function (response) {
	            FBLoginCheck(response);
	        }, {
	            scope: perms.join(',')
	        });
	    });
    }
}
window.fbAsyncInit = function () {
    FB.init({
        appId: '209188075876033',
        channelUrl: '/fbchannel.php',
        status: true,
        cookie: true,
        xfbml: true,
        oauth: true
    });
    FB.getLoginStatus(function(response){FBLoginCheck(response)});
    FB.Canvas.setAutoGrow();
};
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.async = true;
    js.src = "https://connect.facebook.net/en_US/all.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
$(function () {
    $('.twitter_login_button').click(function (event) {
        window.location = '/openid/twitter/login';
    });
});