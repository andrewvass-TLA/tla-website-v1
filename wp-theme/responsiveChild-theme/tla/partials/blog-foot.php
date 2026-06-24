<?php
/**
 * Shared site footer + scripts + closing </body></html> for BLOG templates.
 * Mirrors the foot of tla-fullhtml-template.php. Requires TLA_BASE.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
include get_stylesheet_directory() . '/tla/partials/footer.php';
?>
  <script src="<?php echo esc_url( TLA_BASE ); ?>/js/nav.js"></script>
  <script src="<?php echo esc_url( TLA_BASE ); ?>/js/animations.js" defer></script>
<?php wp_footer(); ?>
</body>
</html>
