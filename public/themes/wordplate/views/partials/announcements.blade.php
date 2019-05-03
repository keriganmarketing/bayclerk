@if($announcements = wp_get_recent_posts(['numberposts' => 3]))
    @foreach($announcements as $announcement)
        @if(get_field('expiration_date',$announcement['ID']) >= date('Ymd') || get_field('expiration_date',$announcement['ID']) == '')
        <div class="container" >
            <div class="py-2" >
            <p>{!! wp_trim_words(strip_tags($announcement['post_content']), 31, '... <a href="'.get_permalink($announcement['ID']).'" >read more.</a>') !!}</p>
            </div>
        </div>
        @endif
    @endforeach
@endif