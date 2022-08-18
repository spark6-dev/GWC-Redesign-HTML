// Commit: a3a289403dfc60e09d78ff47d8ca775869a9dbf6
$(window).on("load", function () {
  ScrollTrigger.normalizeScroll(true);

  let normalizer = ScrollTrigger.normalizeScroll();
  if (!window.matchMedia("(min-width: 992px)").matches) {
    return;
  }
  let transitionDuration = 1.5;
  let gwcLogoPos = $(".goal__head img").position();
  let gwcHeaderHeight = $('.gwc.header').height()
  let slideHeight = $(".gwc.goal .goal__wrapper").height();
  let slideWidth = $(".gwc.goal .goal__wrapper").width();
  let usableHeight = window.innerHeight - gwcHeaderHeight;

  slideHeight = usableHeight < slideHeight ? usableHeight : slideHeight;

  let highlightBlue = '#5dbdf0'
  let defaultBlue = '#4a5c76'

  if ($(".gwc.goal")[0]) {
    gsap.registerPlugin(ScrollTrigger);
    const goalAnimate = gsap.timeline({
      scrollTrigger: {
        trigger: ".gwc.goal",
        pin: ".gwc.goal",
        scrub: 2,
        start: "-=10%",
        end: "+=300%",
      },
    });

    goalAnimate
      .to('[data-slide="1"] .goal__subhead', {
        opacity: 0,
        duration: transitionDuration,
      })
      .fromTo(
        '[data-slide="1"] span img',
        {
          opacity: 1,
          duration: transitionDuration,
        },
        {
          opacity: 0,
          duration: 0.5,
        })
      .fromTo(
        '[data-slide="2"] .goal__thumb svg, [data-slide="2"] .goal__thumb img',
        {
          width: () => $(".goal__head img").width(),
          top: () => gwcLogoPos.top + 3,
          left: () => (gwcLogoPos.left - ($(".goal__head img").width() / 4) + 3),
          opacity: 0
        },
        {
          width: slideWidth,
          left: 0,
          duration: transitionDuration,
          opacity: 1,
          ease: 'sine.in'
        },
        "<"
    )
      .to('[data-slide="1"] .goal__consumer', {
        opacity: 0,
        duration: transitionDuration,
      })
      .to(
        '[data-slide="2"] .goal__thumb svg, [data-slide="2"] .goal__thumb img',
        {
          top: () => {
            let logoHeight = $('[data-slide="2"] .goal__thumb svg').height()
            return ((usableHeight - logoHeight) / 2) + 5
          },
        }
      );

    // subslides 1-4
    document.querySelectorAll(".goal__subslide.goal__explain").forEach((target) => {
      goalAnimate
        .fromTo(target, {
          opacity: 0,
        }, {
          opacity: 1,
          duration: transitionDuration,
        })
        .to(target, {
          opacity: 0,
          duration: transitionDuration,
        });
    });

    goalAnimate
      .set('.goal__background', {
        height: slideHeight,
        width:  slideWidth / 3,
      })
      .fromTo('.goal__subslide.goal__step_bg', {
        opacity: 0
      }, {
        opacity: 1,
        duration: transitionDuration,
      })
      .to('#goal__background__capital, #goal__background__collective', {
        opacity: 1,
        duration: transitionDuration,
      }, '<');

    ['genesis', 'capital', 'collective'].forEach((step, i, a) => {
      // Fade in
      goalAnimate
        .fromTo(`.goal__subslide#goal__step__${step}`, {
          opacity: 0
        }, {
          opacity: 1,
          duration: transitionDuration,
        })
        .to(`#goal__background__${step}`, {
          opacity: 0,
        },'<')
        .to(`#goal__points__${step} .goal__point_title__text`, {
          color: highlightBlue,
          duration: transitionDuration,
        }, '<')
        .to(`#goal__points__${step} .goal__point`, {
          background: highlightBlue,
          duration: transitionDuration,
        }, '<');

      if (i === a.length - 1) {
        return;
      }

      // Fade out
      goalAnimate
        .to(`.goal__subslide#goal__step__${step}`, {
          opacity: 0,
          duration: transitionDuration,
        })
        .to(`#goal__background__${step}`, {
          opacity: 1,
          duration: transitionDuration,
        },'<')
        .to(`#goal__points__${step} .goal__point_title__text`, {
          color: defaultBlue,
          duration: transitionDuration,
        }, '<')
        .to(`#goal__points__${step} .goal__point`, {
          background: defaultBlue,
          duration: transitionDuration,
        }, '<')
    });

  }
});
