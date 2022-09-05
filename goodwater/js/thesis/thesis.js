jQuery(document).ready(function() {
// init fancybox
  var $fancyBox = jQuery('.fancybox');
  if ($fancyBox.length) {
    $fancyBox.fancybox({
      padding: 0,
      afterShow: function () {
        if (this.inner.contents().is('img')) {
          var $img = this.inner.contents();
          var $origImg = this.element.find('img');
          if ($origImg.hasClass('social-share')) {
            var imgData = $origImg.data();
            for (var key in imgData) {
              if (imgData.hasOwnProperty(key)) {
                $img.data(key, imgData[key]);
              }
            }
            $img.addClass('social-share');
            jQuery.stify($img);
          }
        }
      }
    });
  }
});


