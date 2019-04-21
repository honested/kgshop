<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php'); // 최신글에 썸네일 인클루드
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
?>

<div class="lat">
    <h2 class="lat_title"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><?php echo $bo_subject ?></a></h2>
    <ul>
    <?php for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], false, true);

        if($thumb['ori']) {
        
        $img = $thumb['ori'];
        
        } else {
        
        $img = G5_IMG_URL.'/no_img.png';
        
        $thumb['alt'] = '이미지가 없습니다.';
        
        }
        
        $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';  
        ?> 
        <!-- $thumb 부터 >'; 까지 썸네일을 가져오는 코드 -->
        <li>
            <?php

            echo "<a href=\"".$list[$i]['href']."\"> ";
                echo $img_content; // <-- 썸네일 출력문
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];
                



            echo "</a>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            // if ($list[$i]['comment_cnt'])  echo "
            // <span class=\"lt_cmt\">+ ".$list[$i]['comment_cnt']."</span>";

            ?>

            <!-- <span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span> -->
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only"> 더보기</span></a>

</div>
