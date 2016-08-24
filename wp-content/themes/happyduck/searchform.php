<section class="header__search-form search-form">
	<div class="search-form__content">
		<form role="search-form" action="<?php echo home_url('/'); ?>" method="get">

			<div class="search-form__fields">
				<input type="search" name="s" id="search" class="search-form__field" placeholder="Search site..."/>

<!--				Define post types that should be included-->
				<input type="hidden" name="post_type[]" value="page" />
				<input type="hidden" name="post_type[]" value="article" />
				<input type="hidden" name="post_type[]" value="service-area" />
				<input type="hidden" name="post_type[]" value="tag" />

				<!--						<input type="submit" alt="Search" value="Search" class="btn btn--primary search__submit" />-->
				<div class="is-close search-form__close-button" data-close-items=".header__search-form">X</div>
			</div>

		</form>
	</div>
</section>