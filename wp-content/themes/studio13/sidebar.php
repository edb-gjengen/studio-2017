<div id="sidebar1" class="sidebar small-4 columns" role="complementary">
    <?php if ( is_active_sidebar( 'sidebar-one' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-one' ); ?>
    <?php else : ?>
        <!-- This content shows up if there are no widgets defined in the backend. -->
        <div class="alert alert-help">
            <p>Widgets kan havne her</p>
        </div>
    <?php endif; ?>
</div>
