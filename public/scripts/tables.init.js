jQuery(function() {
	"use strict";

	function toggleBasicTableFns() {
		var $btable = $(".basic-table");
		var btns = [".btable-bordered", ".btable-striped", ".btable-condensed", ".btable-hover"];
		btns.forEach(function(btn) {
			$btable.find(btn).on("click touchstart", function(e) {
				var tableClass = $(this).data("table-class");
				e.preventDefault();
				$(this).toggleClass("active");
				$btable.find("table").toggleClass(tableClass);
			});
		});
	}


	function initDataTable() {
		var $dataTable = $(".data-table"),
			$table = $dataTable.find("table");

		// create temp datas
		var datas = [
			{engine: "Gecksss", browser: "Firefox 3.0", platform: "Win 98+/OSX.2+", version: 1.7, grade: "A"},
		
		];

		var prelength = datas.length;
		// generate more random datas
		for(var i = prelength; i < 100; i++) {
			var rand = Math.floor(Math.random()*prelength);
			datas.push(datas[rand]);
		}



		var table = $table.DataTable({
			data : datas,
			columns: [
				{data : 'engine'},
				{data : 'browser'},
				{data : 'platform'},
				{data : 'version'},
				// {data : 'grade'}
			],
			searching: true,
			dom: 'rtip',
			pageLength: 10
		});


		// custom search input
		$dataTable.find(".searchInput").on("keyup", function() {
			table.search(this.value).draw();
		});


		// custom select box 
		$dataTable.find(".lengthSelect").on("change", function() {
			table.page.len(this.value).draw();
		});

		// custom styling via jquery
		$dataTable.find(".dataTables_info").css({
			"margin-left": "20px",
			"font-size": "12px"
		});



	}




	function _init() {
		toggleBasicTableFns();
		initDataTable();
	}
	_init();

})