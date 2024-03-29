mbe = {
	showActions:false,
	showActionObject:false,
	showActionsTimeOut:0,
	animationsSpeed:'fast',
	pbInterval:0,
	progressbarSim:function(){
		$('.cont .wrapper .block.large .content .loader .progress').progressbar({value:23});
		$('.cont .wrapper .block.large .content .loader .percentage').html('23%');
		mbe.pbInterval = setInterval(function(){
			var element = $( '.cont .wrapper .block.large .content .loader' );
			var value=element.find('.progress').progressbar('option','value');
			if(value<100){
				value++;
				element.find('.progress').progressbar('option','value',value);
				element.find('.percentage').html(value+'%');
			}else{
				clearInterval(mbe.pbInterval);
			}
		},30);
	},
	slideActions:function(){
		if(mbe.showActions){
			$('.cont .wrapper .block.large .content ul.image-list li:eq('+mbe.showActionObject+')').children('ul').slideDown(mbe.animationsSpeed);
		}
	},
	getCurrentTheme: function () {
		var
			classAttr = $('.cont').attr('class'),
			classList = classAttr.split(/\s+/),
			currentTheme = '';
		for (var x in classList) {
			if (classList[x]!= 'cont' && classList[x]!='fixed' && classList[x]!='liquid') {
				currentTheme = classList[x];
			}
		}
		return currentTheme;
	},
	login: {
		ready: function() {
			//wrapper css
			$('.cont.fixed .wrapper').css({
				'width': 'auto',
				'text-align': 'center'
			});

			//login form should not have
			$('form').submit(function(e){
				var vars = $(this).serializeArray();
				var shouldContinue = true;
				for (x in vars) {
					if (vars[x].value=='') {
						shouldContinue = false
					}
				}
				if (!shouldContinue) {
					e.preventDefault();
					$(this).find('.msg').remove();
					$(this).prepend('<div class="msg"><div class="error">Do not leave the fields empty</div></div>');

					var loginWindow = $('.cont .wrapper .block.login');

					var left = loginWindow.position().left>parseInt(loginWindow.css('margin-left'))
							? loginWindow.position().left
							: loginWindow.css('margin-left');
						loginWindow
							.css('margin-left',left)
							.effect('shake', null, 100);
					mbe.init.smallMessage();
				}
			});

			//init login tabs
			$('.cont .wrapper .block.login .top .gray ul li a').click(function(){
				$('.cont .wrapper .block.login .top .gray ul li a').removeClass('active');
				$(this).addClass('active');
				$('.login-tabs').removeClass('active');
				$('#'+$(this).attr('href')).addClass('active');
				return false;
			});

		}
	},
	init: {
		smallMessage: function() {
			//init small message close
			$('.cont .wrapper .block .content .msg div span.close').remove();
			$('.cont .wrapper .block .content .msg div').append('<span class="close" title="Close">&nbsp;</span>');

			$('.cont .wrapper .block .content .msg div span.close ').unbind('click');
			$('.cont .wrapper .block .content .msg div span.close ').click(function(){
				$(this).parent().fadeTo(mbe.animationsSpeed, 0).slideUp(mbe.animationsSpeed);
			});

			$('.cont .wrapper .block .content .msg ul').append('<li class="close" title="Close">&nbsp;</li>');
			$('.cont .wrapper .block .content .msg ul li.close').click(function(){
				$(this).parent().fadeTo(mbe.animationsSpeed, 0).slideUp(mbe.animationsSpeed);
			});
		},
		bigMessage: function() {
			//init big message close
			$('.cont .wrapper .message span.close').remove();
			$('.cont .wrapper .message').append('<span class="close" title="Close">&nbsp</span>');

			$('.cont .wrapper .message span.close').unbind('click');
			$('.cont .wrapper .message span.close').click(function(){
				$(this).parent().fadeTo(mbe.animationsSpeed, 0).slideUp(mbe.animationsSpeed);
			});
		},
		datePicker: function() {
			//init datepicker
			$('.datepicker').jdPicker();
		},
		inputs: function() {
			$('input:checkbox, input:radio, input:file').uniform();
			$('input:file').closest('p').addClass('file');
		},
		progressBar: function() {
			$('.cont .wrapper .block.large .content .loader .progress').progressbar({value:23});
			$('.cont .wrapper .block.large .content .loader .percentage').html('23%');
		},
		topMenu: function() {
			//init the menu
			$('.cont .menu .menu-wrap ul li').mouseenter(function(){
				$(this).children('ul').show();
				$(this).addClass('iehover');
			});
			$('.cont .menu .menu-wrap ul li').mouseleave(function(){
				$(this).children('ul').hide();
				$(this).removeClass('iehover');
			});

			$('.cont .menu .menu-wrap ul li ul li').mouseenter(function(){
				$(this).addClass('iehover');
			});
			$('.cont .menu .menu-wrap ul li ul li').mouseleave(function(){
				$(this).removeClass('iehover');
			});

			//init menu autocomplete
			var links = [];
			$('#main_menu a').each(function(){
				links.push({
					'label':$(this).text(),
					'value':$(this).attr('href')
				});
			});
			$('#menu_search').autocomplete({
				'source': links,
				'autoFocus': true,
				'select': function(event, ui) {
					window.location = ui.item.value;
					return false;
				},
				'focus': function(){
					return false;
				},
				'delay':0,
				'appendTo':'.cont'
			});

			//bind shortcut
			var combination = 'ctrl+space';
			if ($.client.browser == 'Firefox' && $.client.os == 'Mac') {
				combination = 'alt+space';
			}
			$(document).bind('keydown', combination, function(){
				$('#menu_search').focus();
			});

			//user menu
			$('.cont .menu .menu-wrap .login').click(function(){
				$(this).addClass('active');
				$('.cont .menu .menu-wrap .login .details').show();
			});
			$(document).click(function(e){
				if (!$(e.target).is('.cont .menu .menu-wrap .login, .cont .menu .menu-wrap .login *')) {
					$('.cont .menu .menu-wrap .login').removeClass('active');
					$('.cont .menu .menu-wrap .login .details').hide();
				}
			});
			$('.cont .menu .menu-wrap .login').mouseenter(function(){
				$(this).addClass('active');
			});
			$('.cont .menu .menu-wrap .login').mouseleave(function(){
				$(this).removeClass('active');
			});
		},
		accordion: function() {
			$('.cont .wrapper .block.large .content .accordion').accordion({header: '.title'});
		},
		sidebarElements: function() {
			$('.cont .wrapper .sidebar .block.closed .content').hide();

			$('.cont .wrapper .sidebar .block .top').click(function(){
				$(this).closest('.block').toggleClass('closed');
				$(this).closest('.block').children('.content').slideToggle(mbe.animationsSpeed);
				return false;
			});
		},
		dataTable: function() {


			//clear search inputs on click
			$('.cont input.search').focus(function(){
				$(this).val('');
			});

			//delete and table actions confirm
			$('.cont .wrapper .block .delete').click(function(){
				if(!confirm('Are you sure you want to delete this item ?')){
					return false;
				}
			});
			$('.cont .wrapper .block .table-actions').click(function(){
				if(!confirm('Are you sure you want to apply these actions ?')){
					return false;
				}
			});

			//init filter show/hide
			$('.cont .wrapper .block.large .content .filters .high span.hide').click(function(){
				$(this).parent().siblings('.low').slideToggle(mbe.animationsSpeed);
			});

			//same height for filters
			$('.cont .wrapper .block.large .content .filters .low .filter').height($('.cont .wrapper .block.large .content .filters .low').height()-40);
		},
		imageList: function() {
			//image hover
			$('.cont .wrapper .block.large .content ul.image-list li').mouseenter(function(){
				mbe.showActions = true;
				var _this = this;
				mbe.showActionObject = $(this).index('.cont .wrapper .block.large .content ul.image-list li');
				clearTimeout(mbe.showActionsTimeOut);
				mbe.showActionsTimeOut = setTimeout(mbe.slideActions, 500)

				$(this).children('span.move').show();
			});
			$('.cont .wrapper .block.large .content ul.image-list li').mouseleave(function(){
				mbe.showActions =  false;
				$(this).children('span.move').hide();
				$(this).children('ul').slideUp(mbe.animationsSpeed);
			});

			//image sortable
			$('.cont .wrapper .block.large .content ul.image-list').sortable({
				start: function(event, ui) {
					ui.item.addClass('drag_sort');
				},
				stop: function(event, ui) {
					$('.cont  .wrapper .block.large .content ul.image-list li span.move').hide();
					$('.cont  .wrapper .block.large .content ul.image-list li ul').hide();
					$('#'+$(this).attr('rel')).val($(this).sortable('toArray'));
					mbe.showActions =  true;
				},
				sort: function(event, ui) {
					 mbe.showActions =  false;
				},
				placeholder: 'ui-state-highlight'
			});
			$('.cont .wrapper .block.large .content ul.image-list').disableSelection();
		},
		subPageTabs: function() {

			//init subpage tabs
			$('#'+$('.cont .wrapper .block.large .side-tabs .tab-list ul li.active a').attr('href')).show();
			$('.cont .wrapper .block.large .side-tabs .tab-list ul li.active a').parent('li').append('<span class="arrow">&nbsp;</span>');
			$('.cont .wrapper .block.large .side-tabs .tab-list ul li a').click(function(){
				$('.cont .wrapper .block.large .side-tabs .tab-list ul li.active').removeClass('active');
				$('.cont .wrapper .block.large .side-tabs .tab-list ul li.active span.arrow').remove();
				$(this).parent('li').addClass('active');
				$(this).parent('li').append('<span class="arrow">&nbsp;</span>');
				$('.cont .wrapper .block.large .side-tabs .right-tab').hide();
				$('#'+$(this).attr('href')).show();
				return false;
			});
		},
		selectInput: function() {
			$('.cont .wrapper .block select.styled').select_skin();
		},
		tabs: function() {
			$('.cont .wrapper .block.large .content .tabs').hide();
			$('#'+$('.cont .wrapper .block.large .content ul.tab li a.active').attr('href')).show();
			$('.cont .wrapper .block.large .content ul.tab li a').click(function(){
				$('.cont .wrapper .block.large .content ul.tab li a').removeClass('active');
				$(this).addClass('active');
				$('.cont .wrapper .block.large .content .tabs').hide();
				$('#'+$(this).attr('href')).show();
				return false;
			});
		},
		graph: {
			themes: {
				'soft-green': ['#648E25', '#EE931A', '#e7c42d', '#e94d45'],
				'crimson-orange': ['#E95914', '#FECF4C', '#9A9A9A', '#648E25'],
				'soft-blue': ['#3D99B5', '#dcdcdc', '#e7c42d', '#e94d45'],
				'soft-red': ['#A72121', '#dcdcdc', '#9A9A9A', '#648E25'],
				'blue-gray': ['#66858E', '#dcdcdc', '#e7c42d', '#e94d45']
			},
			ready: function() {
				var currentTheme = mbe.getCurrentTheme();
				$('table.stats').each(function() {
					$(this).siblings('.visualize').remove();

					$(this).show();
					var width = $(this).width()-50;
					$(this).hide();

					var statsType = '';

					if ($(this).attr('rel')) {
						statsType = $(this).attr('rel');
					} else {
						statsType = 'area';
					}

					if(statsType == 'line' || statsType == 'pie') {
						$(this).hide().visualize({
							type: statsType,	// 'bar', 'area', 'pie', 'line'
							width: width,
							height: '240px',
							colors: mbe.init.graph.themes[currentTheme],
							lineDots: 'double'
						});
					} else {
						$(this).hide().visualize({
							type: statsType,	// 'bar', 'area', 'pie', 'line'
							width: width,
							height: '240px',
							colors: mbe.init.graph.themes[currentTheme]
						});
					}
				});
			}
		},
		fancybox: function() {
			$('a.fancybox').fancybox({
				centerOnScroll: true,
				onStart:function(items,index,opts) {
					var obj = $(items[index]).parent();
					if (obj.hasClass('drag_sort')) {
						obj.removeClass('drag_sort');
						return false;
					}
				}
			});
		},
		wysiwyg: function() {
			$('textarea.wysiwyg').wysiwyg();
		}
	},
	presentation: {
		changeTheme: function() {
			var
				classAttr = $('.cont').attr('class'),
				classList = classAttr.split(/\s+/),
				currentTheme = '';
			for (var x in classList) {
				if (classList[x]!= 'cont') {
					$('.cont').removeClass(classList[x]);
				}
			}

			//cookie for the theme
			var theme = $.cookie('theme');
			var liquid = $.cookie('liquid');

			if (!theme) {
				theme = 'soft-green';
				$.cookie('theme','soft-green');
			}

			if (!liquid) {
				liquid = 0;
				$.cookie('liquid',0);
			}

			$('.cont').addClass(theme);
			$('.cont').addClass(liquid>0?'liquid':'fixed');
		},
		ready: function() {

			//remove all classes
			mbe.presentation.changeTheme();

			//menu change theme and layout
			$('.layout-menu a').click(function(e){
				e.preventDefault();

				var href = $(this).attr('href');
				switch (href) {
					case '#liquid':
						$.cookie('liquid',1);
						mbe.presentation.changeTheme();
						mbe.init.subPageTabs();
						break;
					case '#fixed':
						$.cookie('liquid',0);
						mbe.presentation.changeTheme();
						mbe.init.subPageTabs();
						break;
					case '#layout':
						break;
					default:
						$.cookie('theme',href);
						mbe.presentation.changeTheme();
						break;
				}

				//init graph
				mbe.init.graph.ready();
			});
		}
	},
	ready:function(){

		//init presentation
		mbe.presentation.ready();

		//init accordion
		mbe.init.accordion();

		//init datepicker
		mbe.init.datePicker();

		//init inputs
		mbe.init.inputs();

		//init sidebar elements
		mbe.init.sidebarElements();

		//init the data table
		mbe.init.dataTable();

		//init the image
		mbe.init.imageList();

		//init the subpage tabs
		mbe.init.subPageTabs();

		//init tabs
		mbe.init.tabs();

		//init fancybox
		mbe.init.fancybox();

		//init wysiwyg
		mbe.init.wysiwyg();

		//init graph
		mbe.init.graph.ready();

		//init the big messages
		mbe.init.bigMessage();

		//init the small messages
		mbe.init.smallMessage();

		//init progressbar
		mbe.init.progressBar();

		//init top menu
		mbe.init.topMenu();

		//style select inputs
		mbe.init.selectInput();

		//set p width for smaller inputs
		if(!$('.cont').hasClass('liquid')){
			$('.cont  .wrapper .block.large .content form p input.text.medium').closest('p').width(parseInt($('.cont  .wrapper .block.large .content form fieldset p input.text.medium').width())+15);
			$('.cont  .wrapper .block.large .content form p input.text.small').closest('p').width(parseInt($('.cont  .wrapper .block.large .content form fieldset p input.text.small').width())+15);
		}
		//add trimings from js to keep html simple
		$('.cont .menu .menu-wrap .login .details .top').prepend('<div class="pointer">&nbsp;</div>');
		$('.cont .wrapper .block.large .content ul.tab li a').each(function(){
			$(this).html('<span class="l">&nbsp;</span><span class="c">'+$(this).html()+'</span><span class="r">&nbsp;</span>');
		});

		//if theme is liqiud set side tabs height
		if($('.cont').hasClass('liquid')){
			$('.cont.liquid .wrapper .block.large .side-tabs .right-tab').css('minHeight',$('.cont.liquid .wrapper .block.large .side-tabs .tab-list').height()-10);
		}

		//if block head has list and search
		$('.cont .wrapper .block.large .top input.search').closest('.top').children('ul').css('right','160px');
		$('.cont .wrapper .block.medium .top input.search').closest('.top').children('ul').css('right','160px');
	}
}

$(document).ready(mbe.ready);

