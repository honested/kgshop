<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<div class="latest_wr">
<!-- 최신글 시작 { -->

    <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
        $sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table in ('MENU_01_SUB_01') ";     //공지사항과 갤러리 게시판은 제외 //MENU_01_SUB_01, 02만 노출되게 not in을 in
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        if ($i%2==1) $lt_style = "margin-left:2%";
        else $lt_style = "";
    ?>
    <div class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('basic', $row['bo_table'], 3, 15);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝 -->

    <!-- 최신글 시작2 { -->

        <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
        $sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table in ('MENU_01_SUB_02') ";     //공지사항과 갤러리 게시판은 제외 //MENU_01_SUB_01, 02만 노출되게 not in을 in
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        if ($i%2==1) $lt_style = "margin-left:2%";
        else $lt_style = "";
    ?>
    <div class="lt_wr_01">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('basic_01', $row['bo_table'], 2, 15);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝2 -->

    <!-- 최신글 시작3 { -->

        <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
        $sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table in ('MENU_01_SUB_03') ";     //공지사항과 갤러리 게시판은 제외 //MENU_01_SUB_01, 02만 노출되게 not in을 in
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        if ($i%2==1) $lt_style = "margin-left:2%";
        else $lt_style = "";
    ?>
    <div class="lt_wr_02">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('basic_01', $row['bo_table'], 2, 15);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝3 -->

    <!-- 최신글 시작4 { -->

        <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
        $sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table in ('MENU_01_SUB_04') ";     //공지사항과 갤러리 게시판은 제외 //MENU_01_SUB_01, 02만 노출되게 not in을 in
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        if ($i%2==1) $lt_style = "margin-left:2%";
        else $lt_style = "";
    ?>
    <div class="lt_wr_03">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('basic_02', $row['bo_table'], 3, 15);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝4 -->

    <!-- 그룹최신글1 -->
    <div class="lt_wr_04">
        <?php echo latest_group('basic_group', 'MENU_01', 5, 15); ?>
    </div>
    <!-- 그룹최신글1 끝 -->

    <!-- 그룹최신글2 -->
    <div class="lt_wr_05">
        <?php echo latest_group('basic_group_01', 'MENU_01', 5, 15); ?>
    </div>
    <!-- 그룹최신글2 끝 -->


</div>

<?php
include_once(G5_PATH.'/tail.php');
?>