/**
 * @file
 * Equalize grid items.
 */

(function ($, Drupal, drupalSettings) {

  $(function() {
    $('.grid-item').matchHeight(false);
    //$('.grid-image').matchHeight(false);
    $('.grid-title').matchHeight(false);
  });

})(jQuery, Drupal, drupalSettings);
