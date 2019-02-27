<section class="footer">
    <div class="mdl-grid">
       <div class="mdl-cell mdl-cell--3-col">
             <br><p class="text black wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.55s">
               <a href="../pages/index.php"><img width="170"src="../_assets/img/dosemetrix-logo.png" alt="DoseMetrix"/></a><br><br>
               Incubateur Descartes <br>23, rue Alfred Nobel <br>77420 Champs-sur-Marne<br><br>
                © 2017 Dosemetrix<br>
                All rights reserved<br>
                Privacy Policy<br>
             </p> 
       </div> 
        <div class="mdl-cell mdl-cell--3-col">
             <br><p class="text black wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.65s">
                <b>Overview</b><br>
                <a class="nohref" href="../pages/whyadherence.php">Why adherence ?</a><br>
                <a class="nohref" href="../pages/theadvantage.php">The advantages</a><br>
                <a class="nohref" href="../pages/ourvision.php">Our vision</a><br>
                <a class="nohref" href="../pages/clinicaltrials.php">Clinical Trials</a><br>
                <a class="nohref" href="../pages/gooduse.php">Good Use Programme</a><br>
                <a class="nohref" href="../pages/pharmaco.php">Pharmaco-epidemiology</a><br>
                <a class="nohref" href="../pages/riskmanagement.php">Risk management</a><br>
            </p> 
       </div> 
        <div class="mdl-cell mdl-cell--3-col">
            <br><p class="text black wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s">
             <b>Support</b><br>
             <span class="modal2-toggle2">Contact & Access</span><br>
             Contact us<br>
             <span id="show-dialog-faq">Faq</span><br>
             <span class="modal3-toggle3">Download our brochures</span><br>
             </p> 
       </div>                                     
</section> 


<script src="../_assets/js/material.min.js" type="text/javascript"></script>
<script src="../_assets/js/sweetalert-dev.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="../_assets/js/wow.min.js" type="text/javascript"></script>

<script>
    var dialog = document.querySelector('dialog');
    var showDialogFaq = document.querySelector('#show-dialog-faq');
    if (! dialog.showModal) {
    dialogPolyfill.registerDialog(dialog);
    }
    showDialogFaq.addEventListener('click', function() {
    dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
    dialog.close();
    });
</script>

<script>
        $(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("scroll");
        $('#logo').addClass("changeLogo");
        $('span.whitebold').addClass("changeColor");
        
    }
    else{
        $('header').removeClass("scroll");
        $('#logo').removeClass("changeLogo");
        $('span.whitebold').removeClass("changeColor");
        
    }
    });
</script>

<script>
    var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       100,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();

