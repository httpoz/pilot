<form action="/" method="get">
    <div class="input-group">
        <input type="text" name="s" id="search" title="Search in <?php echo home_url( '/' ); ?>" class="form-control"
               value="<?php the_search_query(); ?>" placeholder="Search in <?php echo home_url( '/' ); ?>"/>
        <span class="input-group-btn">
        <button type="submit" class="btn btn-default" type="button">Search</button>
      </span>
    </div>

</form>