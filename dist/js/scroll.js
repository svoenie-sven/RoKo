//
//
//
// Parallax for first page

setTimeout(function () {
  $('.logo').addClass('is-showing');
  setTimeout(function () {
    $('.line', $('#one')).addClass('is-showing');
  }, 900);
}, 100);

// End Parallax for first page
//
//
//

if (window.innerWidth > 576 && window.innerHeight > 576) {
  function ScrollHandler(pageId) {
    var page = document.getElementById(pageId);
    var pageStart = document.getElementById(pageId).offsetTop;
    var pageJump = false;
    var viewStart;
    var duration = 600;
    var scrolled = document.getElementById("scroll");
    var pageOne = $("#one").offset().top + (window.innerHeight / 2);
    var pageTwo = $("#two").offset().top + (window.innerHeight / 2);
    var pageThree = $("#three").offset().top + (window.innerHeight / 2);
    var pageFour = $("#four").offset().top + (window.innerHeight / 2);
    var showedAll = false;

    // Parallax Functions

    function parallaxOne() {
      if (scrolled.scrollTop > pageOne) {
        setTimeout(function () {
          $('.dienst-outer-two').addClass('is-showing');
          setTimeout(function () {
            $('.dienst-outer-one').addClass('is-showing');
            $('.dienst-outer-three').addClass('is-showing');
            setTimeout(function () {
              $('.line', $('#two')).each(function (i) {
                setTimeout(function () {
                  $('.line', $('#two')).eq(i).addClass('is-showing');
                }, (400 * i) + 400);
              });
            }, 500);
          }, 500);
        }, 200);
      }
    }

    function parallaxTwo() {
      if (scrolled.scrollTop > pageTwo) {
        $('.partner-col').each(function (i) {
          setTimeout(function () {
            $('.partner-col').eq(i).addClass('is-showing');
            setTimeout(function () {
              $('.line', $('#three')).each(function (i) {
                setTimeout(function () {
                  $('.line', $('#three')).eq(i).addClass('is-showing');
                }, (700 * (Math.exp(i * 0.3))) - 200);
              });
            }, 1000);
          }, (100 * i) + 200);
        });
      }
    }

    function parallaxThree() {
      if (scrolled.scrollTop > pageThree) {
        $('.about-col', $('#four')).each(function (i) {
          setTimeout(function () {
            $('.about-col', $('#four')).eq(i).addClass('is-showing');
            setTimeout(function () {
              $('.line', $('#four')).each(function (i) {
                setTimeout(function () {
                  $('.line', $('#four')).eq(i).addClass('is-showing');
                }, (700 * (Math.exp(i * 0.3))) - 200);
              });
            }, 400);
          }, (200 * i) + 200);
        });
      }
    }

    function parallaxFour() {
      if (scrolled.scrollTop > pageFour) {
        // To stop scrollbar interval
        showedAll = true;

        $('.show-social').each(function (i) {
          setTimeout(function () {
            $('.show-social').eq(i).addClass('is-showing');
            setTimeout(function () {
              $('.line', $('#five')).each(function (i) {
                setTimeout(function () {
                  $('.line', $('#five')).eq(i).addClass('is-showing');
                }, (700 * (Math.exp(i * 0.3))) - 200);
              });
            }, 1500);
          }, (400 * i));
        });
      }
    }

    // End of Parallax Functions

    function scrollToPage() {
      pageJump = true;

      // Calculate how far to scroll
      var startLocation = viewStart;
      var endLocation = pageStart;
      var distance = endLocation - startLocation;

      var runAnimation;

      // Set the animation variables to 0/undefined.
      var timeLapsed = 0;
      var percentage, position;

      var easing = function (progress) {
        return progress < 0.5
          ? 4 * progress * progress * progress
          : (progress - 1) * (2 * progress - 2) * (2 * progress - 2) + 1; // acceleration until halfway, then deceleration
      };

      function stopAnimationIfRequired(pos) {
        if (pos == endLocation) {
          cancelAnimationFrame(runAnimation);
          setTimeout(function () {
            pageJump = false;
          }, 500);
        }
      }

      var animate = function () {
        timeLapsed += 16;
        percentage = timeLapsed / duration;
        if (percentage > 1) {
          percentage = 1;
          position = endLocation;
        } else {
          position = startLocation + distance * easing(percentage);
        }
        scrolled.scrollTop = position;
        runAnimation = requestAnimationFrame(animate);
        stopAnimationIfRequired(position);

        // Do Parallax 

        parallaxOne();
        parallaxTwo();
        parallaxThree();
        parallaxFour();

        // End Do Parallax
      };
      // Loop the animation function
      runAnimation = requestAnimationFrame(animate);
    }

    // If user uses scrollbar...
    window.addEventListener("mousedown", onMouseDown);
    function onMouseDown(e) {
      if (e.offsetX > e.target.clientWidth) {
        if (!showedAll) {
          console.log("TRY");
          setInterval(function () {
            parallaxOne();
            parallaxTwo();
            parallaxThree();
            parallaxFour();
          }, 10);
        }
      }
    }

    // If user uses mousewheel
    window.addEventListener("wheel", function (event) {
      viewStart = scrolled.scrollTop;
      if (!pageJump) {
        var pageHeight = page.scrollHeight;
        var pageStopPortion = pageHeight / 3;
        var viewHeight = window.innerHeight;

        var viewEnd = viewStart + viewHeight;
        var pageStartPart = viewEnd - pageStart;
        var pageEndPart = pageStart + pageHeight - viewStart;

        var canJumpDown = pageStartPart >= 0;
        var stopJumpDown = pageStartPart > pageStopPortion;

        var canJumpUp = pageEndPart >= 0;
        var stopJumpUp = pageEndPart > pageStopPortion;

        var scrollingForward = event.deltaY > 0;
        if (
          (scrollingForward && canJumpDown && !stopJumpDown) ||
          (!scrollingForward && canJumpUp && !stopJumpUp)
        ) {
          event.preventDefault();
          scrollToPage();
        }
        false;
      } else {
        event.preventDefault();
      }
    });
  }
  new ScrollHandler("one");
  new ScrollHandler("two");
  new ScrollHandler("three");
  new ScrollHandler("four");
  new ScrollHandler("five");
}