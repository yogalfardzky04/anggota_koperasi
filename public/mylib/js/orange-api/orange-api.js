class ClassName {

	const orange_api = {
		api_url				: "https://apiserver.myorangehr.com",
		client_id			: "bb693bedbbee585ccfa9ef20002680a008f60dd2",
		code				: "boga2022",
		application_id		: "3",
		secrect_key			: "9bac2e768550825e51c98b5312c7b91298af9870",
		username			: "ACCESSITKOP",
		password			: "ADM123"
	}

	var boga_orange_url;
	var 

	constructor(url="") {
		if(url === undefined || url === null || url == "") {
			this.initURL();
		}
	}

	function initURL() {
		$.ajax({
			url: orange_api.api_url,
			type: 'POST',
			headers: {
				"Content-Type"				: "application/json",
				"x-orange-clientid" 		: orange_api.client_id,
				"x-orange-code"				: orange_api.code,
				"x-orange-language"			: "in",
			},
			data: {},
			dataType: "json",
			success: function (response) {
				boga_orange_url = response.url;
			},
			error: function(xhr, status, error) {
				console.log(status, error);
				console.log(xhr.responseText);
			}
		});
	}

	function initLogin() {
		return new Promise((resolve, reject) => {
			$.ajax({
				url: orange_api.api_url,
				type: 'POST',
				headers: {
					"Content-Type"			: "application/json",
					"x-orange-app"			: orange_api.client_id,
					"x-orange-language"		: "in",
					"x-orange-code" 		: orange_api.client_id,
					"x-orange-signature"	: orange_api.code,
				},
				data: {},
				dataType: "json",
				success: function (response) {
					resolve(response);
				},
				error: function(xhr, status, error) {
					reject(xhr, status, error);
				}
			});
		});
	}

	function getEmployee(emp_id) {
		return new Promise((resolve, reject) => {
			$.ajax({
				url: orange_api.api_url,
				type: 'POST',
				headers: {
					"Content-Type"				: "application/json",
					"x-orange-clientid" 		: orange_api.client_id,
					"x-orange-code"				: orange_api.code,
					"x-orange-language"			: "in",
				},
				data: {},
				dataType: "json",
				success: function (response) {
					resolve(response);
				},
				error: function(xhr, status, error) {
					reject(xhr, status, error);
				}
			});
		});
	}
}

function doTheThing() {
  return new Promise((resolve, reject) => {
	$.ajax({
	  url: window.location.href,
	  type: 'POST',
	  data: {
		key: 'value',
	  },
	  success: function (data) {
		resolve(data)
	  },
	  error: function (error) {
		reject(error)
	  },
	})
  })
}