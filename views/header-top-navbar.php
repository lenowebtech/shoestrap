<div class="row">
	<div id="site-branding" class="site-branding columns">
		<?php shoestrap_branding(); ?>
		<# if ( data.show_tagline && ( data.description || data.is_customize_preview ) ) { #>
			<span class="site-description">{{ data.description }}</span>
		<# } #>
	</div>
	<aside id="header-extra columns">
		<?php dynamic_sidebar( 'header-1' ); ?>
	</aside>
</div>

<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="top-bar">
		<div class="top-bar-right">
			<ul data-responsive-toggle="primary-menu" data-hide-for="medium">
				<button class="menu-icon" type="button" data-toggle>
					<span class="screen-reader-text">' . esc_attr_e( 'Menu', 'shoestrap' ) . '</span>
				</button>
			</ul>
			<?php
			// Add menu.
			wp_nav_menu( array(
				'container'      => false,
				'menu_class'     => 'vertical medium-horizontal menu dropdown',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu data-responsive-menu="drilldown medium-dropdown" data-disable-hover="true" data-click-open="true">%3$s</ul>',
				'walker'         => new Shoestrap_Topbar_Menu_Walker(),
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</div>
	</div>
</nav><!-- #site-navigation -->
