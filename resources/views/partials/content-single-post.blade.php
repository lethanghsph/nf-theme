<article {!! post_class() !!}>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials.entry-meta')
  </header>
  <div class="entry-content">
    {!! the_content() !!}
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'vicoders'), 'after' => '</p></nav>']) !!}
  </footer>
  @include('partials.comments')
</article>
