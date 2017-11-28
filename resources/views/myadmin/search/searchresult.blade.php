       <?php
        $ch= $posts->count();
        ?>
        @if(!empty($ch))
        <ul class="blog-list">
        @foreach($posts as $post)
              <li>
                 <div class="clearfix">
                        @if(isset($post->image))
                             <div class="post-photo">
                          <a href="{{route('blog.single',$post->slug)}}">
                            @if(isset($post->image))
                              <img src="{{URL::asset('img/'.$post->image)}}" alt=""/>
                            @endif
                          </a>
                      </div>


                      <div class="post-info">
                          <h3>
                              <a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a>
                          </h3>
                          <div class="post-details">
                              <div class="post-detail-info">
                                  <i class="icon fa fa-user"></i>
                                  <a href="#">Rumman</a>
                                  <i class="icon fa fa-folder"></i>
                                 {{$post->category->name or "Undefined"}}
                              </div>
                          </div>
                          <div class="post_body">
                          <p>{!!substr(html_entity_decode($post->body),0,350)!!}{{strlen(strip_tags($post->body))>350 ? "......":""}}</p>
                          </div>
                          <div style="overflow: hidden;">
                          <a href="{{route('blog.single',$post->slug)}}" class="button button-black button-small read-more">
                              Read more <i class="icon fa fa-angle-right"></i></a>
                           </div>
                      </div>

                        @else
                           
                           <div class="post-info" style="width: 100%;">
                          <h3>
                              <a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a>
                          </h3>
                          <div class="post-details">
                              <div class="post-detail-info">
                                  <i class="icon fa fa-user"></i>
                                  <a href="#">Rumman</a>
                                  <i class="icon fa fa-folder"></i>
                                 {{$post->category->name or "Undefined"}}
                              </div>
                          </div>
                          <div class="post_body">
                          <p>{!!substr(html_entity_decode($post->body),0,350)!!}{{strlen(strip_tags($post->body))>350 ? "......":""}}</p>
                          </div>
                          <div style="overflow: hidden;">
                          <a href="{{route('blog.single',$post->slug)}}" class="button button-black button-small read-more">
                              Read more <i class="icon fa fa-angle-right"></i></a>
                           </div>
                      </div>
                        @endif
                    
                  </div>
              </li>

              @endforeach
            </ul>
        @else
         <div class="text-center snfe">
            <h3>"Ooops!!!! No Results Found"</h3>
         </div> 
        @endif
      
      
      <!-- For Pagiante Start-->
    <div class="text-center">

  @php
      $total_records= $posts1->count();
      $record_per_page=5;
      $total_pages = ceil($total_records/$record_per_page);
      echo paginate_function($record_per_page, $page,$total_records, $total_pages);
  @endphp

    </div>
<!-- For Pagiante End-->
           
 <!-- Paginate Function Start -->

@php

function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
        $pagination .= '<ul class="pagination ac">';
        
        $right_links    = $current_page + 3; 
        $previous       = $current_page - 3; //previous link 
        $next           = $current_page + 1; //next link
        $first_link     = true; //boolean var to decide our first link
        
        if($current_page > 1){
      $previous_link = ($previous==0)? 1: $previous;
            $pagination .= '<li class="first"><a href="#" data-page="1" title="First">&laquo;</a></li>'; //first link
            //$pagination .= '<li><a href="#" data-page="'.$previous_link.'" title="Previous">&lt;</a></li>'; //previous link
                for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
                    if($i > 0){
                        $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = false; //set first link to false
        }
        
        if($first_link){ //if current active page is first link
            $pagination .= '<li class="first active">'.$current_page.'</li>';
        }elseif($current_page == $total_pages){ //if it's the last active link
            $pagination .= '<li class="last active">'.$current_page.'</li>';
        }else{ //regular current link
            $pagination .= '<li class="active">'.$current_page.'</li>';
        }
                
        for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
            if($i<=$total_pages){
                $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){ 
        $next_link = ($i > $total_pages) ? $total_pages : $i;
               /* $pagination .= '<li><a href="#" data-page="'.$next_link.'" title="Next">&gt;</a></li>'; //next link*/
                $pagination .= '<li class="last"><a href="#" data-page="'.$total_pages.'" title="Last">&raquo;</a></li>'; //last link
        }
        
        $pagination .= '</ul>'; 
    }
    return $pagination; //return pagination links
}

@endphp
 <!-- Paginate Function End -->
