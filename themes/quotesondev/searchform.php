<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
		<!-- <button class="search-submit">
			<?php echo esc_html( 'Search' ); ?>
		</button> -->
	</fieldset>
</form>
