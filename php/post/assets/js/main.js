(function() {

	var $window = window,
		$body = document.querySelector('body'),
		$menu = document.getElementById('menu'),
		$sidebar = document.getElementById('sidebar'),
		$main = document.getElementById('main');
  
	// Breakpoints.
	function breakpoints(breakpointsObj) {
	  var breakpoints = Object.entries(breakpointsObj);
	  var currentBreakpoint = null;
  
	  function updateBreakpoint() {
		var screenWidth = $window.innerWidth;
  
		for (var i = 0; i < breakpoints.length; i++) {
		  var breakpoint = breakpoints[i];
		  var breakpointName = breakpoint[0];
		  var breakpointRange = breakpoint[1];
  
		  if (
			(breakpointRange[0] === null || screenWidth >= parseInt(breakpointRange[0], 10)) &&
			(breakpointRange[1] === null || screenWidth <= parseInt(breakpointRange[1], 10))
		  ) {
			if (currentBreakpoint !== breakpointName) {
			  currentBreakpoint = breakpointName;
			  onBreakpointChange(currentBreakpoint);
			}
			break;
		  }
		}
	  }
  
	  function onBreakpointChange(breakpoint) {
		// Implement your logic for each breakpoint change
		// For example, move elements between sidebars or change CSS classes
		if (breakpoint === 'xlarge' || breakpoint === 'large') {
		  $intro.prependTo($main);
		} else {
		  $intro.prependTo($sidebar);
		}
	  }
  
	  $window.addEventListener('resize', updateBreakpoint);
	  updateBreakpoint();
	}
  
	// Play initial animations on page load.
	$window.addEventListener('load', function() {
	  window.setTimeout(function() {
		$body.classList.remove('is-preload');
	  }, 100);
	});
  
	// Menu.
	function panel(options) {
	  var panelElement = options.target;
  
	  function showPanel() {
		panelElement.classList.add(options.visibleClass);
	  }
  
	  function hidePanel() {
		panelElement.classList.remove(options.visibleClass);
	  }
	  
	  var $panelTrigger = panelElement.querySelector('[href="' + options.side + '"]');
	  $panelTrigger.addEventListener('click', function(event) {
		event.preventDefault();
		if (panelElement.classList.contains(options.visibleClass)) {
		  hidePanel();
		} else {
		  showPanel();
		}
	  });
  
	  if (options.hideOnClick) {
		var $panelLinks = panelElement.querySelectorAll('a');
		$panelLinks.forEach(function(link) {
		  link.addEventListener('click', function() {
			hidePanel();
		  });
		});
	  }
	}
  
	// Search (header).
	var $search = document.getElementById('search'),
		$searchInput = $search.querySelector('input');
  
	$body.addEventListener('click', function(event) {
	  var target = event.target;
	  if (target.getAttribute('href') === '#search') {
		event.preventDefault();
		if (!$search.classList.contains('visible')) {
		  $search.reset();
		  $search.classList.add('visible');
		  $searchInput.focus();
		}
	  }
	});
  
	$searchInput.addEventListener('keydown', function(event) {
	  if (event.keyCode === 27) {
		$searchInput.blur();
	  }
	});
  
	$searchInput.addEventListener('blur', function() {
	  window.setTimeout(function() {
		$search.classList.remove('visible');
	  }, 100);
	});
  
	// Intro.
	var $intro = document.getElementById('intro');
  
	breakpoints({
	  xlarge:   [ '1281px',  '1680px' ],
	  large:    [ '981px',   '1280px' ],
	  medium:   [ '737px',   '980px'  ],
	  small:    [ '481px',   '736px'  ],
	  xsmall:   [ null,      '480px'  ]
	});
  
  })();