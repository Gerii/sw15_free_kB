$(document).on("mobileinit", function() {
});

$(document).on("pagebeforeshow", function() {
	var nav = new Navigation();
	$(".navbtn").on("click", function() {
		nav.loadPage($(this).attr("id"));
	});
});

Navigation = function() {
//	this.loadPage("home.html");
	if (arguments.callee._singletonInstance)
		return arguments.callee._singletonInstance;
	this.loadPage("home.html");
	arguments.callee._singletonInstance = this;
};

Navigation.prototype.splitUrl = function(url) {
	console.log(url);
	if(url == undefined) {
		return "";
	}
	var urls = url.split(".");
	var tag = "";
	for (var i = 0; i < urls.length - 1; i++) {
		tag += urls[i];
	}
	console.log(tag);
	return urls.length === 1 ? urls[0] : tag;
};

Navigation.prototype.loadPage = function(url) {
	var tag = "#" + this.splitUrl(url);
	jQuery.mobile.navigate(tag);
	$.post(url, {
		sort : "",
		page : ""
	}, function(result) {
		console.log(result);
		$("#content").html(result);
	}, "html");
};

Navigation.prototype.buildUrl = function(hash) {
    return hash.substr(1,hash.length) + ".html" ;
};

$(window).on("navigate", function(event, data) {
	if (data.state.direction === "back") {
		var nav = new Navigation();

		var hash = window.location.hash;
		$.post(nav.buildUrl(hash), {
			sort : "",
			page : ""
		}, function(result) {
			console.log(result);
			// Instead of calling the div name, I need to be able to target it with $(this) and .parent() to make sure only 1 video change, but for now I only want the response to replace the video
			$("#content").html(result);
		}, "html");
		console.log(data.state.info);
		console.log(data.state.direction);
		console.log(data.state.url);
		console.log(data.state.hash);
	}
});
