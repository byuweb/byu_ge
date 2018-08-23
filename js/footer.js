(function($) {
  $(document).ready(function(){
    let facebook = $(".views-field-field-facebook a").attr('href');
    let twitter = $(".views-field-field-twitter a").attr('href');
    let instagram = $(".views-field-field-instagram a").attr('href');
    let youtube = $(".views-field-field-youtube a").attr('href');
    let pinterest = $(".views-field-field-pinterest a").attr('href');
    let googleplus = $(".views-field-field-google-plus a").attr('href');
    let linkedin = $(".views-field-field-linkedin a").attr('href');
    let rss = $(".views-field-field-rss a").attr('href');
    let snapchat = $(".views-field-field-snapchat a").attr('href');

    let socialHtml = '<byu-social-media-links>';
    if (facebook) {socialHtml += '<a href="' + facebook + '" class="facebook">Facebook</a>';}
    if (twitter) {socialHtml += '<a href="' + twitter + '" class="twitter">Twitter</a>';}
    if (instagram) {socialHtml += '<a href="' + instagram + '" class="instagram">Instagram</a>';}
    if (youtube) {socialHtml += '<a href="' + youtube + '" class="youtube">YouTube</a>';}
    if (pinterest) {socialHtml += '<a href="' + pinterest + '" class="pinterest">Pinterest</a>';}
    if (googleplus) {socialHtml += '<a href="' + googleplus + '" class="googleplus">Google Plus</a>';}
    if (linkedin) {socialHtml += '<a href="' + linkedin + '" class="linkedin">LinkedIn</a>';}
    if (rss) {socialHtml += '<a href="' + rss + '" class="rss">RSS</a>';}
    if (snapchat) {socialHtml += '<a href="' + snapchat + '" class="snapchat">Snapchat</a>';}
    socialHtml += '</byu-social-media-links>';
    socialHtml += $(".views-field-field-subscribe-url .field-content").html();
    $('.view-social-media-links .views-row').html(socialHtml);
  });
})(jQuery);