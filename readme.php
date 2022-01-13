<!-- Uploads Directory -->
www/uploads
<!-- Db Name -->
mckodevc_demo
<!-- Base Tables -->
admin_auth
admin
images

<!-- Data that the admc perform CRUD operation on -->
<!-- Table Name Must have  a prefix -->
panel_blog
<!-- compulsory Columns -->
id
hash_id
date_created
time_created
visibility
input_title
input_author
input_name
text_description
text_address
dated_date_of_birth
select_blog_category
<!-- image_1  for single image -->
<!-- image_2  for multiple image -->

<!-- read_product_order Contents that are only read but not added from admc -->
input_name

selection_blog_category


<!-- addition_course_list -->
tb
tb_link



$returned_data = selectContent($conn,"panel_blog",["hash"=>"1234"]);

<!-- $array = ['id'=>"gdfhfh","visibility"=>show]; -->
  $array['id'] = "efabgd";
<?php if ($user !== "master"): ?>
    $array['visibility'] = "show";
<?php endif; ?>
 $resturned_data = selectContent($conn,"read_product_order",$array);


<?php foreach ($returned_data as $key => $value): ?>
  <li><?php echo $value['input_name'] ?></li>
<?php endforeach; ?>


$array['input_name'] = "Akole Banji";
$array['text_biography'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$new['date_created'] = date("Y-M-d");
$new['time_created'] = date("h:i:s");
$new['hash_id'] = time()."_".rand(1000,9999);

$post = $new + $_POST;
insertContent($conn,"read_product_order",$post);

$update_content["input_name"] = "Akole Banji";
$update_content['input_age'] = 24;

$where['hash_id'] = "rtyuitu";
updateContent($conn,"panel_blog",$update_content,$where);

<!-- selectContentDesc($conn,"panel_blog",[],"order_column","limit"); -->
<!-- selectContentDesc($conn,"panel_blog",["hash_id"=>"tyui"],"date_created",45); -->
<!-- selectContentAsc($conn,"panel_blog",["hash_id"=>"tyui"],"date_created",45); -->

<form class="" action="" method="post">
  <input type="text" name="input_name" value="">
  <input type="text" name="input_email" value="">
</form>