(function() {
  var Util,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  Util = (function() {
    function Util() {}

    Util.prototype.extend = function(custom, defaults) {
      var key, value;
      for (key in custom) {
        value = custom[key];
        if (value != null) {
          defaults[key] = value;
        }
      }
      return defaults;
    };

    Util.prototype.isMobile = function(agent) {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
    };

    return Util;

  })();

  this.WOW = (function() {
    WOW.prototype.defaults = {
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 0,
      mobile: true
    };

    function WOW(options) {
      if (options == null) {
        options = {};
      }
      this.scrollCallback = __bind(this.scrollCallback, this);
      this.scrollHandler = __bind(this.scrollHandler, this);
      this.start = __bind(this.start, this);
      this.scrolled = true;
      this.config = this.util().extend(options, this.defaults);
    }

    WOW.prototype.init = function() {
      var _ref;
      this.element = window.document.documentElement;
      if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
        return this.start();
      } else {
        return document.addEventListener('DOMContentLoaded', this.start);
      }
    };

    WOW.prototype.start = function() {
      var box, _i, _len, _ref;
      this.boxes = this.element.getElementsByClassName(this.config.boxClass);
      if (this.boxes.length) {
        if (this.disabled()) {
          return this.resetStyle();
        } else {
          _ref = this.boxes;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            this.applyStyle(box, true);
          }
          window.addEventListener('scroll', this.scrollHandler, false);
          window.addEventListener('resize', this.scrollHandler, false);
          return this.interval = setInterval(this.scrollCallback, 50);
        }
      }
    };

    WOW.prototype.stop = function() {
      window.removeEventListener('scroll', this.scrollHandler, false);
      window.removeEventListener('resize', this.scrollHandler, false);
      if (this.interval != null) {
        return clearInterval(this.interval);
      }
    };

    WOW.prototype.show = function(box) {
      this.applyStyle(box);
      return box.className = "" + box.className + " " + this.config.animateClass;
    };

    WOW.prototype.applyStyle = function(box, hidden) {
      var delay, duration, iteration;
      duration = box.getAttribute('data-wow-duration');
      delay = box.getAttribute('data-wow-delay');
      iteration = box.getAttribute('data-wow-iteration');
      return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
    };

    WOW.prototype.resetStyle = function() {
      var box, _i, _len, _ref, _results;
      _ref = this.boxes;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        box = _ref[_i];
        _results.push(box.setAttribute('style', 'visibility: visible;'));
      }
      return _results;
    };

    WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
      var style;
      style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
      if (duration) {
        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
      }
      if (delay) {
        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
      }
      if (iteration) {
        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
      }
      return style;
    };

    WOW.prototype.scrollHandler = function() {
      return this.scrolled = true;
    };

    WOW.prototype.scrollCallback = function() {
      var box;
      if (this.scrolled) {
        this.scrolled = false;
        this.boxes = (function() {
          var _i, _len, _ref, _results;
          _ref = this.boxes;
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            if (!(box)) {
              continue;
            }
            if (this.isVisible(box)) {
              this.show(box);
              continue;
            }
            _results.push(box);
          }
          return _results;
        }).call(this);
        if (!this.boxes.length) {
          return this.stop();
        }
      }
    };

    WOW.prototype.offsetTop = function(element) {
      var top;
      top = element.offsetTop;
      while (element = element.offsetParent) {
        top += element.offsetTop;
      }
      return top;
    };

    WOW.prototype.isVisible = function(box) {
      var bottom, offset, top, viewBottom, viewTop;
      offset = box.getAttribute('data-wow-offset') || this.config.offset;
      viewTop = window.pageYOffset;
      viewBottom = viewTop + this.element.clientHeight - offset;
      top = this.offsetTop(box);
      bottom = top + box.clientHeight;
      return top <= viewBottom && bottom >= viewTop;
    };

    WOW.prototype.util = function() {
      return this._util || (this._util = new Util());
    };

    WOW.prototype.disabled = function() {
      return !this.config.mobile && this.util().isMobile(navigator.userAgent);
    };

    return WOW;

  })();

}).call(this);


wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100
  }
);
wow.init();

</script>

<script>
// Quick & dirty toggle to demonstrate modal toggle behavior
$('.modal-toggle').on('click', function(e) {
  e.preventDefault();
  $('.modal').toggleClass('is-visible');
});

// Quick & dirty toggle to demonstrate modal toggle behavior
$('.modal2-toggle2').on('click', function(e) {
  e.preventDefault();
  $('.modal2').toggleClass('is-visible');
});

// Quick & dirty toggle to demonstrate modal toggle behavior
$('.modal3-toggle3').on('click', function(e) {
  e.preventDefault();
  $('.modal3').toggleClass('is-visible');
});

// Quick & dirty toggle to demonstrate modal toggle behavior
$('.modal4-toggle4').on('click', function(e) {
  e.preventDefault();
  $('.modal4').toggleClass('is-visible');
});

var $iframe = $('iframe'),
    $videoLink = $('.video-link'),
    playerTemplate = '<div class="player"><div class="player__video"><div class="video-filler"></div><button class="video-close">&times;</button><iframe class="video-iframe" src="{{iframevideo}}" frameborder="0" allowfullscreen></iframe></div><div/>';


$videoLink.on('click', function(e) {
    var localTemplate = '',
        videoWidth = parseInt($(this).data('width')),
        videoHeight = parseInt($(this).data('height')),
        videoAspect = ( videoHeight / videoWidth ) * 100,
        // elements
        $player = null,
        $video = null,
        $close = null,
        $iframe = null;

    e.preventDefault();

    localTemplate = playerTemplate.replace('{{iframevideo}}', $(this).prop('href'));

    $player = $(localTemplate);

    $player
        .find('.video-filler')
        .css('padding-top', videoAspect + '%');

    $close = $player
        .find('.video-close')
        .on('click', function() {
            $(this).off().closest('.player').hide().remove();
        });

    $player.appendTo('body').addClass('js--show-video');
});

</script>


