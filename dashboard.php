<?php 
    $name = "Prateek Joshi";
    $name2 = "Amit Kulkarni";
    $name3 = "Karan Patil";
    $name4 = "Ajay Inamdar";
    $name5 = "Aamir Khan";
    $movie_names = ["Highway","Holiday","Filmistaan"];
    $movie_posters = ["Highway-Movie-poster-Wallpaper.jpg",
                        "Holiday_2014_movie_hd_wallpaper_285541070.jpg",
                        "filmistaan_650_052914023503.jpg"
                        ];
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome, <?php echo $name ?></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
        .star{
/*            color: yellow;*/
              color: yellowgreen;
              font-size: 15px;
        }
        
        #container{
            width: 980px;
            margin: 0 auto;
        }
        
        #m_menu{
            margin-right: 15px;
        }
        
        .review_story{
            border-top: 1px solid #ccc;
            padding-top: 3px;
            margin-top: 3px;
        }
        </style>

    </head>
    
</body>
    <span id="user" class="pull-right" style="margin-right: 20px;">
        <img src="movie_posters/placeholder_male.png" width="40" height="40" style="margin-right: 5px;">
        <span><?php echo $name ?> </span>
    </span>
    <div class="page-header" style="margin-left: 15px;">
        <a href="#" style="text-decoration: none;color: #000;">
            <h1>MovieBuddies</h1>
            <small>Friend's Movie Reviews</small>
        </a>
    </div>
    <div id="container">
        <div id="m_menu" class="pull-left" style="width: 15%;">
        <ul class="nav nav-pills nav-stacked">
            <li id="m_hindi" class="active"><a href="#">Hindi Movies</a></li>
            <li id="m_eng"><a href="#">English Movies</a></li>
            <li id="m_kan"><a href="#">Kannada Movies</a></li>
        </ul>
    </div>
    <div id="m_content" style="width: 600px; margin: 0 auto;">
    <?php for ($index = 0; $index < 3; $index++) {?>
        <div class="mb_story" style="box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176); border: 1px solid #ccc;padding: 5px;">
        <div id="m_name">
            <h2><?php echo $movie_names[$index] ?></h2>
        </div>
            <div id="m_poster" style="text-align: center;">
            <?php echo '<img src="movie_posters/'.$movie_posters[$index].'" width="90%" height="400">';?>
        </div>
        <div class="bg-info m_rating" style="padding: 10px;margin-top: 5px;">
            <span style="margin-right: 5px;"> Overall friends rating:</span>
            <span class="glyphicon glyphicon-star star"></span>
            <span class="glyphicon glyphicon-star star"></span>
            <span class="glyphicon glyphicon-star star"></span>
            <span class="glyphicon glyphicon-star star"></span>
            <span class="glyphicon glyphicon-star star"></span>
            <span class="pull-right" style="font-size: 15px;font-weight: bold;">5/10</span>
        </div>
        <div class="m_reviews" style="margin-top: 5px;">
            <div class="comment_form_holder">
                <form class="form-horizontal comments" method="post" action="#">
                    <div class="rating_holder">
                        <label for="rating" class="pull-left">Rate this movie:</label>
                        <input type="text" name="fr-rating" class="form-control pull-left" style="width: 50px;">
                        <span style="font-size: 16px;">/10</span>
                    </div>
                    <div class="input-group input-group-lg">
                        <textarea class="form-control" name="fr-comment" style="resize: none;width:590px;height:75px;dmargin-top: 5px;" placeholder="Write your review about <?php echo $movie_name ?>?"></textarea>
                    </div>
                    <input type="submit" class="btn btn-default" value="Review" style="margin-top: 5px;"/>
                </form>
            </div>
        </div>
        
        <div class="friends_reviews">
            <div class="review_story">
                <div class="usr_comment">
                    <!--<div class="usr_prof">-->
                        <img src="movie_posters/placeholder_male.png" class="img-thumbnail" width="40" height="30" style="float: left;">
                        <span><a href="#"><?php echo $name ?></a></span>
                    <!--</div>-->
                    <div class="friend-rating">
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                    </div>
                    <div>Loved the movie! Brilliant direction, engaging narration and melodious soundtrack! Must watch</div>
                </div>
            </div>
            <div class="review_story">
                <div class="usr_comment">
                    <!--<div class="usr_prof">-->
                        <img src="movie_posters/placeholder_male.png" class="img-thumbnail" width="40" height="30" style="float: left;">
                        <span><a href="#"><?php echo $name2 ?></a></span>
                    <!--</div>-->                   
                    <div class="friend-rating">
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                    </div>
                    <div>Loved the movie! Brilliant direction, engaging narration and melodious soundtrack! Must watch</div>
                </div>
            </div>
            <div class="review_story">
                <div class="usr_comment">
                    <!--<div class="usr_prof">-->
                        <img src="movie_posters/placeholder_male.png" class="img-thumbnail" width="40" height="40" style="float: left;">
                        <span><a href="#"><?php echo $name3 ?></a></span>
                    <!--</div>-->                   
                    <div class="friend-rating">
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                    </div>
                    <div>Loved the movie! Brilliant direction, engaging narration and melodious soundtrack! Must watch</div>
                </div>
            </div>
            <div class="review_story">
                <div class="usr_comment">
                    <!--<div class="usr_prof">-->
                        <img src="movie_posters/placeholder_male.png" class="img-thumbnail" width="40" height="40" style="float: left;">
                        <span><a href="#"><?php echo $name4 ?></a></span>
                    <!--</div>-->                   
                    <div class="friend-rating">
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                    </div>
                    <div>Loved the movie! Brilliant direction, engaging narration and melodious soundtrack! Must watch</div>
                </div>
            </div>
            <div class="review_story">
                <div class="usr_comment">
                    <!--<div class="usr_prof">-->
                        <img src="movie_posters/placeholder_male.png" class="img-thumbnail" width="40" height="40" style="float: left;">
                        <span><a href="#"><?php echo $name5 ?></a></span>
                    <!--</div>-->                   
                    <div class="friend-rating">
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                        <span class="glyphicon glyphicon-star star"></span>
                    </div>
                    <div>Loved the movie! Brilliant direction, engaging narration and melodious soundtrack! Must watch</div>
                </div>
            </div>

        </div>
    </div>
    <?php } ?>
    </div>
    </div>
<script>
    $(document).ready(function(){
       $('.comments').submit(function(e){
           e.preventDefault();
           debugger;
           console.log($(this));
           var data= $(this).serialize();
           var rating = '';
           for(var i=0;i<data.rating;i++){
               rating = rating+'<span class="glyphicon glyphicon-star star"></span>';
           }
           var html = '<div class="usr_comment">'+
                    '<img src="movie_posters/placeholder_male.png" class="img-thumbnail" width="40" height="30" style="float: left;">'+
                    '<span><a href="#">Prateek Joshi</a></span>'+
                    '<div class="friend-rating">'+
                    rating+                        
                    '</div>'+
                    '<div>'+data.comment+'</div>'+
                '</div>';
//            '</div>';


//            $(this).
           
           
           
//           $.ajax({
//              url:"",
//              method:"post",
//              dataType:"json",
//              data:data,
//              success:function(data,status){
//                  console.log(data);
//              },
//              error: function(){
//                  
//              }
//           });
       }); 
    });
</script>
</body>

</html>